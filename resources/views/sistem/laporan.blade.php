@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Laporan</h5>
                    </div>


                    <div class="card-body" style="border-width: 1px; border-color:black;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:20%">Tarikh</th>
                                    <th style="width:80%">Nama Laporan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1 Januari 2023</td>
                                    <td>Laporan Bulanan Jumlah Pengguna adalah 10,000 pada hari 31 Disember 2022.</td>



                                </tr>
         

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>



    </main>
@endsection

@section('script')
@endsection
