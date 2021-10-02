@extends('templates.admin')
@section('title', 'Dasbor | Data Kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Data Kontak</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adm_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Kontak
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
                                <a href="{{ route('inputcontact') }}"
                                    class="la la-plus btn btn-success float-right mr-1"></a>
                                <div class="table-responsive">
                                    <table class="table mt-1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor</th>
                                                <th>Nama Nomor</th>
                                                <th>Alamat</th>
                                                <th>Dibuat oleh</th>
                                                <th colspan="3" class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($tablecontact as $ct)
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ $ct->id }}</th>
                                                    <td>({{ $ct->con_code->code }}){{ $ct->nomor }}</td>
                                                    <td>{{ $ct->nama_nomor }}</td>
                                                    <td>{{ $ct->alamat }}</td>
                                                    <td>{{ $ct->user_by->nama }}</td>
                                                    <td><a href="{{ route('tablecontact') }}/{{ $ct->slug }}"
                                                            class="la la-eye btn btn-primary btn-sm"></a>
                                                    <td><a href="{{ route('contactedit') }}"
                                                            class="la la-edit btn btn-success btn-sm"></a>
                                                    <td><a href="#" class="la la-trash btn btn-danger btn-sm"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
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