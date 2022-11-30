<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = "san_phams";
    protected $fillable = ["id" , "LoaiSanPham","imgSanPham","TenSanPham","TenTiengAnh","GiaTien"];
}
