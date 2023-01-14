<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Pantry Web</title>

        <!-- Favicons -->
        <link href="<?php echo asset('assets/img/logo 3.png')?>" rel="icon">
        <link href="<?php echo asset('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="<?php echo asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')?>" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo asset('assets/vendor/aos/aos.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
        <link href="<?php echo asset('assets/vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">
        
        <!-- Template Main CSS File -->
        <link href="<?php echo asset('assets/css/style.css')?>" rel="stylesheet" type="text/css">

    </head>
    <body>
        <header id="header" class="fixed-top prueba">
            <div class="container d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="#">My Pantry Web<span>.</span></a></h1>

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{ __("Inicio") }}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{ __('Sobre nosotros') }}</a></li>
                    <li><a class="nav-link scrollto" href="#productos">{{ __("Productos") }}</a></li>
                    <li><a class="nav-link scrollto" href="#team">{{ __("Equipo") }}</a></li>
                    <li><a class="nav-link scrollto" href="#contact">{{ __("Contacto") }}</a></li>
                    <li><a href="/es">ES</a></li>
                    <li><a href="/eu">EU</a></li>
                    <li><a href="/en">EN</a></li>
                    <li><a href="{{ route('login', app()->getLocale()) }}"><button type="button" class="btn registro">{{ __("Iniciar sesion") }}</button></a></li>
                    <li><a href="{{ route('register', app()->getLocale()) }}"><button type="button" class="btn registro">{{ __("Registrarse") }}</button></a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                
                
                
            </div>
        </header>
        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                <img src="<?php echo asset('assets/img/cesta.png')?>"/>
                <h1>My pantry web<span>.</span></h1>
                <h2>{{ __("Tu despensa en la Web") }}</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="bi bi-person-circle"></i>
                    <h3><a href="{{ route('planes', app()->getLocale()) }}">{{ __("Usuarios") }}</a></h3>
                </div>
                </div>
                <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="bi bi-file-ppt"></i>
                    <h3><a href="{{ route('despensas', app()->getLocale()) }}">{{ __("Productos") }}</a></h3>
                </div>
                </div>
                <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="bi bi-card-list"></i>
                    <h3><a href="{{ route('notas', app()->getLocale()) }}">{{ __("Notas") }}</a></h3>
                </div>
                </div>
            </div>

            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo asset('assets/img/despensa comida.jpg')?>" class="img-fluid" alt=""/>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>{{ __("My Pantry Web es una despensa en la web para dar facilidades.") }}</h3>
                    <br/>
                    <br/>
                    <p class="fst-italic">
                    {{ __("uso pagina") }}
                    </p>
                </div>
                </div>

            </div>
        </section>
        <section id="productos" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __("Productos") }}</h2>
                    <p>{{ __("Tus productos") }}</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                        <img src="<?php echo asset('assets/img/portfolio/nuggets de pollo.jpg')?>" class="img-fluid" alt=""/>
                        <div class="portfolio-info">
                            <h4>{{ __("Nuggets de pollo") }}</h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                        <img src="<?php echo asset('assets/img/portfolio/varitas de merluza.jpg')?>" class="img-fluid" alt=""/>
                        <div class="portfolio-info">
                            <h4>{{ __("Varitas de merluza") }}</h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                        <img src="<?php echo asset('assets/img/portfolio/tomate.jpg')?>" class="img-fluid" alt=""/>
                        <div class="portfolio-info">
                            <h4>{{ __("Tomate") }}</h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                        <img src="<?php echo asset('assets/img/portfolio/lentejas.jpg')?>" class="img-fluid" alt=""/>
                            <div class="portfolio-info">
                                <h4>{{ __("Lentejas") }}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="<?php echo asset('assets/img/portfolio/arroz.jpg')?>" class="img-fluid" alt=""/>
                            <div class="portfolio-info">
                                <h4>{{ __("Arroz") }}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="<?php echo asset('assets/img/portfolio/patatas.jpeg')?>" class="img-fluid" alt=""/>
                            <div class="portfolio-info">
                                <h4>{{ __("Patatas") }}</h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="section-title">
                    <h2>{{ __("OPINIONES") }}</h2>
                    <p>{{ __("Testimonios de clientes") }}</p>
                </div>
                    <div class="testimonial-item">
                        <img src="<?php echo asset('assets/img/testimonials/foto perfil 1.jpg')?>" class="testimonial-img" alt=""/>
                        <h3>Carlos Bermejo</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ __("Testimonio1") }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="<?php echo asset('assets/img/testimonials/foto perfil 2.jpg')?>" class="testimonial-img" alt=""/>
                        <h3>Arantza Balenciaga</h3>
                        <h4>Designer</h4>
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ __("Testimonio2") }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="<?php echo asset('assets/img/testimonials/testimonials-3.jpg')?>" class="testimonial-img" alt=""/>
                        <h3>Maite Ramirez</h3>
                        <h4>Store Owner</h4>
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ __("Testimonio3") }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="<?php echo asset('assets/img/testimonials/testimonials-4.jpg')?>" class="testimonial-img" alt=""/>
                        <h3>Arkaitz Bermejo</h3>
                        <h4>Freelancer</h4>
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ __("Testimonio4") }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="<?php echo asset('assets/img/testimonials/testimonials-5.jpg')?>" class="testimonial-img" alt=""/>
                        <h3>Jon Narvarte</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ __("Testimonio5") }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
            </div>
        </section>
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>{{ __("Equipo") }}</h2>
                <p>{{ __("Sobre nosotros") }}</p>
                </div>

                <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="<?php echo asset('assets/img/team/team-1.jpg')?>" class="img-fluid" alt=""/>
                        <div class="social">
                        <a href="https://twitter.com/?lang=es"><i class="bi bi-twitter"></i></a>
                        <a href="https://es-es.facebook.com/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                        <a href="https://es.linkedin.com/?trk=guest_homepage-basic_nav-header-logo"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Andoni Recalde</h4>
                        <span>{{ __("Analista") }}</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="<?php echo asset('assets/img/team/team-3.jpg')?>" class="img-fluid" alt=""/>
                        <div class="social">
                        <a href="https://twitter.com/?lang=es"><i class="bi bi-twitter"></i></a>
                        <a href="https://es-es.facebook.com/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                        <a href="https://es.linkedin.com/?trk=guest_homepage-basic_nav-header-logo"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Asier Ortuño</h4>
                        <span>{{ __("Empleado del Mes") }}</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="<?php echo asset('assets/img/team/team-4.jpg')?>" class="img-fluid" alt=""/>
                        <div class="social">
                        <a href="https://twitter.com/?lang=es"><i class="bi bi-twitter"></i></a>
                        <a href="https://es-es.facebook.com/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                        <a href="https://es.linkedin.com/?trk=guest_homepage-basic_nav-header-logo"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Goizeder Bermejo</h4>
                        <span>{{ __("Coordinadora") }}</span>
                    </div>
                    </div>
                </div>

                </div>

            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>{{ __("Contacto") }}</h2>
                <p>{{ __("Contactanos") }}</p>
                </div>

                <div>
                <iframe class="frame" src="<?php echo asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1451.1971201270449!2d-1.9709205948614956!3d43.32693872802477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a54183b87fed%3A0x6b3f34b4f0c14472!2sIES%20Xabier%20Zubiri%20Manteo%20BHI!5e0!3m2!1ses!2ses!4v1671184992662!5m2!1ses!2ses')?>" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>{{ __("Ubicación") }}:</h4>
                        <p>C. Jose Miguel Barandiaran, 10-12, 20013 Zubiri, Gipuzkoa</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@ikzubirimanteo.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>{{ __("Teléfono") }}:</h4>
                        <p>+34 698 588 557</p>
                    </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('Nombre') }}" required/>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Email') }}" required/>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('Asunto') }}" required/>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="{{ __('Mensaje') }}" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">{{ __("Cargando") }}</div>
                        <div class="error-message"></div>
                        <div class="sent-message">{{ __("Mensaje enviado") }}</div>
                    </div>
                    <div class="text-center"><button type="submit">{{ __("Enviar") }}</button></div>
                    </form>

                </div>

                </div>

            </div>
        </section>
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-md-6">
                            <div class="footer-info">
                                <h3>My Pantry Web<span>.</span></h3>
                                <p>
                                    C. Jose Miguel Barandiaran,<br/>
                                    10-12, 20013 Zubiri, Gipuzkoa <br/><br/>
                                    <strong>{{ __("Teléfono") }}:</strong> +34 698 588 557<br/>
                                    <strong>Email:</strong> info@ikzubirimanteo.com<br/>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Inicio") }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Sobre nosotros") }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Servicios") }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Terminos del servicio") }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __("Política de privacidad") }}</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- Vendor JS Files -->
        <script src="<?php echo asset('assets/vendor/purecounter/purecounter_vanilla.js')?>"></script>
        <script src="<?php echo asset('assets/vendor/aos/aos.js')?>"></script>
        <script src="<?php echo asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo asset('assets/vendor/glightbox/js/glightbox.min.js')?>"></script>
        <script src="<?php echo asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
        <script src="<?php echo asset('assets/vendor/swiper/swiper-bundle.min.js')?>"></script>
        <script src="<?php echo asset('assets/vendor/php-email-form/validate.js')?>"></script>

        <!-- Template Main JS File -->
        <script src="<?php echo asset('assets/js/main.js')?>"></script>
    </body>
</html>