<?php

namespace App\Http\Controllers\Api;

use App\Address;
use App\Feedbacks;
use App\Members;
use App\ProductsComments;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function show($id)
    {
        $member = Members::query()->find($id);
        return $this->ok(array_merge($member->toArray(), [
            'avatarUrl' => $member->pic,
            'nickName' => $member->nickname,
        ]));
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param $id
     * @return array
     */
    public function members(Request $request, $id)
    {
        Members::query()->find($id)->update([
            'real_name' => $request->input('real_name'),
            'phone_number' => $request->input('phone_number'),
        ]);
        $member = Members::query()->find($id);
        return $this->ok(array_merge($member->toArray(), [
            'avatarUrl' => $member->pic,
            'nickName' => $member->nickname,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return array
     */
    public function login(Request $request)
    {
        $client = new Client();
        $response = $client->get('https://api.weixin.qq.com/sns/jscode2session', [
            'query' => [
                'appid' => 'wx9e802d0f87936d34',
                'secret' => 'b23246d46a98ecf83bd1b63044729f25',
                'js_code' => $request->input('code'),
                'grant_type' => 'authorization_code'
            ],
            'verify' => false
        ]);
        $content = $response->getBody()->getContents();
        // 登录
        $info = json_decode($content, true);
        $openid = $info['openid'];
        $member = Members::query()->where('openid', $openid);
        if (!$member->exists()) {
            // avatarUrl, nickname,openid,gender
            $member = $member->create([
                'nickname' => $request->input('nickname'),
                'real_name' => '',
                'phone_number' => '',
                'sex' => $request->input('gender'),
                'pic' => $request->input('avatarUrl'),
                'points' => 0,
                'openid' => $info['openid']
            ]);
        } else {
            $member = $member->first();
        }

        return $this->ok(array_merge($member->toArray(), [
            'avatarUrl' => $member->pic,
            'nickName' => $member->nickname,
        ]));
    }

    /**
     * @param Request $request
     * @param $id
     * @return array
     */
    public function comments(Request $request, $id)
    {
        return $this->ok(ProductsComments::query()->where('members_id', $id)->get()
            ->map(function (ProductsComments $comment) {
                return [
                    'id' => $comment->id,
                    'productName' => $comment->product_name,
                    'productUrl' => $comment->product_pic,
                    'comment' => $comment->description,
                    'time' => $comment->created_at,
                    'imageList' => []
                ];
            }));
    }

    public function deleteComment($id)
    {
        ProductsComments::query()->find($id)->delete();

        return $this->ok([]);
    }

    public function feedback(Request $request, $id)
    {
        $member = Members::query()->find($id);
        Feedbacks::query()->create([
            'content' => $request->input('content'),
            'title' => $request->input('title'),
            'members_id' => $id,
            'nick_name' => $member->nickname,
        ]);

        return $this->ok([]);
    }

    public function address($id)
    {
        $address = Address::query()->where('members_id', $id)->get();
        return $this->ok($address->map(function (Address $address){
            return array_merge([
                'name' => $address->userName.' '.$address->phone.' '.$address->area." ".$address->address,
            ], $address->toArray());
        }));
    }

    /**
     * @param Request $request
     * @param $id
     * @return array
     */
    public function postAddress(Request $request, $id)
    {
        Address::query()->create([
            'members_id' => $id,
            'userName' => $request->input('userName'),
            'phone' => $request->input('phone'),
            'area' => $request->input('area'),
            'address' => $request->input('address'),
            'code' => $request->input('code'),
        ]);
        return $this->ok([]);
    }

    public function updateAddress(Request $request, $id)
    {
        Address::query()->find($id)->update($request->all());
        return $this->ok([]);
    }

    public function getAddress($addressId)
    {
        $address = Address::query()->find($addressId);

        return $this->ok($address->toArray());
    }
}
