<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
     public function isi()
    {
        return view('servicePages.isi');
    }
    public function schemeXcertification()
    {
        return view('servicePages.schemeXcertification');
    }
      public function bisCrs()
    {
        return view('servicePages.bis-crs');
    }
       public function bee()
    {
        return view('servicePages.bureau-Energy-Efficiency');
    }
        public function wpc()
    {
        return view('servicePages.wireless-planning');
    }
         public function fssai()
    {
        return view('servicePages.fssai');
    }
         public function csdcoMedical()
    {
        return view('servicePages.csdco-medical');
    }
        public function cosmetic()
    {
        return view('servicePages.csdco-cosmetic');
    }
    

}

