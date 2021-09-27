@extends('templates.guest')
@section('title', 'Search Data')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Search</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('contact') }}">Cari Kontak</a></li>
                        <li>Cari</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page pt-4">
            <div class="container">
                <p>
                    Search
                </p>
                <form method="get">
                    <div class="form-group">
                        <input type="search" name="query" class="form-control" placeholder="Cari disini..." @if (isset($_GET['query']))
                        value="{{ $_GET['query'] }}"
                        @endif>
                        <button class="btn-success mt-1" style="padding:7px;border:none;border-radius:10px;"><i
                                class="bi bi-search"></i> Search</button>
                    </div>
                </form>
                @if (is_null($search))
                    <h1>Hening dan Tenang... Ya...</h1>
                @else
                    @foreach ($search as $ds)
                        <div class="row m-2">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">{{ $ds->nama_nomor }}</div>
                                    <div class="card-body">
                                        ({{ $ds->code }}) {{ $ds->nomor }}<br>
                                        {{ $ds->deskripsi }}
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-sm btn-primary"
                                            onclick="location.href='{{ route('gdetail', $ds->slug) }}?from=search&query={{ $_GET['query'] }}'">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>

    </main><!-- End #main -->

@endsection
