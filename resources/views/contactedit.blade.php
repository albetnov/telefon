@extends('templates.admin')
@section('title', 'Dasbor | Edit data kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Form Edit Kontak</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="/admin/contactdata">Data Kontak</a>
                                </li>
                                <li class="breadcrumb-item active">Edit Kontak
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
                                    <h6 class="ml-1">Pilih Country Code</h6>
                                    <fieldset class="form-group col-xl-2 col-lg-6 col-md-12">
                                        <select class="form-control mb-2" id="basicSelect">
                                            <option>+62</option>
                                            <option>+65</option>
                                        </select>
                                    </fieldset>



                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <h6>Masukkan Nomor Kontak</h6>
                                                <fieldset class="form-group">
                                                    <input type="email" class="form-control" id="placeholderInput"
                                                        placeholder="Nomor Kontak">
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <h6>Masukkan Nama Kontak</h6>
                                                <fieldset class="form-group">
                                                    <input type="email" class="form-control" id="placeholderInput"
                                                        placeholder="Nama Kontak">
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <h6>Masukkan Nomor Kontak</h6>
                                                <fieldset class="form-group">
                                                    <input type="email" class="form-control" id="placeholderInput"
                                                        placeholder="Enter Email Address">
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <h6>Masukkan Alamat Kontak</h6>
                                                <fieldset class="form-group">
                                                    <input type="email" class="form-control" id="placeholderInput"
                                                        placeholder="Alamat Kontak">
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="ml-1">Pilih gambar kontak</h6>
                                    <div class="input-group mb-3 col-xl-4 col-lg-6 col-md-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile03">
                                            <label class="custom-file-label" for="inputGroupFile03">Pilih gambar</label>
                                        </div>
                                    </div>

                                    <a href="/admin/contactdata" class="btn btn-primary ml-1 mb-1">Kembali</a>
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
