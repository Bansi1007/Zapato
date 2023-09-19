<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\ContactUs;
use App\Models\loc_list;
use App\Models\about;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Mail\YourMail;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            //            return redirect()->intended('dashboard')
            //                ->withSuccess('Signed in');
            $listOfproducts = products::all();
            //return redirect("dashboard",['products'=>$listOfproducts])->withSuccess('You have signed-in');
            //return redirect()->back()->with('products',$listOfproducts);

            //return redirect('dashboard')->with('products', $listOfproducts)->withSuccess('Signed In');
            return view('dashboard', ['products' => $listOfproducts]);
        } else {
            error_log('Inside custom else');
            //return redirect("login")->withSuccess('Login details are not valid');
            return redirect("login")->with('message', 'Login details are not valid!');
        }
    }

    public function products()
    {
        $listOfproducts = products::all();
        //return redirect("dashboard",['products'=>$listOfproducts])->withSuccess('You have signed-in');
        //return redirect()->back()->with('products',$listOfproducts);

        //return redirect('dashboard')->with('products', $listOfproducts);
        return view('dashboard', ['products' => $listOfproducts]);
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function careers()
    {
        return view('careers');
    }
    public function support()
    {
        return view('support');
    }
    public function AboutUs()
    {
        $abouts = about::all();
        return view('AboutUs', ['about' => $abouts]);
        // return view('AboutUs');
    }
    public function ContactUs()
    {
        return view('ContactUs');
    }
    public function men()
    {
        $listOfproducts = products::all();
        $products_gen = [];
        for ($i = 0; $i < sizeof($listOfproducts); $i++) {
            if ($listOfproducts[$i]->productdesc2 == 'Men') {
                array_push($products_gen, $listOfproducts[$i]);
            }
        }
        return view('dashboard', ['products' => $products_gen]);
    }
    public function women()
    {
        $listOfproducts = products::all();
        $products_gen = [];
        for ($i = 0; $i < sizeof($listOfproducts); $i++) {
            if ($listOfproducts[$i]->productdesc2 == 'Women') {
                array_push($products_gen, $listOfproducts[$i]);
            }
        }
        return view('dashboard', ['products' => $products_gen]);
    }

    public function kids()
    {
        $listOfproducts = products::all();
        $products_gen = [];
        for ($i = 0; $i < sizeof($listOfproducts); $i++) {
            if ($listOfproducts[$i]->productdesc2 == 'Kids') {
                array_push($products_gen, $listOfproducts[$i]);
            }
        }
        return view('dashboard', ['products' => $products_gen]);
    }

    public function accessories()
    {
        $listOfproducts = products::all();
        $products_gen = [];
        for ($i = 0; $i < sizeof($listOfproducts); $i++) {
            if ($listOfproducts[$i]->productdesc2 == 'Accessories') {
                array_push($products_gen, $listOfproducts[$i]);
            }
        }
        return view('dashboard', ['products' => $products_gen]);
    }

    public function PostForm(Request $request)
    {
        $contact_us = new ContactUs();
        $contact_us->name = $request->name;
        $contact_us->surname = $request->surname;
        $contact_us->email = $request->email;
        $contact_us->need = $request->need;
        $contact_us->message = $request->message;

        $contact_us->save();

        $to = $request->email;

        //dd($contact_us->email);
        Mail::raw('We have heard you', function ($m) use ($to) {
            $m->to($to)->subject('Request Received-Zapato team')->from('zapato@customerCare.com', 'Zapato');
        });
        
        return redirect('ContactUs')->with('status', 'Thanks For Reaching Out To Us !');;
    }

    public function postCheckout(Request $request){
        return view('shop.success');
    }

    public function Social()
    {
        return view('Social');
    }
    public function PaymentsShipping()
    {
        return view('PaymentsShipping');
    }
    public function FAQ()
    {
        return view('FAQ');
    }
    public function locations()
    {
        $lists = loc_list::all();
        $alllist = array($lists);
        return view('locations', ['lists' => $lists]);
    }
    public function cancellations()
    {
        return view('cancellations');
    }
    

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $listOfproducts = products::all();
        //return redirect("dashboard",['products'=>$listOfproducts])->withSuccess('You have signed-in');
        //return redirect()->back()->with('products',$listOfproducts);
        return redirect('dashboard')->with('products', $listOfproducts);
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            error_log('Inside dashboard if');
            return view('dashboard');
        } else {
            error_log('Inside dashboard else');
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function signOut()
    {
        error_log('Inside signout function');
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


    public function getAddToCart(Request $request, $id)
    {
        $product = products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        $listOfproducts = products::all();
        //return redirect("dashboard",['products'=>$listOfproducts])->withSuccess('You have signed-in');
        //return redirect()->back()->with('products',$listOfproducts);

        //return redirect('dashboard')->with('products', $listOfproducts)->withSuccess('Signed In');
        return view('dashboard', ['products' => $listOfproducts]);
    }

    public function getShoppingCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        } else {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        }
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total'=>$total]);
    }
}
