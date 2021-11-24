<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';
    protected $fillable = ['question', 'marks', 'status'];

    public function next()
    {
        return static::where($this->getKeyName(), '=', $this->getKey())->first();
    }

    public function answers()
    {
        return $this->belongsTo(Questionwithanswer::class,'id','questionid');
    }
}
