<?php

namespace App\Http\Controllers;

use App\Models\CobCadangan;
use App\Models\CobTemujanji;
use Illuminate\Http\Request;

class CobController extends Controller
{
    public function temujanji_senarai(Request $request) {
        $temujanjis = CobTemujanji::all();
        return view('cob.temujanji', compact('temujanjis'));         
    }

    public function temujanji_cipta(Request $request) {
        $temujanji = New CobTemujanji;
        $temujanji->title = $request->title;
        // $temujanji->dokumen = $request->file('dokumen')->store('cobkl/dokumen');            
        $temujanji->save();
        return back();           
    }

    public function temujanji_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $temujanji = CobTemujanji::find($id);
        $temujanji->title = $request->title;
        // if($request->dokument) {
        //     $temujanji->dokument = $request->file('dokumen')->store('cobkl/dokumen');            
        // }
        
        $temujanji->save();
        return back();         
    }    

    public function cadangan_senarai(Request $request) {
        $cadangans = CobCadangan::all();
        return view('cob.cadangan', compact('cadangans'));         
    }

    public function cadangan_cipta(Request $request) {
        $cadangan = New CobCadangan;
        $cadangan->title = $request->title;
        $cadangan->save();
        return back();           
    }

    public function cadangan_kemaskini(Request $request) {
        $id = (int)$request->route('id');
        $cadangan = CobCadangan::find($id);
        $cadangan->title = $request->title;    
        $cadangan->save();
        return back();         
    }        
}
