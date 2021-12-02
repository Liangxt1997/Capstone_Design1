<?php

namespace App;

use Illuminate\Database\Query\Builder;

class Products extends Entity
{
    //
    protected $fillable = [
        'title', 'description', 'price', 'origin_price', 'pic', 'pic_1', 'pic_2', 'pic_3', 'categories_id','tags_id', 'uploader'
    ];

    // 是否删除
    protected $isDelete = true;
    protected $isCreate = false;

    const columns = [
        'id' => 'ID',
        'category_name' => 'products.category_name',
        'title' => 'products.title',
        'price' => 'products.price',
        'origin_price' => 'products.origin_price',
        'tag_name' => 'products.tag_name',
//        'pic' => [
//            'name' => 'products.pic_name',
//            'type' => 'image',
//        ],
        'description' => 'products.description',
        'created_at' => 'products.created_at',
        'updated_at' => 'products.updated_at',
        'uploader' => 'products.uploader'
    ];

    const searchFields = [
//        ['name' => 'created_at', 'description' => '제작시간', 'type' => 'date', 'value' => ['', '']],
        ['name' => 'title', 'description' => '상품 이름', 'type' => 'like', 'value' => '']

    ];

    const createFields = self::editFields;

    const editFields = [
        [
            'name' => 'title',
            'description' => '제목',
            'type' => 'string',
            'value' => '',
        ],
        [
            'name' => 'price',
            'description' => '중고가',
            'type' => 'string',
            'value' => '',
        ],
        [
            'name' => 'origin_price',
            'description' => '원가',
            'type' => 'string',
            'value' => '',
        ],
        [
            'name' => 'categories_id',
            'description' => '분류',
            'type' => 'categories',
            'value' => '',
        ],
        [
            'name' => 'tags_id',
            'description' => '태그',
            'type' => 'tags',
            'value' => '',
        ],
        [
            'name' => 'pic',
            'description' => '초기화면 사진',
            'type' => 'image',
            'value' => '',
        ],
        [
            'name' => 'pic_1',
            'description' => '사진1',
            'type' => 'image',
            'value' => '',
        ],
        [
            'name' => 'description',
            'description' => '소개',
            'type' => 'text',
            'value' => '',
        ]
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'categories_id')->first();
    }

    public function getCategoryNameAttribute()
    {
        $category = $this->category();
        return $category ? $category->name : "";
    }
    public function tag()
    {
        return $this->belongsTo(Tags::class, 'tags_id')->first();
    }

    public function getTagNameAttribute()
    {
        $category = $this->tag();
        return $category ? $category->name : "";
    }
}
