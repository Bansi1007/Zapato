<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('ContactUs');
    }
    public function contact_form(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'issue' => 'required',
            'message' => 'required'
        ]);

        $data = $request->all();

        $this->ContactUs_create($data);
        dd($data);
        //    $contact_us->save();
        try{
            
            Mail::to($data['email']->send(new MailNotify($data)));
        }catch(\Exception $th ){

        }
        return redirect('ContactUs')->with('status', 'updated');;
    }
    public function ContactUs_create(array $data)
    {
        return ContactUs::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'issue' => $data['issue'],
            'message' => $data['message']
        ]);
    }
}
