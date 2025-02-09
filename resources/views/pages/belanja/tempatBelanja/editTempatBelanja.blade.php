@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tempat Belanja</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/daftarTempatBelanja">Daftar Tempat Belanja</a></li>
                <li class="breadcrumb-item">Edit Tempat Belanja</a></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label> Form Edit Tempat Belanja</label>
                    <a href="/daftarTempatBelanja" type="button" class="btn btn-warning btn-sm float-right ms-auto"><i
                            class="bi bi-arrow-bar-left"></i>
                        Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="namaTempat" class="form-label">Nama Tempat</label>
                        <input type="text" class="form-control form-control-sm" id="namaTempat" value="Toko Abdi 2">
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak</label>
                        <input type="text" class="form-control form-control-sm" id="kontak" value="082374072003">
                    </div>
                        <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" style="height: 100px">Jl. Bukit Lebar No.130, Kel. Karang Raja, Kec. Prabumulih Timur, Kota Prabumulih</textarea>
                    </div>
                    
                </div>
                <div class="card-footer d-flex">
                    <button type="submit" class="btn btn-success float-right ms-auto"><i class="bi bi-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </main>
@endsection
