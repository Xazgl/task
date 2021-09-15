<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable, HasFactory;

    protected $table = 'users';//на какую таблицу должна смотреть наша модель

    protected $fillable=['name','email','password'];
}

