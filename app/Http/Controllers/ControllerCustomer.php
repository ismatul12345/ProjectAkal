<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class ControllerCustomer extends Controller
{
    public function daftar(Request $request)
    {
        $this->validate($request, [
          'nama'   => 'required',        // ini adalah pengambilan data yg di Request
          'jenis_kelamin'   => 'required', // atau yg dimasukan oleh user ketika daftar
          'email' => 'required|email',    // validate itu untuk memvalidasi inputan
          'password' => 'required|min:6',
          'konfirmasi_password' => 'required'        ]);

      $data = new Customer();  //ini declarasi sekaligus query untuk membuat data baru
            $data->nama = $request->get('nama');  //ini proses memsukan data dari request diatas
            $data->jenis_kelamin = $request->get('jenis_kelamin'); // di masukan pada masing2 kolom yg ada pada
            $data->email = $request->get('email'); // tabel Customer
            $data->password = $request->get('password');
            $data->konfirmasi_password = $request->get('konfirmasi_password');
            $data->save(); // ini fungsi save menyimpan data ke tabel Customer
            return redirect()->route('showindex')->with('alert-success','Data berhasil ditambahkan!');// ini berfungsi untuk ketika data berhasil di save maka akan menuju route show index
    }

      public function doLogin(Request $request)//funsi Login
      {
        request()->validate([
          'email' => 'required|email', // pengambilan data email yg di request pengguna pada form login
          'password'=> 'required',
          'captcha' => 'required|captcha' ], // pengambilan code captcha
        ['captcha.captcha' => 'Invalid captcha code.']); //ini fungsi untuk mengecek code captcha bener atau salah
        $email =  $request->get('email'); // liat keterangan di diatas
        $password = $request->get('password');

        $data = Customer::where('email', $email)// query dengan where jika email yg ada di tabel customer
            ->where('password', $password)->first();// dengan yg di request oleh user sama
      if(count($data) > 0){ //disini di cek ada ngga data yg sama jika ada maka masuk ke route show index
        return redirect()->route('showhomepage')->with('alert',  'Login Success');

      }
      else{
        return back()->with('alert', 'Wrong login details');
      }
    }

    public function refreshCaptcha()  //fungsi untuk merefresh chapta
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
