@extends('templates.user')
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
                                <li class="breadcrumb-item"><a href="{{ route('usr_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{ route('usrtablecontact') }}">Data
                                        Kontak</a>
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
                                @empty($contact->photo)
                                    <p>Photo : No Photo</p>
                                @else
                                    <img src="{{ asset('storage/contact/' . $contact->photo) }}" width="200px" alt="image"
                                        class="mb-3 mr-1 float-left">
                                @endempty

                                <div class="mt-1">
                                    <p>Nama Kontak : {{ $contact->nama_nomor }}</p>
                                    <p>Nomor : ({{ $contact->con_code->code }}) {{ $contact->nomor }}</p>
                                    <p>Alamat : {{ $contact->alamat }}</p>
                                    <p>Deskripsi : {{ $contact->deskripsi }}</p>
                                    <p>Dibuat : {{ $contact->created_at }}</p>
                                    <p>Terakhir kali diubah : {{ $contact->updated_at }}</p>
                                    @if ($contact->status === 'verified')
                                        <p>Status: Terverifikasi</p>
                                    @endif
                                    <p>Ditambah oleh: {{ $contact->user_by->nama }}</p>
                                </div>
                                <br>
                                <br>
                            </div>

                            <a href="{{ route('usrtablecontact') }}" class="btn btn-primary ml-3 mb-3 mt-3">Kembali</a>
                            <a href="{{ route('usrcontactedit', $contact->slug) }}"
                                class="la la-pencil btn btn-success"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
