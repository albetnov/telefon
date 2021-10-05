@extends('templates.user')
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
                                <li class="breadcrumb-item"><a href="{{ route('usr_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{ route('tablecontact') }}">Data Kontak</a>
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
                                @error('con_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <form id="#" method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="ml-2 mt-2">
                                        <h6 class="ml-1">Pilih Country Code</h6>
                                        <fieldset class="form-group col-xl-2 col-lg-6 col-md-12">
                                            <select class="form-control mb-2" name="country_code">
                                                {{-- @foreach ($con_code as $cc)
                                                    <option value="{{ $cc->id }}"
                                                        {{ $c_info->con_code->code === $cc->code ? 'selected' : '' }}>
                                                        {{ $cc->code }}</option>
                                                @endforeach --}}
                                            </select>
                                        </fieldset>



                                        <div class="col-xl-11 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-block">

                                                    <h6>Masukkan Nomor Kontak</h6>
                                                    <fieldset class="form-group">
                                                        <input type="number"
                                                            class="form-control @error('nomor') is-invalid @enderror"
                                                            name="nomor" placeholder="Nomor Kontak" value="">
                                                        @error('nomor')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-11 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-block">

                                                    <h6>Masukkan Nama Kontak</h6>
                                                    <fieldset class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('nama_nomor') is-invalid @enderror"
                                                            name="nama_nomor" placeholder="Nama Kontak" value="">
                                                        @error('nama_nomor')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-11 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-block">

                                                    <h6>Masukkan Deskripsi Kontak</h6>
                                                    <fieldset class="form-group">
                                                        <textarea
                                                            class="form-control @error('deskripsi') is-invalid @enderror"
                                                            name="deskripsi" cols="30" rows="10"></textarea>
                                                        @error('deskripsi')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-11 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-block">

                                                    <h6>Masukkan Alamat Kontak</h6>
                                                    <fieldset class="form-group">
                                                        <input type="text"
                                                            class="form-control @error('alamat') is-invalid @enderror"
                                                            name="alamat" placeholder="Alamat Kontak" value="">
                                                        @error('alamat')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="ml-1">Pilih gambar kontak</h6>
                                        {{-- <div class="input-group mb-3">
                                         <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Masukan File
                                                Gambar</label>
                                        </div> --}}
                                        <div class="form-group">
                                            {{-- @empty(!$c_info->photo) --}}
                                            <label>Current:</label><br>
                                            <img src="{{ asset('storage/contact') }}" width="200px" alt="image"
                                                class="mb-3 mr-1">
                                            {{-- @else --}}
                                            <label>Current: No Photo</label>
                                            {{-- @endempty --}}
                                            <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                                name="photo">
                                            @error('photo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- </div> --}}

                                        <a href="{{ route('tablecontact') }}"
                                            class="btn btn-primary ml-1 mb-1">Kembali</a>
                                        <button class="btn btn-success ml-1 mb-1">Selesai</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
