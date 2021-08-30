<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\AuthTmp;
use App\Model\Presenters\NewPresenter;

class Projects extends AuthTmp
{
    protected $table = 'projects';

    protected $fillable = [
        'id', 'name', 'country', 'avatar', 'created_at', 'updated_at', 'del_flag'
    ];

    public $timestamps = false;
}
