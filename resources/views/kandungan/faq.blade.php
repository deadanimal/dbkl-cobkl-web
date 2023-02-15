@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta FAQ</h5>
                    </div>

                    <form method="POST" action="/faq">
                        @csrf

                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label>Soalan</label>
                                    <input class="form-control form-control-lg" type="text" name="soalan" />
                                </div>

                                <br>

                                <div class="mb-3">
                                    <label>Jawapan</label>
                                    <input class="form-control form-control-lg" type="text" name="jawapan" />
                                </div>


                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Cipta</button>

                    </form>



                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai FAQ</h5>
                    </div>

                    @foreach ($faqs as $faq)
                        <form method="POST" action="/faq/{{$faq->id}}">
                            @csrf
                            @method('PUT')

                            <div class="card">
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label>Soalan</label>
                                        <input class="form-control form-control-lg" type="text" name="soalan" value="{{$faq->soalan}}" />
                                    </div>

                                    <br>

                                    <div class="mb-3">
                                        <label>Jawapan</label>
                                        <input class="form-control form-control-lg" type="text" name="jawapan" value="{{$faq->jawapan}}" />
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
