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
                                                    <td><a href="#" class="la la-trash btn btn-danger"></a>
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
