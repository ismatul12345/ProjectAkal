<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCustomer extends Controller
{
    public function register()
    {
      $data = new Customer();
            $data->nama = $request->input('nama');
            $data->email = $request->input('email');
            $data->password = $request->input('password');
            $data->konfirmasi_password = $request->('konfirmasi_password')
            $data->save();
            return redirect()->route('showindex')->with('alert-success','Data berhasil ditambahkan!');
    }

      public function doLogin(Request $request)
      {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:3'
        ]);

        $data =  array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
             );

         // dd(Users::get());

        if (Auth::guard()->attempt($data))
        {
            return redirect()->route('showindex')->with('alert',  'Login Success');
        }
        else
        {
            return back()->with('alert', 'Wrong login details');
        }
    }

    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->flush();

        return redirect('/login');
    }

    protected function guard()
    {
        return Auth::guard();
    }

}
