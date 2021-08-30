<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\AuthTmp;
use App\Model\Presenters\NewPresenter;

class News extends AuthTmp
{
    protected $table = 'news';

    protected $fillable = [
        'id', 'new_title', 'new_featured_image', 'new_content', 'new_short_description', 'ins_id', 'upd_id', 'status',
        'created_at', 'updated_at', 'del_flag'
    ];

    public $timestamps = false;
}
