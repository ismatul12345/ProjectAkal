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
          'email' => 'required|email',
          'password' => 'required|min:6',
          'konfirmasi_password' => 'required'        ]);

      $data = new Customer();
            $data->nama = $request->get('nama');
            $data->jenis_kelamin = $request->get('jenis_kelamin');
            $data->email = $request->get('email');
            $data->password = $request->get('password');
            $data->konfirmasi_password = $request->get('konfirmasi_password');
            $data->save();
            return redirect()->route('showindex')->with('alert-success','Data berhasil ditambahkan!');
    }

      public function doLogin(Request $request)
      {
        request()->validate([
          'email' => 'required|email',
          'password'=> 'required',
          'captcha' => 'required|captcha' ],
        ['captcha.captcha' => 'Invalid captcha code.']);
        $email =  $request->get('email');
        $password = $request->get('password');

        $data = Customer::where('email', $email)
            ->where('password', $password)->get();
      if(count($data) > 0){
        return redirect()->route('showindex')->with('alert',  'Login Success');

      }
      else{
        return back()->with('alert', 'Wrong login details');
      }
    }

    public function refreshCaptcha()
    {
      return response()->json(['captcha'=> captcha_img()]);
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
