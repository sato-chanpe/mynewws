<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $dates = [
        'created_at',
    ];
    
    public function getFormatedCreatedAt(){
        return $this->created_at->format('Y年m月d日 H:i:s');
    }
    
    public function posts(){
        return $this->hasMany('App\Post');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
