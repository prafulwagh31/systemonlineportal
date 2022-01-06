<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class AboutusController extends Controller
{
    public function aboutsUs()
    {
        return view('aboutsus');
    }
    public function aboutList()
    {
        $aboutlist = Aboutus::paginate();
        return view('aboutlist',['aboutlist' => $aboutlist]);
    }
    public function addAboutus(Request $request)
    {
          $data = $request->validate([
            'language' => 'required',
            'description' => 'required',
        ]);
        
        $aboutus = Aboutus::create($data);
        
        return redirect()->route('aboutlist')->with('message','About Us Added Successfully');
    }
    public function editAboutus($id)
    {
      $editaboutus = Aboutus::findOrFail($id);
      return view('editaboutsus',['editaboutus' => $editaboutus]);
    }
    public function updateAboutus(Request $request,$id)
    {
        $aboutus = Aboutus::findOrFail($id);
        $data = $request->validate([
            'language' => 'required',
            'description' => 'required',
        ]);
        $aboutus->update($data);
        return redirect()->route('aboutlist')->with('message','About Us Update Successfully');
    }
    public function destroyAboutus($id)
    {
        Aboutus::findOrFail($id)->delete();

        return redirect()->route('aboutlist')
        ->with([
            'message' => 'About Us Deleted successfully.',
        ]);
    }
}
