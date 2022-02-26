<?php

namespace App\Http\Controllers;
use App\Models\TermsConditions;
use App\Models\PrivacyPolicy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function privacy()
    {
        
      
     $privacy = PrivacyPolicy::orderBy('created_at', 'DESC')->take(1)->get();
      
        return view('privacyPolicy')->with('privacy',$privacy);
       
    }
    public function terms()
    {
      
      $term = TermsConditions::orderBy('created_at', 'DESC')->take(1)->get();
      
        return view('termsAndConditions')->with('term',$term);
       
    }
}
