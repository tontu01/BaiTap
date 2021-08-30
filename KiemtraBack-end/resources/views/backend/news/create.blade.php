@extends('layouts.backend.main')

@push('script')
    <script src="{{ asset('backend/js/pages/news.js') }}"></script>
@endpush

@section('content')
<div class="content-page teacher-page">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tin tức</h4>
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
                            <h5 class="card-title">Thêm mới tin tức</h5>
                            <a href="{{backendRouter('news.list')}}">
                                <button type="button" class="btn btn-cyan btn-sm">Quay lại</button>
                            </a>
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="card">
                                <form class="form-horizontal store-update-entity" action="{{backendRouter('news.store')}}" method="post" enctype="multipart/form-data">
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
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="new_title" class="col-md-2 text-right control-label col-form-label">Tiêu đề <span class="text-danger">(*)</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="new_title" value="{{ old('new_title') }}" placeholder="Nhập tiêu đề bài viết" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="new_featured_image" class="col-md-2 text-right control-label col-form-label">Ảnh đại diện <span class="text-danger">(*)</span></label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control" name="new_featured_image" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="new_short_description" class="col-md-1 text-right control-label col-form-label">Mô tả ngắn <span class="text-danger">(*)</span></label>
                                                    <div class="col-md-10">
                                                        <textarea id="new_short_description" name="new_short_description" required class="form-control">{{ old('new_short_description') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label for="new_content" class="col-md-1 text-right control-label col-form-label">Nội dung <span class="text-danger">(*)</span></label>
                                                    <div class="col-md-10">
                                                        <input name="new_content" type="hidden" value="{{ old('new_content') }}" required>
                                                        <div id="editor-quill"></div>
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
