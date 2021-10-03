@extends('templates.admin')
@section('title', 'Dasbor | Data Kontak')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Telkom Indonesia</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adm_dashboard') }}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{ route('tablecontact') }}">Data Kontak</a>
                                </li>
                                <li class="breadcrumb-item active">Detail Kontak
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
                            <div class="card-body m-2">
                                <img src="{{ asset('guest') }}/img/team/1.jpg" width="200px" alt="image"
                                    class="mb-3 mr-1 float-left">
                                <div class="mt-1">
                                    <p>Nama cs : assadsada</p>
                                    <p>Email cs : Kepulauan Riau, Batam</p>
                                    <p>Subjek cs : asdsadsad</p>
                                    <p>Pesan : Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti praesentium
                                        ab quas repellat. Recusandae, sint! Ex repudiandae, magni optio, illo qui sequi rem
                                        obcaecati, inventore quisquam veniam dolores commodi repellendus.</p>
                                    <p class="ml-1">Ditambah oleh : Albet Novendo</p>
                                </div>
                                <br>
                                <br>
                            </div>



                            <a href="{{ route('tablepesan') }}" class="btn btn-primary ml-3 mb-3 mt-3">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

@endsection
