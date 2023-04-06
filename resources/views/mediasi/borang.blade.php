@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta borang</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                  
                            <form action="/mediasi/borang-upload" method="POST" enctype="multipart/form-data">
                                @csrf         
                                <div class="mb-3">
                                    <label class="form-label w-100">Dokumen</label>
                                    <input type="file" name="dokumen">
                                </div>                                                                                         
                                
                                
                                <button class="btn btn-primary" type="submit">Cipta</button>
                            </form>  

                        </div>
                    



                </div>                     

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta borang</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                  
                            <form action="/mediasi/borang/" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Tajuk</label>
                                    <input class="form-control form-control-lg" type="text" name="title"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">Dokumen</label>
                                    <input type="file" name="dokumen">
                                </div>                                                                                         
                                
                                
                                <button class="btn btn-primary" type="submit">Cipta</button>
                            </form>  

                        </div>
                    



                </div>     



                
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai borang-</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Tajuk</th>
                                        <th>Borang</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($borangs as $borang)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $borang->title }}</td>
                                            <td>
                                                <a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ $borang->dokumen }}">Link</a>
                                            </td>
                  
                             

                                                           

    
    
                                    </tr>
                                    @endforeach
    
                                </tbody>
                            </table>
                        </div>
                    



                </div>
                

                @if(Auth::user()->pengguna == 'admin' || Auth::user()->pengguna == 'staff')
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Upload</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>User</th>
                                        <th>Borang</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($uploads as $upload)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $upload->user->nama }}</td>
                                            <td>
                                                <a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ $upload->dokumen }}">Link</a>
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
