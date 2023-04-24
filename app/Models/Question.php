<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'a',
        'b',
        'c',
        'd',
        'right_answer'
    ];

     public function result(){
        return $this->hasMany(Result::class , 'question_id', 'id');
    }
}
