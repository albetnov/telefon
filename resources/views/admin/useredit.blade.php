@extends('templates.admin')
@section('title', 'Dasbor | Edit Data Pengguna')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Form Edit Pengguna</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adm_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{ route('tableuser') }}">Data Pengguna</a>
                                </li>
                                <li class="breadcrumb-item active">Edit Pengguna
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Basic Tables start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                @error('level')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <form id="editUser" method="POST" action="{{ route('actedit', $user->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="ml-2 mt-2">
                                        <h6 class="ml-1">Level</h6>
                                        <fieldset class="form-group col-xl-2 col-lg-6 col-md-12">
                                            <select class="form-control mb-2" name="level">
                                                <option value="admin" {{ $user->level === 'admin' ? 'selected' : '' }}>
                                                    admin</option>
                                                <option value="user" {{ $user->level === 'user' ? 'selected' : '' }}>user
                                                </option>
                                            </select>
                                        </fieldset>

                                        <div class="col-xl-11 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-block">

                                                    <h6>Nama</h6>
                                                    <fieldset class="form-group">
                                                        <input type="text" name="nama"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            placeholder="Nama Pengguna"
                                                            value="{{ old('nama', $user->nama) }}">
                                                        @error('nama')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-11 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-block">

                                                    <h6>Nama Username Pengguna</h6>
                                                    <fieldset class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('username') is-invalid @enderror"
                                                            placeholder="Username Pengguna"
                                                            value="{{ old('username', $user->username) }}"
                                                            name="username">

                                                        @error('username')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </form>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('tableuser') }}" class="btn btn-primary ml-1 mb-1">Kembali</a>
                                <button class="btn btn-danger ml-1 mb-1" data-toggle="modal" data-target="#gantiPass">Ganti
                                    Password</button>
                                <div class="modal fade" id="gantiPass" data-backdrop="static" data-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Ganti Password</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="UserPass" action="{{ route('actpass', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="pass">Password baru:</label>
                                                        <input type="password" name="pass"
                                                            class="form-control @error('pass') is-invalid @enderror"
                                                            id="pass">
                                                        @error('pass')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="conpass">Konfirmasi Password baru:</label>
                                                        <input type="password" name="conpass"
                                                            class="form-control @error('conpass') is-invalid @enderror"
                                                            id="conpass">
                                                        @error('conpass')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" form="UserPass" class="btn btn-primary">Ganti
                                                    Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success ml-1 mb-1" type="submit" form="editUser">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
@if ($errors->any())
    @push('scripts')
        <script>
            toastr['error']('Validation error')
        </script>
    @endpush
@endif
