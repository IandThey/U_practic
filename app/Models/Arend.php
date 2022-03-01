<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arend extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    public static function add($array){
        static::create($array);
    }

    public $timestamps = false;
}
