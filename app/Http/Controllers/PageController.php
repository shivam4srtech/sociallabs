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
        public function dot()
    {
        return view('servicePages.dot');
    }
        public function pesoCertification()
    {
        return view('servicePages.peso-certification');
    }
        public function legalMetrology()
    {
        return view('servicePages.legal-metrology');
    }
        public function telecommunicationEngineering()
    {
        return view('servicePages.telecommunication-engineering');
    }
        public function stqc()
    {
        return view('servicePages.stqc-cctv');
    }
        public function arai()
    {
        return view('servicePages.arai-approval');
    }
         public function ceCertification()
    {
        return view('servicePages.ce-certification');
    }
        public function bsmiCertification()
    {
        return view('servicePages.bsmi-certification');
    }
        public function fccCertification()
    {
        return view('servicePages.fcc-certification');
    }
         public function kcCertification()
    {
        return view('servicePages.kc-certification');
    }
        public function cbCertification()
    {
        return view('servicePages.cb-certification');
    }
        public function imdaCertification()
    {
        return view('servicePages.imda-certification');
    }


}

