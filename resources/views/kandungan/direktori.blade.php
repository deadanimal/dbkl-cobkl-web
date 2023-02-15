@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Direktori</h5>
                    </div>

                    <form method="POST" action="/direktoris">
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


                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Cipta</button>

                    </form>



                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Direktori</h5>
                    </div>

                    @foreach ($direktoris as $direktori)
                        <form method="POST" action="/direktoris/{{$direktori->id}}">
                            @csrf
                            @method('PUT')

                            <div class="card">
                                <div class="card-body">

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


                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Kemaskini</button>

                        </form>
                    @endforeach



                </div>

            </div>

        </div>



    </main>
@endsection

@section('script')
@endsection
