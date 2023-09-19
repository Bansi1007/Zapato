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

        <main>
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <h3>CAN I CANCEL MY ORDER BEFORE IT SHIPS ?</h3>
                        <p>
                            Absolutely! Please contact us at Shop@Zapato.Ca and we will cancel your order as soon as
                            possible.

                            Unfortunately, if your order has already shipped out, you will have to wait for your package
                            to be delivered and initiate a regular return/exchange through the form above.

                            All items marked “Final Sale” are not eligible for cancellation, and may be subject to a 25%
                            restocking fee. Refused shipments, sequential orders, or orders indicative of bot activity
                            may also be subject to a 25% restocking fee if cancelled, and subject to additional shipping
                            fees where applicable.
                        </p>
                        <h3>HOW LONG WILL IT TAKE TO PROCESS MY RETURN OR EXCHANGE IF I SHIP MY ITEM(S) BACK?</h3>
                        <p>
                            Depending on your shipping address, return and exchange times may vary. If you are
                            experiencing a transit delay, please reach out to us at Shop@Size.Ca and we’ll look into
                            your order as soon as possible.
                        </p>
                        <h3>ORDER PROCESSING TIMES & ORDER TRACKING</h3>
                        <p>
                            Orders typically take 1-3 days to process before they ship – excluding weekends and
                            holidays. You will receive an email confirmation with the shipping tracking number when your
                            order ships. Occasionally, we may ship multiple piece orders out from multiple locations to
                            get your order to you as fast as possible. In this case, you will receive an email outlining
                            what was shipped and what is pending. You can also track your order in My Account.
                        </p>
                        <h3>PRE-AUTHORIZATION HOLDS</h3>
                        <p>
                            A preauthorization is the common practice for authorizing electronic transactions and
                            holding the balance for the order placed. This bank hold is temporary, and charges will only
                            be applied towards the items that have been confirmed shipped.

                            Orders including multiple items may be shipped separately.
                        </p>
                        <h3>CANCELLATIONS</h3>
                        <p>
                            Occasionally an item sells out and we may need to cancel your order. If for any reason your
                            item is unavailable, we will notify you by email and your credit card will not be charged.
                        </p>
                    </div>
                </div>
        </main>

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