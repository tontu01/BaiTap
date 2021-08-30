<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\CanBo;
use App\Model\Khoa;

class FrontendController extends Controller
{
    public function getKhoa()
    {
        $entities = Khoa::all();
        return view('frontend.khoa', ['entities' => $entities]);
    }

    public function getCanbo()
    {
        $query = CanBo::select();

        $search = trimValuesArray(request()->all());
        if (arrayGet($search, 'macanbo')) {
            $query->where('macanbo', '=',  arrayGet($search, 'macanbo'));
        }
        if (arrayGet($search, 'tencanbo')) {
            $query->where('tencanbo', 'like', '%' . arrayGet($search, 'tencanbo') . '%');
        }
        if (arrayGet($search, 'dtdidong')) {
            $query->where('dtdidong', 'like', '%' . arrayGet($search, 'dtdidong') . '%');
        }
        if (arrayGet($search, 'makhoa')) {
            $query->where('makhoa', 'like', '%' . arrayGet($search, 'makhoa') . '%');
        }

        $entities = $query->get();
        $listKhoa = Khoa::all();

        $viewData = [
            'entities' => $entities,
            'listKhoa' => $listKhoa,
        ];

        return view('frontend.canbo', $viewData);
    }
}
