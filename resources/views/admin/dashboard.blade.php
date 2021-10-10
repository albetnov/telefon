@extends('templates.admin')
@section('title', 'Dasbor | Beranda')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Chart -->
            </div>
            <!-- Chart -->
            <!-- eCommerce statistic -->

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted danger position-absolute p-1">Data Pengguna</h5>
                            <div>
                                <i class="ft-user danger font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                <h1 class="container">{{ $user }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted info position-absolute p-1">Data Kontak</h5>
                            <div>
                                <i class="ft-phone-call info font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <h1 class="container">{{ $contact }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted warning position-absolute p-1">Permintaan Verifikasi</h5>
                            <div>
                                <i class="ft-check warning font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <h1 class="container">{{ $verifikasi }}</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted success position-absolute p-1">Pesan Pengguna</h5>
                            <div>
                                <i class="ft-message-circle success font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <h1 class="container">{{ $pesan }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="card-headings">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="heading-multiple-thumbnails">Pengaturan Akun</h4>
                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="col-xl-12 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="card-body">
                                                    <form id="edcuracc"
                                                        action="{{ route('editcuracc', Auth::user()->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                Validasi Gagal
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        <fieldset class="form-group">
                                                            <input type="text" class="form-control mb-1" id="basicInput"
                                                                name="nama" placeholder="Nama"
                                                                value="{{ old('nama', Auth::user()->nama) }}">
                                                            <input type="text" class="form-control" id="basicInput"
                                                                name="username" placeholder="Username"
                                                                value="{{ old('username', Auth::user()->username) }}">
                                                    </form>
                                                    <button type="button" class="btn btn-warning mt-2" data-toggle="modal"
                                                        data-target="#gantiPass"><i class="la la-key">
                                                        </i> Ganti
                                                        Password</button>
                                                    <div class="modal fade" id="gantiPass" data-backdrop="static"
                                                        data-keyboard="false" tabindex="-1"
                                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                                        Ganti Password</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{{ route('editcuracc', Auth::user()->id) }}"
                                                                        method="POST" id="chcurpass">
                                                                        @csrf
                                                                        <input type="hidden" value="_curpass" name="type">
                                                                        <div class="form-group">
                                                                            <input type="password"
                                                                                placeholder="New Password" name="newpass"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="password"
                                                                                placeholder="Confirm New Password"
                                                                                name="conpass" class="form-control">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary"
                                                                        form="chcurpass">Ganti Password</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" form="edcuracc" class="btn btn-primary mt-2"><i
                                                            class="la la-pencil">
                                                        </i> Ubah
                                                        Akun</button>
                                                    </fieldset>
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
    </div>

@endsection
