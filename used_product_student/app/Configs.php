<?php

namespace App;

class Configs extends Entity
{
    const columns = [
        'id' => 'ID',
        'key' => '분류 이름',
        'value' => '분류 이름',
        'created_at' => '제작 시간',
        'updated_at' => '업데이트 시간'
    ];

    protected $fillable = [
        'key', 'value'
    ];
}
