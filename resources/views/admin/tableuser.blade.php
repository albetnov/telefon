@extends('templates.admin')
@section('title', 'Dasbor | Data Pengguna')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Data Pengguna</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Pengguna
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
                                    <table class="table mt-1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Dibuat</th>
                                                <th>Diubah</th>
                                                <th colspan="3" class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($tableuser as $tu)
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ !empty($i) ? ++$i : ($i = 1) }}</th>
                                                    <td>{{ $tu->nama }}</td>
                                                    <td>{{ $tu->username }}</td>
                                                    <td>{{ $tu->created_at }}</td>
                                                    <td>{{ $tu->updated_at }}</td>
                                                    <td><a href="{{ route('userdetail', $tu->id) }}"
                                                            class="la la-eye btn btn-primary"></a></td>
                                                    <td><a href="{{ route('useredit', $tu->id) }}"
                                                            class="la la-edit btn btn-success"></a>
                                                    </td>
                                                    <td><button type="button" data-toggle="modal"
                                                            data-target="#hapusData{{ $tu->id }}"
                                                            class="la la-trash btn btn-danger"></button>
                                                        <div class="modal fade" id="hapusData{{ $tu->id }}"
                                                            data-backdrop="static" data-keyboard="false" tabindex="-1"
                                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                                            Hapus Data?</h5>
                                                                        <button class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin hapus data, {{ $tu->nama }}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tidak.</button>
                                                                        <form style="display:inline" method="post"
                                                                            action="{{ route('deluser', $tu->id) }}">
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
