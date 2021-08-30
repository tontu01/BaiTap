<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\CanBo;
use App\Model\Khoa;

class CanBoController extends Controller
{
    public function index()
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

        return view('backend.canbo.index', $viewData);
    }

    public function create()
    {
        $listKhoa = Khoa::all();
        return view('backend.canbo.create', ['listKhoa' => $listKhoa]);
    }

    public function store()
    {
        $params = request()->all();
        CanBo::create($params);
        return backRouteSuccess(backendRouterName('canbo.list'));
    }

    public function edit($id)
    {
        try {
            $entity = CanBo::where('macanbo', $id)->first();

            if (empty($entity)) {
                abort(404);
            }
            $listKhoa = Khoa::all();
            $viewData = [
                'entity' => $entity,
                'listKhoa' => $listKhoa,
            ];

            return view('backend.canbo.edit', $viewData);
        } catch (\Exception $e) {
            logError($e);
        }
        return backSystemError();
    }

    public function update($id)
    {
        try {
            $params = request()->all();
            $entity = CanBo::where('macanbo', $id)->first();
            if (empty($entity)) {
                abort(404);
            }
            $listMaKhoa = CanBo::where('macanbo', '!=', $id)->pluck('macanbo')->toArray();
            $entity2 = CanBo::where('macanbo', request('macanbo'))->first();
            if (!empty($entity2) && in_array(request('macanbo'), $listMaKhoa)) {
                return redirect()->back()->withInput($params)->withErrors('Mã cán bộ đã tồn tại');
            }
            unset($params['_token']);
            CanBo::where('macanbo', $id)->update($params);
            return backRouteSuccess('backend.canbo.list', transMessage('update_success'));
        } catch (\Exception $e) {
            logError($e);
            dd($e);
        }
        return backSystemError();
    }

    public function destroy($id)
    {
        CanBo::where('macanbo', $id)->delete();
        return backRouteSuccess('backend.canbo.list');
    }
}
