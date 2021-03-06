@extends('templates.admin')
@section('title', 'Dasbor | Data Kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
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
                                    class="la la-plus btn btn-success btn-sm float-right mr-1"></a>
                                <div class="table-responsive">
                                    <table class="table mt-1" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor</th>
                                                <th>Nama Nomor</th>
                                                <th>Alamat</th>
                                                <th>Dibuat oleh</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tablecontact as $ct)
                                                <tr>
                                                    <td scope="row">{{ !empty($i) ? ++$i : ($i = 1) }}</th>
                                                    <td>({{ $ct->con_code->code }}){{ $ct->nomor }}</td>
                                                    <td>{{ $ct->nama_nomor }}</td>
                                                    <td>{{ $ct->alamat }}</td>
                                                    <td>{{ $ct->user_by->nama }}</td>
                                                    <td><a href="{{ route('detailcontact', $ct->slug) }}"
                                                            class="la la-eye btn btn-primary btn-sm"></a>
                                                        <a href="{{ route('contactedit', $ct->slug) }}"
                                                            class="la la-edit btn btn-success btn-sm"></a>
                                                        <button data-toggle="modal"
                                                            data-target="#hapusData{{ $ct->id }}"
                                                            class="la la-trash btn btn-danger btn-sm"></button>
                                                        <div class="modal fade" id="hapusData{{ $ct->id }}"
                                                            data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                                                                        Yakin hapus data, {{ $ct->nama_nomor }}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tidak.</button>
                                                                        <form style="display:inline" method="post"
                                                                            action="{{ route('delc', $ct->slug) }}">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Ya,
                                                                                Hapus.</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
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
@push('scripts')
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endpush
