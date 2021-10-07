@extends('templates.user')
@section('title', 'Dasbor | Ajukan Verifikasi')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Data Verifikasi</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('usr_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Data Verifikasi
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
                                @if (isset($data))
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nama Nomor</th>
                                                <th>Status</th>
                                                <th>Dibuat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $dt)
                                                <tr>
                                                    <td>({{ $dt->contact->con_code->code }}) {{ $dt->contact->nomor }}
                                                    </td>
                                                    <td>{{ $dt->contact->nama_nomor }}</td>
                                                    @if ($dt->status === 'approved')
                                                        <td>Disetujui</td>
                                                    @elseif($dt->status === 'rejected')
                                                        <td>Ditolak</td>
                                                    @else
                                                        <td>Sedang Menunggu</td>
                                                    @endif
                                                    <td>{{ $dt->created_at }}</td>
                                                    @if ($dt->status === 'approved')
                                                        <td>No Action</td>
                                                    @else
                                                        <td><button class="btn btn-danger btn-sm" data-toggle="modal"
                                                                data-target="#hapusData{{ $dt->id }}"><i
                                                                    class="la la-trash"></i></button></td>
                                                        <div class="modal fade" id="hapusData{{ $dt->id }}"
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
                                                                        Yakin hapus data, {{ $dt->contact->nama_nomor }}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tidak.</button>
                                                                        <form style="display:inline" method="post"
                                                                            action="{{ route('usrdelreq', $dt->id) }}">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Ya,
                                                                                Hapus.</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                                @if (!isset($pending) || (isset($pending) && $pending != true))
                                    <form action="{{ route('usrsaveverify') }}" method="POST">
                                        @csrf
                                        @error('req_verify')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <select class="form-control" name="req_verify" id="num_select">
                                            @foreach ($contact as $ct)
                                                <option value="{{ $ct->id }}">({{ $ct->con_code->code }})
                                                    {{ $ct->nomor }} -
                                                    {{ $ct->nama_nomor }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <button type="submit" class="btn btn-warning float-right mb-2">Ajukan
                                            Verifikasi</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
@stack('scripts')
<script>
    $
</script>
