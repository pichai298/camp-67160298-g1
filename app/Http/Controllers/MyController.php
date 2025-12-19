<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue1;
    public $myvalue = "";
    protected $myvalue2;

    function index(){
        return view('myview.index');
    }

    function info(Request $rep){
        return view('myview.info');
    }

    function calculate(Request $rep){
        echo $rep->input('myview.calculate');
    }

}
