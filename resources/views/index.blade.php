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
  <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/camera.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="{{asset('assets/color/default.css')}}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('assets/ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="{{asset('assets/ico/favicon.png')}}" />

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
                      <a href="{{ route('frontend.abouts') }}" id="aboutbutton">ABOUT </a>
                    </li>
                    <li>
                      <a href="{{ route('frontend.blogs')}}"  id="blogsbutton">BLOGS</a>
                    </li>
                    <li>
                      <a href="{{ route('frontend.contact') }}"  id="Contactbutton">CONTACT </a>
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

    <!-- section featured -->
    <section id="featured">

      <!-- slideshow start here -->

      <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="{{asset('assets/img/slides/camera/slide1/img1.jpg')}}">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Great template for <span class="colored">multi usage</span></strong></h2>
                  <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>

                </div>
                <div class="span6">
                  <img src="{{asset('assets/img/slides/camera/slide1/screen.png')}}" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="{{asset('assets/img/slides/camera/slide2/img1.jpg')}}">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <img src="{{asset('assets/img/slides/camera/slide2/iMac.png')}}" alt="" />
                </div>
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Put your <span class="colored">Opt in form</span></strong></h2>
                  <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
                  <form>
                    <!-- <div class="input-append">
                      <input class="span3 input-large" type="text">
                      <button class="btn btn-theme btn-large" type="submit">Subscribe</button>
                    </div> -->
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- slide 3 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span12 aligncenter">
                  <h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and <span class="colored">cross broswer</span> compatibility</strong></h2>
                  <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                  <img src="{{asset('assets/img/slides/camera/slide3/browsers.png')}}" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- slideshow end here -->
 </section>
    

            <div class="row" style="margin-top: 70px;justify-content: center;display: flex;">

              <div class="span3">
                <div class="pricing-box-wrap animated-fast flyIn">
                  <div class="pricing-heading">
                    <h3>Very <strong>Basic</strong></h3>
                  </div>
                  <div class="pricing-terms">
                    <h6>&#36;15.00 / Month</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i> 100 applications</li>
                      <li><i class="icon-ok"></i> 24x7 support available</li>
                      <li><i class="icon-ok"></i> No hidden fees</li>
                      <li><i class="icon-ok"></i> Free 30-days trial</li>
                      <li><i class="icon-ok"></i> Stop anytime easily</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i> Sign Up</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-wrap animated-fast flyIn">
                  <div class="pricing-heading">
                    <h3>Simple <strong>Choice</strong></h3>
                  </div>
                  <div class="pricing-terms">
                    <h6>&#36;20.00 / Month</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i> 100 applications</li>
                      <li><i class="icon-ok"></i> 24x7 support available</li>
                      <li><i class="icon-ok"></i> No hidden fees</li>
                      <li><i class="icon-ok"></i> Free 30-days trial</li>
                      <li><i class="icon-ok"></i> Stop anytime easily</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i> Sign Up</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-wrap special animated-slow flyIn">
                  <div class="pricing-heading">
                    <h3>Special <strong>Choice</strong></h3>
                  </div>
                  <div class="pricing-terms">
                    <h6>&#36;15.00 / Month</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i> 100 applications</li>
                      <li><i class="icon-ok"></i> 24x7 support available</li>
                      <li><i class="icon-ok"></i> No hidden fees</li>
                      <li><i class="icon-ok"></i> Free 30-days trial</li>
                      <li><i class="icon-ok"></i> Stop anytime easily</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i> Sign Up</a>
                  </div>
                </div>
              </div>

              <div class="span3">
                <div class="pricing-box-wrap animated flyIn">
                  <div class="pricing-heading">
                    <h3>Just <strong>Happy</strong></h3>
                  </div>
                  <div class="pricing-terms">
                    <h6>&#36;15.00 / Month</h6>
                  </div>
                  <div class="pricing-content">
                    <ul>
                      <li><i class="icon-ok"></i> 100 applications</li>
                      <li><i class="icon-ok"></i> 24x7 support available</li>
                      <li><i class="icon-ok"></i> No hidden fees</li>
                      <li><i class="icon-ok"></i> Free 30-days trial</li>
                      <li><i class="icon-ok"></i> Stop anytime easily</li>
                    </ul>
                  </div>
                  <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-chevron-down"></i> Sign Up</a>
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div>



        <div class="row" style="display: flex;justify-content: center;">
          <div class="span12 aligncenter">
            <h3 class="title">What people <strong>saying</strong> about us</h3>
            <div class="blankline30"></div>

            <ul class="bxslider">
              <li>
                <blockquote>
                  Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                  feugiat.
                </blockquote>
                <div>
                  <a href="#">www.companyname.com</a>
                </div>
              </li>
              </ul>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">Our company</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Our support</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Get in touch</h5>
              <address>
							<strong>company Inc.</strong><br>
							E-404, Shree Rang Heights, & Arcade Nr,Kudasan<br>
                            Gandhinagar, Gujarat 382421
						</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Subscribe newsletter</h5>
              <p>
                Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.
              </p>


              @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('submit.email') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" >
        @error('email')
            <span style="color: red;">{{ $email }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
      


            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; urja patel. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->


  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>

  <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
  <script src="{{asset('assets/js/toucheffects.js')}}"></script>
  <script src="{{asset('assets/js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset('assets/js/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('assets/js/camera/camera.js')}}"></script>
  <script src="{{asset('assets/js/camera/setting.js')}}"></script>

  <script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('assets/js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset('assets/js/portfolio/setting.js')}}"></script>

  <script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('assets/js/animate.js')}}"></script>
  <script src="{{asset('assets/js/inview.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>
