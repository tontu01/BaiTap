@extends('layouts.backend.main')

@section('content')
<div class="content-page teacher-page">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dụ án</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('layouts.backend.structures._notification')

                        <div class="card-body__head d-flex">
                            <h5 class="card-title">Thêm mới dự án</h5>
                            <a href="{{backendRouter('projects.list')}}">
                                <button type="button" class="btn btn-cyan btn-sm">Quay lại</button>
                            </a>
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="card">
                                <form class="form-horizontal store-update-entity" action="{{backendRouter('projects.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @if ($errors->any())
                                        <div class="error alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="new_title" class="col-md-2 text-right control-label col-form-label">Tên dự án <span class="text-danger">(*)</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nhập tên dự án" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="new_title" class="col-md-2 text-right control-label col-form-label">Quốc gia <span class="text-danger">(*)</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="Nhập quốc gia" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="new_featured_image" class="col-md-2 text-right control-label col-form-label">Ảnh đại diện <span class="text-danger">(*)</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control" name="avatar" required>
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
