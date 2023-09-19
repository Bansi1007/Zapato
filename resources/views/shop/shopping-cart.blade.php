<!-- use Illuminate\Support\Facades\Auth; -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products Page</title>
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
                <a class="d-flex align-items-center text-dark text-decoration-none" href="{{ route('products') }}">
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
                    <!-- if (Auth::check()) {
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('signout') }}">Logout</a>
                    }) -->
                </nav>
            </div>
        </header>
        <div class="row">
            @if(Session::has('cart'))

            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Quantity</th>
                        <th>Product name</th>
                        <th>Total Amount</th>
                        <!--<th>Actions</th>
                        <th>Actions</th>-->
                    </tr>
                </thead>
                @foreach($products as $product)

                <tr>
                    <td>
                        <p class="fw-normal mb-1">{{ $product['qty'] }}</p>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{$product['item']['productimg']}}" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $product['item']['productname'] }}</p>

                            </div>
                        </div>
                    </td>

                    <td>
                        <span class="badge badge-success rounded-pill d-inline" style="color:#20a828">CA$ {{ $product['price'] }}</span>
                    </td>
                     <!--<td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Reduce by 1
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Reduce All
                        </button>
                    </td> -->
                </tr>
                @endforeach

            </table>



        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href = "{{(route('checkout'))}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
        @endif

    </div>
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
    <!-- JavaScript Bundle with Popper -->
    <script crossorigin="anonymous" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>