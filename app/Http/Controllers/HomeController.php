<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\sendemail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sendmail2()
    {
    // sendemail::dispatch();

        $details = [
            'title' => 'Mail from HaffizSamad.live',
            'body' => 'This is for testing email using mailjet'
        ];
        \Mail::to('haffiz_ito@yahoo.com')->send(new \App\Mail\testMail($details));
        dd('s');
        return view('home');
    }
}
