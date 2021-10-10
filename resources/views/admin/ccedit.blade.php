@extends('templates.admin')
@section('title', 'Dasbor | Edit data kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Form Edit Country Code</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adm_dashboard') }}">Beranda</a>
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
                                <form method="POST" action="{{ route('actccedit', $dcc->id) }}">
                                    @csrf
                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <h6>Code</h6>
                                                <fieldset class="form-group">
                                                    <input type="text"
                                                        class="form-control @error('code') is-invalid @enderror"
                                                        placeholder="Code" value="{{ old('code', $dcc->code) }}"
                                                        name="code">
                                                    @error('code')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-11 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <h6>Country</h6>
                                                <fieldset class="form-group @error('country') is-invalid @enderror">
                                                    <input type="text" class="form-control" placeholder="Country"
                                                        name="country" value="{{ old('country', $dcc->country) }}">
                                                    @error('country')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ route('tablecontact') }}" class="btn btn-primary ml-1 mb-1">Kembali</a>
                                    <button type="submit" class="btn btn-success ml-1 mb-1">Selesai</button>
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
