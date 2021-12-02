<?php

namespace App;

class Feedbacks extends Entity
{
    //
    const columns = [
        'id' => 'ID',
        'real_name' => 'feedback.real_name',
        'email' => 'feedback.email',
        'content' => 'feedback.content',
        'created_at' => 'feedback.created_at'
    ];
    const createFields = self::editFields;
    protected $fillable = [
        'id', 'real_name', 'email', 'title', 'content', 'created_at', 'updated_at'
    ];
}
