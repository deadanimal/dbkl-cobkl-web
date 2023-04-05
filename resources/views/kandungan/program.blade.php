@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Program</h5>
                    </div>

                    <form method="POST" action="/kandungan/program">
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
                        <h5 class="card-title">Senarai Program</h5>
                    </div>

                    <div class="accordion" id="accordionExample">
                        @foreach ($programs as $program)
                        <div class="card">
                            <div class="card-header" id="headingFaq{{$program->id}}">
                                <h5 class="card-title my-2">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseFaq{{$program->id}}" aria-expanded="false" aria-controls="collapseFaq{{$program->id}}" class="collapsed">
                                        {{$program->title}}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFaq{{$program->id}}" class="collapse" aria-labelledby="headingFaq{{$program->id}}" data-bs-parent="#accordionExample" style="">
                                <div class="card-body">
                                    <form method="POST" action="/kandungan/program/{{$program->id}}">
                                        @csrf
                                        @method('PUT')
                                    <div class="mb-3">
                                        <label>Tajuk</label>
                                        <input class="form-control form-control-lg" type="text" name="title" value="{{$program->title}}" />
                                    </div>



                                    <i>Tarikh: {{$program->updated_at}}</i>
                                    
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
