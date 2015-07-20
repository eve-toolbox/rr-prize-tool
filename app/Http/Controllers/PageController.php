<?php

namespace rrPrizeTool\Http\Controllers;

use Illuminate\Http\Request;

use rrPrizeTool\Http\Requests;
use rrPrizeTool\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
      return view('home');
    }
}
