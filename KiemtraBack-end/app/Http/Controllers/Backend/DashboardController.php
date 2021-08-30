<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;
use App\Repositories\CategoryCourseRepository;
use App\Repositories\CoursesRepository;
use App\Repositories\LessionRepository;
use App\Repositories\NewRepository;
use App\Repositories\TeacherRepository;

class DashboardController extends BackendController
{
    public function index()
    {
        $admin = backendCurrentUser();

        $viewData = [
            'admin' => $admin
        ];

        return view('backend.dashboard.index', $viewData);
    }
}
