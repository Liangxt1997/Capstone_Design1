<?php

namespace App\Http\Controllers\Api;

use App\Address;
use App\Configs;
use App\Members;
use App\Orders;
use App\OrdersProducts;
use App\Products;
use App\Feedbacks;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index($id)
    {
        return $this->ok(Orders::query()
            ->where('members_id', $id)
            ->orderByDesc('id')
            ->get()->map(function (Orders $order) {
                return [
                    'id' => $order->id,
                    'orders_number' => $order->order_number,
                    'seat_no' => $order->seat_no,
                    'time' => $order->time,
                    'total' => $order->total_price,
                    'status' => $order->status,
                    'status_name' => $order->status_name,
                    'phone_number' => $order->phone,
                    'address' => $order->userName.' '.$order->phone.' '.$order->area." ".$order->address,
                ];
            }));
    }

    public function products($id)
    {
        return $this->ok(OrdersProducts::query()
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

    public function feedbacks()
    {
        return $this->ok(Feedbacks::query()->get()->map(function ($seat) {
            return $seat->seat_no;
        }));
    }

    public function payments()
    {
        $data = [];
        foreach (Orders::payment_method_map as $id => $paymentName) {
            $data[] = [
                'id' => $id,
                'name' => $paymentName
            ];
        }
        return $this->ok($data);
    }

    public function postOrder(Request $request, $id)
    {
        $totalPrice = 0;
        $phoneNumber = $request->input('phone_number');
        $products = $request->input('products');
        $time = date('Y-m-d '. $request->input('time'));
        // 地址接口
        $address = Address::query()->find($request->input('address_id'));
        $order = Orders::query()->create([
            'order_number' => Str::random(),
            'total_price' => $totalPrice,
            'status' => Orders::STATUS_WAIT_PAY,
            'payment_method' => $request->input('payment_id'),
            'members_id' => $id,
            // 收获信息
            'userName' => $address->userName,
            'area'=> $address->area,
            'address'=> $address->address,
            'code'=> $address->code,
            'phone'=> $address->phone
        ]);
        foreach ($products as $productInfo) {
            $product = Products::query()->find($productInfo['id']);
            OrdersProducts::query()->create([
                'orders_id' => $order->id,
                'number' => $productInfo['num'],
                'products_id' => $productInfo['id'],
                'price' => $product->price,
            ]);
            $totalPrice += $product->price;
        }
        $order->update([
            'total_price' => $totalPrice
        ]);

        Members::query()->find($order->members_id)->incPoints(2);

        return $this->ok($order->toArray());
    }

    public function status(Request $request, $id)
    {
        Orders::query()->where('id', $id)->update([
            'status' => $request->input('status'),
        ]);

        return $this->ok([]);
    }

    public function delete($id)
    {
        Orders::query()->find($id)->delete();

        return $this->ok([]);
    }
}
