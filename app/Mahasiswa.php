<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //mengganti nama tabel database yang di akses/memberitahukan laravel bahwa tabel nya mahasiswa
    protected $table = 'mahasiswa';
}
