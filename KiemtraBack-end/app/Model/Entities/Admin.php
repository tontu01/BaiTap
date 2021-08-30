<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\AuthTmp;

class Admin extends AuthTmp
{
    protected $table = 'admin';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'email', 'password', 'ins_date', 'upd_date', 'del_flag'
    ];
}


















