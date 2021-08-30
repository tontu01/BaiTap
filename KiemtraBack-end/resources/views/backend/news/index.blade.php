@extends('layouts.backend.main')

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
                            <h5 class="card-title">Danh sách tin tức</h5>
                            <a href="{{backendRouter('news.create')}}">
                                <button type="button" class="btn btn-cyan btn-sm">Thêm mới</button>
                            </a>
                        </div>

                        <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-striped table-bordered dataTable" role="grid">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Ảnh đại diện</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $key => $entity)
                                    <tr>
                                        <td>{{ getSTTBackend($entities, $key) }}</td>
                                        <td>{{ $entity->new_title }}</td>
                                        <td>
                                            @if($entity->new_featured_image)
                                                <a href="javascript:void(0)">
                                                    <img width="50px" src="{{ asset($entity->new_featured_image) }}" alt="Image name">
                                                </a>
                                            @else
                                                <a href="javascript:void(0)">
                                                    <img width="30px" src="{{ asset('backend/assets/image/user/1.jpg') }}" alt="Image name">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="comment-footer">
                                                <a href="{{ backendRouter('news.edit', ['id' => $entity->getKey()]) }}">
                                                    <button type="button" class="btn btn-cyan btn-xs">Sửa</button>
                                                </a>
                                                <a href="#modal_confirm_delete"
                                                   class="btn-danger btn btn-xs modal_confirm_delete rounded"
                                                   data-toggle="modal"
                                                   data-form-action="{{ backendRouter('news.destroy', ['id' => $entity->id]) }}"
                                                >
                                                    Xóa
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            {{ $entities->appends(\Illuminate\Support\Facades\Input::all())->links('layouts.backend.structures._pagination')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
