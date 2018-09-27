<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = [
  'id_customer',
  'nama',
  'jenis_kelamin',
  'email',
  'password',
  'konfirmasi_password',
];
}
