<?php

namespace App;

class Categories extends Entity
{
    //
    const columns = [
        'id' => 'ID',
        'name' => 'categories.name',
        'created_at' => 'categories.created_at',
        'updated_at' => 'categories.updated_at'
    ];

    protected $fillable = [
        'name','user_id'
    ];

    const createFields = self::editFields;

    const editFields = [
        [
            'name' => 'name',
            'description' => '분류 이름',
            'type' => 'string',
            'value' => '',
        ],
    ];

    const searchFields = [
        [
            'name' => 'name',
            'description' => '분류 이름',
            'type' => 'like'
        ]
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
