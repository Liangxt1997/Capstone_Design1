<?php

namespace App;

class News extends Entity
{
    protected $fillable = [
        'title', 'content', 'user_id'
    ];

    public const columns = [
        'id' => 'ID',
        'title' => 'news.title',
        'content' => 'news.content'
    ];

    const searchFields = [
        [
            'name' =>'title',
            'description' => '제목',
            'type' => 'like'
        ]
    ];

    public const createFields = [
      [
          'name'=> 'title', 'description' => '제목', 'type' => 'string'
      ],
      [
          'name' => 'content', 'description' => '내용', 'type' => 'text'
      ]
    ];

    public const editFields = self::createFields;

    protected $isDelete = true;
}
