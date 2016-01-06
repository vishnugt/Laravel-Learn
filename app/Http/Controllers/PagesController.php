<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
    	$data = [];
    	$data['first'] = 'Vishnu';
    	$data['last'] = 'Gt';
    	return view('pages.about', $data);
    }

    public function contact()
    {
        $people = ['Taylor Swift', 'some random', 'omg enough'];
    	return view('pages.contact', compact('people'));
    }
}

