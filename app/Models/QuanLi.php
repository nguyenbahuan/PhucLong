<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLi extends Model
{
    use HasFactory;
    protected $table = "quan_lis";
    protected $fillable = ["TaiKhoan","MatKhau", "ChucVu"];
}
