@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Beranda</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body text-center display-6">100</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <i class="bi bi-box-seam"></i>
                            <label class="small text-white fw-bold">Total Produk</label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body text-center display-6">Rp 100.000.000</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <i class="bi bi-cash-stack"></i>
                            <label class="small text-white fw-bold">Total Omset</label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body text-center display-6">Rp 10.000</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <i class="bi bi-wallet2"></i>
                            <label class="small text-white fw-bold">Total Laba</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Grafik Keuangan
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection