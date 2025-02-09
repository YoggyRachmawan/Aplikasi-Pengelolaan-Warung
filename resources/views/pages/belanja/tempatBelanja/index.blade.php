@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tempat Belanja</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="card mb-4">
                <div class="card-header d-flex">
                    <label>Daftar Tempat Belanja</label>
                    <a href="/inputTempatBelanja" type="button" class="btn btn-primary btn-sm float-right ms-auto"><i class="bi bi-card-list"></i>
                        Tempat Belanja Baru
                    </a>
                </div>
                <div class="card-body">
                    <table id="tabelData" class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Tempat</th>
                                <th class="text-center">Kontak</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>Toko Abdi 2</td>
                                <td class="text-center">082374072003</td>
                                <td>Jl. Bukit Lebar No.130, Kel. Karang Raja, Kec. Prabumulih Timur, Kota Prabumulih</td>
                                <td class="text-center">
                                    <a href="/editTempatBelanja" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i> Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" id="hapus"><i class="bi bi-trash-fill"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2.</td>
                                <td>Toko Alan</td>
                                <td class="text-center">-</td>
                                <td>Jl. Urip Sumoharjo, Kel. Wonosari, Kec. Prabumulih Utara, Kota Prabumulih</td>
                                <td class="text-center">
                                    <a href="/editTempatBelanja" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i> Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" id="hapus"><i class="bi bi-trash-fill"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                                <tr>
                                <td class="text-center">3.</td>
                                <td>Toko Ebit 2</td>
                                <td class="text-center">-</td>
                                <td>Jl. Urip Sumoharjo, Kel. Wonosari, Kec. Prabumulih Utara, Kota Prabumulih</td>
                                <td class="text-center">
                                    <a href="/editTempatBelanja" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i> Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" id="hapus"><i class="bi bi-trash-fill"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
