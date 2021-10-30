@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">SALE OFF</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a href="{{ route('get_admin.shortlink.create') }}" class="btn btn-info  mr-2">Thêm mới <i
                        class="la la-plus-circle"></i></a>
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
                                    <th>#</th>
                                    <th>Người tạo</th>
                                    <th>Code Share</th>
                                    <th>Link share</th>
                                    <th>Short link</th>
                                    <th>View link</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($shortlink as $key => $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <th scope="row">{{ $item->user_id }}</th>
                                    <th scope="row">{{ $item->code_share }}</th>
                                    <td>
                                        <span>{{ $item->url_ads }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $item->short_link }}</span>
                                    </td>
                                    <th scope="row">{{ $item->view_link }}</th>
                                    <td>
                                        <a href="{{ route('get_admin.shortlink.edit', $item->id) }}"
                                            class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                        <a href="{{ route('get_admin.shortlink.delete', $item->id) }}"
                                            class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    <div>
                        {{-- {!! $uni_flashsale->links() !!} --}}
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
@stop