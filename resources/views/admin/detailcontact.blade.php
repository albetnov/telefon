@extends('templates.admin')
@section('title', 'Dasbor | Detail Kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Detail Kontak</h3>
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
                                @empty(!$c_info->photo)
                                    <img src="{{ asset('storage/contact') }}/{{ $c_info->photo }}" width="200px" alt="image"
                                        class="mb-3 mr-1 float-left">
                                @else
                                    <p>Photo : No Photo</p>
                                @endempty
                                <div class="mt-1">
                                    <p>Nama Kontak : {{ $c_info->nama_nomor }}</p>
                                    <p>Nomor : ({{ $c_info->con_code->code }}) {{ $c_info->nomor }}</p>
                                    <p>Alamat : {{ $c_info->alamat }}</p>
                                    <p>Deskripsi: {{ $c_info->deskripsi }}</p>
                                    <p>Dibuat: {{ $c_info->created_at }}</p>
                                    <p>Terakhir kali diubah: {{ $c_info->updated_at }}</p>
                                    @if ($c_info->status === 'verified')
                                        <p>Status: Terverifikasi</p>
                                    @endif
                                    <p class="ml-1">Ditambah oleh : {{ $c_info->user_by->nama }}</p>
                                </div>
                                <br>
                                <br>
                            </div>

                            <a href="{{ route('tablecontact') }}" class="btn btn-primary ml-3 mb-3 mt-3">Kembali</a>
                            <a href="{{ route('contactedit', $c_info->slug) }}" class="la la-pencil btn btn-success"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
