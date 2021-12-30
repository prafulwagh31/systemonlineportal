<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Termscondition;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class TermsconditionController extends Controller
{
    public function termsCondition()
    {
        return view('termscondition');
    }
    public function termconditionList()
    {
        $termconditionlist = Termscondition::paginate();
        return view('termconditionlist',['termconditionlist' => $termconditionlist]);
    }
    public function addtermsCondition(Request $request)
    {
          $data = $request->validate([
            'language' => 'required',
            'description' => 'required',
        ]);
        
        $termscondition = Termscondition::create($data);
        
        return redirect()->route('termconditionlist')->with('message','Terms & Condition Added Successfully');
    }
    public function edittermsCondition($id)
    {
      $edittermcondition = Termscondition::findOrFail($id);
      return view('edittermscondition',['edittermcondition' => $edittermcondition]);
    }
    public function updatetermsCondition(Request $request,$id)
    {
        $termscondition = Termscondition::findOrFail($id);
        $data = $request->validate([
            'language' => 'required',
            'description' => 'required',
        ]);
        $termscondition->update($data);
        return redirect()->route('termconditionlist')->with('message','Terms & Condition Update Successfully');
    }
    public function destroytermsCondition($id)
    {
        Termscondition::findOrFail($id)->delete();

        return redirect()->route('termconditionlist')
        ->with([
            'message' => 'Terms & Condition Deleted successfully.',
        ]);
    }
}
