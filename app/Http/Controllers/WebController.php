<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drama;

class WebController extends Controller
{
    public function index()
    {
      $recently_dramas = Drama::orderBy('created_at','DESC')->take(3)->get();


      return view('web.index', compact('recently_dramas'));
    }
}
