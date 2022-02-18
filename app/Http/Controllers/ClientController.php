<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function about()
    {
        return view('client.about-us');
    }

    public function contact()
    {
        return view('client.contact-us');
    }

    public function blog()
    {
        return view('client.blog');
    }

    public function blogDetail()
    {
        return view('client.blog-detail');
    }

}
