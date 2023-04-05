<?php

namespace App\Http\Controllers;

use App\Models\PengurusanPengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\KandunganDirektori;
use App\Models\KandunganFaq;
use App\Models\KandunganLain;
use App\Models\KandunganProgram;

class PengurusanPenggunaController extends Controller
{

    public function borangAdmin()
    {
        return view('daftar.borang');
    }

    public function senarai()
    {
        $penggunas = User::where([
            ['id', '>', 1]
        ])->orderBy('pengguna')->get();

        $countMelayu = User::where('bangsa', 'Melayu')->count();

        return view('pengguna.senarai', compact([
            'penggunas', 
            'countMelayu'
    ]));
    }

    public function profil(Request $request)
    {
        $pengguna = $request->user();
        return view('pengguna.profile',compact('pengguna'));
    }    

    public function kemaskini(Request $request)
    {
        $id = (int)$request->route('id');
        $pengguna = User::find($id);    

        $pengguna->update([
            'nombor_pengenalan' => $request->get('nombor_pengenalan'),
            'nama' => $request->get('nama'),
            'telefon' => $request->get('telefon'),
            'alamat' => $request->get('alamat'),
            'jawatan' => $request->get('jawatan'),

        ]);   

        if ($request->jantina) {
            $pengguna->jantina = $request->jantina;
        }

        if ($request->bangsa) {
            $pengguna->bangsa = $request->bangsa;
        }      
        
        if ($request->aktif) {
            $pengguna->active = $request->aktif;
        }           
        
        $pengguna->save();

        Alert::success('Pengguna dikemaskini', 'Maklumat telah disimpan.');
        return back();
    }    

    public function daftar()
    {
        //
        return view('pengguna.daftar');
    }    

    public function ciptaPengguna(Request $request)
    {

        User::create([
            'pengguna' => $request->get('pengguna'),
            'pengenalan' => $request->get('pengenalan'),
            'nombor_pengenalan' => $request->get('nombor_pengenalan'),
            'nama' => $request->get('nama'),
            'jantina' => $request->get('jantina'),
            'bangsa' => $request->get('bangsa'),
            'telefon' => $request->get('telefon'),
            'email' => $request->get('email'),
            'alamat' => $request->get('alamat'),
            'jawatan' => $request->get('jawatan'),
            'password' => Hash::make($request->password),

        ]);   
        Alert::success('Pengguna dicipta', 'Maklumat telah disimpan.');
        return back();
    }

    public function satuPengguna(Request $request) {
        $id = (int)$request->route('id');
        $pengguna = User::find($id);        
        return view('daftar.satuBorang', compact('pengguna'));
    }

    public function kemaskiniPengguna(Request $request){

        $id = (int)$request->route('id');

        $pengguna = User::find($id);        

        $pengguna->pengguna = $request->pengguna;
        $pengguna->pengenalan = $request->pengenalan;
        $pengguna->nombor_pengenalan = $request->nombor_pengenalan;
        $pengguna->nama = $request->nama;
        $pengguna->jantina = $request->jantina;
        $pengguna->bangsa = $request->bangsa;
        $pengguna->telefon = $request->telefon;
        $pengguna->email = $request->email;
        $pengguna->alamat = $request->alamat;
        $pengguna->jawatan = $request->jawatan;

        // dd($pengguna);

        $pengguna->save();

        // sweet alert popup not working
        Alert::success('Kemaskini berjaya.', 'Maklumat telah dikemaskini.');

        session()->flash('message', 'Borang telah dikemaskini.');



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

        // session flash
        session()->flash('message', 'Borang telah dikemaskini.');

        return back();
        // return redirect('/senarai');

    }
    

    public function borangStaff()
    {
        //
        return view('daftar.borangStaff');
    }

    public function satuStaff(Request $request) {
        $id = (int)$request->route('id');
        $pengguna = User::find($id);        
        return view('daftar.satuStaff', compact('pengguna'));
    }

    public function kemaskiniStaff(Request $request){

        $id = (int)$request->route('id');

        $pengguna = User::find($id);        

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

        session()->flash('message', 'Borang telah dikemaskini.');


        // return to
        return redirect('/senarai');

    }

}
