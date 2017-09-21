<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post(){
      return $this->hasMany('post');
    }
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'description',
    ];
}
