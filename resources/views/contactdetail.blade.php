@extends('templates.guest')
@section('title', 'Contact Detail')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact Detail</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('contact') }}">Contact List</a></li>
                        <li>Detail</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page pt-4">
            <div class="container">
                <p>
                    Contact Detail
                </p>
                <div class="row" data-aos="fade-up" data-aos-delay="50">
                    <div class="col m-1">
                        @if (empty($c_info->photo))
                            <img class="img-fluid" src="{{ asset('guest') }}/img/svg/paint-palette.svg" width="200"
                                height="160" alt="img">
                        @else
                            <img class="img-fluid" src="{{ asset('guest') }}/img/{{ $c_info->photo }}" alt="img">
                        @endif
                    </div>
                    <div class="col">
                        <p>Nomor: ({{ $c_info->con_code->code }}) {{ $c_info->nomor }}<br />
                            Nama: {{ $c_info->nama_nomor }}<br />
                            Dibuat oleh: {{ $c_info->user_by->nama }}</p>
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
                            <button class="btn btn-primary"
                                onclick="location.href='{{ route('contact') }}'">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection