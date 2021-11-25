<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $table = 'borrowing';
    protected $fillable = ['nama_peminjam','judul buku','tgl_pinjam','tgl_kembali','ket'];
}
