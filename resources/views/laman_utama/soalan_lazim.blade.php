@extends('layouts.base')

@section('sambungan')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12 my-3">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Carian FAQ</h5>
                    </div>

                    <form method="POST" action="/soalan-lazim/carian">
                        @csrf

                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <input class="form-control form-control-lg" type="text" name="carian" />
                                </div>

                                <br>


                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Cari</button>

                    </form>



                </div> 
                
                
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Soalan Lazim</h5>
                    </div>


                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs as $faq)
                        <div class="card">
                            <div class="card-header" id="headingFaq{{$faq->id}}">
                                <h5 class="card-title my-2">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseFaq{{$faq->id}}" aria-expanded="false" aria-controls="collapseFaq{{$faq->id}}" class="collapsed">
                                        {{$faq->soalan}} -  {{$faq->kategori}}
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFaq{{$faq->id}}" class="collapse" aria-labelledby="headingFaq{{$faq->id}}" data-bs-parent="#accordionExample" style="">
                                <div class="card-body">
                   

                                    {{$faq->jawapan}}

                                    <i>Tarikh: {{$faq->updated_at}}</i>
                                  
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
