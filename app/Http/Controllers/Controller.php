<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    public function home()
    {
      return view('home');
    }
    public function addexam()
    {
      return view('addexam');
    }
    public function examcategory()
    {
      return view('examcategory');
    }
    public function examlist()
    {
      return view('examlist');
    }
    public function addquestion()
    {
      return view('addquestion');
    }
    public function questionlist()
    {
      return view('questionlist');
    }
}
