@extends('layouts.dashboard')
@section('content')

<main class="content">

    <div class="container-fluid">

        {{-- <div class="header">
            <h1 class="header-title">
                Pemeriksaan Dalam Negara
            </h1>
        </div> --}}

        <div class="col-12 col-xl-12">
            <div class="card" >
                <div class="card-header">
                    <h5 class="card-title">Senarai Pendaftaran Pengguna</h5>
                </div>

                @role('admin')
                <a href="/pengguna" class="btn float-end " style="width: fit-content"><button
                class="btn btn-warning btn-block">Daftar Pengguna</button></a>
                @endrole

                <div class="card-body"  style="border-width: 1px; border-color:black;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:5%">Bil</th>
                                <th style="width:25%">Pengguna</th>
                                <th style="width:10%">Nama</th>
                                <th style="width:10%">Jantina</th>
                                <th style="width:45%">Bangsa</th>
                                <th></th>   
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                @foreach ($penggunas as $pengguna)
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pengguna->pengguna}}</td>
                                <td>{{$pengguna->nama}}</td>
                                <td>{{$pengguna->jantina}}</td>
                                <td>{{$pengguna->bangsa}}</td>
                                <td class="table-action">
                                    <a href="pengguna/{{$pengguna->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>   
                                </td>
                   
                               
                            </tr>

                                @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



</main>
    
@endsection

@section('script')

@endsection
