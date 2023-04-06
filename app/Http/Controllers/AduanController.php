<?php

namespace App\Http\Controllers;

use App\Models\AduanAdukl;
use App\Models\AduanBersemuka;
use App\Models\AduanBorangDuasembilan;
use App\Models\AduanEjen;
use App\Models\AduanJabatan;
use App\Models\AduanSita;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function umum_senarai(Request $request) {
        $umums = AduanAdukl::all();
        return view('aduan.umum', compact('umums'));
    }

    public function umum_cipta(Request $request) {
        AduanAdukl::create([
            'idadu' => $request->idadu,
            'status' => $request->status,
            'name' => $request->name,
            'docno' => $request->docno,
            'mobileno' => $request->mobileno,
            'email' => $request->email,
            'jenis' => $request->jenis,
            'pihakdiadu' => $request->pihakdiadu,
            'project' => $request->project,
            'address' => $request->address,
            'description' => $request->description,            
        ]);
        return back();
    }

    public function umum_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $umum = AduanAdukl::find($id);
        if($request->berkaitan) {
            $umum->berkaitan = $request->berkaitan;
        }
        
        if($request->klassifikasi) {
            $umum->klassifikasi = $request->klassifikasi;
        }
        
        if($request->mediasi) {
            $umum->mediasi = $request->mediasi;
        }
        $umum->save();
        return back();        
    }

    public function bersemuka_senarai(Request $request) {
        $bersemukas = AduanBersemuka::all();
        return view('aduan.bersemuka', compact('bersemukas'));
    }


    public function bersemuka_cipta(Request $request) {
        AduanBersemuka::create([
            'title' => $request->title,
            'tarikh' => $request->tarikh,
            'user_id' => $request->user()->id
        ]);
        return back();
    }

    public function bersemuka_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $bersemuka = AduanBersemuka::find($id);
        if($request->status) {
            $bersemuka->status = $request->status;
        }
        
        if($request->ringkasan) {
            $bersemuka->ringkasan = $request->ringkasan;
        }
        
        $bersemuka->save();
        return back();         
    } 

    public function jabatan_senarai(Request $request) {
        $jabatans = AduanJabatan::all();
        return view('aduan.jabatan', compact('jabatans'));        
    }

    public function jabatan_satu(Request $request) {}

    public function jabatan_cipta(Request $request) {
        AduanJabatan::create([
            'title' => $request->title,
            'ulasan' => $request->ulasan,
            'user_id' => $request->user()->id,
        ]);
        return back();
    }

    public function jabatan_kemaskini(Request $request) {}    
    
    public function borang29_senarai(Request $request) {
        $borangs = AduanBorangDuasembilan::all();
        return view('aduan.borang', compact('borangs'));         
    }

    public function borang29_satu(Request $request) {}

    public function borang29_cipta(Request $request) {
        AduanBorangDuasembilan::create([
            'pegawai' => $request->pegawai,
            'pengarah' => $request->pengarah,
        ]);
        return back();
    }

    public function borang29_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $borang = AduanBorangDuasembilan::find($id);
        if($request->status) {
            $borang->status = $request->status;
        }
        
        $borang->save();
        return back();         
    }   

    public function sita_senarai(Request $request) {
        $sitas = AduanSita::all();
        return view('aduan.sita', compact('sitas'));        
    }

    public function sita_satu(Request $request) {}

    public function sita_cipta(Request $request) {
        $sita = AduanSita::create([
            'maklumat' => $request->maklumat,
            'ulasan' => $request->ulasan,
        ]);
        if($request->dokumen) {
            $sita->dokumen = $request->file('dokumen')->store('cobkl/dokumen');
            $sita->save();
        }
        return back();        
    }

    public function sita_kemaskini(Request $request) {}    
    
    public function ejen_senarai(Request $request) {
        $ejens = AduanEjen::all();
        return view('aduan.ejen', compact('ejens'));         
    }

    public function ejen_satu(Request $request) {}

    public function ejen_cipta(Request $request) {
        $ejen = New AduanEjen;
        $ejen->ejen = $request->ejen;
  
        if($request->dokumen) {
            $ejen->dokumen = $request->file('dokumen')->store('cobkl/dokumen');            
        }
        $ejen->save();
        return back();           
    }

    public function ejen_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $ejen = AduanEjen::find($id);
        if($request->status) {
            $ejen->status = $request->status;
        }
        
        $ejen->save();
        return back();         
    }       
}
