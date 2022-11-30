<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = "hoa_dons";
    protected $fillable = ["idSanPham","idTaiKhoan","KichThuoc","SoLuong"];
}
