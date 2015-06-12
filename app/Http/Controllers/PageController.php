<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use View;

class PageController extends Controller
{
	public function __construct()
	{
		View::share('website', 'georgepetridis.com');
		View::share('name', 'George Petridis');
	}

    public function home()
    {
    	return view('home')
    		->with('data', trans('copy.home'));
    }
}
