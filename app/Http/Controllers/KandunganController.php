<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KandunganDirektori;
use App\Models\KandunganFaq;
use App\Models\KandunganLain;
use App\Models\KandunganProgram;

class KandunganController extends Controller
{
    public function senarai_direktoris() {
        $direktoris = KandunganDirektori::all();
        return view('kandungan.direktori', compact('direktoris'));
    }

    public function cipta_direktoris(Request $request) {
        $direktori = New KandunganDirektori;
        $direktori->nama = $request->nama;
        $direktori->jawatan = $request->jawatan;
        $direktori->email = $request->email;
        $direktori->telefon = $request->telefon;
        $direktori->save();
        return back();
    }     
    
    public function kemaskini_direktoris(Request $request) {
        $id = (int)$request->route('id');
        $direktori =KandunganDirektori::find($id);
        $direktori->nama = $request->nama;
        $direktori->jawatan = $request->jawatan;
        $direktori->email = $request->email;
        $direktori->telefon = $request->telefon;
        $direktori->save();
        return back();
    }       

    public function senarai_faq() {
        $faqs = KandunganFaq::all();
        return view('kandungan.faq', compact('faqs'));
    }    

    public function cipta_faq(Request $request) {
        $faq = New KandunganFaq;
        $faq->soalan = $request->soalan;
        $faq->jawapan = $request->jawapan;
        $faq->save();
        return back();
    }     
    
    public function kemaskini_faq(Request $request) {
        $id = (int)$request->route('id');
        $faq =KandunganFaq::find($id);
        $faq->soalan = $request->soalan;
        $faq->jawapan = $request->jawapan;
        $faq->save();
        return back();
    }          
}
