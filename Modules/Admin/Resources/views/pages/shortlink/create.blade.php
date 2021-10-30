@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Tạo Short Link</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Create</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a href="{{ route('get_admin.shortlink.index') }}" class="btn btn-danger mr-2">Quay lại <i
                        class="la la-undo"></i></a>
            </div>
        </div>
    </div>
    <div class="breadcrumb-header justify-content-between">
        <ul>
            @foreach ($campaign as $item)
            <li>
                <h3>{{ $item->title }}</h3>
                <p>{!! $item->content !!}</p>
            </li>
            @endforeach
        </ul>

    </div>
    <!-- breadcrumb -->
    <!-- row -->
    @include('admin::pages.shortlink.form')
</div>
@stop