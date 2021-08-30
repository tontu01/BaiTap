<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Base\FrontendController as BaseFrontendController;
use App\Model\Entities\News;
use App\Model\Entities\Projects;

class FrontendController extends BaseFrontendController
{
    public function index()
    {
        $news = News::where('del_flag', delFlagOn())->take(8)->get();
        $projects = Projects::where('del_flag', delFlagOn())->take(12)->get();

        $viewData = [
            'news' => $news,
            'projects' => $projects,
        ];

        return view('frontend.index', $viewData);
    }
}
