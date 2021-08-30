<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Khoa;

class KhoaController extends Controller
{
    public function index()
    {
        $entities = Khoa::all();
        return view('backend.khoa.index', ['entities' => $entities]);
    }

    public function create()
    {
        return view('backend.khoa.create');
    }

    public function store()
    {
        $params = request()->all();
        Khoa::create($params);
        return backRouteSuccess(backendRouterName('khoa.list'));
    }

    public function edit($id)
    {
        try {
            $entity = Khoa::where('makhoa', $id)->first();

            if (empty($entity)) {
                abort(404);
            }

            $viewData = [
                'entity' => $entity,
            ];

            return view('backend.khoa.edit', $viewData);
        } catch (\Exception $e) {
            logError($e);
        }
        return backSystemError();
    }

    public function update($id)
    {
        try {
            $params = request()->all();
            $entity = Khoa::where('makhoa', $id)->first();
            if (empty($entity)) {
                abort(404);
            }
            $listMaKhoa = Khoa::where('makhoa', '!=', $id)->pluck('makhoa')->toArray();
            $entity2 = Khoa::where('makhoa', request('makhoa'))->first();
            if (!empty($entity2) && in_array(request('makhoa'), $listMaKhoa)) {
                return redirect()->back()->withInput($params)->withErrors('Mã khoa đã tồn tại');
            }
            unset($params['_token']);
            Khoa::where('makhoa', $id)->update($params);
            return backRouteSuccess('backend.khoa.list', transMessage('update_success'));
        } catch (\Exception $e) {
            logError($e);
            dd($e);
        }
        return backSystemError();
    }

    public function destroy($id)
    {
        Khoa::where('makhoa', $id)->delete();
        return backRouteSuccess('backend.khoa.list');
    }
}
