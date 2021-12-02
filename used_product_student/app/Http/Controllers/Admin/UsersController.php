<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('admin.users.list', $this->search($request, User::class, ['user_status' => 1]));
    }

    public function create()
    {
        return view('admin.users.add', ['fields' => User::createFields]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $password = $request->input('password');
        $passwordConfirm = $request->input('password_confirm');
        if ($password != $passwordConfirm) {
            throw new HttpException('비밀번호가 일치하지 않습니다.');
        }
        User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($password),
        ]);

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
        return view('admin.users.password', ['fields' => User::editFields,'data'=>User::query()->find($id)]);
    }
    public function showInformation($id)
    {
        return view('admin.users.edit', ['fields' => User::informationFields,'data'=>User::query()->find($id)]);

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
        $data = $request->except('id');
        if ($request->has('password')){
            $password = $request->input('password');
            $passwordConfirm = $request->input('password_confirm');
            if ($password != $passwordConfirm) {
                throw new HttpException(400, '비밀번호가 일치하지 않습니다.');
            }

            $data['password'] = Hash::make($data['password']);
        }

        User::query()->find($id)->update($data);

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destory($id)
    {
        User::query()->find($id)->delete();

        return back()->withInput();
    }
}
