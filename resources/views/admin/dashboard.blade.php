@extends('templates.admin')
@section('title', 'Dasbor | Beranda')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Chart -->
            </div>
            <!-- Chart -->
            <!-- eCommerce statistic -->

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted danger position-absolute p-1">Data Pengguna</h5>
                            <div>
                                <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                                <h1 class="container">12</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted info position-absolute p-1">Data Kontak</h5>
                            <div>
                                <i class="ft-activity info font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <h1 class="container">12</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted warning position-absolute p-1">Permintaan Verifikasi</h5>
                            <div>
                                <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <h1 class="container">12</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-12">
                    <div class="card pull-up ecom-card-1 bg-white">
                        <div class="card-content ecom-card2 height-180">
                            <h5 class="text-muted warning position-absolute p-1">Pesan Pengguna</h5>
                            <div>
                                <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                            </div>
                            <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                                <h1 class="container">12</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="card-headings">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="heading-multiple-thumbnails">Pengaturan Akun</h4>
                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="col-xl-12 col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="card-body">
                                                    <form action="" method="POST">
                                                        <fieldset class="form-group">
                                                            <input type="text" class="form-control mb-1" id="basicInput"
                                                                placeholder="Nama">
                                                            <input type="text" class="form-control" id="basicInput"
                                                                placeholder="Username">
                                                            <button class="btn btn-warning mt-2"><i class="la la-key">
                                                                </i> Ganti
                                                                Password</button>

                                                            <button class="btn btn-primary mt-2"><i class="la la-pencil">
                                                                </i> Ubah
                                                                Akun</button>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--/ eCommerce statistic -->

            {{-- <!-- Statistics -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-multiple-thumbnails">Multiple Thumbnail</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <span class="avatar">
                            <img src="{{ asset('admin') }}/images/portrait/small/avatar-s-2.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="{{ asset('admin') }}/images/portrait/small/avatar-s-3.png" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="{{ asset('admin') }}/images/portrait/small/avatar-s-4.png" alt="avatar">
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Content title</h4>
                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie powder.Donut sweet
                            roll marzipan pastry cookie cake tootsie roll oat cake cookie.Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. </p>
                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow lollipop chupa chups donut fruitcake
                            cake.Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow
                            wafer tiramisu jelly beans.</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Recent products</h4>
                    <h6 class="card-subtitle text-muted">Carousel Card With Header & Footer</h6>
                </div>
                <div id="carousel-area" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-area" data-slide-to="1"></li>
                        <li data-target="#carousel-area" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{ asset('admin') }}/images/carousel/08.jpg" class="d-block w-100" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('admin') }}/images/carousel/03.jpg" class="d-block w-100" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('admin') }}/images/carousel/01.jpg" class="d-block w-100" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                            <span class="la la-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                            <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">2 days ago</span>
                <span class="tags float-right">
                    <span class="badge badge-pill badge-primary">Branding</span>
                    <span class="badge badge-pill badge-danger">Design</span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Buyers</h4>
                <a class="heading-elements-toggle">
                    <i class="fa fa-ellipsis-v font-medium-3"></i>
                </a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a data-action="reload">
                                <i class="ft-rotate-cw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div id="recent-buyers" class="media-list">
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{ asset('admin') }}/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-1.jpg"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-2.jpg"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 3" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-4.jpg"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12332 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away">
                                <img class="media-object rounded-circle" src="{{ asset('admin') }}/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Lawrence Fowler

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-5.jpg"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-6.jpg"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12333 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-busy">
                                <img class="media-object rounded-circle" src="{{ asset('admin') }}/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Linda Olson

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-2.jpg"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-5.jpg"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12334 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{ asset('admin') }}/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Roy Clark

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-6.jpg"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-1.jpg"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12335 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{ asset('admin') }}/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{ asset('admin') }}/images/portfolio/portfolio-5.jpg"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12336 </span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Statistics --> --}}
        </div>
    </div>
    </div>

@endsection
