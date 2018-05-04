<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CEA - Chayanta</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{!! asset('css/creative.min.css') !!}" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">CEA Chayanta</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#comunicados">Comunicados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Carreras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Actividades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('home') }}">Sistema</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Centro de Educacion Alternativa "Chayanta"</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Norte Potosi - Bolivia</p>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-warning" id="about">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-book mb-3 sr-icons"></i>
              <h3 class="mb-3">C.E.A.</h3>
              <p class="text-muted mb-0">Sistemas Computacionales, Agropecuaria, Confeccion Textil, Artesania, Belleza Integral, Tejido, Industrial</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane mb-3 sr-icons"></i>
              <h3 class="mb-3">Objetivos</h3>
              <p class="text-muted mb-0">Formar jovenes y adultos capaces de generar desarrollo socio economico en le distrito, previo equipamiento de sus recursos tecnicos y la capacitacion. Para un buen desempeño en el mercado</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-university mb-3 sr-icons"></i>
              <h3 class="mb-3">Mision</h3>
              <p class="text-muted mb-0">Promover la calidad educativa a traves de la convertura e implementacion de la educacion tecnica alternativa de personas jovenes y adultas</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-eye mb-3 sr-icons"></i>
              <h3 class="mb-3">Vision</h3>
              <p class="text-muted mb-0">Implementar el nivel de educacion de personas jovenes y adultas como parte integral y complementaria, y potencialidades que permitan satisfacer sus espectativas de la vida productiva</p>              
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="comunicados" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Comunicados</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">

          <div id="comunicados_lista"></div>

          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Nuestras Carreras</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            
            <div id="carreras_lista"></div>
        
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Actividades y Eventos</h2>
            <p>Direccion de Bienestar Social</p>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/7.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/7.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/8.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/8.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/9.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/9.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/10.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/10.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/11.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/11.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/12.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/12.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/13.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/13.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/14.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/14.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/15.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/15.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/16.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/16.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/17.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/17.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-2 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/18.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/18.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>


    <section id="contact" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contactanos</h2>
            <hr class="my-4">
            <p class="mb-5">La direccion del Centro de Educacion Aternativa "Chayanta", como un apoyo mas a los jovenes y adulto, te invita a ser parte de esta grandiosa institucion!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-map-marker fa-3x mb-3 sr-contact"></i>
            <p>Calle Potosi entre Junin y Avaroa (Norte Potosi - Chayanta)</p>
          </div>
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>71825198</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:cris41282@gmail.com">cris41282@gmail.com</a>
            </p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-whatsapp fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="https://api.whatsapp.com/send?phone=59176137269" target="_black">71825198</a>
            </p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-facebook fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="https://www.facebook.com/smamanimamani" target="_back">Facebook</a>
            </p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-twitter fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="https://twitter.com/kanito777" target="_black">twitter</a>
            </p>
          </div>
        </div>
      </div>
    </section>


    <!-- Main Footer -->
    <footer class="main-footer" style="max-height: 100px;text-align: center">
        <strong>Copyright © <a href="https://github.com/saulmamani" target="_black">Saul Mamani M.</a>.</strong> Todos los derechos reservados.
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{!! asset('js/creative.min.js') !!}"></script>

  </body>

  <script type="text/javascript">  
    $(document).ready(function() {
        $("#comunicados_lista").load("{{ url('comunicados_lista') }}");
        $("#carreras_lista").load("{{ url('carreras_lista') }}");
    });
  </script>

</html>
