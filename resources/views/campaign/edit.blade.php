@extends('layouts.app')
@section('content')

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
        data-kt-sticky-offset="{default: '200px', lg: '300px'}" style="animation-duration: 0.3s;">
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <h1 class="text-dark fw-bolder my-0 fs-2">Quản lý User</h1>
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="javascript:;" class="text-muted">Home</a>
                    </li>
                    <li class="breadcrumb-item text-dark">Users</li>
                </ul>
            </div>
            <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                fill="black"></path>
                            <path opacity="0.3"
                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </div>
                <a href="../../demo7/dist/index.html" class="d-flex align-items-center">
                    <img alt="Logo" src="{{ asset('media/logos/logo-demo7.svg') }}" class="h-30px">
                </a>
            </div>
        </div>
    </div>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="container-xxl" id="kt_content_container">

            <div class="row gy-5 g-xl-12">

                <div class="col-xxl-12">
                    <div class="card card-xxl-stretch mb-5 mb-xl-12">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                            </h3>
                        </div>
                        <div class="card-body py-3">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        <div class="pull-left">
                                            <h2>Edit New User</h2>
                                        </div>
                                        <div class="pull-right">
                                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                                        </div>
                                    </div>
                                </div>


                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif


                                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                                <div class="row">
                                    <div class="col-8 row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 mb-5 mt-5">
                                            <div class="form-group">
                                                <strong>Name:</strong>
                                                {!! Form::text('name', null, array('placeholder' => 'Name','class' =>
                                                'form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 mb-5 mt-5">
                                            <div class="form-group">
                                                <strong>Email:</strong>
                                                {!! Form::text('email', null, array('placeholder' => 'Email','class' =>
                                                'form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 mb-5 mt-5">
                                            <div class="form-group">
                                                <strong>Password:</strong>
                                                {!! Form::password('password', array('placeholder' => 'Password','class'
                                                =>
                                                'form-control')) !!}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 mb-5 mt-5">
                                            <div class="form-group">
                                                <strong>Confirm Password:</strong>
                                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 mb-5 mt-5">
                                            <div class="form-group">
                                                <strong>Role:</strong>
                                                {!! Form::select('roles[]', $roles,$userRole, array('class' =>
                                                'form-control','multiple')) !!}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection