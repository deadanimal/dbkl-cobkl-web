<?php

namespace App\Http\Controllers;

use App\Models\MediasiBorang;
use App\Models\MediasiBorangUpload;
use App\Models\MediasiPanggilan;
use Illuminate\Http\Request;

class MediasiController extends Controller
{
    public function panggilan_senarai(Request $request) {
        $panggilans = MediasiPanggilan::all();
        return view('mediasi.panggilan', compact('panggilans'));         
    }

    public function panggilan_satu(Request $request) {}

    public function panggilan_cipta(Request $request) {
        $panggilan = New MediasiPanggilan;
        $panggilan->title = $request->title;
        $panggilan->tarikh = $request->tarikh;
        $panggilan->ulasan = $request->ulasan;
        $panggilan->save();
        return back();           
    }

    public function panggilan_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $panggilan = MediasiPanggilan::find($id);
        if($request->status) {
            $panggilan->status = $request->status;
        }
        
        $panggilan->save();
        return back();         
    }   

    public function borang_senarai(Request $request) {
        $borangs = MediasiBorang::all();
        $uploads = MediasiBorangUpload::all();
        return view('mediasi.borang', compact('borangs', 'uploads'));         
    }

    public function borang_satu(Request $request) {}

    public function borang_cipta(Request $request) {
        $borang = New MediasiBorang;
        $borang->title = $request->title;
        $borang->dokumen = $request->file('dokumen')->store('cobkl/dokumen');            
        $borang->save();
        return back();           
    }

    public function borang_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $borang = MediasiBorang::find($id);
        $borang->title = $request->title;
        if($request->dokument) {
            $borang->dokument = $request->file('dokumen')->store('cobkl/dokumen');            
        }
        
        $borang->save();
        return back();         
    }    
    
    public function borang_upload(Request $request) {
    
        $upload = new MediasiBorangUpload();
        $upload->dokumen = $request->file('dokumen')->store('cobkl/dokumen');            
        $upload->user_id = $request->user()->id;
        $upload->save();
        return back();         
    }       
}
