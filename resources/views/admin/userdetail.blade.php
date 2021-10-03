@extends('templates.admin')
@section('title', 'Dasbor | Data Kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Telkom Indonesia</h3>
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
                                    <p>Nama: {{ $user->nama }}</p>
                                    <p>Username : {{ $user->username }}</p>
                                    <p>Level : {{ $user->level }}</p>
                                    <p>Tanggal Pembuatan : {{ $user->created_at }}</p>
                                    <p>Terakhir kali diperbarui : {{ $user->updated_at }}</p>
                                </div>
                                <br>
                                <br>
                            </div>



                            <a href="{{ route('tableuser') }}" class="btn btn-primary ml-3 mb-3 mt-3">Kembali</a>
                            <a href="{{ route('useredit', $user->id) }}" class="la la-pencil btn btn-success"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
