<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionwithanswer extends Model
{
    use HasFactory;

    protected $table = 'questionwithanswer';
    protected $fillable = ['questionid', 'answer'];
}
