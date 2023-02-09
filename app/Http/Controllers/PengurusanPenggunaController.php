<?php

namespace App\Http\Controllers;

use App\Models\PengurusanPengguna;
use Illuminate\Http\Request;
use Alert;

class PengurusanPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function borangAdmin()
    {
        //
        return view('daftar.borang');
    }

    public function senarai()
    {
        //

        $penggunas = PengurusanPengguna::all();
      

        return view('daftar.senarai', compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ciptaPengguna(Request $request)
    {
        //
        $user = $request->user();

        $user = New PengurusanPengguna;

        $user->pengguna = $request->pengguna;
        $user->pengenalan = $request->pengenalan;
        $user->nombor_pengenalan = $request->nombor_pengenalan;
        $user->nama = $request->nama;
        $user->jantina = $request->jantina;
        $user->bangsa = $request->bangsa;
        $user->telefon = $request->telefon;
        $user->emel = $request->emel;
        $user->alamat = $request->alamat;
        $user->jawatan = $request->jawatan;
       
        $user->save();

        // dd($user);

        // Alert::success('Simpan berjaya.', 'Maklumat pensampelan telah disimpan.');

        return redirect('/senarai');
    }

    public function satuPengguna(Request $request) {
        $id = (int)$request->route('id');
        $pengguna = PengurusanPengguna::find($id);        
        return view('daftar.satuBorang', compact('pengguna'));
    }

    public function kemaskiniPengguna(Request $request){

        $id = (int)$request->route('id');

        $pengguna = PengurusanPengguna::find($id);        

        $pengguna->pengguna = $request->pengguna;
        $pengguna->pengenalan = $request->pengenalan;
        $pengguna->nombor_pengenalan = $request->nombor_pengenalan;
        $pengguna->nama = $request->nama;
        $pengguna->jantina = $request->jantina;
        $pengguna->bangsa = $request->bangsa;
        $pengguna->telefon = $request->telefon;
        $pengguna->emel = $request->emel;
        $pengguna->alamat = $request->alamat;
        $pengguna->jawatan = $request->jawatan;

        // dd($pengguna);

        $pengguna->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat telah dikemaskini.');


        return redirect('/senarai');

    }

    public function borangAwam()
    {
        //
        return view('daftar.borangAwam');
    }

    public function satuAwam(Request $request) {
        $id = (int)$request->route('id');
        $pengguna = PengurusanPengguna::find($id);        
        return view('daftar.satuAwam', compact('pengguna'));
    }

    public function kemaskiniAwam(Request $request){

        $id = (int)$request->route('id');

        $pengguna = PengurusanPengguna::find($id);        

        $pengguna->pengguna = $request->pengguna;
        $pengguna->pengenalan = $request->pengenalan;
        $pengguna->nombor_pengenalan = $request->nombor_pengenalan;
        $pengguna->nama = $request->nama;
        $pengguna->jantina = $request->jantina;
        $pengguna->bangsa = $request->bangsa;
        $pengguna->telefon = $request->telefon;
        $pengguna->emel = $request->emel;
        $pengguna->alamat = $request->alamat;
        $pengguna->jawatan = $request->jawatan;

        // dd($pengguna);

        $pengguna->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat telah dikemaskini.');


        return redirect('/senarai');

    }
    

    public function borangStaff()
    {
        //
        return view('daftar.borangStaff');
    }

    public function satuStaff(Request $request) {
        $id = (int)$request->route('id');
        $pengguna = PengurusanPengguna::find($id);        
        return view('daftar.satuStaff', compact('pengguna'));
    }

    public function kemaskiniStaff(Request $request){

        $id = (int)$request->route('id');

        $pengguna = PengurusanPengguna::find($id);        

        $pengguna->pengguna = $request->pengguna;
        $pengguna->pengenalan = $request->pengenalan;
        $pengguna->nombor_pengenalan = $request->nombor_pengenalan;
        $pengguna->nama = $request->nama;
        $pengguna->jantina = $request->jantina;
        $pengguna->bangsa = $request->bangsa;
        $pengguna->telefon = $request->telefon;
        $pengguna->emel = $request->emel;
        $pengguna->alamat = $request->alamat;
        $pengguna->jawatan = $request->jawatan;

        // dd($pengguna);

        $pengguna->save();

        Alert::success('Kemaskini berjaya.', 'Maklumat telah dikemaskini.');


        return redirect('/senarai');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengurusanPengguna  $pengurusanPengguna
     * @return \Illuminate\Http\Response
     */
    public function show(PengurusanPengguna $pengurusanPengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengurusanPengguna  $pengurusanPengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(PengurusanPengguna $pengurusanPengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengurusanPengguna  $pengurusanPengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengurusanPengguna $pengurusanPengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengurusanPengguna  $pengurusanPengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengurusanPengguna $pengurusanPengguna)
    {
        //
    }
}
