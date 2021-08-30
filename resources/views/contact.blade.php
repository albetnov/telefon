@extends('templates.guest')
@section('title', 'Contoh')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact List</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Contact List</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page pt-4">
            <div class="container">
                <p>
                    Available Contact List
                </p>
                <div class="row" data-aos="fade-up" data-aos-delay="50">
                    @foreach ($contact as $ct)
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <img src="{{ asset('guest') }}/img/svg/paint-palette.svg" alt="img">
                                </div>
                                <div class="card-body">
                                    <h4>Nomor: ({{ $ct->code }}) {{ $ct->nomor }}</h4>
                                    <p>Nama: {{ $ct->nama_nomor }}<br>
                                        Alamat: {{ $ct->alamat }}<br>
                                        Di Buat: {{ $ct->nama }}</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary">View</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
