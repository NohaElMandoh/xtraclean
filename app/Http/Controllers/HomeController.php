<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }
    public function contactUs()
    {
        return view('front.contactUs');
    }
    public function services()
    {
        return view('front.services');
    }
    public function contact_us_submit(Request $request)
    {
     
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|max:255',
            'message'     => 'required|string|max:255',
          
        ]);
        $input = $request->all();

        $saved = Contact::create($input);

        if ($saved) {

            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
}
