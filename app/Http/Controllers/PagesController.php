<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
	public function contact(){
		$name = 'Zeeshan';
		return view('pages.contact')->with('name', $name);
	}

	public function about(){
		//$people =[];
		$people = [
			'Zeeshan', 'Aqeel', 'Ashar'
		];
		return view('pages.about', compact('people'));
	}
}
