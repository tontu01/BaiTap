@extends('layouts.backend.main')

@push('styles')
    <link href="{{ asset('backend/css/dashboard.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="content-page">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Trang quản trị</h4>
                </div>
            </div>
        </div>
    </div>
@stop
