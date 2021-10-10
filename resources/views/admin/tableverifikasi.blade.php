@extends('templates.admin')
@section('title', 'Dasbor | Data Verifikasi')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Data Verifikasi</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adm_dashboard') }}">Beranda</a>
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
                    <h5 class="text-gray">Pertimbangan</h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mt-1" id="table1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor</th>
                                                <th>Nama Nomor</th>
                                                <th>Dibuat Oleh</th>
                                                <th>Dibuat Pada</th>
                                                <th colspan="2" class="text-center">Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($verifikasip as $vrf)
                                                <tr>
                                                    <th scope="row">{{ !empty($i) ? ++$i : ($i = 1) }}</th>
                                                    <td>({{ $vrf->contact->con_code->code }}){{ $vrf->contact->nomor }}</td>
                                                    <td>{{ $vrf->contact->nama_nomor }}</td>
                                                    <td>{{ $vrf->contact->user_by->nama }}</td>
                                                    <td>{{ $vrf->created_at }}</td>
                                                    <td><a href="{{ route('detailcontact', $vrf->contact->slug) }}/?from=verify"
                                                            class="la la-eye btn btn-primary btn-sm"></a>
                                                        <form style="display: inline" method="POST"
                                                            action="{{ route('subverify', $vrf->id) }}">
                                                            @csrf
                                                            <button type="submit" name="approve" value="_approve"
                                                                class="btn btn-sm btn-success"><i
                                                                    class="la la-check"></i></button>
                                                            <button type="submit" name="reject"
                                                                class="btn btn-sm btn-danger" value="_reject"><i
                                                                    class="la la-remove"></i></button>
                                                        </form>
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
            <!-- Basic Tables start -->
            <div class="row">
                <div class="col-12">
                    <h5 class="text-gray">Hasil</h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mt-1" id="table2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor</th>
                                                <th>Nama Nomor</th>
                                                <th>Dibuat Oleh</th>
                                                <th>Dibuat Pada</th>
                                                <th>Status</th>
                                                <th colspan="2" class="text-center">Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($verifikasih as $vrfh)
                                                <tr>
                                                    <th scope="row">{{ !empty($i2) ? ++$i2 : ($i2 = 1) }}</th>
                                                    <td>({{ $vrfh->contact->con_code->nomor }}){{ $vrfh->contact->nomor }}</td>
                                                    <td>{{ $vrfh->contact->nama_nomor }}</td>
                                                    <td>{{ $vrfh->contact->user_by->nama }}</td>
                                                    <td>{{ $vrfh->created_at }}</td>
                                                    @if ($vrfh->status === 'approved')
                                                        <td>Disetujui</td>
                                                    @elseif($vrfh->status === 'rejected')
                                                        <td>Ditolak</td>
                                                    @endif
                                                    <td><a href="{{ route('detailcontact', $vrfh->contact->slug) }}/?from=verify"
                                                            class="la la-eye btn btn-primary btn-sm"></a>
                                                        @if ($vrfh->status != 'approved')
                                                            <button data-toggle="modal"
                                                                data-target="#hapusData{{ $vrfh->id }}"
                                                                class="btn btn-danger btn-sm"><i
                                                                    class="la la-trash"></i></button>
                                                            <div class="modal fade" id="hapusData{{ $vrfh->id }}"
                                                                data-backdrop="static" data-keyboard="false" tabindex="-1"
                                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="staticBackdropLabel">
                                                                                Hapus Data?</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Yakin hapus data,
                                                                            {{ $vrfh->contact->nama_nomor }}?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Tidak.</button>
                                                                            <form style="display:inline" method="post"
                                                                                action="{{ route('subverify', $vrfh->id) }}">
                                                                                @csrf
                                                                                <button type="submit" name="destroy"
                                                                                    value="_destroy"
                                                                                    class="btn btn-primary">Ya,
                                                                                    Hapus.</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
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
        let table2 = document.querySelector('#table2');
        let dataTable = new simpleDatatables.DataTable(table1);
        let dataTable2 = new simpleDatatables.DataTable(table2);
    </script>
@endpush
