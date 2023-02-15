<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemController extends Controller
{
    public function senarai_audit() {
        $audits = [];
        return view('sistem.audit', compact('audits'));
    }

    public function senarai_notifikasi() {
        return view('sistem.notifikasi');
    }
    
    public function senarai_laporan() {
        return view('sistem.laporan');
    }
    
}
