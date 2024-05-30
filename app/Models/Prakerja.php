<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prakerja extends Model
{
    use HasFactory;
    protected $table = 'prakerjas';
    protected $fillable = ['nama','email','alamat','telpon','pendidikan_terakhir','foto'];

}
