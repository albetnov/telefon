@extends('templates.user')
@section('title', 'Dasbor | Data Kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Data Verifikasi</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('usr_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Verifikasi
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

                                <div class="input-group">
                                    <div class="input-group-text ml-1">
                                        <input class="ml-1 mr-1" class="form-check-input mt-0" type="radio" value=""
                                            aria-label="Radio button for following text input">
                                    </div>
                                    <input readonly type="text" class="form-control col-5"
                                        aria-label="Text input with radio button" value="(62+)12389129">
                                </div>
                                <br>
                                <a href="#" class="btn btn-warning float-right mb-2">Ajukan Verifikasi</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
