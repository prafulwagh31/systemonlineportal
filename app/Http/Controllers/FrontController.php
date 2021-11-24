<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class FrontController extends BaseController
{
    public function createHome()
    {
      return view('Front.index');
    }

}
