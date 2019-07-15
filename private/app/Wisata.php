<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Wisata extends Model

{
    use SoftDeletes;
    protected $table = 'wisata';
    protected $fillable = ['nama_wisata','kategori','lokasi','image','deskripsi'];
}
