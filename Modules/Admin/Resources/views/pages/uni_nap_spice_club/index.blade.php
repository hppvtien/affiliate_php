@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Nạp tiền Spice Club</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
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
                                        <th>Info</th>
                                        <th>Số tiền</th>
                                        <th>Hình thức thanh toán</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($uni_order as $key => $item)
                                
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            <p><span>Name: </span> <span class="text-success">{{ $item->user->name ?? "[N\A]" }}</span></p>
                                            <p><span>Email: </span> <span class="text-success">{{ $item->user->email ?? "[N\A]" }}</span></p>
                                        </td>
                                        <td>
                                            <b>{{ $item->price_nap }} đ</b>
                                        </td>
                                        <td>
                                            {{ config('cart.pay_type')[$item->type_pay]['name'] }}
                                        </td>
                                        
                                        <td>
                                            <span class="badge {{ $item->getStatus($item->status)['class']  }}">{{ $item->getStatus($item->status)['name']  }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('get_admin.uni_spice_club.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                            <a href="{{ route('get_admin.uni_spice_club.movetrash', $item->id) }}" class="btn btn-xs btn-danger"><i class="la la-trash"></i></a>
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
