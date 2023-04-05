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
        $direktori->image = $request->file('image')->store('cobkl/image');
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
        if($request->image) {
            $direktori->image = $request->file('image')->store('cobkl/image');
        }
        $direktori->save();
        return back();
    }       

    public function senarai_faq() {
        $faqs = KandunganFaq::all();
        return view('kandungan.faq', compact('faqs'));
    }    

    public function carian_faq(Request $request) {
        $faqs = KandunganFaq::where('jawapan','LIKE',"%{$request->carian}%")->get();
        return view('kandungan.faq', compact('faqs'));
    }      

    public function cipta_faq(Request $request) {
        $faq = New KandunganFaq;
        $faq->soalan = $request->soalan;
        $faq->kategori = $request->kategori;
        $faq->jawapan = $request->jawapan;
        $faq->save();
        return back();
    }     
    
    public function kemaskini_faq(Request $request) {
        $id = (int)$request->route('id');
        $faq =KandunganFaq::find($id);
        $faq->soalan = $request->soalan;
        $faq->kategori = $request->kategori;
        $faq->jawapan = $request->jawapan;
        $faq->save();
        return back();
    }   
    
    public function senarai_program() {
        $programs = KandunganProgram::all();
        return view('kandungan.program', compact('programs'));
    }    

    public function cipta_program(Request $request) {
        $program = New KandunganProgram;
        $program->title = $request->title;
        $program->save();
        return back();
    }     
    
    public function kemaskini_program(Request $request) {
        $id = (int)$request->route('id');
        $program =KandunganProgram::find($id);
        $program->title = $request->title;
        $program->save();
        return back();
    }       
    
    public function senarai_lain() {
        $lains = KandunganLain::all();
        return view('kandungan.lain', compact('lains'));
    }    

    public function cipta_lain(Request $request) {
        $lain = New KandunganLain;
        $lain->title = $request->title;
        $lain->save();
        return back();
    }     
    
    public function kemaskini_lain(Request $request) {
        $id = (int)$request->route('id');
        $lain =KandunganLain::find($id);
        $lain->title = $request->title;
        $lain->save();
        return back();
    }          
}
