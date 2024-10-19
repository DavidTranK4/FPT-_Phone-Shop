<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;

protected $table='dienthoai';
protected $primarykey='id';
protected $dates=['ngayCapNhat'];
protected $fillable=[
    'tenDT',
    'id',
    'MoTa',
    'gia',
    'idLoai',
    'ngayCapNhat',
    'urlHinh',
    'baiViet'
];
}
