@extends('templates.admin')
@section('title', 'Dasbor | Data Pesan')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Data Pesan</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adm_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Pesan
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
                                <div class="table-responsive">
                                    <table class="table mt-1" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Subjek</th>
                                                <th>Dibuat</th>
                                                <th>Diubah</th>
                                                <th colspan="3" class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tablepesan as $tp)
                                                <tr>
                                                    <th scope="row">{{ !empty($i) ? ++$i : ($i = 1) }}</th>
                                                    <td>{{ $tp->nama_cs }}</td>
                                                    <td>{{ $tp->subject_cs }}</td>
                                                    <td>{{ $tp->created_at }}</td>
                                                    <td>{{ $tp->updated_at }}</td>
                                                    <td><a href="{{ route('pesandetail', $tp->id) }}"
                                                            class="la la-eye btn btn-primary btn-sm"></a>
                                                        <button data-toggle="modal"
                                                            data-target="#hapusData{{ $tp->id }}"
                                                            class="la la-trash btn btn-danger btn-sm"></button>
                                                        <div class="modal fade" id="hapusData{{ $tp->id }}"
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
                                                                        Yakin hapus data, {{ $tp->nama_cs }}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tidak.</button>
                                                                        <form style="display:inline" method="post"
                                                                            action="{{ route('delpesan', $tp->id) }}">
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
