<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 数据库表未生成时间戳
    public $timestamps = false;

    protected $fillable = [
        'name', 'description',
    ];

}
