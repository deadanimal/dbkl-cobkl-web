@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

     

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Aduan Umum</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>AduKL ID</th>
                                        <th>Status</th>
                                        <th>Nama</th>
                                        <th>IC.</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        <th>Jenis</th>
                                        <th>Pihak Diadu</th>
                                        <th>Projek</th>
                                        <th>Alamat</th>
                            
                                        <th>Berkaitan?</th>
                                        <th>Klassifikasi?</th>
                                        <th>Mediasi?</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($umums as $umum)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $umum->idadu }}</td>
                                            <td>{{ $umum->status }}</td>
                                            <td>{{ $umum->name }}</td>
                                            <td>{{ $umum->docno }}</td>
                                            <td>{{ $umum->mobileno }}</td>
                                            <td>{{ $umum->email }}</td>
                                            <td>{{ $umum->jenis }}</td>
                                            <td>{{ $umum->pihakdiadu }}</td>
                                            <td>{{ $umum->project }}</td>
                                            <td>{{ $umum->address }}</td>
                                    
                                            <td>
                                                @if($umum->berkaitan == "Ya")
                                                    Ya
                                                @else
                                                
                                                    <form action="/aduan/umum/{{$umum->id}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-primary" type="submit" name="berkaitan" value="Ya">Ya</button>
                                                        <button class="btn btn-primary" type="submit" name="berkaitan" value="Tidak">Tidak</button>
                                                    </form>                                          
                                                
                                                @endif                                             
                                            </td>

                                            <td>
                                                @if($umum->klassifikasi)
                                                    {{$umum->klassifikasi}}
                                                @else
                                                
                                                    <form action="/aduan/umum/{{$umum->id}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-primary" type="submit" name="klassifikasi" value="Mudah">Mudah</button>
                                                        <button class="btn btn-primary" type="submit" name="klassifikasi" value="Sederhana">Sederhana</button>
                                                        <button class="btn btn-primary" type="submit" name="klassifikasi" value="Kritikal">Kritikal</button>
                                                    </form>                                          
                                                
                                                @endif                                             
                                            </td>    
                                            
                                            <td>
                                                @if($umum->mediasi)
                                                    {{$umum->mediasi}}
                                                @else
                                                
                                                    <form action="/aduan/umum/{{$umum->id}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="btn btn-primary" type="submit" name="mediasi" value="Ya">Ya</button>
                                                        <button class="btn btn-primary" type="submit" name="mediasi" value="Tidak">Tidak</button>
                                                    </form>                                          
                                                
                                                @endif                                             
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
