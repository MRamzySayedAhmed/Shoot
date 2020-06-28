<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = "contents";
    protected $fillable=['id', 'language', 'title','description','writer', 'image', 'created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps = true;

}
