<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Feedbacks;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('admin.feedbacks.list', $this->search($request, Feedbacks::class));
    }

    public function create()
    {
        return view('admin.feedbacks.add', ['fields' => Feedbacks::createFields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Feedbacks::query()->create($request->all());

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('admin.feedbacks.edit', ['fields' => Feedbacks::editFields,'data'=>Feedbacks::query()->find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        Feedbacks::query()->find($id)->update($request->except('id'));

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Feedbacks::query()->find($id)->delete();

        return back()->withInput();
    }
}
