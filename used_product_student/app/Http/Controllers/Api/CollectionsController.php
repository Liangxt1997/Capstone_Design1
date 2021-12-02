<?php

namespace App\Http\Controllers\Api;

use App\Collections;
use App\CollectionsProducts;
use App\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request, $id)
    {
        $key = 'members_id';
        $value = $id;
        return $this->ok(Collections::query()
            ->where($key, $value)
            ->orderByDesc('id')
            ->get()->map(function (Collections $order) {
                return [
                    'id' => $order->id,
                    'nick_name' => $order->nick_name,
                    'product_name' => $order->product_name,
                    'product_id' => $order->product_id,
                    'created_at' => date('Y-m-d H:i:s', strtotime($order->created_at)),
                ];
            }));
    }

    public function products($id)
    {
        return $this->ok(CollectionsProducts::query()
            ->where('orders_id', $id)
            ->get()
            ->map(function ($orderProduct) {
            $product = Products::query()->find($orderProduct['products_id']);
            return [
                'id' => $product->id,
                'name' => $product->title,
                'image' => $product->pic,
                'price' => $product->price,
                'orders_id' => $orderProduct->orders_id,
                'imgList' => [],
                'comment' => ''
            ];
        }));
    }

    public function postOrder(Request $request, $id)
    {
        $order_data = Collections::query()->where(['members_id' => $id, 'product_id' => $request->input('product_id')])->get()->toArray();
        if (!empty($order_data)){
            return $this->fail(400, '이 상품은 이미 소장되었다.');
        }
        $time = date('Y-m-d H:i:s');
        // 地址接口
        $order = Collections::query()->create([
            'nick_name' => $request->input('nick_name'),
            'product_id' => $request->input('product_id'),
            'product_name' => $request->input('product_name'),
            'members_id' => $id,
            'create_time' => $time
        ]);

        return $this->ok($order->toArray());
    }
    public function delete($id)
    {
        Collections::query()->find($id)->delete();

        return $this->ok([]);
    }
}
