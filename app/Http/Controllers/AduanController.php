<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function umum_senarai(Request $request) {
        return view('aduan.umum_senarai');
    }

    public function umum_satu(Request $request) {}

    public function umum_cipta(Request $request) {}

    public function umum_kemaskini(Request $request) {}

    public function bersemuka_senarai(Request $request) {}

    public function bersemuka_satu(Request $request) {}

    public function bersemuka_cipta(Request $request) {}

    public function bersemuka_kemaskini(Request $request) {} 

    public function jabatan_senarai(Request $request) {}

    public function jabatan_satu(Request $request) {}

    public function jabatan_cipta(Request $request) {}

    public function jabatan_kemaskini(Request $request) {}    
    
    public function borang29_senarai(Request $request) {}

    public function borang29_satu(Request $request) {}

    public function borang29_cipta(Request $request) {}

    public function borang29_kemaskini(Request $request) {}   

    public function sita_senarai(Request $request) {}

    public function sita_satu(Request $request) {}

    public function sita_cipta(Request $request) {}

    public function sita_kemaskini(Request $request) {}    
    
    public function ejen_senarai(Request $request) {}

    public function ejen_satu(Request $request) {}

    public function ejen_cipta(Request $request) {}

    public function ejen_kemaskini(Request $request) {}       
}
