<?php

namespace App\Model;

class Lop extends Model
{
    protected $table = 'lop';

    protected $fillable = [
        'MaLop', 'TenLop', 'MaKhoa', 'MaHeDT', 'MaKhoaHoc'
    ];

    public function heDaoTao()
    {
        return $this->belongsTo(HeDaoTao::class, 'MaHeDT', 'MaHeDT');
    }

    public function khoaHoc()
    {
        return $this->belongsTo(KhoaHoc::class, 'MaKhoaHoc', 'MaKhoaHoc');
    }

    public function khoa()
    {
        return $this->belongsTo(Khoa::class, 'MaKhoa', 'MaKhoa');
    }
}


















