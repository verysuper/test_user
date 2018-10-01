<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    // 資料表名稱
    protected $table = 'category';
    // 主鍵名稱
    protected $primaryKey = 'id';
    // 可以大量指定異動的欄位（Mass Assignment）
    protected $fillable = [
        "name",
        "parent",
        "status",
        "views",
        "sort",
    ];
}
