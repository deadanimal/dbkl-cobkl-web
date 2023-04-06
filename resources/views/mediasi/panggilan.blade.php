@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Panggilan Mediasi</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                  
                            <form action="/mediasi/panggilan/" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Tajuk</label>
                                    <input class="form-control form-control-lg" type="text" name="title"/>
                                </div>
                                <div class="mb-3">
                                    <label>Tarikh</label>
                                    <input class="form-control form-control-lg" type="date" name="tarikh"/>
                                </div>       
                                <div class="mb-3">
                                    <label>Ulasan</label>
                                    <textarea class="form-control" rows="5" name="ulasan" placeholder="ulasan"></textarea>
                                </div>                                                                                          
                                
                                
                                <button class="btn btn-primary" type="submit">Cipta</button>
                            </form>  

                        </div>
                    



                </div>     

                @if(Auth::user()->pengguna == 'admin' || Auth::user()->pengguna == 'staff')
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Senarai Panggilan Mediasi</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Tarikh</th>
                                        <th>Tajuk</th>
                                        <th>Ulasan</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($panggilans as $panggilan)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $panggilan->tarikh }}</td>
                                            <td>{{ $panggilan->title }}</td>
                                            <td>{{ $panggilan->ulasan }}</td>
                  
                             

                                                           

    
    
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
