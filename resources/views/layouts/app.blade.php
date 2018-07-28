<!DOCTYPE html>
<html>

<head>
  {{-- <title>{{ config('app.name') . ' - ' . $home->tagline }}</title> --}}
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('color/default.css') }}" rel="stylesheet" media="screen">

  <!-- =======================================================
    Theme Name: Alstar
    Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo text or image -->
          <a class="navbar-brand" href="index.html">Alstar</a>

        </div>
        <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="current"><a href="#intro">Home</a></li>
            <li><a href="#about">Tentang Kita</a></li>
            <li><a href="#services">Departemen</a></li>
            <li><a href="#portfolio">Kegiatan</a></li>
            {{-- <li><a href="#team">Team</a></li> --}}
            {{-- <li><a href="#contact">Contact</a></li> --}}
          </ul>
        </div>
      </div>
    </nav>

    <!-- intro area -->
    <div id="intro">
      <div class="intro-text">
        <div class="container">
          <div class="col-md-12">
            <div id="rotator">
              <h1><span class="1strotate">Alstar web studio, Design for life, Creativity and technology</span></h1>
              <div class="line-spacer"></div>
              <p><span class="2ndrotate">Web Design, Brand Identity, Promotion</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- About -->
    <section id="about" class="home-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="section-heading">
              <h2>Tentang Kita</h2>
              <div class="heading-line"></div>
              <p>{{ $home->about_sentence }}</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-md-6 about-img">
            <img src="{{ $home->about_image }}" alt="">
          </div>

          <div class="col-md-6 content">
            <h2>{{ $home->about_title }}</h2>
            <h3>{{ $home->about_hint }}</h3>
            <p>{{ $home->about_description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Parallax 1 -->
    <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="color-light">
              <h2 class="wow bounceInDown" data-wow-delay="0.5s">{{ $home->parallax1_big }}</h2>
              <p class="lead wow bounceInUp" data-wow-delay="1s">{{ $home->parallax1_small }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="home-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="section-heading">
              <h2>Departemen</h2>
              <div class="heading-line"></div>
              <p>{{ $home->department_sentence }}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="carousel-service" class="service carousel slide">

              <!-- slides -->
              <div class="carousel-inner">
                @foreach($deparments as $department)
                <div class="item active">
                  <div class="row">
                    <div class="col-sm-12 col-md-offset-1 col-md-6">
                      <div class="wow bounceInLeft">
                        <h4>{{ $department->name }}</h4>
                        <p>{{ $department->description }}</p>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                      <div class="screenshot wow bounceInRight">
                        <img src="{{ $department->image }}" class="img-responsive" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>

              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-service" data-slide-to="1"></li>
                <li data-target="#carousel-service" data-slide-to="2"></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Works -->
    <section id="portfolio" class="home-section bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="section-heading">
              <h2>Kegiatan</h2>
              <div class="heading-line"></div>
              <p>{{ $home->work_sentence }}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul id="og-grid" class="og-grid">
              @foreach($portofolios as $portofolio)
              <li>
                <a href="#" data-largesrc="{{ $portofolio->image }}" data-title="Portfolio title" data-description="{{ $portofolio->description . '<br>' . $portofolio->date }}">
                  <img src="{{ $portofolio->thumbnail }}" alt=""/>
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Parallax 2 -->
    <section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="clients">
              <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="img/clients/1.png" alt="" /></a></li>
              <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="img/clients/2.png" alt="" /></a></li>
              <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="img/clients/3.png" alt="" /></a></li>
              <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="img/clients/4.png" alt="" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
{{--   <section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Our Team</h2>
            <div class="heading-line"></div>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="img/team/1.jpg" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Art Director</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/2.jpg" alt="" class="img-circle img-responsive" />
            <h4>Thomas Jeffersonn</h4>
            <p>Web Designer</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/3.jpg" alt="" class="img-circle img-responsive" />
            <h4>Nola Maurin</h4>
            <p>Illustrator</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/4.jpg" alt="" class="img-circle img-responsive" />
            <h4>Mira Ladovic</h4>
            <p>Typographer</p>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Contact -->
{{--   <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Contact us</h2>
            <div class="heading-line"></div>
            <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and we will be get in touch with you within 24 hours. </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" class="form-horizontal contactForm" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section> --}}

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              {{ $home->info_address }}<br/>Universitas Brawijaya
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="{{ $home->social_link_facebook }}">
              <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span></a>
            </li>
            <li><a href="{{ $home->social_link_line }}">
              <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-line fa-stack-1x fa-inverse"></i>
              </span></a>
            </li>
            <li><a href="{{ $home->social_link_twitter }}">
              <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span></a>
            </li>
            <li><a href="{{ $home->social_link_instagram }}">
              <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Alstar. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/mb.bgndGallery.js') }}"></script>
  <script src="{{ asset('js/mb.bgndGallery.effects.js') }}"></script>
  <script src="{{ asset('js/jquery.simple-text-rotator.min.js') }}"></script>
  <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nav.js') }}"></script>
  <script src="{{ asset('js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('js/grid.js') }}"></script>
  <script src="{{ asset('js/stellar.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Custom Javascript File -->
  <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>