<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
      return view('index');
    }

    function checklogin(Request $request) {
      $this->validate($request, [

      ]);
    }

}
