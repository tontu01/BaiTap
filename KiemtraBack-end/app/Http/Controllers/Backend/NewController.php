<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;
use App\Model\Entities\News;
use App\Repositories\NewRepository;
use Illuminate\Support\Facades\Log;

class NewController extends BackendController
{
    public function index()
    {
        $this->_clearSessionForm();
        $entities = News::where('del_flag', delFlagOn())->orderBy('id', 'desc')->paginate(getBackendPagination());

        $viewData = [
            'entities' => $entities
        ];

        return view('backend.news.index', $viewData);
    }

    public function create()
    {
        return view('backend.news.create');
    }

    public function store()
    {
        try {
            $params = request()->all();

            if (request()->hasFile('new_featured_image')) {
                $fileName = time() . "_"  . request()->file('new_featured_image')->getClientOriginalName();
                $uploadPath  = public_path('backend/uploads/') . date('Y-m-d'); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('new_featured_image')->move($uploadPath, $fileName);
                $params['new_featured_image'] = '/backend/uploads/' . date('Y-m-d') . '/' . $fileName;
            }

            $entity = new News();

            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess('backend.news.list', transMessage('create_success'));
        } catch (\Exception $e) {
            Log::error($e);
        }
        return backRouteError('backend.news.list', transMessage('system_error'));
    }

    public function edit($id)
    {
        try {
            $entity = News::where('del_flag', delFlagOn())->where('id', $id)->first();
            if (empty($entity)) {
                return backSystemError();
            }

            $viewData = [
                'entity' => $entity
            ];
            return view('backend.news.edit', $viewData);
        } catch (\Exception $e) {
            Log::error($e);
        }
        return backSystemError();
    }

    public function update($id)
    {
        try {
            $entity = News::where('del_flag', delFlagOn())->where('id', $id)->first();
            if (empty($entity)) {
                return backSystemError();
            }

            $params = request()->all();
            if (request()->hasFile('new_featured_image')) {
                $fileName = time() . "_"  . request()->file('new_featured_image')->getClientOriginalName();
                $uploadPath  = public_path('backend/uploads/') . date('Y-m-d'); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('new_featured_image')->move($uploadPath, $fileName);
                $params['new_featured_image'] = '/backend/uploads/' . date('Y-m-d') . '/' . $fileName;
            }

            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess('backend.news.list', transMessage('update_success'));
        } catch (\Exception $e) {
            Log::error($e);
        }
        return backSystemError();
    }

    public function destroy($id)
    {
        try {
            $entity = News::where('del_flag', delFlagOn())->where('id', $id)->first();
            if (empty($entity)) {
                return backSystemError();
            }
            $entity->del_flag = delFlagOff();
            $entity->save();
            return backSuccess(transMessage('delete_success'));
        } catch (\Exception $e) {
            Log::error($e);
        }
        return backSystemError();
    }
}
