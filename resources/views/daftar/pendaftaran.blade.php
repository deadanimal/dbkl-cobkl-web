<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    @include('sweetalert::alert')


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/pengguna">
                        @csrf
                    
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label>Jenis Pengguna</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select flex-grow-1" name="pengguna" >
                                            <option selected disabled>Sila Pilih</option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                            <option value="public">Public</option>
                                        </select>
                                    </div>
                                    {{-- <input class="form-control form-control-lg" type="text" name="pengguna" /> --}}
                                </div>
                    
                                <br>
                    
                                <div class="mb-3">
                                    <label>Jenis Pengenalan</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select flex-grow-1" name="pengenalan">
                                            <option selected disabled>Sila Pilih</option>
                                            <option value="kad_pengenalan">Kad Pengenalan</option>
                                            <option value="passport">Passport</option>
                                        </select>
                                    </div>
                                    {{-- <input class="form-control form-control-lg" type="text" name="pengenalan" /> --}}
                                </div>

                                <br>
                    
                                <div class="mb-3">
                                    <label>No. Kad Pengenalan atau Passport</label>
                                    <input class="form-control form-control-lg" type="text" name="nombor_pengenalan" />
                                </div>

                                <br>
                    
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
                                    </div> 
                                </div>

                                <br>
                    
                                <div class="mb-3">
                                    <label>No Telefon</label>
                                    <input class="form-control form-control-lg" type="number" name="telefon" />
                                </div>

                                <br>
                    
                                <div class="mb-3">
                                    <label>Emel</label>
                                    <input class="form-control form-control-lg" type="email" name="email" />
                                </div>

                                <br>
                    
                                <div class="mb-3">
                                    <label>Alamat</label>
                                    <input class="form-control form-control-lg" type="text" name="alamat" />
                                </div>

                                <br>
                    
                                <div class="mb-3">
                                    <label>Jawatan</label>
                                    <input class="form-control form-control-lg" type="text" name="jawatan" />
                                </div>

                            </div>
                        </div>
                    
                    
                        {{-- button --}}
                        <button type="submit" class="btn btn-primary">Daftar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
