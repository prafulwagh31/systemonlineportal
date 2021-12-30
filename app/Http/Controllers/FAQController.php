<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class FAQController extends Controller
{
    public function faqCreate()
    {
        return view('faqs');
    }
    public function faqList()
    {
        $faqlist = FAQ::paginate();
        return view('faqlist',['faqlist' => $faqlist]);
    }
    public function addFaqs(Request $request)
    {
          $data = $request->validate([
            'language' => 'required',
            'description' => 'required',
        ]);
        
        $faq = FAQ::create($data);
        
        return redirect()->route('faqlist')->with('message','FAQ Added Successfully');
    }
    public function editFaq($id)
    {
      $editfaq = FAQ::findOrFail($id);
      return view('editfaq',['editfaq' => $editfaq]);
    }
    public function updateFaq(Request $request,$id)
    {
        $faq = FAQ::findOrFail($id);
        $data = $request->validate([
            'language' => 'required',
            'description' => 'required',
        ]);
        $faq->update($data);
        return redirect()->route('faqlist')->with('message','FAQ Update Successfully');
    }
    public function destroyFaq($id)
    {
        FAQ::findOrFail($id)->delete();

        return redirect()->route('faqlist')
        ->with([
            'message' => 'FAQ Deleted successfully.',
        ]);
    }
}
