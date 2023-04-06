@extends('layouts.dashboard')
@section('content')
    <main class="content">

        <div class="container-fluid">

            <div class="col-12 col-xl-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cipta Maklumat Sitaan</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                  
                            <form action="/aduan/sita/" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Maklumat</label>
                                    <textarea class="form-control" rows="5" name="maklumat" placeholder="maklumat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">Dokumen</label>
                                    <input type="file" name="dokumen">
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
                        <h5 class="card-title">Senarai Maklumat Sitaan</h5>
                    </div>

                    
                  
    
    
                        <div class="card-body" style="border-width: 1px; border-color:black;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Maklumat</th>
                                        <th>Dokumen</th>
                                        <th>Ulasan</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    <tr>
                                        @foreach ($sitas as $sita)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sita->maklumat }}</td>
                                            <td>
                                                <a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ $sita->dokumen }}">Link</a></td>
                                            <td>{{ $sita->ulasan }}</td>
                             

                                                           

    
    
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
