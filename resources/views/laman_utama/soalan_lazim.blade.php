@extends('layouts.base')

@section('sambungan')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12 my-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Soalan Lazim</h5>
                    </div>


                    <div class="card-body" style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:25%">Soalan</th>
                                    <th style="width:75%">Jawapan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->soalan }}</td>
                                        <td>{{ $faq->jawapan }}</td>



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
