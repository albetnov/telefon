@extends('templates.guest')
@section('title', 'Contact Detail')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Detail Kontak</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('contact') }}">Cari Kontak</a></li>
                        <li>Detail Kontak</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page pt-4">
            <div class="container">
                {{-- <p>
                    Contact Detail
                </p> --}}
                <div class="row" data-aos="fade-up" data-aos-delay="50">
                    <div class="col m-1">
                        @if (empty($c_info->photo))
                            <img class="img-fluid" src="{{ asset('guest') }}/img/svg/paint-palette.svg" width="200"
                                height="160" alt="img">
                        @else
                            <img class="img-fluid" src="{{ asset('storage/contact/' . $c_info->photo) }}" alt="img">
                        @endif
                    </div>
                    <div class="col">
                        <p>Nomor: ({{ $c_info->con_code->code }}) {{ $c_info->nomor }}<br />
                            Nama: {{ $c_info->nama_nomor }}
                            @if ($c_info->status == 'verified')
                                <span class="badge badge-pill alert-success"><i
                                        class="bi bi-patch-check-fill text-success"></i>
                                    Verified</span>
                            @endif<br />
                            Dibuat oleh: {{ $c_info->user_by->nama }}
                        </p>
                    </div>
                    <div class="col">
                        <p>Alamat: {{ $c_info->alamat }}</p>
                    </div>
                    <div class="col">
                        <p>Deskripsi:</p>
                        <p>{{ $c_info->deskripsi }}</p>
                    </div>
                    <div class="row m-3">
                        <div class="col">
                            @if (isset($_GET['from']) && $_GET['from'] === 'search')
                                <button class="btn btn-primary"
                                    onclick="location.href='{{ route('search') }}?query={{ $_GET['query'] }}'">Kembali</button>
                            @else
                                <button class="btn btn-primary"
                                    onclick="location.href='{{ route('contact') }}'">Kembali</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
