<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'created_at',
    ];
    
    public function getFormatedCreatedAt(){
        return $this->created_at->format('Y年m月d日 H:i:s');
    }
    
    public function user(){
        //User 対 Post = 1 対 多
        //多から１を参照するときは、belongsToを用いる（Post belongs to User.と英文の主語で考えるとわかりやすい）
        return $this->belongsTo('App\User');
    }
}