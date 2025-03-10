<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <title>WarungKu</title>
    {{-- sbadmin --}}
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.css">
    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    {{-- navbar --}}
    @include('layouts.navbar')
    <div id="layoutSidenav">
        {{-- sidebar --}}
        @include('layouts.sidebar')
        <div id="layoutSidenav_content">
            {{-- content --}}
            @include('layouts.content')
            {{-- footer --}}
            @include('layouts.footer')
        </div>
    </div>
    {{-- sbadmin --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    {{-- datatable --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>
    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- js --}}
    <script>
        // dataTable & select2
        $(document).ready(function() {
            $("#tabelData").DataTable();
            $(".js-example-basic-single").select2();
        });

        // sweetAlert2
        $(document).on('click', '#hapus', function(event) {
            event.preventDefault();
            let link = $(this).attr('href');
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan lagi!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batalkan",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data berhasil dihapus.",
                        icon: "success",
                        timer: 999,
                        showConfirmButton: false
                    })
                }
            });
        })

        // Tambah
        @if (session('added'))
            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Data berhasil ditambahkan.",
                showConfirmButton: false,
                timer: 999
            })
        @endif

        // Edit
        @if (session('edited'))
            Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: "Data berhasil diubah.",
                showConfirmButton: false,
                timer: 999
            })
        @endif

        // Gagal
        @if (session('cancelled'))
            Swal.fire({
                icon: "error",
                title: "Gagal",
                text: "Data gagal ditambahkan.",
                showConfirmButton: false,
                timer: 999
            })
        @endif

        // Harga Modal
        $(document).ready(function() {
            $.ajax({
                url: '/daftarHargaModal',
                method: 'GET',
                success: function(response) {
                    let formatter = new Intl.NumberFormat('id-ID', {
                        style: 'decimal',
                        minimumFractionDigits: 0,
                        maximumFractionDigits: 0,
                    });
                    response.forEach(function(item, index) {
                        let formattedHarga = 'Rp ' + formatter.format(item.harga);
                        $('#tabelHargaModal').append(`
                            <tr data-index="${index}">
                                <td>${formattedHarga}</td>
                                <td>${item.satuan}</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-delete" data-id="${index}" id="hapusHargaModal">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        `);
                    });
                }
            });

            $('#inputHargaModal').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                let url = form.attr('action');
                let method = form.attr('method');
                let data = form.serialize();
                $.ajax({
                    type: method,
                    url: url,
                    data: data,
                    success: function(response) {
                        $('#tabelHargaModal').empty();
                        let formatter = new Intl.NumberFormat('id-ID', {
                            style: 'decimal',
                            minimumFractionDigits: 0,
                            maximumFractionDigits: 0,
                        });
                        response.forEach(function(item, index) {
                            let formattedHarga = 'Rp ' + formatter.format(item.harga);
                            $('#tabelHargaModal').append(`
                            <tr>
                                <td>${formattedHarga}</td>
                                <td>${item.satuan}</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-delete" data-id="${index}" id="hapusHargaModal">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            `);
                        });
                    }
                });
            });

            $(document).on('click', '#hapusHargaModal', function(e) {
                e.preventDefault();
                let index = $(this).data('id');

                $.ajax({
                    url: `/hapusHargaModal/${index}`,
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#tabelHargaModal tr').eq(index).remove();
                            $('#tabelHargaModal tr').each(function(index) {
                                $(this).find('.btn-delete').data('id', index);
                            });
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat menghapus!');
                    }
                });
            });
        });

        // Harga Jual
        $(document).ready(function() {
            $.ajax({
                url: '/daftarHargaJual',
                method: 'GET',
                success: function(response) {
                    let formatter = new Intl.NumberFormat('id-ID', {
                        style: 'decimal',
                        minimumFractionDigits: 0,
                        maximumFractionDigits: 0,
                    });
                    response.forEach(function(item, index) {
                        let formattedHarga = 'Rp ' + formatter.format(item.harga);
                        $('#tabelHargaJual').append(`
                            <tr data-index="${index}">
                                <td>${formattedHarga}</td>
                                <td>${item.satuan}</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-delete" data-id="${index}" id="hapusHargaJual">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        `);
                    });
                }
            });

            $('#inputHargaJual').submit(function(e) {
                e.preventDefault();
                let form = $(this);
                let url = form.attr('action');
                let method = form.attr('method');
                let data = form.serialize();
                $.ajax({
                    type: method,
                    url: url,
                    data: data,
                    success: function(response) {
                        $('#tabelHargaJual').empty();
                        let formatter = new Intl.NumberFormat('id-ID', {
                            style: 'decimal',
                            minimumFractionDigits: 0,
                            maximumFractionDigits: 0,
                        });
                        response.forEach(function(item, index) {
                            let formattedHarga = 'Rp ' + formatter.format(item.harga);
                            $('#tabelHargaJual').append(`
                            <tr>
                                <td>${formattedHarga}</td>
                                <td>${item.satuan}</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-delete" data-id="${index}" id="hapusHargaJual">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            `);
                        });
                    }
                });
            });

            $(document).on('click', '#hapusHargaJual', function(e) {
                e.preventDefault();
                let index = $(this).data('id');

                $.ajax({
                    url: `/hapusHargaJual/${index}`,
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#tabelHargaJual tr').eq(index).remove();
                            $('#tabelHargaJual tr').each(function(index) {
                                $(this).find('.btn-delete').data('id', index);
                            });
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat menghapus!');
                    }
                });
            });
        });
    </script>
</body>

</html>
