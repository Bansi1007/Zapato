<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing Page</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- CSS only -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

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

        <div class="bg-light">
            <div class="container py-5">
                <div class="row h-100 align-items-center py-5">
                    <div class="col-lg-6">
                        <h1 class="display-4">Join Us</h1>
                        <p class="lead text-muted mb-0">From the way we value our people, to the way we do business, and
                            the way we live our values, Zapato is exceptional. Take a look to find out more about what
                            makes Zapato such a great place to work..</p>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block"><img src="img/joinus.png" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/talent.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Talent Development</h5><span class="small text-uppercase text-muted">Determined to
                        learn</span>
                </div>
            </div>
            <!-- End-->

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/diversity.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Diversity</h5><span class="small text-uppercase text-muted">A team that’s
                        diverse</span>
                </div>
            </div>
            <!-- End-->

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/cp.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Career Progression</h5><span class="small text-uppercase text-muted">Passionate
                        about your progress</span>
                </div>
            </div>
            <!-- End-->

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="img/giveback.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Give Back</h5><span class="small text-uppercase text-muted">We make a
                        difference</span>
                </div>
            </div>
            <!-- End-->

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

        <!-- JavaScript Bundle with Popper -->
        <script crossorigin="anonymous" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>