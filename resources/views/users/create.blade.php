@extends('layouts.app')
@section('content')

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
        data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <h1 class="text-dark fw-bolder my-0 fs-2">View User Details</h1>
                <!--end::Heading-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo7/dist/index.html" class="text-muted">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">User Management</li>
                    <li class="breadcrumb-item text-muted">Users</li>
                    <li class="breadcrumb-item text-dark">Create User</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title=-->
            <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                fill="black" />
                            <path opacity="0.3"
                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
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
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="d-flex flex-column flex-xl-row">
                <div class="flex-column flex-lg-row-auto w-100 mb-10">
                    <div class="card mb-5 mb-xl-8">
                        <form method="POST"
                            class="form fv-plugins-bootstrap5 fv-plugins-framework ml-10"
                            action="{{ route('users.store') }}" style="margin-left: 10px">
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll">
                                {{-- <div class="fv-row mb-7">
                                    <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url({{ asset('media/avatars/blank.png') }})">
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url({{ asset('media/avatars/150-1.jpg') }});">
                                        </div>
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        </label>

                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                    </div>
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div> --}}

                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                    <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="Full name" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fw-bold fs-6 mb-2">Email</label>
                                    <input type="email" name="email"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="tienpv@gmail.com" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fw-bold fs-6 mb-2">Password</label>
                                    <input type="password" name="password"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="Password" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <label class="required fw-bold fs-6 mb-2">Confirm Password</label>
                                    <input type="password" name="confirm-password"
                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                        placeholder="Confirm Password" value="">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <div class="mb-7">
                                    <label class="required fw-bold fs-6 mb-5">Role</label>
                                    @foreach($roles as $value)
                                    <div class="d-flex fv-row">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="roles[]" type="radio"
                                                value="{{ $value->id }}"
                                                id="kt_modal_update_role_option_{{ $value->id }}">
                                            <label class="form-check-label"
                                                for="kt_modal_update_role_option_{{ $value->id }}">
                                                <div class="fw-bolder text-gray-800">{{ $value->name }}</div>
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="text-center pt-15 pb-15">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!--end::Card body-->
                    </div>
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>

</div>
@endsection