<?php

namespace App\Model;

class CanBo extends Model
{
    protected $table = 'canbo';

    protected $fillable = [
        'macanbo', 'tencanbo', 'chucvu', 'dtcoquan', 'email', 'dtdidong', 'makhoa'
    ];

    public function khoa()
    {
        return $this->belongsTo(Khoa::class, 'macanbo', 'makhoa');
    }
}

























