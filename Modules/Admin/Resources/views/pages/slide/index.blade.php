@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Slide</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('get_admin.slide.create') }}" class="btn btn-info  mr-2">Thêm mới <i class="la la-plus-circle"></i></a>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Sắp xếp</th>
                                        <th>Vị trí</th>
                                        <th>Trạng thái</th>
                                        <th>Banner Slider</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($slides as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            <a href="{{ $item->s_link }}" title="{{ $item->s_name }}">{{ $item->s_name }}</a>
                                        </td>
                                        <td><span class="badge badge-info">{{ $item->s_sort }}</span></td>
                                        <td>
                                            <span class="badge {{ $item->getStatusType($item->s_type)['class'] }}">{{ $item->getStatusType($item->s_type)['name']  }}</span>
                                        </td>
                                        <td>
                                            <span class="badge {{ $item->getStatus($item->s_status)['class']  }}">{{ $item->getStatus($item->s_status)['name']  }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ $item->s_link }}" target="_blank" style="width: 200px;height: 100px;display: inline-block">
                                                <img style="height: 100%;border-radius: 10px;border: 1px solid #dedede;width: 100%" src="{{ pare_url_file($item->s_banner) }}" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('get_admin.slide.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                            <a href="{{ route('get_admin.slide.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
@stop
