<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizzhtml extends Model
{
    use HasFactory;
    protected $fillable = [
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'question6',
        'question7',
        'question8',
        'question9',
        'question10',
        'username',

    ];
    public static function findByUsername($username)
    {
        return static::where('username', $username)->first();
    }
}
