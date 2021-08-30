<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;
use App\Model\Entities\News;
use App\Model\Entities\Projects;
use App\Repositories\NewRepository;
use Illuminate\Support\Facades\Log;

class ProjectController extends BackendController
{
    public function index()
    {
        $this->_clearSessionForm();
        $entities = Projects::where('del_flag', delFlagOn())->orderBy('id', 'desc')->paginate(getBackendPagination());

        $viewData = [
            'entities' => $entities
        ];

        return view('backend.projects.index', $viewData);
    }

    public function create()
    {
        return view('backend.projects.create');
    }

    public function store()
    {
        try {
            $params = request()->all();

            if (request()->hasFile('avatar')) {
                $fileName = time() . "_"  . request()->file('avatar')->getClientOriginalName();
                $uploadPath  = public_path('backend/uploads/') . date('Y-m-d'); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('avatar')->move($uploadPath, $fileName);
                $params['avatar'] = '/backend/uploads/' . date('Y-m-d') . '/' . $fileName;
            }

            $entity = new Projects();

            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess('backend.projects.list', transMessage('create_success'));
        } catch (\Exception $e) {
            Log::error($e);
        }
        return backRouteError('backend.projects.list', transMessage('system_error'));
    }

    public function edit($id)
    {
        try {
            $entity = Projects::where('del_flag', delFlagOn())->where('id', $id)->first();
            if (empty($entity)) {
                return backSystemError();
            }

            $viewData = [
                'entity' => $entity
            ];

            return view('backend.projects.edit', $viewData);
        } catch (\Exception $e) {
            Log::error($e);
        }
        return backSystemError();
    }

    public function update($id)
    {
        try {
            $entity = Projects::where('del_flag', delFlagOn())->where('id', $id)->first();
            if (empty($entity)) {
                return backSystemError();
            }

            $params = request()->all();
            if (request()->hasFile('avatar')) {
                $fileName = time() . "_"  . request()->file('avatar')->getClientOriginalName();
                $uploadPath  = public_path('backend/uploads/') . date('Y-m-d'); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('avatar')->move($uploadPath, $fileName);
                $params['avatar'] = '/backend/uploads/' . date('Y-m-d') . '/' . $fileName;
            }

            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess('backend.projects.list', transMessage('update_success'));
        } catch (\Exception $e) {
            Log::error($e);
        }
        return backSystemError();
    }

    public function destroy($id)
    {
        try {
            $entity = Projects::where('del_flag', delFlagOn())->where('id', $id)->first();
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
