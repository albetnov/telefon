@extends('templates.guest')
@section('title', 'Home')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            <h1 style="margin-top: 4.8%">Welcome to Halo!</h1>
            <h2>Dapatkan Nomor HP siapa saja yang kamu mau!</h2>
            <img src="{{ asset('guest') }}/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
            <a href="#get-started" class="btn-get-started scrollto">Mulai Cari!</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">

                    <h2>Dapatkan Kontak disini! </h2>
                    <p class="separator">Iya disini! Kalau bukan disini dimana lagi...</p>

                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/cloud.svg" alt="img">
                            <h4>Kontak Lengkap</h4>
                            <p>Kami menyediakan daftar kontak yang lengkap di server kami!</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/planet.svg" alt="img">
                            <h4>Seluruh Dunia!</h4>
                            <p>Meskipun web kami memakai Bahasa Indonesia, Kami juga memiliki kontak dari seluruh dunia!</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-block">

                            <img src="{{ asset('guest') }}/img/svg/asteroid.svg" alt="img">
                            <h4>Aman dan Nyaman</h4>
                            <p>Kamu bisa memasukkan nomormu disini dengan Aman dan Nyaman!</p>
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
                            <p>Halo merupakan tempat menyimpan/mencari kontak di internet!
                                Di Halo! kamu bisa dengan mudah mencari kontak dan informasi tentang kontak
                                tersebut sesuai kebutuhan kamu!

                                Jadi apalagi? Ayok daftar sekarang!
                            </p>
                            <button class="btn btn-success">Register</button>
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
                            <p>Desain yang kami gunakan itu menarik dan mudah untuk digunakan!</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/design-tool.svg" alt="img">
                            <h4>Mudah digunakan</h4>
                            <p>Tinggal login aja udah.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="feature-block">
                            <img src="{{ asset('guest') }}/img/svg/code.svg" alt="img">
                            <h4>Data Aman dan Terjaga</h4>
                            <p>Datamu akan aman dan terjaga dan hanya user yang login yang bisa lihat!</p>
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
                    <h2>Contact</h2>
                    <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque</p>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>A108 Adam Street<br>New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <p>info@example.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+1 5589 55488 55s</p>
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
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
