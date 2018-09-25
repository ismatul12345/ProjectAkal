<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerView extends Controller
{
    
    public function index()
    {
    	$page = 'index';//nama view atau blade yg tadi dibuat

    	  return view($page);
    }

    public function productDetail()
    {
    	$page = 'productdetail';//nama view atau blade yg tadi dibuat edit lsh m

    	  return view($page);
    }
    public function beli()
    {
        $page ='beli';
        return view($page);
    }
    public function daftar()
    {
        $page = 'daftar';
        return view($page);
    }
    public function masuk()
    {
        $page ='masuk';
        return view($page);
    }

}
