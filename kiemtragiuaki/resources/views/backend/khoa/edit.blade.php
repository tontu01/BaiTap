@extends('backend.layouts.main')

@push('script')
@endpush

@section('content')
    <div class="content-page teacher-page">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Sinh viên</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body__head d-flex">
                                <h5 class="card-title">Cập nhật</h5>
                                <a href="{{backendRouter('khoa.list')}}">
                                    <button type="button" class="btn btn-cyan btn-sm">Quay lại</button>
                                </a>
                            </div>

                            <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="card">
                                    <form class="form-horizontal store-update-entity" id="form-text-area"
                                          action="{{backendRouter('khoa.update', ['id' => $entity->makhoa])}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @include('backend.layouts.structures._error_validate')
                                        @include('backend.layouts.structures._notification')

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Mã khoa *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="makhoa" value="{{ getInputOld(old('makhoa'), $entity->makhoa) }}"
                                                                   required placeholder="Nhập mã khoa">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Tên khoa *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="tenkhoa" value="{{ getInputOld(old('tenkhoa'), $entity->tenkhoa) }}"
                                                                   required placeholder="Nhập tên khoa">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">SĐT *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="sdt" value="{{ getInputOld(old('sdt'), $entity->sdt) }}"
                                                                   required placeholder="Nhập số điện thoại">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Địa chỉ *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="diachi" value="{{ getInputOld(old('diachi'), $entity->diachi)  }}"
                                                                   required placeholder="Nhập địa chỉ">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Email *</label>
                                                        <div class="col-md-8">
                                                            <input type="email" class="form-control" name="mail" value="{{ getInputOld(old('mail'), $entity->mail)  }}"
                                                                   required placeholder="Nhập địa chỉ email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="new_title" class="col-md-2 text-right control-label col-form-label">Website *</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="web" value="{{ getInputOld(old('web'), $entity->web   )  }}"
                                                                   required placeholder="Nhập địa chỉ website">
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
