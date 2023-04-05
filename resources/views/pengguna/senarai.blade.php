@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Pengguna</h5>
                    </div>


                    <div class="card-body" style="border-width: 1px; border-color:black;">
                        <h4>Bangsa: Melayu {{$countMelayu}}</h4>
                        <h4>Bangsa: Cina 0</h4>
                        <h4>Bangsa: India 0</h4>
                        <h4>Bangsa: Lain-Lain 0</h4>
                    </div>
                </div>
                
                
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Pengguna</h5>
                    </div>


                    <div class="card-body" style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:5%">Bil</th>
                                    <th style="width:15%">Jenis Pengguna</th>
                                    <th style="width:25%">Nama</th>
                                    <th style="width:15%">Jawatan</th>
                                    <th style="width:10%">Jantina</th>
                                    <th style="width:10%">Bangsa</th>
                                    <th style="width:10%">Aktif</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    @foreach ($penggunas as $pengguna)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ ucfirst($pengguna->pengguna) }}</td>
                                        <td>{{ $pengguna->nama }}</td>
                                        <td>{{ $pengguna->jawatan }}</td>
                                        <td>{{ $pengguna->jantina }}</td>
                                        <td>{{ $pengguna->bangsa }}</td>
                                        <td>
                                            @if($pengguna->active)
                                            Ya
                                            @else
                                            Tidak
                                            @endif
                                        </td>                                        
                                        <td class="table-action">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalPenggunaEdit{{$pengguna->id}}" href="#"><i
                                                class="align-middle fas fa-fw fa-pen"></i></i></a>                                            
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


    @foreach($penggunas as $pengguna)

    <div class="modal fade" id="modalPenggunaEdit{{$pengguna->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">


                    <form action="/pengguna/{{$pengguna->id}}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label>Aktif?</label>
                            <div class="input-group mb-3">
                                <select class="form-select flex-grow-1" name="aktif">
                                    <option selected disabled>Sila Pilih</option>
                                    <option value=1>Ya</option>
                                    <option value=0>Tidak</option>
                                </select>
                            </div>                                                
                        </div>                         

                        <div class="mb-3">
                            <label>Nama</label>
                            <input class="form-control form-control-lg" type="text" name="nama" value="{{$pengguna->nama}}" />
                        </div>
            
                        <div class="mb-3">
                            <label>Jantina</label>
                            <div class="input-group mb-3">
                                <select class="form-select flex-grow-1" name="jantina">
                                    <option selected disabled>Sila Pilih</option>
                                    <option value="Lelaki">Lelaki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>                                                
                        </div> 
            
                        <div class="mb-3">
                            <label>Bangsa</label>
                            <div class="input-group mb-3">
                                <select class="form-select flex-grow-1" name="bangsa">
                                    <option selected disabled>Sila Pilih</option>
                                    <option value="Melayu">Melayu</option>
                                    <option value="Cina">Cina</option>
                                    <option value="India">India</option>
                                    <option value="lain">Lain-lain</option>
                                </select>
                            </div> 
                        </div>
            
                        <div class="mb-3">
                            <label>No Telefon</label>
                            <input class="form-control form-control-lg" type="number" name="telefon" value="{{$pengguna->telefon}}" />
                        </div>
        

                        <div class="mb-3">
                            <label>No. Kad Pengenalan</label>
                            <input class="form-control form-control-lg" type="number" name="nombor_pengenalan" value="{{$pengguna->nombor_pengenalan}}" />
                        </div>

                        @if($pengguna->pengguna == 'admin' || $pengguna->pengguna == 'staff')

                        <div class="mb-3">
                            <label>Unit/Jabatan</label>
                            <input class="form-control form-control-lg" type="text" name="unit" value="{{$pengguna->unit}}" />
                        </div>

                        <div class="mb-3">
                            <label>Jawatan</label>
                            <input class="form-control form-control-lg" type="text" name="jawatan" value="{{$pengguna->jawatan}}" />
                        </div>

                        {{-- <div class="mb-3">
                            <label>No. Gaji</label>
                            <input class="form-control form-control-lg" type="number" name="gaji" value="{{$pengguna->gaji}}" />
                        </div> --}}

                        @endif

    
                        <button type="submit" class="btn btn-primary">Edit</button>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>            

    @endforeach  

@endsection

@section('script')
@endsection
