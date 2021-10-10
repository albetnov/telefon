@extends('templates.admin')
@section('title', 'Dasbor | Data Kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Detail Pesan</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adm_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{ route('tablecontact') }}">Data Kontak</a>
                                </li>
                                <li class="breadcrumb-item active">Detail Kontak
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
                            <div class="card-body m-2">
                                <div class="mt-1">
                                    <p>Nama Customer : {{ $cs->nama_cs }}</p>
                                    <p>Email Customer : {{ $cs->email_cs }}</p>
                                    <p>Subjek Customer : {{ $cs->subject_cs }}</p>
                                    <p>Pesan : {{ $cs->message_cs }}</p>
                                    <p>Dibuat: {{ $cs->created_at }}</p>
                                </div>
                                <br>
                                <br>
                            </div>



                            <a href="{{ route('tablepesan') }}" class="btn btn-primary ml-3 mb-3 mt-3">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
