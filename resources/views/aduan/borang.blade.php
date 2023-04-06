@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Borang 29</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                  
                            <form action="/aduan/borang29/" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Pegawai</label>
                                    <input class="form-control form-control-lg" type="text" name="pegawai"/>
                                </div>
                                <div class="mb-3">
                                    <label>Pengarah</label>
                                    <input class="form-control form-control-lg" type="text" name="pengarah"/>
                                </div> 
                                                                                                 
                                
                                
                                <button class="btn btn-primary" type="submit">Cipta</button>
                            </form>  

                        </div>
                    



                </div>     

                @if(Auth::user()->pengguna == 'admin' || Auth::user()->pengguna == 'staff')
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Borang 29</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Pegawai</th>
                                        <th>Pengarah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($borangs as $borang)
                                    <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $borang->pegawai }}</td>
                                            <td>{{ $borang->pengarah }}</td>
                                            <td>
                                                
                                                {{$borang->status}}
                                            
                                            
                                                <form action="/aduan/borang29/{{$borang->id}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button class="btn btn-primary" type="submit" name="status" value="Sah">Sah</button>
                                                    <button class="btn btn-primary" type="submit" name="status" value="Tidak Sah">Tidak Sah</button>
                                                </form>                                          
                                            
                                                                                       
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
