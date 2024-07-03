
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Eterna - Professional bootstrap site template for corporate business</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/camera.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/jquery.bxslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="{{ asset('assets/color/default.css') }}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">

    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> +62 088 999 123</p>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <a href="index.html"></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="{{url('/index')}}"><i class="icon-home" id="homebutton">HOME</i></a>
                    </li>
                    <li>
                      <a href="{{ route('frontend.abouts') }}" id="aboutbutton">ABOUT</a>
                    </li>
                    <li>
                      <a href="{{ route('frontend.blogs') }}" id="blogsbutton">BLOGS</a>
                    </li>
                    <li>
                      <a href="{{ route('frontend.contact') }}" id="Contactbutton">CONTACT</a>
                    </li> 
                    <li>
                      <a href="{{ route('frontend.faqs') }}" id="faqbutton">FAQ</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
