<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Middleware\SetLocale;
use App\News;
use App\Products;
use App\Tags;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    protected $super_name = 'admin';
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function search(Request $request, $model, $search = [])
    {
        $query = $model::query();
        $searchFields = $model::searchFields;
        if (Auth::user()->name != $this->super_name){
            if ($model == News::class){
                $query->where('user_id', Auth::user()->id);
            }
            if ($model == Products::class){
                $query->where('uploader', Auth::user()->name);
            }
            if ($model == User::class){
                $query->where('id', Auth::user()->id);
            }
            if ($model == Tags::class){
                $query->where('user_id', Auth::user()->id);
            }
            if ($model == Categories::class){
                $query->where('user_id', Auth::user()->id);
            }
        }
        foreach ($searchFields as &$field) {
            if ($field['type'] == 'date') {
                $field['value'] = ['', ''];
                $sDate = $request->get($field['name'] . '_s', false);
                $eDate = $request->get($field['name'] . '_e', false);
                if (!empty($sDate)) {
                    $query->where($field['name'], '>', $sDate);
                    $field['value'][0] = $sDate;
                }
                if (!empty($eDate)) {
                    $query->where($field['name'], '<', $eDate);
                    $field['value'][1] = $eDate;
                }
            } elseif ($field['type'] == 'like') {
                $field['value'] = '';
                $likeValue = $request->get($field['name'], false);
                if (!empty($likeValue)) {
                    $query->where($field['name'], 'LIKE', '%' . $likeValue . '%');
                    $field['value'] = $likeValue;
                }
            } else {
                $field['value'] = '';
                $value = $request->get($field['name'], false);
                if (!empty($value)) {
                    $query->where($field['name'], $value);
                    $field['value'] = $value;
                }
            }
        }
        if (!empty($search)) foreach ($search as $name => $value){
            $query->where($name, $value);
            $field['value'] = $value;
        }
        $session = new \Symfony\Component\HttpFoundation\Session\Session();
        App::setLocale($session->get('language')??'hw');
        // index.name
        $ap = [];
        foreach ($model::columns as $k => $column) {
            $ap[$k] = trans($column);
        }
        return [
            'isSearch' => !empty($model::searchFields),
            'isEdit' => !empty($model::editFields),
            'isCreate' => !empty($model::createFields),
            'searchFields' => $searchFields,
            'titles' => $ap,
            'list' => $query->paginate()
        ];
    }
}
