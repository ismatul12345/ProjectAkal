<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Product;
class ControllerView extends Controller
{

    public function index()
    {
    	$page = 'index';//nama view atau blade yg tadi dibuat
      $data = Product::all();
 return view($page)->with(compact('data'));
    }

    public function detailproduct($id)
    {
        $page='productdetail';
        $data = Product::findOrFail($id);
        return view($page)->with(compact('data'));

    }

    public function beli()
    {
        $page ='beli';
        if(Session::get('login')){
          return view ($page);
        }else {
          return view('masuk');
        }
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
    public function homePage()
    {
      $page ='homepage';
      if(Session::get('login')){
        $data = Product::all();
        return view($page)->with(compact('data'));

      }else {
        return view('masuk');
      }

    }
    public function detailproductBaru($id)
    {
        $page='detailproductbaru';
        if(Session::get('login')){
          $data = Product::findOrFail($id);
          return view($page)->with(compact('data'));
        }else {
          return view('masuk');
        }
    }

}
