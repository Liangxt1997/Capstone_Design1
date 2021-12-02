<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // 是否删除
    protected $isDelete = true;

    protected $fillable = [
        'name', 'email', 'password','user_status', 'phone', 'description'
    ];

    const columns = [
        'id' => 'ID',
        'name' => 'users.name',
        'email' => 'users.email',
        'created_at' => 'users.created_at',
        'updated_at' => 'users.updated_at'
    ];

    const searchFields = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const createFields = [
        [
            'name' => 'name',
            'description' => 'ID',
            'type' => 'string',
            'value' => '',
        ],
        [
            'name' => 'email',
            'description' => '이메일',
            'type' => 'string',
            'value' => '',
        ],
        [
            'name' => 'password',
            'description' => '비밀번호',
            'type' => 'password',
            'value' => '',
        ],
        [
            'name' => 'password_confirm',
            'description' => '비밀번호 재입력',
            'type' => 'password',
            'value' => '',
        ],
    ];

    const editFields = [
        [
            'name' => 'password',
            'description' => '비밀번호',
            'type' => 'password',
            'value' => '',
        ],
        [
            'name' => 'password_confirm',
            'description' => '비밀번호 재입력',
            'type' => 'password',
            'value' => '',
        ],
    ];
    const informationFields = [
        [
            'name' => 'phone',
            'description' => '휴대폰 번호',
            'type' => 'number',
            'value' => '',
        ],
        [
            'name' => 'description',
            'description' => '자기 소개',
            'type' => 'text',
            'value' => '',
        ],
    ];

    protected $actions = [];

    public function getIsDeleteAttribute()
    {
        return $this->isDelete;
    }

    public function getExtensionActionsAttribute()
    {
        return $this->actions;
    }
}
