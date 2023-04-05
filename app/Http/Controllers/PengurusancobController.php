<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengurusancobController extends Controller
{
    public function temujanji_senarai(Request $request) {
        return view('pengurusancob.temujanji_senarai');
    }

    public function temujanji_satu(Request $request) {}

    public function temujanji_cipta(Request $request) {}

    public function temujanji_kemaskini(Request $request) {}

    public function cadangan_senarai(Request $request) {
        return view('pengurusancob.cadangan_senarai');
    }

    public function cadangan_satu(Request $request) {}

    public function cadangan_cipta(Request $request) {}

    public function cadangan_kemaskini(Request $request) {}    

    public function kursus_senarai(Request $request) {
        return view('pengurusancob.umum_senarai');
    }

    public function kursus_satu(Request $request) {}

    public function kursus_cipta(Request $request) {}

    public function kursus_kemaskini(Request $request) {}   
    
    public function pertanyaan_senarai(Request $request) {
        return view('pengurusancob.umum_senarai');
    }

    public function pertanyaan_satu(Request $request) {}

    public function pertanyaan_cipta(Request $request) {}

    public function pertanyaan_kemaskini(Request $request) {}  
    
    public function dalaman_senarai(Request $request) {
        return view('pengurusancob.umum_senarai');
    }

    public function dalaman_satu(Request $request) {}

    public function dalaman_cipta(Request $request) {}

    public function dalaman_kemaskini(Request $request) {}     

    public function maklumbalas_senarai(Request $request) {
        return view('pengurusancob.maklumbalas_senarai');
    }

    public function maklumbalas_satu(Request $request) {}

    public function maklumbalas_cipta(Request $request) {}

    public function maklumbalas_kemaskini(Request $request) {}     
    
    public function agm_senarai(Request $request) {
        return view('pengurusancob.agm_senarai');
    }

    public function agm_satu(Request $request) {}

    public function agm_cipta(Request $request) {}

    public function agm_kemaskini(Request $request) {}      
}
