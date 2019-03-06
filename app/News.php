<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'News';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = ['title', 'description', 'detail', 'cat_id', 'picture', 'img'];

    public function cat(){
    	return $this->belongsTo('App\Category', 'cat_id');
    }
}
