<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="wrapper">
		
		<div class="main">
			
			<main class="content">
				<div class="container-fluid">

					<body class="theme-blue">
                        <div class="splash active">
                            <div class="splash-icon"></div>
                        </div>
                    
                        <main class="main h-100 w-100">
                            <div class="container h-100">
                                <div class="row h-100">
                                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                                        <div class="d-table-cell align-middle">
                    
                                            <div class="text-center mt-4">
                                                <h1 class="h2">Welcome back!</h1>
                                                <p class="lead">
                                                    Sign in to your account to continue
                                                </p>
                                            </div>
                    
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-sm-4">
                                                        <div class="text-center">
                                                            <img src="img/dbkl.png" alt="Linda Miller" class="img-fluid rounded-circle" width="132" height="132" />
                                                        </div>
                                                        <form method="POST" action="/pengguna">
                                                            @csrf
                                                        
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <input type="hidden" name="pengguna" value="public">
                                                                    {{-- <div class="mb-3">
                                                                        <label>Jenis Pengguna</label>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select flex-grow-1" name="pengguna" >
                                                                                <option selected disabled>Sila Pilih</option>
                                                                                <option value="admin">Admin</option>
                                                                                <option value="staff">Staff</option>
                                                                                <option value="public">Public</option>
                                                                            </select>
                                                                            <button class="btn btn-secondary" type="button" name="pengguna" >Pilih</button>
                                                                        </div>
                                                                         <input class="form-control form-control-lg" type="text" name="pengguna" /> 
                                                                    </div> --}}
                                                        
                                                                    <br>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>Jenis Pengenalan</label>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select flex-grow-1" name="pengenalan">
                                                                                <option selected disabled>Sila Pilih</option>
                                                                                <option value="kad_pengenalan">Kad Pengenalan</option>
                                                                                <option value="passport">Passport</option>
                                                                            </select>
                                                                            <button class="btn btn-secondary" type="button" name="pengenalan" >Pilih</button>
                                                                        </div>
                                                                        {{-- <input class="form-control form-control-lg" type="text" name="pengenalan" /> --}}
                                                                    </div>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>No. Kad Pengenalan atau Passport</label>
                                                                        <input class="form-control form-control-lg" type="text" name="nombor_pengenalan" />
                                                                    </div>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>Nama</label>
                                                                        <input class="form-control form-control-lg" type="text" name="nama" />
                                                                    </div>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>Jantina</label>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select flex-grow-1" name="jantina">
                                                                                <option selected disabled>Sila Pilih</option>
                                                                                <option value="lelaki">Lelaki</option>
                                                                                <option value="perempuan">Perempuan</option>
                                                                            </select>
                                                                            <button class="btn btn-secondary" type="button" name="jantina" >Pilih</button>
                                                                        </div>                                                
                                                                    </div>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>Bangsa</label>
                                                                        <div class="input-group mb-3">
                                                                            <select class="form-select flex-grow-1" name="bangsa">
                                                                                <option selected disabled>Sila Pilih</option>
                                                                                <option value="Melayu">Melayu</option>
                                                                                <option value="Cina">Cina</option>
                                                                                <option value="India">India</option>
                                                                                <option value="lain">Lain-lain</option>
                                                                            </select>
                                                                            <button class="btn btn-secondary" type="button" name="bangsa" >Pilih</button>
                                                                        </div> 
                                                                    </div>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>No Telefon</label>
                                                                        <input class="form-control form-control-lg" type="number" name="telefon" />
                                                                    </div>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>Emel</label>
                                                                        <input class="form-control form-control-lg" type="email" name="email" />
                                                                    </div>
                                                        
                                                                    {{-- <div class="mb-3">
                                                                        <label>Alamat</label>
                                                                        <input class="form-control form-control-lg" type="text" name="alamat" />
                                                                    </div>
                                                        
                                                                    <div class="mb-3">
                                                                        <label>Jawatan</label>
                                                                        <input class="form-control form-control-lg" type="text" name="jawatan" />
                                                                    </div> --}}
                    
                                                                    <div class="mb-3">
                                                                        <label>Katalaluan</label>
                                                                        <input class="form-control form-control-lg" type="password" name="password" />
                                                                    </div>
                    
                                                                    {{-- <div class="mb-3">
                                                                        <label>Sahkan Katalaluan</label>
                                                                        <input class="form-control form-control-lg" type="password" name="sah_katalaluan" />
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                                                               
                                                            <div class="text-center">
                    
                                                                <button type="submit" class="btn btn-primary">Hantar</button>
                                                                <a href="/" class="btn btn-warning">Kembali</a>
                    
                                                            </div>
                                                           
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    
                        <svg width="0" height="0" style="position:absolute">
                            <defs>
                                <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                                    <path
                                        d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                                    </path>
                                </symbol>
                            </defs>
                        </svg>
                        <script src="js/app.js"></script>
                    
                    </body>


				</div>
			</main>

            
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

    

