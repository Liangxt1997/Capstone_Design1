<?php

namespace App;

class Collections extends Entity
{
    protected $fillable = [
        'product_id',
        'product_name',
        'user_id',
        'email',
        'phone_number',
        'content',
        'username',
        'created_at'

    ];

    protected $isDelete = true;

    /**
     *      $table->string('userName'); //收件人
    $table->string('area'); //地区
    $table->string('address'); //详细地址
    $table->string('code'); //邮编
    $table->string('phone'); //手机号码
     */
    const columns = [
        'id' => 'ID',
        'username' => 'collections.username',
        'phone_number' => 'collections.phone_number',
        'email' => 'collections.email',
        'product_name' => 'collections.product_name',
        'content' => 'collections.content',
        'created_at' => 'collections.created_at',
    ];

    // 搜索字段
    const searchFields = [
        [
            'name' => 'product_name',
            'type' => 'like',
            'description' => '상품 이름'
        ]
    ];

    const createFields = [];

    const editFields = [
//        [
//            'name' => 'status',
//            'type' => 'select',
//            'description' => '상태',
//            'options' => [
//                [
//                    'id' => 'delete',
//                    'name' => '삭제'
//                ]
//            ]
//        ]
    ];
}
