<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('admin.products.list', $this->search($request, Products::class));
    }

    public function create()
    {
        return view('admin.products.add', ['fields' => Products::editFields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['uploader'] = $request->user()->toArray()['name'];
        Products::query()->create($data);

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('admin.products.edit', ['fields' => Products::editFields, 'data' => Products::query()->find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('id');
        $data['uploader'] = $request->user()->toArray()['name'];
        Products::query()->find($id)->update($data);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Products::query()->find($id)->delete();

        return back()->withInput();
    }
}
