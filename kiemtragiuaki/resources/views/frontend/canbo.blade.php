@extends('frontend.layouts.main')

@section('content')
<div class="content-page teacher-page">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Cán bộ</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('backend.layouts.structures._notification')

                        <!-- From search -->
                            <form method="GET" action="{{ frontendRouter('canbo') }}" class="mb-5" id="form-search">
                                <div class="form-row">
                                    <div class="col-md-1">
                                        <input type="text" name="macanbo" class="form-control" placeholder="Mã cán bộ" value="{{ request('macanbo') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="tencanbo" class="form-control" placeholder="Tên cán bộ" value="{{ request('tencanbo') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="dtdidong" class="form-control" placeholder="SĐT di động" value="{{ request('dtdidong') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="my-select2">
                                            <select class="my-select2__select2 select2-wrapper" name="makhoa">
                                                <option selected readonly value="">--- Khoa ---</option>
                                                @foreach($listKhoa as $item)
                                                    <option value="{{ arrayGet($item, 'makhoa') }}" {{ request('makhoa') == arrayGet($item, 'makhoa') ? "selected" : '' }}>{{ arrayGet($item, 'tenkhoa') }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body__head card-body__filter text-center">
                                    <button type="submit" class="btn btn-cyan btn-sm">Tìm kiếm</button>
                                </div>
                            </form>

                        <div class="card-body__head d-flex">
                            <h5 class="card-title">Danh sách</h5>
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-striped table-bordered dataTable" role="grid">
                                <thead>
                                <tr>
                                    <th scope="col">Mã cán bộ</th>
                                    <th scope="col">Tên cán bộ</th>
                                    <th scope="col">Chức vụ</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">SĐT di động</th>
                                    <th scope="col">Mã khoa</th>
                                    <th scope="col">Tên khoa</th>
                                    <th scope="col">SĐT cơ quan</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $key => $entity)
                                    <tr>
                                        <td>{{ $entity->macanbo }}</td>
                                        <td>{{ $entity->tencanbo }}</td>
                                        <td>{{ $entity->chucvu }}</td>
                                        <td>{{ $entity->email }}   </td>
                                        <td>{{ $entity->dtdidong }}</td>
                                        <td>{{ $entity->makhoa }}</td>
                                        <td>{{ $entity->tryGet('khoa')->tenkhoa }}</td>
                                        <td>{{ $entity->tryGet('khoa')->sdt }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
