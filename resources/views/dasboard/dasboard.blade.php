<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Panel Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-Ep/gxr+Jb9XO4hL4Iv2ks4q3V7AK2lrJz0V0vflfKzwhVtX5p5J5osil+Z50tKxym/SL+VEY/5yNvWEH1usJGA=="
        crossorigin="anonymous" />

    <link rel="shortcut icon" href="{{ asset('dasboard/img/admin.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dasboard/css/bootstrapmin.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('dasboard/css/style.css') }}" rel="stylesheet">

    <!-- Css Contend --->
    <link rel="stylesheet" href="{{ asset('dasboard/css/conten.css') }}">
    <style>
        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }

            thead th {
                font-size: 5px;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                border: none;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                position: absolute;
                top: 6px;
                left: 2px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-column);
                color: #ff0000;
                font-weight: medium;
            }
        }
    </style>
    <style>
        label.model-la {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            width: 100%;
        }

        textarea,
        input.model-in {
            display: block;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 10px;
        }

        input[type=file] {
            max-width: 100%;
            color: #444;
            padding: 5px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #555;
        }

        input[type=text] {
            max-width: 100%;
            color: #444;
            padding: 5px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #555;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        {{-- @dd($judul) --}}
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Daharan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('dasboard/img/admin.png') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link <?= ($menu == 'home' ? 'active' : '') ?>"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    {{-- Profil Start --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= ($menu == 'profil' ? 'active' : '') ?>" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Profil</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/dashboard/Profil/penjabat" class="dropdown-item <?= ($menu == 'penjabat' ? 'active' : '') ?>">Profil Penjabat</a>
                            <a href="/dashboard/Profil/organisasi" class="dropdown-item">Struktur Organisai</a>
                            <a href="/dashboard/Profil/tugas" class="dropdown-item">Tugas dan fungsi</a>
                            <a href="element.html" class="dropdown-item">Ranting</a>
                        </div>
                    </div>
                    {{-- Profil End --}}

                    {{-- Berita start --}}
                    <a href="/dashboard/Berita/berita" class="nav-item nav-link <?= ($menu == 'berita' ? 'active' : '') ?>"><i class="fa fa-th me-2"></i>Berita</a>
                    {{-- Berita End --}}

                    {{-- Program Start --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Program</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Program SKPD</a>
                            <a href="typography.html" class="dropdown-item">Agenda</a>
                        </div>
                    </div>
                    {{-- Program End --}}

                    {{-- Pelayanan Start --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Pelayanan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Cek bantuan</a>
                            <a href="typography.html" class="dropdown-item">Persyaratan</a>
                            <a href="typography.html" class="dropdown-item">Penghargaan</a>
                            <a href="typography.html" class="dropdown-item">Sobat Ducapil</a>
                        </div>
                    </div>
                    {{-- Pelayanan End --}}

                    {{-- Informasi Start --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Infomasi Publik</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Perancangan</a>
                            <a href="typography.html" class="dropdown-item">Laporan Kinerja</a>
                            <a href="typography.html" class="dropdown-item">Laporan Keuangan</a>
                            <a href="typography.html" class="dropdown-item">Pemohonan</a>
                        </div>
                    </div>
                    {{-- Informasi End --}}

                    {{-- Layanan Start --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Layanan Publik</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Standar Pelayanan</a>
                            <a href="typography.html" class="dropdown-item">Pengolahan Pelayanan</a>
                            <a href="typography.html" class="dropdown-item">Visi & Misi</a>
                        </div>
                    </div>
                    {{-- Layanan End --}}

                    {{-- Galery Start --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Galeri</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Galeri Foto</a>
                            <a href="typography.html" class="dropdown-item">Galeri Video</a>
                        </div>
                    </div>
                    {{-- Galery End --}}

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('dasboard/img/admin.png') }}"
                                alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            @if ($menu === 'home')
                @section('home')
                    @include('dasboard.Home.home')
                @show
            @elseif($menu === 'berita')
                @section('berita')
                    @include('dasboard.Berita.berita')
                @show
            @elseif($menu === 'penjabat')
            @section('penjabat')
                @include('dasboard.Profil.penjabat')
            @show
            @elseif($menu === 'organisasi')
            @section('organisasi')
                @include('dasboard.profil.organisasi')
            @show
            @elseif($menu === 'tugas')
            @section('tugas')
                @include('dasboard.profil.tugas')
            @show
            @endif

            {{-- Berita --}}


            {{-- Berita end --}}


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background: #000">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('post-home') }}" enctype="multipart/form-data">
                            @csrf
                            <label class="model-la" for="image">Foto</label>
                            <input class="model-in" name="image" type="file">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal berita-->
        <div class="modal fade" id="exampleModalberita" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background: #000">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Home</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('post-berita') }}" enctype="multipart/form-data">
                            @csrf
                            <label class="model-la" for="name">Name</label>
                            <input class="model-in" type="text" name="name"
                                placeholder="Masukan Judul Berita">
                            <label class="model-la" for="image">Foto</label>
                            <input class="model-in" name="image" type="file">
                            <label class="model-la" for="agenda">Agenda</label>
                            <textarea class="model-in" name="agenda" cols="10" rows="6" name="agenda"
                                placeholder="Masukkan diskripsi"></textarea>
                            {{-- <textarea  class="model-in" type="text" name="agenda" placeholder="Masukkan diskripsi"> --}}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>





        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-DOMA8JJJbY1uNhM+TZoAWnM+ETpR+BfKTJFL/4X3q4BQO1G+17g2kp7Jdd8Ai8uV7PRSQo5P5TWtX5I+1mV7Cg=="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"
            integrity="sha512-S0F8qJW2yvTjKs50WTU6XCEJ6h/bZvRwDjKUoWXe3qWzTQy1U/EL6Uf/6UoW6HeMSehYwKNm/dKzgLMmaC1fGw=="
            crossorigin="anonymous"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('dasboard/js/main.js') }}"></script>
</body>

</html>
