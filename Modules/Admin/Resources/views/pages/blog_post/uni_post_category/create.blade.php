@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Danh mục bài viết</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Create</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
                    @foreach (Config('app.locales') as $key => $lang)
                    <li class="nav-item">
                        <a class="nav-link {{ $lang_code == $lang ? ' active ' : '' }} change_lang" data-url="{{ route('admin.change-language', $lang) }}" data-lang="{{ $lang }}" id="pills-home-tab_{{ $lang }}" data-toggle="pill" href="#pills-home_{{ $lang }}" role="tab" aria-controls="pills-home_{{ $lang }}" aria-selected="true">{{ $lang }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="ml-2 pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('get_admin.post_category.index') }}" class="btn btn-danger mr-2">Quay lại <i class="la la-undo"></i></a>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        @include('admin::pages.blog_post.uni_post_category.form')
    </div>
@stop
