<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * このモデルで「一括代入」できる属性を定義しています。
     *
     * たとえば、以下のようなコードで
     * Todo::create(['title' => '買い物に行く']);
     * のように title を一括で代入できるようにするには、
     * fillable にそのカラム名を指定する必要があります。
     */
    protected $fillable = [
        'title', // タイトルカラムのみ許可
    ];
}

