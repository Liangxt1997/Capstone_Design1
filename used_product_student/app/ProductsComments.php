<?php

namespace App;

class ProductsComments extends Entity
{
    //
    const columns = [
        'id' => 'ID',
        'product_name' => 'productComments.product_name',
        'username' => 'productComments.username',
        'description' => 'productComments.description',
        'reply' => 'productComments.reply',
        'created_at' => 'productComments.created_at',
    ];

    const searchFields = [

    ];

    protected $actions = [
        'reply' => [
            'route' => 'products.comments.reply', // 地址
            'model' => "App.ProductsComments", //实体类路径
            'icon' => '대답',
            'fields' => [
                [
                    'name' => 'reply',
                    'description' => '대답',
                    'type' => 'text'
                ]
            ]
        ],
    ];

    protected $fillable = [
        'description', 'product_id', 'user_id', 'reply', 'username', 'product_name'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id')->first();
    }

    public function getProductNameAttribute()
    {
        $product = $this->product();
        return $product ? $product->title : "";
    }

    public function getProductPicAttribute()
    {
        $product = $this->product();
        return $product ? $product->pic : "";
    }


}
