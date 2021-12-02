<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Entity extends Model
{
    const columns = [];

    const searchFields = [];

    const createFields = [];

    const editFields = [];

    /**
     * 是否启用删除动作
     * @var bool
     */
    protected $isDelete = true;

    /**
     * 附加操作
     * @var array
     */
    protected $actions = [];

    //
    protected static function booted()
    {
        static::addGlobalScope('ancient', function (Builder $builder) {
            $builder->where('lang', session("lang"));
            // zh   hw
        });
    }

    public function getIsDeleteAttribute()
    {
        return $this->isDelete;
    }

    public function getExtensionActionsAttribute()
    {
        return $this->actions;
    }

    public function getExtensionFields($extensionKey)
    {
        return $this->actions[$extensionKey]['fields'] ?? [];
    }

}
