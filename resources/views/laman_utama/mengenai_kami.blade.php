@extends('layouts.base')

@section('sambungan')
    {{-- <div class="row">
        <div class="col-3 text-gray">
            mengenai-kami
        </div>
        <div class="col-9">
            <div class="card" style="background-color: #312C82; border-radius: 0">
                <div class="row">
                    <div class="col-5">
                        awda
                    </div>
                    <div class="col-7">
                        wdwqd
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col">
        {{-- <p class="text-center mt-4" style="font-size: 25px;color:rgb(0, 0, 0)" style="">Direktori Kakitangan</p> --}}
        <p class="text-center mt-4" style="font-size: 25px;color:rgb(0, 0, 0)">Profil</p>
    
        <p class="text-center" style="font-size: 30pt;color:rgb(216, 75, 75)">JABATAN PESURUHJAYA</p>
        <p class="text-center" style="font-size: 30pt">BANGUNAN KUALA LUMPUR</p>
        {{-- <hr> --}}
    </div>
    <div class="row">
        <div class="col-6">
            <img src="/img/Menara.jpg" width="100%" alt="">
        </div>
        <div class="col-6">
            <h2 class="mb-4" style="color:rgb(38, 29, 155)">Bahagian Pesuruhjaya Bangunan (COB)</h2>
            <p>Telah diwujudkan pada 12 April 2007 selaras dengan kuatkuasa Akta Bangunan
                dan Harta Bersam (Penyenggaraan dan Pengurusan) 2007 (Akta 663) [telah dimansuhkan
                dan digantikan dengan Akta Pengurusan Strata 2013 (Akta 757) bermula 1 Jun 2015].
                <br>
                <br>
                COB diletakan sebagai sebahagian daripada Jabtab Penilaian Dan Pengurusan Harta (JPPH),
                DBKL. Bahagian ini berperanan sebagai pelaksan dan pengawalselia perundangan berhubung
                pengurusan dan penyenggaraan bangunan dan harta bersam berstrata di wilayah Persekutuan 
                Kuala Lumpur. Disamping itu, bahagian ini turut memainkan perana dari aspek kelestarian
                yang melibatkan kesejahteraan dan keharmonian diantara pihak pemaju dan pemilik di kawasan
                pemajuan bertingkat (berstrata).
                <br>
                <br>
                Datuk Bandar Kuala Lumpur adalah Pesuruhjaya Bangunan Kuala Lumpur manakala Pengarah
                Eksekutif (Perancangan) dan Pengarah Eksekutif (Pengurusan) merupakan Timbalan-Timbalan
                Pesuruhjaya Bangunan Kuala Lumpur.
                <br>
                <br>
                Dalam melaksanakan apa-apa arahan am atau khas, kuasa dan kewajipan yang perlu dilaksanakan
                oleh Pesuruhjaya Bangunan Kuala Lumpur, sehingga tahun 2018 seramai 39 orang kakitangan
                ditempatkan di bahagian COB. Bahagian COB diketuai oleh Timbalan Pengarah Kanan W52 selaku
                Ketua Bahagian dan dibantu oleh Timbalan Pengarah W52 merangkap Timbalan Ketua Bahagian 
                bersama-sama 8 orang Pegawai Kumpulan A.
            </p>
        </div>
    </div>
    <div class="col">
        <div class="tab mt-1" style="margin-left: 2em; border-style:solid">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" style="background-color: rgb(165, 165, 165)"><a class="nav-link active" href="#tab-1" data-bs-toggle="tab" role="tab">Visi&Misi</a></li>
                <li class="nav-item" style="background-color: rgb(165, 165, 165)"><a class="nav-link" href="#tab-2" data-bs-toggle="tab" role="tab">Objektif</a></li>
                <li class="nav-item" style="background-color: rgb(165, 165, 165)"><a class="nav-link" href="#tab-3" data-bs-toggle="tab" role="tab">Fungsi Utama</a></li>
                <li class="nav-item" style="background-color: rgb(165, 165, 165)"><a class="nav-link" href="#tab-4" data-bs-toggle="tab" role="tab">Carta Organisasi</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-1" role="tabpanel">
                    <div class="col justify-content-center">
                        <div class="col mt-3 text-center">
                            <img src="/img/visi.png" width="30%" alt="">
                        </div>
                        <div class="col text-center">
                            <img class="mt-5" src="/img/visi.png" width="30%" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="tab-2" role="tabpanel">
                    <div class="col justify-content-center">
                        <div class="col mt-3 text-center">
                            <img src="/img/objektif.png" width="50%" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="tab-3" role="tabpanel">
                    visi dan misi3
                </div>
                <div class="tab-pane active" id="tab-4" role="tabpanel">
                    visi dan misi4
                </div>
            </div>
        </div>
        <div class="col" style="margin-left: 2em">
            <h3>1. Perkhidmatan Kaunter Senarai Nilaian Di Jabatan & Pengurusan Harta, DBKL</h3>
    
            <p>Kaunter Di Sini Menyediakan Kemudahan Kepada Wargakota untuk perkhidmatan carian 
                untuk permohonan mendapatkan maklumat pemilikan serta kemaskini hakmilik melalaui
                borang i & j dan tukar alamat surat menyurat untuk bil cukai taksiran.
            </p>
            <br>
            <p>Kaunter dibuka pada hari dan waktu di bawah:</p>
            <br>
            <p>Isnin-Jumaat :8.30 pagi - 4.30 petang
                <br>
                Rehat :
                <br>
                Isnin - Khamis :1.00 petang - 2.00 petang
                <br>
                Jumaat : 12.15 tengahari - 2.45 petang
            </p>
            <p style="color: #b10b32">KAUNTER DITUTUP PADA CUTI UMUM DAN KELEPASAN AM</p>
            <p>(Nama Pegawai: Encik Muhamad Saiful Azhar Bin Zainudin,
                <br>
                Telefon : 603 - 2617 1036 / 1037 / 1038)</p>
        </div>
    </div>
    

@endsection
