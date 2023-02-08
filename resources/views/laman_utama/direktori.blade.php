@extends('layouts.base')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

@section('sambungan')

<div class="col">
    <div class="col">
        <p class="text-center mt-4" style="font-size: 25px;color:rgb(0, 0, 0)" style="">Direktori Kakitangan</p>
        <p class="text-center" style="font-size: 25px;color:rgb(0, 0, 0)">Profil</p>
    
        <p class="text-center" style="font-size: 30pt;color:rgb(216, 75, 75)">JABATAN PESURUHJAYA</p>
        <p class="text-center" style="font-size: 30pt">BANGUNAN KUALA LUMPUR</p>
        {{-- <hr> --}}
    </div>

    

    <div class="col">
        <div class="card" style="width: 50rem; align-self: center; margin:auto;background-color:rgb(223, 223, 223)">
            <div class="card-body">
                <div class="row"> 
                    <div class="col mt-4">
                        <img src="/img/rectangle_13.jpg" alt="">
                    </div>
                    <div class="col mt-7">
                        <p class="text-center" style="color:rgb(71, 96, 196)">SR. MOHD HELMI BIN MOHD SANY</p>
                        <p class="text-center" style="color:rgb(187, 78, 81)">PENGARAH</p>
                        <p class="text-center" style="color:rgb(0, 0, 0)">JABATAN PENILAIAN DAN PENGURUSAN HARTA</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table datatable table-striped" id="table1" style="width:100%">
                        <thead class="bg-primary">
                            <tr style="color:#fff;">
                                <th class="sort">NAMA</th>
                                <th class="sort">JAWATAN</th>
                                <th class="sort">NO.TELEFON</th>
                                <th class="sort">E-MEL</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                                <tr>
                                    <td>MAI</td>
                                    <td>Ketua Gosip</td>
                                    <td>0111111111</td>
                                    <td>ketua@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>MAI</td>
                                    <td>Ketua Gosip</td>
                                    <td>0111111111</td>
                                    <td>ketua@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>MAI</td>
                                    <td>Ketua Gosip</td>
                                    <td>0111111111</td>
                                    <td>ketua@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>MAI</td>
                                    <td>Ketua Gosip</td>
                                    <td>0111111111</td>
                                    <td>ketua@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>MAI</td>
                                    <td>Ketua Gosip</td>
                                    <td>0111111111</td>
                                    <td>ketua@gmail.com</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
    $('#table1').DataTable();
});
</script>
    
@endsection