@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Mesyuarat Jabatan</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                  
                            <form action="/aduan/jabatan/" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>Tajuk</label>
                                    <input class="form-control form-control-lg" type="text" name="title"/>
                                </div>
                                <div class="mb-3">
                                    <label>Tarikh</label>
                                    <input class="form-control form-control-lg" type="date" name="tarikh"/>
                                </div>                                                                
                                
                                
                                <button class="btn btn-primary" type="submit">Cipta</button>
                            </form>  

                        </div>
                    



                </div>     

                @if(Auth::user()->pengguna == 'admin' || Auth::user()->pengguna == 'staff')
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Mesyuarat Jabatan</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Tarikh</th>
                                        <th>Pengguna</th>
                                        <th>Tajuk</th>
                                        <th>Status</th>
                                        <th>Ringkasan</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($jabatans as $jabatan)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jabatan->tarikh }}</td>
                                            <td>{{ $jabatan->user->nama }}</td>
                                            <td>{{ $jabatan->title }}</td>
                                            <td>
                                                
                                                    {{$jabatan->status}}
                                                
                                                
                                                    <form action="/aduan/jabatan/{{$jabatan->id}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-primary" type="submit" name="status" value="Sah">Sah</button>
                                                        <button class="btn btn-primary" type="submit" name="status" value="Hadir">Hadir</button>
                                                        <button class="btn btn-primary" type="submit" name="status" value="Tamat">Tamat</button>
                                                    </form>                                          
                                                
                                                                                           
                                            </td>   
                    
                                            <td>
                                                @if($jabatan->ringkasan)
                                                    {{$jabatan->ringkasan}}
                                                @else
                                                
                                                    <form action="/aduan/jabatan/{{$jabatan->id}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input class="form-control form-control-lg" type="text" name="ringkasan" value="{{ $jabatan->ringkasan }}" />
                                                        <button class="btn btn-primary" type="submit" name="kemaskini" value="ringkasan">Tulis</button>
                                                    </form>                                          
                                                
                                                @endif                                             
                                            </td>                                                  
               

                                                           

    
    
                                    </tr>
                                    @endforeach
    
                                </tbody>
                            </table>
                        </div>
                    



                </div>
                @endif

            </div>

        </div>



    </main>

    
    
@endsection

@section('script')
@endsection
