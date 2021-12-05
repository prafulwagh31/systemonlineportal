<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exam';
    protected $fillable = ['title', 'category','agegroup','language','duration','noquestion','passmarks','status','type','cost','fromdate','todate','instruction'];
}
