<?php

namespace App\Model;

class Khoa extends Model
{
    protected $table = 'khoa';

    protected $fillable = [
        'MaKhoa', 'TenKhoa', 'DiaChi', 'DienThoai'
    ];
}
