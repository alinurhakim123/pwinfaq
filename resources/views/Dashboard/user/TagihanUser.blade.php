@extends('layout.dashboard')
@section('content')

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a>Infaq Wikrama</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <ul class="sidebar-menu">
                            <li class="dropdown">
                                <a href="/DashboardUser"><i
                                        class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="/RiwayatUser"><i class="fas fa-database"></i> <span>Riwayat</span></a>
                            </li>
                            <li class="dropdown active">
                                <a href="/TagihanUser"><i class="fas fa-user-graduate"></i> <span>Tagihan
                                       Siswa </span></a>
                            </li>
                            <li class="dropdown ">
                                <a href="/UploadUser"><i class="fa fa-upload"></i> <span>Upload</span></a>
                            </li>
                        </ul>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Tagihan Siswa</h1>
                    </div>

                    <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Hi, User</h4>
                            </div>
                            <div class="card-body">
                                <p>Anda dapat melihat tagihan atau tunggakan siswa dalam berinfaq & shodaqoh, silahkan
                                    pilih rayon yang ingin anda lihat terlebih dahulu untuk melihat detail siswa.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="main-content" style="margin-top: -18%; position: relative;">
                <section class="section">
                    <div class="dropdown" style="position: relative;">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pilih data rayon
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                            style="overflow-y: auto; max-height: 200px; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                            <a class="dropdown-item" href="#">Cicurug 1</a>
                            <a class="dropdown-item" href="#">Cicurug 2</a>
                            <a class="dropdown-item" href="#">Cicurug 3</a>
                            <a class="dropdown-item" href="#">Cicurug 4</a>
                            <a class="dropdown-item" href="#">Cicurug 5</a>
                            <a class="dropdown-item" href="#">Cicurug 6</a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="main-content" style="margin-top:-35%;">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data Table</h4>
                                        <div class="card-header-form">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary"><i
                                                                class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>NIS</th>
                                                        <th>Rayon</th>
                                                        <th>Rombel</th>
                                                        <th>Nominal</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ali</td>
                                                        <td>1212111</td>
                                                        <td>Sukasari 1</td>
                                                        <td>PPLG XII-5</td>
                                                        <td>Rp. 20.000</td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal"
                                                                data-target="#detailModal">Detail</button>
                                                            <button type="button" class="btn btn-success"
                                                                data-toggle="modal"
                                                                data-target="#verifikasiModal">Verifikasi</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ali</td>
                                                        <td>1212111</td>
                                                        <td>Sukasari 1</td>
                                                        <td>PPLG XII-5</td>
                                                        <td>Rp. 20.000</td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary">Detail</a>
                                                            <a href="#" class="btn btn-success">Verifikasi</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ali</td>
                                                        <td>1212111</td>
                                                        <td>Sukasari 1</td>
                                                        <td>PPLG XII-5</td>
                                                        <td>Rp. 20.000</td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary">Detail</a>
                                                            <a href="#" class="btn btn-success">Verifikasi</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ali</td>
                                                        <td>1212111</td>
                                                        <td>Sukasari 1</td>
                                                        <td>PPLG XII-5</td>
                                                        <td>Rp. 20.000</td>
                                                        <td>
                                                            <a href="#" class="btn btn-primary">Detail</a>
                                                            <a href="#" class="btn btn-success">Verifikasi</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!-- Detail Modal -->
                                            <div class="modal fade" id="detailModal" tabindex="-1" role="dialog"
                                                aria-labelledby="detailModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detailModalLabel">Detail
                                                                Pembayaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}"
                                                                        class="img-fluid" alt="Foto">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p><strong>Tanggal Pembayaran:</strong> 23 Februari
                                                                        2024</p>
                                                                    <p><strong>Nama Pengirim:</strong> John Doe</p>
                                                                    <p><strong>Nama Bank:</strong> Bank ABC</p>
                                                                    <p><strong>Bulan Pembayaran:</strong> Februari 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <p><strong>Catatan :
                                                                    <br </strong>Pembayaran Infaq untuk bulan Oktober -
                                                                        desember atas nama Raditya Arya Wiguna PPLG
                                                                        XII-1 Cicurug 6</p> </div> <div
                                                                        class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Verifikasi Modal -->
                                        <div class="modal fade" id="verifikasiModal" tabindex="-1" role="dialog"
                                            aria-labelledby="verifikasiModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="verifikasiModalLabel">Verifikasi
                                                            Pembayaran</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h6 style="margin-bottom: 0;"><i class="fas fa-user"
                                                                        style="margin-right: 5px;"></i>Data Siswa</h6>
                                                                <!-- Text "Data Siswa" -->
                                                                <p><strong>Nama:</strong> Ali</p>
                                                                <p><strong>NIS:</strong> 1212111</p>
                                                                <p><strong>Rombel:</strong> PPLG XII-5</p>
                                                                <p><strong>Rayon:</strong> Sukasari 1</p>
                                                                <hr>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <br>
                                                                <h6 style="margin-top : 15;">Bukti Transfer</h6>
                                                                <img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}"
                                                                    class="img-fluid" alt="Foto"> <!-- Foto -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
            </footer>
        </div>
    </div>

   @endsection