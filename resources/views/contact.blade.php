@extends('templates.guest')
@section('title', 'Contact List')
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
                <form action="{{ route('search','') }}" method="GET">
                    <div class="form-group">
                        <input type="search" class="form-control form-control-sm w-25" name="query">
                        <button class="btn-success mt-1" style="padding:7px;border:none;border-radius:10px;"><i
                                class="bi bi-search"></i> Search</button>
                    </div>
                </form>

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
                            <div class="card m-1">
                                <div class="card-header">
                                    @if (empty($ct->photo))
                                        <img src="{{ asset('guest') }}/img/svg/paint-palette.svg" alt="img">
                                    @else
                                        <img src="{{ asset('guest') }}/img/{{ $ct->photo }}" alt="img">
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h4>Nomor: ({{ $ct->con_code->code }}) {{ $ct->nomor }}</h4>
                                    <p>Nama: {{ $ct->nama_nomor }}<br>
                                        Alamat: {{ $ct->alamat }}<br>
                                        Di Buat: {{ $ct->user_by->nama }}</p>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary"
                                        onclick="location.href='{{ route('gdetail', $ct->slug) }}'">View</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
