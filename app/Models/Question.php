<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';
    protected $fillable = ['exam','question', 'marks', 'status', 'serial'];

    public function next()
    {
        // DB::enableQueryLog();
       return static::where(['serial'=> $this->getSerial()->serial,'exam' => session('examId')])->first();
        
        // print_r(DB::getQueryLog());die;
    }

    public function answers()
    {
        return $this->belongsTo(Questionwithanswer::class,'id','questionid');
    }

    public function getSerial()
    {
        return static::where([$this->getKeyName() => $this->getKey()])->first();
    }
}
