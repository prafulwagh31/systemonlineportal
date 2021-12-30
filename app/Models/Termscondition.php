<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termscondition extends Model
{
    use HasFactory;
    protected $table = 'termsconditions';
    protected $fillable = [
        'language',
        'description',
    ];
}
