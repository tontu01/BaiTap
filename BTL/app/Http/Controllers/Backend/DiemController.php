<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Diem;
use App\Model\Lop;
use App\Model\MonHoc;
use App\Model\Student;

class DiemController extends Controller
{
    public function index()
    {
        $query = Diem::select();
        $search = trimValuesArray(request()->all());
        if (arrayGet($search, 'MaLop')) {
            $listStudentByLop = Student::where('MaLop', arrayGet($search, 'MaLop'))->pluck('MaSV')->toArray();
            $query->whereIn('MaSV', $listStudentByLop);
        }
        $entities = $query->paginate(20);

        $listLop = Lop::all();

        $viewData = [
            'listLop' => $listLop,
            'entities' => $entities,
        ];

        return view('backend.diem.index', $viewData);
    }

    public function create()
    {
        $listSV = Student::all();
        $listMonHoc = MonHoc::all();

        $viewData = [
            'listSV' => $listSV,
            'listMonHoc' => $listMonHoc,
        ];

        return view('backend.diem.create', $viewData);
    }

    public function store()
    {
        $diem = Diem::where(['MaMH' => request('MaMH'), 'MaSV' => request('MaSV'), 'HocKy' => request('HocKy')])->first();
        if (!empty($diem)) {
            return redirect()->back()->withInput(request()->all())->withErrors('Dữ liệu đã tồn tại');
        }
        Diem::create(request()->all());
        return backRouteSuccess(backendRouterName('diem.list'));
    }

    public function edit($id)
    {
        $entity = Diem::findOrFail($id);
        $listSV = Student::all();
        $listMonHoc = MonHoc::all();

        $viewData = [
            'listSV' => $listSV,
            'listMonHoc' => $listMonHoc,
            'entity' => $entity,
        ];

        return view('backend.diem.edit', $viewData);
    }

    public function update($id)
    {
        $diem = Diem::where(['MaMH' => request('MaMH'), 'MaSV' => request('MaSV'), 'HocKy' => request('HocKy')])->where('id', '!=', $id)->first();
        if (!empty($diem)) {
            return redirect()->back()->withInput(request()->all())->withErrors('Dữ liệu đã tồn tại');
        }
        $params = request()->all();
        unset($params['_token']);
        Diem::where('id', $id)->update($params);
        return backRouteSuccess('backend.diem.list', transMessage('update_success'));
    }

    public function destroy($id)
    {
        Diem::destroy($id);
        return backRouteSuccess('backend.diem.list');
    }
}
