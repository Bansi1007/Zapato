<!doctype html>
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
    <link href="css/FAQ.css" rel="stylesheet">

    <!-- Place favicon.ico in the root directory -->

    <!-- <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/adminLogin.css" rel="stylesheet"> -->

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

        <div class="wrapper bg-white rounded shadow">

            <div class="h2 text-center fw-bold">Frequently Asked Questions</div>
            <div class="h3 text-primary text-center">How Can We Help You?</div>
            <div class="d-flex justify-content-center">
                <div class="search w-75 d-flex align-items-center"> <span class="fas fa-search text-dark"></span>
                    <input type="text" class="form-control" placeholder="Describe Your Issue/Concern">
                </div>
            </div>
            <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Sizing FAQ </button> </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                        <div class="accordion-body p-0">
                            <ul class="list-unstyled m-0">
                                <li><a href="#">How Do I Know What Size To Order?</a></li>
                                <li><a href="#">Are Larger Sizes Available?</a></li>
                                <li><a href="#">My Child Has Chubby Feet. Will Zapato Footwear Shoes Fit
                                        Him/Her?</a>
                                </li>
                                <li><a href="#">Is There Variation In Fit Between The Different Styles?</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Care FAQ </button> </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                        <div class="accordion-body p-0">
                            <ul class="list-unstyled m-0">
                                <li><a href="#">Are Zapato FootWear Shoes Washable?</a></li>
                                <li><a href="#">Are Zapato Footwear Shoes Waterproof?</a></li>
                                <li><a href="#">Why Aren’t My Child’s Metallic Shoes As Shiny As When I First
                                        Purchased
                                        Them?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Orders/Returns FAQ </button> </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                        <div class="accordion-body p-0">
                            <ul class="list-unstyled m-0">
                                <li><a href="#">Where Is My Order?</a></li>
                                <li><a href="#">What If I Need To Change My Order?</a></li>
                                <li><a href="#">What Payment Methods Do You Accept?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Shipping FAQ</button> </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                        <div class="accordion-body p-0">
                            <ul class="list-unstyled m-0">
                                <li><a href="#">How Much Do You Charge For Shipping?</a></li>
                                <li><a href="#">Where All Do You Ship?</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> Product FAQ </button> </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                        <div class="accordion-body p-0">
                            <ul class="list-unstyled m-0">
                                <li><a href="#">Where Are Zapato Footwear Shoes Made?</a></li>
                                <li><a href="#">How Did You Choose The Style Names?</a></li>
                                <li><a href="#">Are Your Shoes Orthopedic Shoes?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Wholesale FAQ </button> </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                        <div class="accordion-body p-0">
                            <ul class="list-unstyled m-0">
                                <li><a href="#">How Do I Become A Zapato Footwear Retailer?</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
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