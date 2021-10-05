@extends('templates.user')
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
                                <li class="breadcrumb-item"><a href="{{ route('usr_dashboard') }}">Beranda</a>
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

                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ !empty($i) ? ++$i : ($i = 1) }}</th>
                                                <td>6456456</td>
                                                <td>MyName</td>
                                                <td>Batam</td>
                                                <td>Hernando</td>
                                                <td><a href="/user/contactdata/detailcontact"
                                                        class="la la-eye btn btn-primary btn-sm"></a>
                                                <td><a href="" class="la la-edit btn btn-success btn-sm"></a>
                                                <td><button data-toggle="modal" data-target="#hapusData"
                                                        class="la la-trash btn btn-danger btn-sm"></button>
                                                    <div class="modal fade" id="hapusData" data-backdrop="static"
                                                        data-keyboard="false" tabindex="-1"
                                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                                        Hapus Data?</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Yakin hapus data, NAMA_NOMOR?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Tidak.</button>
                                                                    <form style="display:inline" method="post" action="">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-primary">Ya,
                                                                            Hapus.</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>

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
