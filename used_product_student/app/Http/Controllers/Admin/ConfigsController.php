<?php

namespace App\Http\Controllers\Admin;

use App\Configs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ConfigsController extends Controller
{
    public function setLanguage(Request $request){

        $language = $request->input('language');
        $session = new Session();
        $session->set('language', $language);
        return redirect('/admin');
    }

    public function index(Request $request)
    {
        $config = Configs::query()->get()->toArray();
        if (empty($config)) {
            $config = [
                [
                    'key' => 'start_time',
                    'value' => '0'
                ],
                [
                    'key' => 'end_time',
                    'value' => '1'
                ],
            ];
        }

        return view('admin.setting.setting', [
            'config' => array_column($config, 'value', 'key')]);
    }

    public function setValue(Request $request, $key)
    {
        Configs::query()->where('key', $key)->updateOrCreate([
            'value' => $request->input('value'),
            'key' => $key
        ]);

        return back()->withInput();
    }

    public function set(Request $request)
    {
        $keyValues = $request->all();
        foreach ($keyValues as $key => $value) {
            $config = Configs::query()->where('key', $key);
            if ($config->exists()) {
                $config->update([
                    'key' => $key,
                    'value' => $value
                ]);
            } else {
                $config->create([
                    'key' => $key,
                    'value' => $value
                ]);
            }
        }

        return back()->withInput();
    }
}
