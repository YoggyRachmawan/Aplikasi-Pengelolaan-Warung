<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link mt-2 {{ request()->is('beranda') ? 'active' : '' }}" href="/beranda">
                    <div class="sb-nav-link-icon"><i class="bi bi-house-fill"></i></div>
                    Beranda
                </a>
                <div class="sb-sidenav-menu-heading">Belanja</div>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link {{ request()->is('kalkulatorBelanja') ? 'active' : '' }}" href="/kalkulatorBelanja">
                        <div class="sb-nav-link-icon"><i class="bi bi-building"></i></div>
                        Kalkulator Belanja
                    </a>
                    <a class="nav-link {{ request()->is('daftarBelanja', 'belanjaanBaru', 'inputNota', 'editNota', 'detailNota') ? 'active' : '' }}" href="/daftarBelanja">
                        <div class="sb-nav-link-icon"><i class="bi bi-basket2-fill"></i></div>
                        Daftar Belanja
                    </a>
                </nav>
                <div class="sb-sidenav-menu-heading">Produk</div>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link {{ request()->is('daftarProduk', 'editProduk', 'detailProduk') ? 'active' : '' }}" href="/daftarProduk">
                        <div class="sb-nav-link-icon"><i class="bi bi-box-seam-fill"></i></div>
                        Daftar Produk
                    </a>
                    <a class="nav-link {{ request()->is('satuanProduk') ? 'active' : '' }}" href="/satuanProduk">
                        <div class="sb-nav-link-icon"><i class="bi bi-list-ol"></i></div>
                        Satuan Produk
                    </a>
                </nav>
                <a class="nav-link {{ request()->is('keuangan') ? 'active' : '' }}" href="/keuangan">
                    <div class="sb-nav-link-icon"><i class="bi bi-wallet-fill"></i></div>
                    Keuangan
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Masuk sebagai :</div>
            Admin
        </div>
    </nav>
</div>