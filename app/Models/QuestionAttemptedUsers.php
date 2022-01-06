<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAttemptedUsers extends Model
{
    use HasFactory;

    protected $table = 'question_attempted_users';
    protected $fillable = ['user_id', 'question_id'];
}
