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
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('products') }}">Products</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('support') }}">Support</a>
                    <a class="py-2 text-dark text-decoration-none" href="#">Cart</a>
                </nav>
            </div>
        </header>

        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img alt="Sample image" class="img-fluid" src="https://img.freepik.com/free-vector/shoe-store-scene-with-young-guy-chooses-new-pair-running-sneakers-department-sports-shoes-male-consultant-helps-buyer-with-purchase_575670-928.jpg?w=2000">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form method="POST" action="{{ route('customlogin') }}">
                            @csrf
                            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                                <button class="btn btn-primary btn-floating mx-1" type="button">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button class="btn btn-primary btn-floating mx-1" type="button">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button class="btn btn-primary btn-floating mx-1" type="button">
                                    <i class="fab fa-linkedin-in"></i>
                                </button>
                            </div>

                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">Or</p>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input class="form-control form-control-lg" id="form3Example3" placeholder="Enter a valid email address" type="email" name="email" />
                                <label class="form-label" for="form3Example3">Email address</label>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input class="form-control form-control-lg" id="form3Example4" placeholder="Enter password" type="password" name="password" />
                                <label class="form-label" for="form3Example4">Password</label>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">
                                    <input class="form-check-input me-2" id="form2Example3" type="checkbox" value="" />
                                    <label class="form-check-label" for="form2Example3">
                                        Remember me
                                    </label>
                                </div>
                                <a class="text-body" href="#!">Forgot password?</a>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" type="submit">Login
                                </button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a class="link-danger" href="{{ route('registration') }}">Register</a></p>
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <p class="small fw-bold mt-2 pt-1 mb-0">If you are an admin then login <a class="link-success" href="#!">Here</a></p>
                            </div>
                        </form>
                    </div>
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
                                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Men</a></li>
                                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Women</a></li>
                                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Kids</a></li>
                                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Accessories</a></li>
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