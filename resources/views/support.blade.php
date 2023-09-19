<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <link href="site.webmanifest" rel="manifest">
    <link href="icon.png" rel="apple-touch-icon">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Place favicon.ico in the root directory -->
    <link href="css/FAQ.css" rel="stylesheet">

    <!-- Place favicon.ico in the root directory -->

    <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/adminLogin.css" rel="stylesheet">

    <meta content="#fafafa" name="theme-color">
</head>

<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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

        <section class="vh-100">
            <div class="bg-light">
                <div class="container py-5">
                    <div class="row h-100 align-items-center py-5">
                        <div class="col-lg-6">
                            <h1 class="display-4">Got A Problem ?</h1>
                            <p class="lead text-muted mb-0"></p>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block"><img src="img/support.jpg" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/acc.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Acount Issues</h5>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/payment.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Payment & Return Issues</h5>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/shipping.jpg" alt="" width="110" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Shipping Issues</h5>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/franchise.jpg" alt="" width="95" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Franshise Us</h5>
                    </div>
                </div>
                <!-- End-->

                <div class="bg-light">
                    <div class="container py-5">
                        <div class="row h-100 align-items-center py-5">

                            <a class="text-center" href="{{ route('ContactUs') }}">Fill Our Form To Get More Details !</a>
                            <br><br>
                            <a class="text-center" href="https://outlook.live.com/owa/">Send An Email !</a>
                        </div>
                    </div>


                    <div class="container py-3">
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

        </section>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <!-- MDB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" type="text/javascript"></script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
</body>

</html>