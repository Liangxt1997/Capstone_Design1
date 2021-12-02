<?php

namespace App\Http\Controllers\Api;

use App\Members;
use App\Orders;
use App\Products;
use App\ProductsComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function getProductsByTag()
    {
        $productMap = Products::query()->get()->groupBy('tag')->toArray();
        $productsData = [];
        foreach ($productMap as $tag => $products) {
            if ($tag == "") {
                continue;
            }
            $productItem['name'] = $tag;
            $productItem['data'] = collect($products)->map(function ($product) {
                return [
                    'id' => $product['id'],
                    'name' => $product['title'],
                    'content' => $product['description'],
                    'price' => $product['price'],
                    'url' => $product['pic']
                ];
            });
            $productsData[] = $productItem;
        }

        return $this->ok($productsData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        Products::query()->create($request->all());

        return $this->ok([]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /**
         *   return [
         * //       'id',
         * //       'name',
         * //       'content',
         * //       'sale',
         * //       'price',
         * //       'image',
         * //       'comment'=> [
         * //           [
         * //               'avatarUrl',
         * //               'nickname',
         * //               'content',
         * //               'reply',
         * //               'time'
         * //           ]
         * //       ]
         * //   ];
         */
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::query()->find($id);
        return $this->ok([
            'id' => $product->id,
            'name' => $product->title,
            'content' => $product->description,
            'sale' => '',
            'price' => $product->price,
            'image' => $product->pic,
            'donater' => $product->donater,
            'comment' => $product->comments()->map(function (ProductsComments $comment) {
                return [
                    'avatarUrl' => $comment->member()->pic,
                    'nickname' => $comment->member_nickname,
                    'content' => $comment->description,
                    'reply' => $comment->reply,
                    'time' => date('Y-m-d H:i:s', strtotime($comment->created_at)),
                ];
            }),
        ]);
    }

    public function postComment(Request $request, $id)
    {
        $comments = $request->input('comment');
        $title = $request->input('title');
        $product_id = $request->input('product_id');
        ProductsComments::query()->create([
            'title' => $title,
            'description' => $comments,
            'products_id' => $product_id,
            'members_id' => $id,
            'reply' => ''
        ]);

        return $this->ok([], '평가된다');
    }
}
