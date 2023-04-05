<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/dbkl.png">
    <title>COBKL - DBKL</title>
    <link href="/assets/fonts/eina/Eina03-Bold.ttf" rel="stylesheet">

    <!-- PICK ONE OF THE STYLES BELOW -->
    {{-- <link href="/assets/css/modern.css" rel="stylesheet"> --}}
    {{-- <link href="/assets/css/classic.css" rel="stylesheet"> --}}
    {{-- <link href="/assets/css/dark.css" rel="stylesheet"> --}}
    <link href="/assets/css/light.css" rel="stylesheet">


    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->
    <style>
        @font-face {
            font-family: 'Eina03-bold';
            src: url('assets/fonts/eina/Eina03-Bold.ttf')
        }

        body {
            font-family: Eina03-bold;
            font-weight: normal;
            font-style: normal;
            padding: 0rem
        }

        .form-control {
            border-color: #4b3cbf;
            box-shadow: inset 2px 2px 5px 2px lightgrey;
        }

        .text-primary {
            color: #433395 !important;
        }

        .bg-primary {
            background-color: #4f3eca !important;
            color: white;
        }

        .bg-orange-cobkl {
            background-color: #3f1f9e;
        }

        .btn-orange-cobkl {
            color: white;
            background-color: #4c06c5;
        }

        .active1 {
            background-color: #E21118;
            border-radius: 5px;
        }

        .btn1:hover {
            background-color: #E21118;
            -webkit-text-fill-color: white;
        }

        .content {
            flex: 1;
            margin-top: 0rem;
            padding: 0rem
        }

        .vl {
            border-left: 2px solid green;
            height: 500px;
            position: relative;
            margin-left: -3px;
            bottom: 0;
        }

        .field-icon {
            float: right;
            margin-left: -25px;
            margin-right: 10px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }
    </style>
    <script src="js/settings.js"></script>

    <!-- END SETTINGS -->
</head>

<body>
    <div class="p-0">
        <img src="/img/banner.png" alt="DBKL" class="w-100">
    </div>
    @include('sweetalert::alert')

    <div class="wrapper">
        <nav id="sidebar" class="sidebar">

            <div class="sidebar-content">
                {{-- <div class="sidebar-user">
					<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="fw-bold">Linda Miller</div>
					<small>Front-end Developer</small>
				</div> --}}

                <ul class="sidebar-nav">
 
                    <li class="sidebar-item">
						<li class="sidebar-item">
							<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
								{{-- <i class="align-middle me-2 fas fa-fw fa-home"></i>  --}}
								<span class="align-middle">Pengurusan Sistem</span>
							</a>
							<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show">
									<li class="sidebar-item active"><a class="sidebar-link" href="/dashboard">Dashboard</a></li>
									<li class="sidebar-item active"><a class="sidebar-link" href="/laporan">Laporan</a></li>										
									<li class="sidebar-item active"><a class="sidebar-link" href="/notifikasi">Notifikasi</a></li>	
									<li class="sidebar-item active"><a class="sidebar-link" href="/audit">Audit</a></li>										
							</ul>
						</li>

						<form method="POST" action="{{ route('logout') }}">
							@csrf
						</form>
            
                    </li>

					@if (Auth::user()->pengguna == 'admin')
                    <li class="sidebar-item">
                        <a data-bs-target="#penggunas" data-bs-toggle="collapse" class="sidebar-link">
                            {{-- <i class="align-middle me-2 fas fa-fw fa-home"></i>  --}}
                            <span class="align-middle">Pengurusan Pengguna</span>
                        </a>
                        <ul id="penggunas" class="sidebar-dropdown list-unstyled collapse show"
                            data-bs-parent="#sidebar">
                            
                                <li class="sidebar-item active"><a class="sidebar-link" href="/pengguna/daftar">Pendaftaran Pengguna</a></li>
                                <li class="sidebar-item active"><a class="sidebar-link" href="/pengguna/senarai">Senarai Pengguna</a></li>										
                            
                            {{-- <li class="sidebar-item"><a class="sidebar-link" href="dashboard-analytics.html">Analytics</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="dashboard-e-commerce.html">E-commerce</a></li> --}}
                        </ul>
                    </li>
					@endif
				
                    <li class="sidebar-item">
						@if (Auth::user()->pengguna == 'admin' || Auth::user()->pengguna == 'staff')
						<li class="sidebar-item">
							<a data-bs-target="#kandungans" data-bs-toggle="collapse" class="sidebar-link">
								{{-- <i class="align-middle me-2 fas fa-fw fa-home"></i>  --}}
								<span class="align-middle">Pengurusan Kandungan</span>
							</a>
							<ul id="kandungans" class="sidebar-dropdown list-unstyled collapse show">
									<li class="sidebar-item active"><a class="sidebar-link" href="/kandungan/faq">Soalan Lazim</a></li>
									<li class="sidebar-item active"><a class="sidebar-link" href="/kandungan/program">Program</a></li>										
									<li class="sidebar-item active"><a class="sidebar-link" href="/kandungan/direktoris">Direktori</a></li>	
									<li class="sidebar-item active"><a class="sidebar-link" href="/kandungan/lain">Lain-Lain</a></li>										


							</ul>
						</li>
						@endif

						<li class="sidebar-item">
						<form method="POST" action="{{ route('logout') }}">
							@csrf
							<li class="sidebar-item active"><button class="sidebar-link" type="submit">Log Out</button></li>										
						</form>		
						</li>

            
                    </li>		

					@if (Auth::user()->pengguna == 'staff')
                    <li class="sidebar-item">
                        <a data-bs-target="#aduans" data-bs-toggle="collapse" class="sidebar-link">
                            <span class="align-middle">Pengurusan Aduan</span>
                        </a>
                        <ul id="aduans" class="sidebar-dropdown list-unstyled collapse show"
                            data-bs-parent="#sidebar">
                            
                                <li class="sidebar-item"><a class="sidebar-link" href="/aduan/umum">Aduan Umum</a></li>
                                <li class="sidebar-item"><a class="sidebar-link" href="/aduan/bersemuka">Perjumpaan Bersemuka</a></li>								
                                <li class="sidebar-item"><a class="sidebar-link" href="/aduan/jabatan">Mesyuarat Jabatan</a></li>								
                                <li class="sidebar-item"><a class="sidebar-link" href="/aduan/borang29">Borang 29</a></li>	
                                <li class="sidebar-item"><a class="sidebar-link" href="/aduan/sita">Sita Tanpa Waran</a></li>								
                                <li class="sidebar-item"><a class="sidebar-link" href="/aduan/ejen">Ejen Membuat Laporan</a></li>								
                        </ul>
                    </li>
					@endif    
                    
					@if (Auth::user()->pengguna == 'admin')
                    <li class="sidebar-item">
                        <a data-bs-target="#aduans" data-bs-toggle="collapse" class="sidebar-link">
                            <span class="align-middle">Pengurusan COBKL</span>
                        </a>
                        <ul id="aduans" class="sidebar-dropdown list-unstyled collapse show"
                            data-bs-parent="#sidebar">
                            
                                <li class="sidebar-item"><a class="sidebar-link" href="/pengurusan/umum">Aduan Umum</a></li>
                                <li class="sidebar-item"><a class="sidebar-link" href="/pengurusan/bersemuka">Perjumpaan Bersemuka</a></li>								
                                <li class="sidebar-item"><a class="sidebar-link" href="/pengurusan/jabatan">Mesyuarat Jabatan</a></li>								
                                <li class="sidebar-item"><a class="sidebar-link" href="/pengurusan/borang29">Borang 29</a></li>	
                                <li class="sidebar-item"><a class="sidebar-link" href="/pengurusan/sita">Sita Tanpa Waran</a></li>								
                                <li class="sidebar-item"><a class="sidebar-link" href="/pengurusan/ejen">Ejen Membuat Laporan</a></li>								
                        </ul>
                    </li>
					@endif                       
					
			

              				

                </ul>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-theme">
                <a class="sidebar-toggle d-flex me-2">
                    <i class="hamburger align-self-center"></i>
                </a>

                {{-- <form class="d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form> --}}

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                  
                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link  position-relative" href="/profil">
                                <i class="align-middle fas fa-cog"></i>
                            </a>
                       
                        </li>
                    </ul>
                </div>

            </nav>


            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        {{-- <div class="col-8 text-start">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms of Service</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4 text-end">
                            <p class="mb-0">
                                &copy; 2021 - <a href="dashboard-default.html" class="text-muted">Spark</a>
                            </p>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>


    <script src="/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>

    @yield('script')

    <script>
        $(function() {
            $('#datatables-dashboard-projects').DataTable({
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false
            });
        });
    </script>
    <script>
        $(function() {
            $('#datetimepicker-dashboard').datetimepicker({
                inline: true,
                sideBySide: false,
                format: 'L'
            });
        });
    </script>
    <script>
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

</body>

</html>
