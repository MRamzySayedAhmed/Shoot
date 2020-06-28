<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $fillable=['id', 'first_name','last_name','full_name','username', 'country', 'phone', 'remember_token', 'email', 'password', 'registration_status', 'created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps = true;

}
