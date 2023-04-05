@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Direktori</h5>
                    </div>

                    <form method="POST" action="/kandungan/direktoris" enctype="multipart/form-data">
                        @csrf

                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label>Nama</label>
                                    <input class="form-control form-control-lg" type="text" name="nama" />
                                </div>

                                <br>

                                <div class="mb-3">
                                    <label>Jawatan</label>
                                    <input class="form-control form-control-lg" type="text" name="jawatan" />
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input class="form-control form-control-lg" type="text" name="email" />
                                </div>     
                                
                                <div class="mb-3">
                                    <label>Telefon</label>
                                    <input class="form-control form-control-lg" type="text" name="telefon" />
                                </div>    

                                <div class="mb-3">
                                    <label class="form-label w-100">Image</label>
                                    <input type="file" name="image">
                                </div>         

                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Cipta</button>

                    </form>



                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Direktori</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Nama</th>
                                        <th>Jawatan</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($direktoris as $direktori)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $direktori->nama }}</td>
                                            <td>{{ $direktori->jawatan }}</td>
                                            <td>{{ $direktori->email }}</td>
                                            <td>{{ $direktori->telefon }}</td>
                                            <td>
                                                @if($direktori->image)
                                                    <a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ $direktori->image }}">Link</a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                                           
                                            <td class="table-action">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDirektoriEdit{{$direktori->id}}" href="#"><i
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

    @foreach($direktoris as $direktori)

    <div class="modal fade" id="modalDirektoriEdit{{$direktori->id}}" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Direktori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">


                    <form action="/kandungan/direktori/{{$direktori->id}}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                                

                        <div class="mb-3">
                            <label>Nama</label>
                            <input class="form-control form-control-lg" type="text" name="nama" value="{{$direktori->nama}}" />
                        </div>

                        <br>

                        <div class="mb-3">
                            <label>Jawatan</label>
                            <input class="form-control form-control-lg" type="text" name="jawatan" value="{{$direktori->jawatan}}" />
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input class="form-control form-control-lg" type="text" name="email" value="{{$direktori->email}}" />
                        </div>     
                        
                        <div class="mb-3">
                            <label>Telefon</label>
                            <input class="form-control form-control-lg" type="text" name="telefon" value="{{$direktori->telefon}}" />
                        </div>  
                        
                        <div class="mb-3">
                            <label class="form-label w-100">Image</label>
                            <input type="file" name="image">
                        </div>                             

    
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
