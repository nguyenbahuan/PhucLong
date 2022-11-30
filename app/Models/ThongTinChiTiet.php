<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongTinChiTiet extends Model
{
    use HasFactory;
    protected $table = "thong_tin_chi_tiets";
    protected $fillable = ["Ten","GioiTinh","NamSinh","DiaChi"];
}
