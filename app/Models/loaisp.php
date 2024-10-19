<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    protected $table = 'loaisp';
    public $primaryKey = 'id';
    protected $attributes = ['anHien'=>0,'thuTu'=>1];
    protected $dates = [];
    protected $fillable = ['tenLoai', 'thuTu','anHien'];
    use HasFactory;
}
