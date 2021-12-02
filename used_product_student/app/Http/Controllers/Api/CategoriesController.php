<?php

namespace App\Http\Controllers\Api;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return array
     */
    public function index(Request $request)
    {
        $name = $request->input('name');
        if ($name) {
            $categoriesIds = Products::query()
                ->where('title','LIKE', "%{$name}%")
                ->get()->pluck('categories_id');
            $category = Categories::query()->whereIn('id', $categoriesIds)->get()
                ->filter(function (Categories $category){
                return $category->products()->get()->count() > 0;
            });
        } else {
            $category = Categories::query()->get()->filter(function (Categories $category){
                return $category->products()->get()->count() > 0;
            });
        }

        $data = $category->map(function (Categories $category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'data' => $category->products()->get()->map(function (Products $product){
                    return [
                        'id' => $product->id,
                        'name' => $product->title,
                        'content' => $product->description,
                        'price' => $product->price,
                        'url' => $product->pic
                    ];
                })
            ];
        });

        return $this->ok($data);
    }
    public function getCate()
    {
        $cate = Categories::query()->get()->toArray();
        $cateArr = [];
        if (!empty($cate)) foreach ($cate as $value){
            $cateArr[] = [
                'id' => $value['id'],
                'name' => $value['name']
            ];
        }
        return $this->ok($cateArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
