<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta content="" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <meta content="" property="og:title">
  <meta content="" property="og:type">
  <meta content="" property="og:url">
  <meta content="" property="og:image">


  <link href="site.webmanifest" rel="manifest">
  <link href="icon.png" rel="apple-touch-icon">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
  <!-- Place favicon.ico in the root directory -->

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/adminLogin.css" rel="stylesheet">

  <meta content="#fafafa" name="theme-color">
</head>

<body>
  <div class="container mt-4">
    @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <div class="container py-3">
      <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
          <a class="d-flex align-items-center text-dark text-decoration-none" href="/">
            <img alt="logo" src="https://t4.ftcdn.net/jpg/04/98/21/95/360_F_498219595_yh4o1qdkJqCLJC0X0b5XKHU8jyRux86L.jpg" style="width: 100px;"> <span class="fs-4">Zapato</span>
          </a>

          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            @if (Auth::check())
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Hi {{Auth::user()->name}}</a>
            @else
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a>
            @endif
            <!-- <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a> -->
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('products') }}">Products</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('support') }}">Support</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('shoppingCart')}}">Cart<span class="badge" style="color:#000">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span></a>
            @if (Auth::check())
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('signout') }}">Logout</a>
            @endif
          </nav>
        </div>
      </header>

      <div class="container">
        <div class=" text-center mt-5 ">

          <h1>Get In Touch</h1>


        </div>

        <div class="row ">
          <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
              <div class="card-body bg-light">

                <div class="container">
                  <form id="contact-form" role="form" method="post" action="{{ route('ContactUs') }}">
                    @csrf
                    <div class="controls">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_name">First Name *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please Enter Your First Name *" required="required" data-error="First Name Is Required.">

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_lastname">Last Name *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please Enter Your Last Name *" required="required" data-error="Last Name Is Required.">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please Enter Your Email *" required="required" data-error="Valid Email Is Required.">

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_need">Please Specify Your Need *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please Specify Your Need.">
                              <option value="" selected disabled>--Select Your Issue--</option>
                              <option>Invoice</option>
                              <option>Order Status</option>
                              <option>Cash Back</option>
                              <option>Other</option>
                            </select>

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Write Your Message Here." rows="4" required="required" data-error="Please, Leave Us A Message."></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" class="btn btn-dark btn-send  pt-2 btn-block" value="Send Message">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>


            </div>
            <!-- /.8 -->

          </div>
          <!-- /.row-->

        </div>
      </div>
      <!-- Footer-->
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img alt="" class="mb-2" height="76" src="https://t4.ftcdn.net/jpg/04/98/21/95/360_F_498219595_yh4o1qdkJqCLJC0X0b5XKHU8jyRux86L.jpg" width="96">
            <small class="d-block mb-3 text-muted">&copy; 2017–2022</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <!-- <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('ContactUs') }}">Contact Us</a></li> -->
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('men') }}">Men</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('women') }}">Women</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('kids') }}">Kids</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('accessories') }}">Accessories</a></li>
              <!-- <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li> -->
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('PaymentsShipping') }}">Payments & Shipping</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('FAQ') }}">FAQ</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('cancellations') }}">Cancellations</a></li>
              <!-- <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li> -->
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <!-- <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">About Us</a></li> -->
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('AboutUs') }}">About Us</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('ContactUs') }}">Contact Us</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('careers') }}">Careers</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('locations') }}">Locations</a></li>
              <!-- <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Social</a></li> -->
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{ route('Social') }}">Social</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>