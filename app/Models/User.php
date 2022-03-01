<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'email',
        'login',
        'password',
    ];

    public static function add($array){
        static::create($array);
    }
    public static function up($array){
        static::updated($array);
    }

    public static function access($login = null, $password = null){
        
        if(!$login || !$password){
            $login = session('login');
            $password = session('password');
        }

        return static::where(['login'=>$login, 'password'=>$password])->exists();
    }

    public $timestamps = false;
}
