<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class ControllerCustomer extends Controller
{
    public function daftar(Request $request)
    {
        $this->validate($request, [
          'nama'   => 'required',
          'jenis_kelamin'   => 'required',
          'email' => 'required',
          'password' => 'required',
          'konfirmasi_password' => 'required'        ]);

      $data = new Customer();
            $data->nama = $request->input('nama');
            $data->jenis_kelamin = $request->input('jenis_kelamin');
            $data->email = $request->input('email');
            $data->password = $request->input('password');
            $data->konfirmasi_password = $request->input('konfirmasi_password');
            $data->save();
            return redirect()->route('showindex')->with('alert-success','Data berhasil ditambahkan!');
    }

      public function doLogin(Request $request)
      {
        $this->validate($request, [
        $email = $request->input('email'),
        $password = $request->input('password')
        ]);
        $data = Customer::where('email', $email)
            ->where('password', $password)->get();
      if(count($data) > 0){
        return redirect()->route('showindex')->with('alert',  'Login Success');

      }
      else{
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
