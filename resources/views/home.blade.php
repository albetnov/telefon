@extends('templates.guest')
@section('title', 'Home')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            {{-- <h1 style="margin-top: 4.8%">Selamat datang di Halo!</h1> --}}
            <h1 class="mt-2">Selamat datang di Halo!</h1>
            <h2>Dapatkan kontak yang anda inginkan</h2>
            <img src="{{ asset('guest') }}/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
            <a href="#get-started" class="btn-get-started scrollto">Mulai Cari</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Keunggulan Halo!</h2>
                    <br>
                    {{-- <p  class="separator">Iya di sini! Kalau bukan disini dimana lagi...</p> --}}
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/cloud.svg" alt="img">
                            <h4>Kontak Lengkap</h4>
                            <p>Kami menyediakan daftar kontak yang lengkap di server kami</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/planet.svg" alt="img">
                            <h4>Seluruh Dunia</h4>
                            <p>Meskipun web kami memakai Bahasa Indonesia, Kami juga memiliki kontak dari seluruh dunia</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-block">

                            <img src="{{ asset('guest') }}/img/svg/asteroid.svg" alt="img">
                            <h4>Aman dan Nyaman</h4>
                            <p>Nomor yang kami sediakan terjamin dan aman digunakan</p>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Get Started Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us padd-section">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">

                    <div class="col-md-5 col-lg-3">
                        <img src="{{ asset('guest') }}/img/about-img.png" alt="About" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>

                    <div class="col-md-7 col-lg-5">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">

                            <h2>Apa sih <span>Halo!</span>?</h2>
                            <br>
                            <br>
                            <p>Halo merupakan tempat menyimpan/mencari kontak di internet,
                                Di Halo! kamu bisa dengan mudah mencari kontak dan informasi tentang kontak
                                tersebut sesuai kebutuhan kamu.

                                Jadi tunggu apalagi? Ayo daftar sekarang!
                            </p>
                            <button class="btn btn-success"
                                onclick="location.href='{{ route('register') }}'">Daftar</button>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Fitur <strong>Halo!</strong></h2>
                    <p class="separator">Ini dia yang buat Halo! beda dari yang lain!</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/paint-palette.svg" alt="img">
                            <h4>Desain yang menarik!</h4>
                            <p>Desain yang kami gunakan itu menarik dan mudah untuk digunakan</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/design-tool.svg" alt="img">
                            <h4>Mudah digunakan</h4>
                            <p>Tinggal Daftar dan Masuk kemudian cari kontak</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/code.svg" alt="img">
                            <h4>Data Aman dan Terjaga</h4>
                            <p>Data anda akan aman dan terjaga dan hanya user yang login yang dapat melihat</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">

                    <h2>Developer Halo!</h2>
                    <p class="separator">Kenalan Yuk sama Developer Halo!</p>
                </div>

                <div class="row">

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-block bottom">
                            <img src="{{ asset('guest') }}/img/team/1.jpg" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>Ketua</span>
                                <h4>Hernando</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="team-block bottom">
                            <img src="{{ asset('guest') }}/img/team/3.jpg" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>Anggota</span>
                                <h4>Albet Novendo</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="padd-section">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Kontak</h2>
                    <br>
                    {{-- <p class="separator">Contact us anytime!</p> --}}
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p><br>Jl. Kuda Laut, Sungai Jodoh, Kec. Batu Ampar, Kota Batam, Kepulauan Riau 29451</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <p>cs@halo.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+08 77770 1892</p>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="" method="post" role="form" id="cs_form" class="php-email-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nama_cs" class="form-control" id="name_cs" placeholder="Nama"
                                        required>
                                    <span class="text-danger error-text name_cs_error"></span>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email_cs" id="email_cs"
                                        placeholder="Email" required>
                                    <span class="text-danger sm error-text email_cs_error"></span>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject_cs" id="subject_cs"
                                        placeholder="Subjek" required>
                                    <span class="text-danger error-text subject_cs_error"></span>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message_cs" rows="5" placeholder="Pesan"
                                        required></textarea>
                                    <span class="text-danger error-text message_cs_error"></span>
                                </div>
                                <div class="text-center mt-1"><button type="submit">Kirim</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {

            $("#cs_form").on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('send_contact') }}",
                    method: $(this).attr('method'),
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $.each(data.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $('#cs_form')[0].reset();
                            toastr["success"](data.msg);
                        }
                    }
                });
            });

        });
    </script>
@endpush
