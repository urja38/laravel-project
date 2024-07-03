<!-- resources/views/layouts/footer.blade.php -->

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
                <strong>Company Inc.</strong><br>
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
                <div class="alert alert-danger mt-3">
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
                  <input type="email" id="email" name="email" class="form-control" required>
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
                <p><span>&copy; Urja Patel. All right reserved</span></p>
              </div>
            </div>
            <div class="span6">
              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript -->
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('assets/js/toucheffects.js') }}"></script>
  <script src="{{ asset('assets/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('assets/js/camera/camera.js') }}"></script>
  <script src="{{ asset('assets/js/camera/setting.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/setting.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('assets/js/animate.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
