@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Arahan Laporan Ejen</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                  
                            <form action="/aduan/ejen/" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Ejen</label>
                                    <textarea class="form-control" rows="5" name="ejen" placeholder="ejen"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">Laporan</label>
                                    <input type="file" name="dokumen">
                                </div>    
                                                                                                 
                                
                                
                                <button class="btn btn-primary" type="submit">Cipta</button>
                            </form>  

                        </div>
                    



                </div>     

                @if(Auth::user()->pengguna == 'admin' || Auth::user()->pengguna == 'staff')
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Arahan Laporan Ejen</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Ejen</th>
                                        <th>Laporan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($ejens as $ejen)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ejen->ejen }}</td>
                                            <td>
                                                <a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ $ejen->dokumen }}">Link</a></td>
                                                <td>
                                                    @if($ejen->status)
                                                        {{$ejen->status}}
                                                    @else
                                                    
                                                        <form action="/aduan/ejen/{{$ejen->id}}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="btn btn-primary" type="submit" name="status" value="Siasat">Siasat</button>
                                                            <button class="btn btn-primary" type="submit" name="status" value="Selesai">Selesai</button>
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
