@extends('templates.admin')
@section('title', 'Dasbor | Edit data kontak')
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
                                <li class="breadcrumb-item active"><a href="{{ route('tablecontact') }}">Data Kontak</a>
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

                                <div class="ml-2 mt-2">
                                    <h6 class="ml-1">Level</h6>
                                    <fieldset class="form-group col-xl-2 col-lg-6 col-md-12">
                                        <select class="form-control mb-2" id="basicSelect"
                                            value="{{ old('country_code') }}">
                                            <option>admin</option>
                                            <option>user</option>
                                        </select>
                                    </fieldset>

                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <h6>Nama</h6>
                                                <fieldset class="form-group">
                                                    <input type="text" name="nomor"
                                                        class="form-control @error('nomor') is-invalid @enderror"
                                                        id="placeholderInput" placeholder="Nomor Kontak"
                                                        value="{{ old('nomor') }}">

                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <h6>Nama Pengguna</h6>
                                                <fieldset class="form-group">
                                                    <input type="text"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        id="placeholderInput" placeholder="Nama Kontak"
                                                        value="{{ old('nama') }}" name="nama">
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <a href="{{ route('tableuser') }}" class="btn btn-primary ml-1 mb-1">Kembali</a>
                                <button class="btn btn-success ml-1 mb-1">Selesai</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Basic Tables end -->

@endsection
