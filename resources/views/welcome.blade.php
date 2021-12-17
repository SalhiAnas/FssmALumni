@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top py-3 invisible">
                <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Fssm Alumni</a>
                    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Our mission</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="background"></div>
                    <div class="toplayer">
                    <div class="carousel-caption">
                        <img src="Assets/fssm_white.png">
                        <h1 class="display-3 title">Fssm alumni network</h1>
                        <h1 class="display-5 desc">Earn your confidence, nurture it, then help to build it in others.</h1>
                        <a href="{{ route('form') }}"><button type="button"  class="btn btn-outline-light btn-lg">Join Us !</button></a>
                    </div>
                    </div>

                </div>
                </div>
        </div>
        <!-- ======= our mission Section ======= -->
        <section id="features" class="features" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Our mission</h2>
                    <p>We enrich the Faculty of Science Semlalia’s impact by serving as an independent gateway for alums of all identities, backgrounds, and experiences – across the globe and in our neighborhoods – in order to create and deepen belonging to the Semlalia Family.</p>
                </div>

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="Assets/community.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                        <h3>Because we believe in the power of the community!</h3>
                        <p class="fst-italic">
                            The gateway covers four main objectives :
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Job / Internship offers.</li>
                            <li><i class="bi bi-check"></i> Impact stories.</li>
                            <li><i class="bi bi-check"></i> Discussion forums.</li>
                            <li><i class="bi bi-check"></i> Upcomming Events .</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Our mission Section -->




        <!-- ======= about Section ======= -->
        <section id="about" class="about" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="Assets/about.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-1 order-2 order-md-1" data-aos="fade-right">
                        <h3>The Faculty Of Science Semlalia Marrakech ( FSSM ).</h3>
                        <p class="fst-italic">
                            The Faculty of Sciences Semlalia of Marrakech (FSSM) is one of the main institutions of Cadi Ayyad University. It was created in 1978. Since then, it has experienced remarkable momentum in terms of scientific research and cooperation. Thus it has forged a place of choice in the landscape of national higher education.
                        </p>
                        <p>
                            The FSSM has six departments: Biology, Chemistry, Geology, Computer Science, Mathematics and Physics. With more than 400 teacher - researchers, in these various disciplinary fields, the FSSM has produced during its 35 years of existence more than a thousand theses and several thousand articles and has established cooperation relations with universities in Africa, Asia, Europe and the USA, in addition to an increasingly strong and structured national cooperation with the various institutes, schools and faculties and with several organizations and socio - economic sectors.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Feel free to contact us if you have any questions or ramarks.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>Bd. Prince My Abdellah, B.P. 2390, 40000 Marrakech</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4 mt-md-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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
        </section><!-- End Contact Section -->

<div>

</div>
    </body>

    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 10 ) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>
</html>
@endsection

