<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Diem;

class StudentController
{
    public function diem()
    {
        $entities = Diem::where('MaSV', frontendCurrentUser()->MaSV)->get();

        $viewData = [
            'entities' => $entities,
        ];

        return view('frontend.student.diem', $viewData);
    }

    public function index()
    {
        $entity = frontendGuard()->user();
        return view('frontend.student.index', ['entity' => $entity]);
    }
}