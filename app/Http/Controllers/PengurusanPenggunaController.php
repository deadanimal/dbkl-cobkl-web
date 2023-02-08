<?php

namespace App\Http\Controllers;

use App\Models\PengurusanPengguna;
use Illuminate\Http\Request;

class PengurusanPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        dd($user);

        // Alert::success('Simpan berjaya.', 'Maklumat pensampelan telah disimpan.');

        return redirect('/pendaftaran');
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
