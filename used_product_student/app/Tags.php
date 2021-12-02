<?php

namespace App;

class Tags extends Entity
{
    //
    const columns = [
        'id' => 'ID',
        'name' => 'tags.name',
        'created_at' => 'tags.created_at',
        'updated_at' => 'tags.updated_at'
    ];

    protected $fillable = [
        'name','user_id'
    ];

    const createFields = self::editFields;

    const editFields = [
        [
            'name' => 'name',
            'description' => '태그 이름',
            'type' => 'string',
            'value' => '',
        ],
    ];

    const searchFields = [
        [
            'name' => 'name',
            'description' => '태그 이름',
            'type' => 'like'
        ]
    ];

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
