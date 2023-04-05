@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Lain</h5>
                    </div>

                    <form method="POST" action="/kandungan/lain">
                        @csrf

                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label>Tajuk</label>
                                    <input class="form-control form-control-lg" type="text" name="title" />
                                </div>



                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Cipta</button>

                    </form>



                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Lain</h5>
                    </div>

                    <div class="accordion" id="accordionExample">
                        @foreach ($lains as $lain)
                        <div class="card">
                            <div class="card-header" id="headingFaq{{$lain->id}}">
                                <h5 class="card-title my-2">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseFaq{{$lain->id}}" aria-expanded="false" aria-controls="collapseFaq{{$lain->id}}" class="collapsed">
                                        {{$lain->title}}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFaq{{$lain->id}}" class="collapse" aria-labelledby="headingFaq{{$lain->id}}" data-bs-parent="#accordionExample" style="">
                                <div class="card-body">
                                    <form method="POST" action="/kandungan/lain/{{$lain->id}}">
                                        @csrf
                                        @method('PUT')
                                    <div class="mb-3">
                                        <label>Tajuk</label>
                                        <input class="form-control form-control-lg" type="text" name="title" value="{{$lain->title}}" />
                                    </div>



                                    <i>Tarikh: {{$lain->updated_at}}</i>
                                    
                                    <button type="submit" class="btn btn-primary">Kemaskini</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
         
                    </div>                    



                </div>

            </div>

        </div>



    </main>
@endsection

@section('script')
@endsection
