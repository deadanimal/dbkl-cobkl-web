@extends('layouts.dashboard')
@section('content')

<body class="theme-blue">
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">


						<div class="card">
                             
							<div class="card-body">

                                  {{-- Message --}}
                                @if (session()->has('message'))
                                <div class="alert alert-success alert-outline-coloured alert-dismissible" role="alert">
                                    <div class="alert-icon">
                                        <i class="fa-light fa-check"></i>
                                    </div>
                                    <div class="alert-message">
                                        <strong>{{session('message')}}</strong>
                                    </div>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

								<div class="m-sm-4">
									
									<form method="POST" action="/kemaskiniAwam/{{$pengguna->id}}">
                                        @method('PUT')
                                        @csrf
                                    
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label>Jenis Pengguna</label>
                                                    <div class="input-group mb-3">
                                                        <select class="form-select flex-grow-1" name="pengguna" >
                                                            <option selected disabled>{{ $pengguna->pengguna }}</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="staff">Staff</option>
                                                            <option value="public">Public</option>
                                                        </select>
                                                    </div>
                                                </div>
                                    
                                                <br>
    
                                    
                                                <div class="mb-3">
                                                    <label>Nama</label>
                                                    <input class="form-control form-control-lg" type="text" name="nama"  value="{{ $pengguna->nombor_pengenalan }}" />
                                                </div>
                                    
                                                <div class="mb-3">
                                                    <label>Jantina</label>
                                                    <div class="input-group mb-3">
                                                        <select class="form-select flex-grow-1" name="jantina">
                                                            <option selected disabled>{{ $pengguna->jantina }}</option>
                                                            <option value="lelaki">Lelaki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                        </select>
                                                    </div>                                                
                                                </div>
                                    
                                                <div class="mb-3">
                                                    <label>Bangsa</label>
                                                    <div class="input-group mb-3">
                                                        <select class="form-select flex-grow-1" name="bangsa">
                                                            <option selected disabled>{{ $pengguna->bangsa }}</option>
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
                                                    <input class="form-control form-control-lg" type="number" name="telefon" value="{{ $pengguna->telefon }}" />
                                                </div>
                                    
                                                <div class="mb-3">
                                                    <label>Emel</label>
                                                    <input class="form-control form-control-lg" type="email" name="email" value="{{ $pengguna->email }}" />
                                                </div>

                                                <div class="mb-3">
                                                    <label>Katalaluan</label>
                                                    <input class="form-control form-control-lg" type="password" name="password" value="{{ $pengguna->password }}" />
                                                </div>

                                                {{-- <div class="mb-3">
                                                    <label>Sahkan Katalaluan</label>
                                                    <input class="form-control form-control-lg" type="password" name="sah_katalaluan" />
                                                </div> --}}
                                            </div>
                                        </div>
                                                                           
                                        <div class="text-center">

                                            <button type="submit" class="btn btn-primary">Kemaskini</button>
                                            <a href="/senarai" class="btn btn-warning">Kembali</a>

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
    
@endsection

@section('script')

@endsection
