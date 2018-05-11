<?php

namespace Apurva\Mypackage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MypackageController extends Controller
{
    public function display()
    {
    	echo "This is a display function from my package controller";
    }
}
  