@extends('index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Beranda</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex">
                            <label>Total Keuangan</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($data as $item)
                                    <div class="col-xl-4 col-md-4">
                                        <div class="card text-bg-secondary mb-4">
                                            <div class="card-body text-center display-6">Rp
                                                {{ number_format($item->total_omset, 0, ',', '.') }}</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <i class="bi bi-cash-stack"></i>
                                                <label class="small text-white fw-bold">Total Omset</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4">
                                        <div class="card text-bg-secondary mb-4">
                                            <div class="card-body text-center display-6">Rp
                                                {{ number_format($item->total_modal, 0, ',', '.') }}</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <i class="bi bi-cash-stack"></i>
                                                <label class="small text-white fw-bold">Total Modal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4">
                                        <div class="card text-bg-secondary mb-4">
                                            <div class="card-body text-center display-6">Rp
                                                {{ number_format($item->total_laba, 0, ',', '.') }}</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <i class="bi bi-cash-stack"></i>
                                                <label class="small text-white fw-bold">Total Laba</label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex">
                            <label>Keuangan Tahunan</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    {!! $chart->container() !!}
                                </div>
                                <div class="col-lg-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mb-5">
                                                <form action="/beranda" method="post">
                                                    @csrf
                                                    <div class="card-body">
                                                        <label for="tempatBelanja" class="form-label">Filter</label>
                                                        <select class="js-example-basic-single" style="width: 100%"
                                                            name="tahun">
                                                            <option value="">--Pilih Tahun--</option>
                                                            @foreach ($daftarTahun as $item)
                                                                <option value="{{ $item->tahun }}">{{ $item->tahun }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="card-footer d-flex">
                                                        <button type="submit"
                                                            class="btn btn-sm btn-primary float-right ms-auto"><i
                                                                class="bi bi-binoculars"></i>
                                                            Tampilkan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <label for="">Keuangan Tahun {{ $keuanganTahunan['tahun'] }}</label>
                                                </div>
                                                <div class="card-body">
                                                    <label for="omset" class="form-label">Omset</label>
                                                    <input type="text" class="form-control form-control-sm mb-3"
                                                        id="omset" value="Rp {{ number_format($keuanganTahunan['omset'], 0, ',', '.') }}" disabled>
                                                    <label for="modal" class="form-label">Modal</label>
                                                    <input type="text" class="form-control form-control-sm mb-3"
                                                        id="modal" value="Rp {{ number_format($keuanganTahunan['modal'], 0, ',', '.') }}" disabled>
                                                    <label for="laba" class="form-label">Laba</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="laba" value="Rp {{ number_format($keuanganTahunan['laba'], 0, ',', '.') }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- larapex --}}
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
@endsection
