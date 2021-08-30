@extends('backend.layouts.main')

@push('script')
@endpush

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
                            <div class="card-body__head d-flex">
                                <h5 class="card-title">Thêm mới</h5>
                                <a href="{{backendRouter('canbo.list')}}">
                                    <button type="button" class="btn btn-cyan btn-sm">Quay lại</button>
                                </a>
                            </div>

                            <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="card">
                                    <form class="form-horizontal store-update-entity" id="form-text-area"
                                          action="{{backendRouter('canbo.store')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @include('backend.layouts.structures._error_validate')
                                        @include('backend.layouts.structures._notification')

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Mã cán bộ *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="macanbo" value="{{ old('macanbo')  }}"
                                                                   required placeholder="Nhập mã cán bộ">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Tên cán bộ *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="tencanbo" value="{{ old('tencanbo')  }}"
                                                                   required placeholder="Nhập tên cán bộ">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Chức vụ *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="chucvu" value="{{ old('chucvu')  }}"
                                                                   required placeholder="Nhập chức vụ">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Email *</label>
                                                        <div class="col-md-8">
                                                            <input type="email" class="form-control" name="email" value="{{ old('email')  }}"
                                                                   required placeholder="Nhập địa chỉ email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">SĐT di động *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="dtdidong" value="{{ old('dtdidong')  }}"
                                                                   required placeholder="Nhập số điện thoại di động">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Mã khoa *</label>
                                                        <div class="col-md-8">
                                                            <div class="col-md-8">
                                                                <select class="my-select2__select2 select2-wrapper" name="makhoa" required>
                                                                    <option selected readonly value="">--- Vui lòng chọn ---</option>
                                                                    @foreach($listKhoa as $item)
                                                                        <option value="{{ arrayGet($item, 'makhoa') }}"
                                                                                {{ old('makhoa') == arrayGet($item, 'makhoa') ? "selected" : '' }}>
                                                                            {{ arrayGet($item, 'tenkhoa') }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border-top">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-success">Gửi đi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
