<!DOCTYPE html>

<html lang="en">

    <head>
        <base href="">
        <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel
            by Keenthemes</title>
        <meta name="description"
            content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords"
            content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title"
            content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
        <link href="{{ asset('css/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body id="kt_body" style="background-image: url()"
        class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
        <div class="d-flex flex-column flex-root">
            <div class="page d-flex flex-row flex-column-fluid">

                @include('layouts.side-bar')
                @yield('content')
                {{-- <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                        data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <div class="container-xxl d-flex align-items-center justify-content-between"
                            id="kt_header_container">
                            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                                <h1 class="text-dark fw-bolder my-0 fs-2">Dashboard</h1>
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="../../demo7/dist/index.html" class="text-muted">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-dark">Default</li>
                                </ul>
                            </div>
                            <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                                    <span class="svg-icon svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </div>
                                <a href="../../demo7/dist/index.html" class="d-flex align-items-center">
                                    <img alt="Logo" src="{{ asset('media/logos/logo-demo7.svg') }}" class="h-30px" />
                                </a>
                            </div>
                            <div class="d-flex flex-shrink-0">
                                <div class="d-flex ms-3">
                                    <a href="#"
                                        class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6"
                                        tooltip="New Member" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_invite_friends">
                                        <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <span class="d-none d-md-inline">New Member</span>
                                    </a>
                                </div>
                                <div class="d-flex ms-3">
                                    <a href="#"
                                        class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6"
                                        tooltip="New App" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"
                                        id="kt_toolbar_primary_button">
                                        <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                                    fill="black" />
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                            </svg>
                                        </span>
                                        <span class="d-none d-md-inline">New App</span>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center ms-3">
                                    <div class="btn btn-icon btn-primary w-40px h-40px pulse pulse-white"
                                        id="kt_drawer_chat_toggle">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="black" />
                                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <span class="pulse-ring"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="container-xxl" id="kt_content_container">
                            <div class="row gy-5 g-xl-8">
                                <div class="col-xxl-4">
                                    <div class="card card-xl-stretch mb-xl-8">
                                        <div class="card-header border-0 bg-primary py-5">
                                            <h3 class="card-title fw-bolder text-white">Sales Progress</h3>
                                            <div class="card-toolbar">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                            viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1"
                                                                    fill="#000000" />
                                                                <rect x="14" y="5" width="5" height="5" rx="1"
                                                                    fill="#000000" opacity="0.3" />
                                                                <rect x="5" y="14" width="5" height="5" rx="1"
                                                                    fill="#000000" opacity="0.3" />
                                                                <rect x="14" y="14" width="5" height="5" rx="1"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                            Payments</div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Specify a target name for future usage and reference"></i></a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                        data-kt-menu-placement="right-end">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">Subscription</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                            </div>
                                                            <div class="separator my-2"></div>
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3">
                                                                    <label
                                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                                        <input class="form-check-input w-30px h-20px"
                                                                            type="checkbox" value="1" checked="checked"
                                                                            name="notifications" />
                                                                        <span
                                                                            class="form-check-label text-muted fs-6">Recuring</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3 my-1">
                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="mixed-widget-12-chart card-rounded-bottom bg-primary"
                                                data-kt-color="primary" style="height: 250px"></div>
                                            <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                                                <div class="row g-0 mb-7">
                                                    <div class="col mx-5">
                                                        <div class="fs-6 text-gray-400">Avarage Sale</div>
                                                        <div class="fs-2 fw-bolder text-gray-800">$650</div>
                                                    </div>
                                                    <div class="col mx-5">
                                                        <div class="fs-6 text-gray-400">Comissions</div>
                                                        <div class="fs-2 fw-bolder text-gray-800">$29,500</div>
                                                    </div>
                                                </div>
                                                <div class="row g-0">
                                                    <div class="col mx-5">
                                                        <div class="fs-6 text-gray-400">Revenue</div>
                                                        <div class="fs-2 fw-bolder text-gray-800">$55,000</div>
                                                    </div>
                                                    <div class="col mx-5">
                                                        <div class="fs-6 text-gray-400">Expenses</div>
                                                        <div class="fs-2 fw-bolder text-gray-800">$1,130,600</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-8">
                                    <div class="card card-xxl-stretch mb-5 mb-xl-8">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                                <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
                                            </h3>
                                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-trigger="hover" title="Click to add a user">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                                rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="card-body py-3">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                    <thead>
                                                        <tr class="fw-bolder text-muted">
                                                            <th class="w-25px">
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1" data-kt-check="true"
                                                                        data-kt-check-target=".widget-9-check" />
                                                                </div>
                                                            </th>
                                                            <th class="min-w-150px">Authors</th>
                                                            <th class="min-w-140px">Company</th>
                                                            <th class="min-w-120px">Progress</th>
                                                            <th class="min-w-100px text-end">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input widget-9-check"
                                                                        type="checkbox" value="1" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-45px me-5">
                                                                        <img src="{{ asset('media/avatars/150-11.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="#"
                                                                            class="text-dark fw-bolder text-hover-primary fs-6">Ana
                                                                            Simmons</a>
                                                                        <span
                                                                            class="text-muted fw-bold text-muted d-block fs-7">HTML,
                                                                            JS, ReactJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
                                                                <span
                                                                    class="text-muted fw-bold text-muted d-block fs-7">Web,
                                                                    UI/UX Design</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex flex-column w-100 me-2">
                                                                    <div class="d-flex flex-stack mb-2">
                                                                        <span
                                                                            class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                    </div>
                                                                    <div class="progress h-6px w-100">
                                                                        <div class="progress-bar bg-primary"
                                                                            role="progressbar" style="width: 50%"
                                                                            aria-valuenow="50" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.3"
                                                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input widget-9-check"
                                                                        type="checkbox" value="1" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-45px me-5">
                                                                        <img src="{{ asset('media/avatars/150-3.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="#"
                                                                            class="text-dark fw-bolder text-hover-primary fs-6">Jessie
                                                                            Clarcson</a>
                                                                        <span
                                                                            class="text-muted fw-bold text-muted d-block fs-7">C#,
                                                                            ASP.NET, MS SQL</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
                                                                <span
                                                                    class="text-muted fw-bold text-muted d-block fs-7">Houses
                                                                    &amp; Hotels</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex flex-column w-100 me-2">
                                                                    <div class="d-flex flex-stack mb-2">
                                                                        <span
                                                                            class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                                    </div>
                                                                    <div class="progress h-6px w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                            role="progressbar" style="width: 70%"
                                                                            aria-valuenow="70" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.3"
                                                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input widget-9-check"
                                                                        type="checkbox" value="1" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-45px me-5">
                                                                        <img src="{{ asset('media/avatars/150-4.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="#"
                                                                            class="text-dark fw-bolder text-hover-primary fs-6">Lebron
                                                                            Wayde</a>
                                                                        <span
                                                                            class="text-muted fw-bold text-muted d-block fs-7">PHP,
                                                                            Laravel, VueJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                                                <span
                                                                    class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex flex-column w-100 me-2">
                                                                    <div class="d-flex flex-stack mb-2">
                                                                        <span
                                                                            class="text-muted me-2 fs-7 fw-bold">60%</span>
                                                                    </div>
                                                                    <div class="progress h-6px w-100">
                                                                        <div class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 60%"
                                                                            aria-valuenow="60" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.3"
                                                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input widget-9-check"
                                                                        type="checkbox" value="1" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-45px me-5">
                                                                        <img src="{{ asset('media/avatars/150-5.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="#"
                                                                            class="text-dark fw-bolder text-hover-primary fs-6">Natali
                                                                            Goodwin</a>
                                                                        <span
                                                                            class="text-muted fw-bold text-muted d-block fs-7">Python,
                                                                            PostgreSQL, ReactJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">The
                                                                    Hill</a>
                                                                <span
                                                                    class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex flex-column w-100 me-2">
                                                                    <div class="d-flex flex-stack mb-2">
                                                                        <span
                                                                            class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                    </div>
                                                                    <div class="progress h-6px w-100">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 50%"
                                                                            aria-valuenow="50" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.3"
                                                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input widget-9-check"
                                                                        type="checkbox" value="1" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-45px me-5">
                                                                        <img src="{{ asset('media/avatars/150-6.jpg') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="#"
                                                                            class="text-dark fw-bolder text-hover-primary fs-6">Kevin
                                                                            Leonard</a>
                                                                        <span
                                                                            class="text-muted fw-bold text-muted d-block fs-7">HTML,
                                                                            JS, ReactJS</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#"
                                                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                                                <span class="text-muted fw-bold text-muted d-block fs-7">Art
                                                                    Director</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <div class="d-flex flex-column w-100 me-2">
                                                                    <div class="d-flex flex-stack mb-2">
                                                                        <span
                                                                            class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                                    </div>
                                                                    <div class="progress h-6px w-100">
                                                                        <div class="progress-bar bg-info" role="progressbar"
                                                                            style="width: 90%" aria-valuenow="90"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end flex-shrink-0">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.3"
                                                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                                fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="black" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        v>
                                    </div>
                                </div>
                                <div class="row gy-5 g-xl-8">
                                    <div class="col-xxl-4">
                                        <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                                            <div class="card-body p-0">
                                                <div class="d-flex flex-stack card-p flex-grow-1">
                                                    <span class="symbol symbol-circle symbol-50px me-2">
                                                        <span class="symbol-label bg-light-danger">
                                                            <span class="svg-icon svg-icon-2x svg-icon-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                                                        fill="black" />
                                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                                        rx="2" fill="black" />
                                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                                        rx="2" fill="black" />
                                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                                        rx="2" fill="black" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <div class="d-flex flex-column text-end">
                                                        <span class="text-dark fw-bolder fs-2">750$</span>
                                                        <span class="text-muted fw-bold mt-1">Weekly Income</span>
                                                    </div>
                                                </div>
                                                <div class="statistics-widget-4-chart card-rounded-bottom"
                                                    data-kt-chart-color="danger" style="height: 150px"></div>
                                            </div>
                                        </div>
                                        <div class="card card-xxl-stretch-50 mb-xl-8">
                                            <div class="card-body p-0">
                                                <div class="d-flex flex-stack card-p flex-grow-1">
                                                    <span class="symbol symbol-circle symbol-50px me-2">
                                                        <span class="symbol-label bg-light-success">
                                                            <span class="svg-icon svg-icon-2x svg-icon-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                                        fill="black" />
                                                                    <path opacity="0.3"
                                                                        d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                                        fill="black" />
                                                                    <path opacity="0.3"
                                                                        d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <div class="d-flex flex-column text-end">
                                                        <span class="text-dark fw-bolder fs-2">+259</span>
                                                        <span class="text-muted fw-bold mt-1">Sales Change</span>
                                                    </div>
                                                </div>
                                                <div class="statistics-widget-4-chart card-rounded-bottom"
                                                    data-kt-chart-color="success" style="height: 150px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="card card-xxl-stretch mb-xl-8">
                                            <div class="card-header align-items-center border-0 mt-3">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="fw-bolder text-dark fs-3">My Competitors</span>
                                                    <span class="text-gray-400 mt-2 fw-bold fs-6">More than 400+ new
                                                        members</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <button type="button"
                                                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1"
                                                                        fill="#000000" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                        data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                Quick Actions</div>
                                                        </div>
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                    Reports</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-5">
                                                <div class="d-flex mb-7">
                                                    <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                        <img src="{{ asset('media/stock/600x400/img-3.jpg') }}"
                                                            class="mw-100" alt="" />
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                            <a href="#"
                                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Cup
                                                                &amp; Green</a>
                                                            <span class="text-gray-400 fw-bold fs-7 my-1">Study highway
                                                                types</span>
                                                            <span class="text-gray-400 fw-bold fs-7">By:
                                                                <a href="#" class="text-primary fw-bold">CoreAd</a></span>
                                                        </div>
                                                        <div class="text-end py-lg-0 py-2">
                                                            <span class="text-gray-800 fw-boldest fs-3">24,900</span>
                                                            <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-7">
                                                    <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                        <img src="{{ asset('media/stock/600x400/img-4.jpg') }}"
                                                            class="mw-100" alt="" />
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                            <a href="#"
                                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Yellow
                                                                Hearts</a>
                                                            <span class="text-gray-400 fw-bold fs-7 my-1">Study highway
                                                                types</span>
                                                            <span class="text-gray-400 fw-bold fs-7">By:
                                                                <a href="#"
                                                                    class="text-primary fw-bold">KeenThemes</a></span>
                                                        </div>
                                                        <div class="text-end py-lg-0 py-2">
                                                            <span class="text-gray-800 fw-boldest fs-3">70,380</span>
                                                            <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-7">
                                                    <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                        <img src="{{ asset('media/stock/600x400/img-5.jpg') }}"
                                                            class="mw-100" alt="" />
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                            <a href="#"
                                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Nike
                                                                &amp; Blue</a>
                                                            <span class="text-gray-400 fw-bold fs-7 my-1">Study highway
                                                                types</span>
                                                            <span class="text-gray-400 fw-bold fs-7">By:
                                                                <a href="#" class="text-primary fw-bold">Invision
                                                                    Inc.</a></span>
                                                        </div>
                                                        <div class="text-end py-lg-0 py-2">
                                                            <span class="text-gray-800 fw-boldest fs-3">7,200</span>
                                                            <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-7">
                                                    <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                        <img src="{{ asset('media/stock/600x400/img-6.jpg') }}"
                                                            class="mw-100" alt="" />
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                            <a href="#"
                                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Red
                                                                Boots</a>
                                                            <span class="text-gray-400 fw-bold fs-7 my-1">Study highway
                                                                types</span>
                                                            <span class="text-gray-400 fw-bold fs-7">By:
                                                                <a href="#" class="text-primary fw-bold">Figma
                                                                    Studio</a></span>
                                                        </div>
                                                        <div class="text-end py-lg-0 py-2">
                                                            <span class="text-gray-800 fw-boldest fs-3">36,450</span>
                                                            <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                        <img src="{{ asset('media/stock/600x400/img-7.jpg') }}"
                                                            class="mw-100" alt="" />
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                            <a href="#"
                                                                class="fs-5 text-gray-800 text-hover-primary fw-bolder">Desserts
                                                                platter</a>
                                                            <span class="text-gray-400 fw-bold fs-7 my-1">Food trends &amp;
                                                                reviews</span>
                                                            <span class="text-gray-400 fw-bold fs-7">By:
                                                                <a href="#" class="text-primary fw-bold">Figma
                                                                    Studio</a></span>
                                                        </div>
                                                        <div class="text-end py-lg-0 py-2">
                                                            <span class="text-gray-800 fw-boldest fs-3">64,753</span>
                                                            <span class="text-gray-400 fs-7 fw-bold d-block">Sales</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-dark">Trends</span>
                                                    <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1"
                                                                        fill="#000000" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                Payments</div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <div class="separator my-2"></div>
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <label
                                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                                            <input class="form-check-input w-30px h-20px"
                                                                                type="checkbox" value="1" checked="checked"
                                                                                name="notifications" />
                                                                            <span
                                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-5">
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                                                Esther</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+82$</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Randy, Steve,
                                                                Mike</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+280$</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block fs-7">John, Pat,
                                                                Jimmy</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                                                Esther</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+686$</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/kickstarter.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Disco, Retro,
                                                                Sports</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+726$</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-sm-center">
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/fox-hub.svg') }}"
                                                                class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox
                                                                Broker App</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Finance,
                                                                Corporate, Apps</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+145$</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-5 g-xl-8">
                                    <div class="col-xxl-4">
                                        <div class="card card-xxl-stretch mb-xl-3">
                                            <div class="card-header border-0">
                                                <h3 class="card-title fw-bolder text-dark">Todo</h3>
                                                <div class="card-toolbar">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1"
                                                                        fill="#000000" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1"
                                                                        fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                Payments</div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    title="Specify a target name for future usage and reference"></i></a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                                        </div>
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                                </div>
                                                                <div class="separator my-2"></div>
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <label
                                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                                            <input class="form-check-input w-30px h-20px"
                                                                                type="checkbox" value="1" checked="checked"
                                                                                name="notifications" />
                                                                            <span
                                                                                class="form-check-label text-muted fs-6">Recuring</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2">
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Create
                                                            FireStone Logo</a>
                                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder
                                                            Meeting</a>
                                                        <span class="text-muted fw-bold d-block">Due in 3 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-warning"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping
                                                            &amp; Estimations</a>
                                                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-warning fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App
                                                            Showcase</a>
                                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-danger"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Project
                                                            Meeting</a>
                                                        <span class="text-muted fw-bold d-block">Due in 12 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-danger fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers
                                                            Update</a>
                                                        <span class="text-muted fw-bold d-block">Due in 1 week</span>
                                                    </div>
                                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-8">
                                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                                    <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>
                                                </h3>
                                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-trigger="hover" title="Click to add a user">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                                    height="2" rx="1" transform="rotate(-90 11.364 20.364)"
                                                                    fill="black" />
                                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="card-body py-3">
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                        <thead>
                                                            <tr class="fw-bolder text-muted">
                                                                <th class="w-25px">
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="1" data-kt-check="true"
                                                                            data-kt-check-target=".widget-9-check" />
                                                                    </div>
                                                                </th>
                                                                <th class="min-w-150px">Authors</th>
                                                                <th class="min-w-140px">Company</th>
                                                                <th class="min-w-120px">Progress</th>
                                                                <th class="min-w-100px text-end">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input widget-9-check"
                                                                            type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-45px me-5">
                                                                            <img src="{{ asset('media/avatars/150-11.jpg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-dark fw-bolder text-hover-primary fs-6">Ana
                                                                                Simmons</a>
                                                                            <span
                                                                                class="text-muted fw-bold text-muted d-block fs-7">HTML,
                                                                                JS, ReactJS</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>
                                                                    <span
                                                                        class="text-muted fw-bold text-muted d-block fs-7">Web,
                                                                        UI/UX Design</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span
                                                                                class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                        </div>
                                                                        <div class="progress h-6px w-100">
                                                                            <div class="progress-bar bg-primary"
                                                                                role="progressbar" style="width: 50%"
                                                                                aria-valuenow="50" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.3"
                                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3"
                                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input widget-9-check"
                                                                            type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-45px me-5">
                                                                            <img src="{{ asset('media/avatars/150-3.jpg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-dark fw-bolder text-hover-primary fs-6">Jessie
                                                                                Clarcson</a>
                                                                            <span
                                                                                class="text-muted fw-bold text-muted d-block fs-7">C#,
                                                                                ASP.NET, MS SQL</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>
                                                                    <span
                                                                        class="text-muted fw-bold text-muted d-block fs-7">Houses
                                                                        &amp; Hotels</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span
                                                                                class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                                        </div>
                                                                        <div class="progress h-6px w-100">
                                                                            <div class="progress-bar bg-danger"
                                                                                role="progressbar" style="width: 70%"
                                                                                aria-valuenow="70" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.3"
                                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3"
                                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input widget-9-check"
                                                                            type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-45px me-5">
                                                                            <img src="{{ asset('media/avatars/150-4.jpg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-dark fw-bolder text-hover-primary fs-6">Lebron
                                                                                Wayde</a>
                                                                            <span
                                                                                class="text-muted fw-bold text-muted d-block fs-7">PHP,
                                                                                Laravel, VueJS</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                                                    <span
                                                                        class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span
                                                                                class="text-muted me-2 fs-7 fw-bold">60%</span>
                                                                        </div>
                                                                        <div class="progress h-6px w-100">
                                                                            <div class="progress-bar bg-success"
                                                                                role="progressbar" style="width: 60%"
                                                                                aria-valuenow="60" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.3"
                                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3"
                                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input widget-9-check"
                                                                            type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-45px me-5">
                                                                            <img src="{{ asset('media/avatars/150-5.jpg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-dark fw-bolder text-hover-primary fs-6">Natali
                                                                                Goodwin</a>
                                                                            <span
                                                                                class="text-muted fw-bold text-muted d-block fs-7">Python,
                                                                                PostgreSQL, ReactJS</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">The
                                                                        Hill</a>
                                                                    <span
                                                                        class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span
                                                                                class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                        </div>
                                                                        <div class="progress h-6px w-100">
                                                                            <div class="progress-bar bg-warning"
                                                                                role="progressbar" style="width: 50%"
                                                                                aria-valuenow="50" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.3"
                                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3"
                                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div
                                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input widget-9-check"
                                                                            type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-45px me-5">
                                                                            <img src="{{ asset('media/avatars/150-6.jpg') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-dark fw-bolder text-hover-primary fs-6">Kevin
                                                                                Leonard</a>
                                                                            <span
                                                                                class="text-muted fw-bold text-muted d-block fs-7">HTML,
                                                                                JS, ReactJS</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>
                                                                    <span
                                                                        class="text-muted fw-bold text-muted d-block fs-7">Art
                                                                        Director</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span
                                                                                class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                                        </div>
                                                                        <div class="progress h-6px w-100">
                                                                            <div class="progress-bar bg-info"
                                                                                role="progressbar" style="width: 90%"
                                                                                aria-valuenow="90" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.3"
                                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3"
                                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                        fill="black" />
                                                                                    <path
                                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path
                                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.5"
                                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            v>
                                        </div>
                                    </div>
                                    <div class="row gy-5 g-xl-8">
                                        <div class="col-xl-4">
                                            <div class="card card-xl-stretch mb-xl-8">
                                                <div class="card-header border-0">
                                                    <h3 class="card-title fw-bolder text-dark">Authors</h3>
                                                    <div class="card-toolbar">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" />
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                            data-kt-menu="true">
                                                            <div class="menu-item px-3">
                                                                <div
                                                                    class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                    Quick Actions</div>
                                                            </div>
                                                            <div class="separator mb-3 opacity-75"></div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Customer</a>
                                                            </div>
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                                data-kt-menu-placement="right-start">
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">New Group</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">New Contact</a>
                                                            </div>
                                                            <div class="separator mt-3 opacity-75"></div>
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3 py-3">
                                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                        Reports</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-2">
                                                    <div class="d-flex align-items-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <img src="{{ asset('media/avatars/150-1.jpg') }}" class=""
                                                                alt="" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Emma
                                                                Smith</a>
                                                            <span class="text-muted d-block fw-bold">Project Manager</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <img src="{{ asset('media/avatars/150-4.jpg') }}" class=""
                                                                alt="" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Sean
                                                                Bean</a>
                                                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                                                CLI</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <img src="{{ asset('media/avatars/150-12.jpg') }}" class=""
                                                                alt="" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Brian
                                                                Cox</a>
                                                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                                                CLI</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <img src="{{ asset('media/avatars/150-8.jpg') }}" class=""
                                                                alt="" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Francis
                                                                Mitcham</a>
                                                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                                                CLI</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-5">
                                                            <img src="{{ asset('media/avatars/150-6.jpg') }}" class=""
                                                                alt="" />
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">Dan
                                                                Wilson</a>
                                                            <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan
                                                                CLI</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card card-xl-stretch mb-xl-8">
                                                <div class="card-header border-0">
                                                    <h3 class="card-title fw-bolder text-dark">Notifications</h3>
                                                    <div class="card-toolbar">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" />
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                            data-kt-menu="true">
                                                            <div class="menu-item px-3">
                                                                <div
                                                                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                    Payments</div>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Specify a target name for future usage and reference"></i></a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                                            </div>
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                                data-kt-menu-placement="right-end">
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">Subscription</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                                    </div>
                                                                    <div class="separator my-2"></div>
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content px-3">
                                                                            <label
                                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                                <input
                                                                                    class="form-check-input w-30px h-20px"
                                                                                    type="checkbox" value="1"
                                                                                    checked="checked"
                                                                                    name="notifications" />
                                                                                <span
                                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-item px-3 my-1">
                                                                <a href="#" class="menu-link px-3">Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div
                                                        class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                                                        <span class="svg-icon svg-icon-warning me-5">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="fw-bolder text-gray-800 text-hover-primary fs-6">Group
                                                                lunch celebration</a>
                                                            <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                        </div>
                                                        <span class="fw-bolder text-warning py-1">+28%</span>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                                                        <span class="svg-icon svg-icon-success me-5">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation
                                                                optimization</a>
                                                            <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                        </div>
                                                        <span class="fw-bolder text-success py-1">+50%</span>
                                                    </div>
                                                    <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                                                        <span class="svg-icon svg-icon-danger me-5">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand
                                                                strategy planning</a>
                                                            <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                                        </div>
                                                        <span class="fw-bolder text-danger py-1">-27%</span>
                                                    </div>
                                                    <div class="d-flex align-items-center bg-light-info rounded p-5">
                                                        <span class="svg-icon svg-icon-info me-5">
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#"
                                                                class="fw-bolder text-gray-800 text-hover-primary fs-6">Product
                                                                goals strategy</a>
                                                            <span class="text-muted fw-bold d-block">Due in 7 Days</span>
                                                        </div>
                                                        <span class="fw-bolder text-info py-1">+8%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                                <div class="card-header border-0 pt-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bolder text-dark">Trends</span>
                                                        <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                                                    </h3>
                                                    <div class="card-toolbar">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" />
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                            data-kt-menu="true">
                                                            <div class="menu-item px-3">
                                                                <div
                                                                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                    Payments</div>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Specify a target name for future usage and reference"></i></a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                                            </div>
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                                data-kt-menu-placement="right-end">
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">Subscription</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                                    </div>
                                                                    <div class="separator my-2"></div>
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content px-3">
                                                                            <label
                                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                                <input
                                                                                    class="form-check-input w-30px h-20px"
                                                                                    type="checkbox" value="1"
                                                                                    checked="checked"
                                                                                    name="notifications" />
                                                                                <span
                                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-item px-3 my-1">
                                                                <a href="#" class="menu-link px-3">Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-5">
                                                    <div class="d-flex align-items-sm-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top
                                                                    Authors</a>
                                                                <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                                                    Esther</span>
                                                            </div>
                                                            <span class="badge badge-light fw-bolder my-2">+82$</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-sm-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular
                                                                    Authors</a>
                                                                <span class="text-muted fw-bold d-block fs-7">Randy, Steve,
                                                                    Mike</span>
                                                            </div>
                                                            <span class="badge badge-light fw-bolder my-2">+280$</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-sm-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fs-6 fw-bolder">New
                                                                    Users</a>
                                                                <span class="text-muted fw-bold d-block fs-7">John, Pat,
                                                                    Jimmy</span>
                                                            </div>
                                                            <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-sm-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active
                                                                    Customers</a>
                                                                <span class="text-muted fw-bold d-block fs-7">Mark, Rowling,
                                                                    Esther</span>
                                                            </div>
                                                            <span class="badge badge-light fw-bolder my-2">+686$</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-sm-center mb-7">
                                                        <div class="symbol symbol-50px me-5">
                                                            <span class="symbol-label">
                                                                <img src="{{ asset('media/svg/brand-logos/kickstarter.svg') }}"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                            <div class="flex-grow-1 me-2">
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller
                                                                    Theme</a>
                                                                <span class="text-muted fw-bold d-block fs-7">Disco, Retro,
                                                                    Sports</span>
                                                            </div>
                                                            <span class="badge badge-light fw-bolder my-2">+726$</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-5 gx-xxl-8">
                                        <div class="col-xxl-4">
                                            <div class="card card-xxl-stretch mb-xl-3">
                                                <div class="card-header border-0 py-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bolder fs-3 mb-1">Trends</span>
                                                        <span class="text-muted fw-bold fs-7">Latest trends</span>
                                                    </h3>
                                                    <div class="card-toolbar">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" />
                                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                            data-kt-menu="true">
                                                            <div class="menu-item px-3">
                                                                <div
                                                                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                    Payments</div>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Specify a target name for future usage and reference"></i></a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                                            </div>
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                                data-kt-menu-placement="right-end">
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">Subscription</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                                    </div>
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                                    </div>
                                                                    <div class="separator my-2"></div>
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content px-3">
                                                                            <label
                                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                                <input
                                                                                    class="form-check-input w-30px h-20px"
                                                                                    type="checkbox" value="1"
                                                                                    checked="checked"
                                                                                    name="notifications" />
                                                                                <span
                                                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="menu-item px-3 my-1">
                                                                <a href="#" class="menu-link px-3">Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body d-flex flex-column">
                                                    <div class="mixed-widget-5-chart card-rounded-top"
                                                        data-kt-chart-color="success" style="height: 150px"></div>
                                                    <div class="mt-5">
                                                        <div class="d-flex flex-stack mb-5">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <div class="symbol-label bg-light">
                                                                        <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}"
                                                                            class="h-50" alt="" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#"
                                                                        class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                                        Authors</a>
                                                                    <div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt,
                                                                        Sandra Trepp</div>
                                                                </div>
                                                            </div>
                                                            <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                                        </div>
                                                        <div class="d-flex flex-stack mb-5">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <div class="symbol-label bg-light">
                                                                        <img src="{{ asset('media/svg/brand-logos/figma-1.svg') }}"
                                                                            class="h-50" alt="" />
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <a href="#"
                                                                        class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                                        Sales</a>
                                                                    <div class="fs-7 text-muted fw-bold mt-1">PitStop Emails
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                                        </div>
                                                        <div class="d-flex flex-stack">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <div class="symbol-label bg-light">
                                                                        <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}"
                                                                            class="h-50" alt="" />
                                                                    </div>
                                                                </div>
                                                                <div class="py-1">
                                                                    <a href="#"
                                                                        class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                                        Engagement</a>
                                                                    <div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
                                                                </div>
                                                            </div>
                                                            <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-8">
                                            <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                                                <div class="card-header border-0 pt-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                                        <span class="text-muted mt-1 fw-bold fs-7">More than 400 new
                                                            products</span>
                                                    </h3>
                                                    <div class="card-toolbar">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark active fw-bolder px-4 me-1"
                                                                    data-bs-toggle="tab"
                                                                    href="#kt_table_widget_5_tab_1">Month</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4 me-1"
                                                                    data-bs-toggle="tab"
                                                                    href="#kt_table_widget_5_tab_2">Week</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4"
                                                                    data-bs-toggle="tab"
                                                                    href="#kt_table_widget_5_tab_3">Day</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body py-3">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                                    <thead>
                                                                        <tr class="border-0">
                                                                            <th class="p-0 w-50px"></th>
                                                                            <th class="p-0 min-w-150px"></th>
                                                                            <th class="p-0 min-w-140px"></th>
                                                                            <th class="p-0 min-w-110px"></th>
                                                                            <th class="p-0 min-w-50px"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                                    Simmons</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Movie
                                                                                    Creator</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">React,
                                                                                HTML</td>
                                                                            <td class="text-end">
                                                                                <span
                                                                                    class="badge badge-light-success">Approved</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                                    Authors</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Most
                                                                                    Successful</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">Python,
                                                                                MySQL</td>
                                                                            <td class="text-end">
                                                                                <span class="badge badge-light-warning">In
                                                                                    Progress</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                                    Users</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Awesome
                                                                                    Users</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">
                                                                                Laravel,Metronic</td>
                                                                            <td class="text-end">
                                                                                <span
                                                                                    class="badge badge-light-primary">Success</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                                    Customers</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Movie
                                                                                    Creator</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">
                                                                                AngularJS, C#</td>
                                                                            <td class="text-end">
                                                                                <span
                                                                                    class="badge badge-light-danger">Rejected</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/kickstarter.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                                    Theme</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Best
                                                                                    Customers</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">ReactJS,
                                                                                Ruby</td>
                                                                            <td class="text-end">
                                                                                <span class="badge badge-light-warning">In
                                                                                    Progress</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                                    <thead>
                                                                        <tr class="border-0">
                                                                            <th class="p-0 w-50px"></th>
                                                                            <th class="p-0 min-w-150px"></th>
                                                                            <th class="p-0 min-w-140px"></th>
                                                                            <th class="p-0 min-w-110px"></th>
                                                                            <th class="p-0 min-w-50px"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                                    Simmons</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Movie
                                                                                    Creator</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">React,
                                                                                HTML</td>
                                                                            <td class="text-end">
                                                                                <span
                                                                                    class="badge badge-light-success">Approved</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                                    Authors</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Most
                                                                                    Successful</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">Python,
                                                                                MySQL</td>
                                                                            <td class="text-end">
                                                                                <span class="badge badge-light-warning">In
                                                                                    Progress</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                                    Customers</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Movie
                                                                                    Creator</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">
                                                                                AngularJS, C#</td>
                                                                            <td class="text-end">
                                                                                <span
                                                                                    class="badge badge-light-danger">Rejected</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                                    <thead>
                                                                        <tr class="border-0">
                                                                            <th class="p-0 w-50px"></th>
                                                                            <th class="p-0 min-w-150px"></th>
                                                                            <th class="p-0 min-w-140px"></th>
                                                                            <th class="p-0 min-w-110px"></th>
                                                                            <th class="p-0 min-w-50px"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/kickstarter.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                                    Theme</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Best
                                                                                    Customers</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">ReactJS,
                                                                                Ruby</td>
                                                                            <td class="text-end">
                                                                                <span class="badge badge-light-warning">In
                                                                                    Progress</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                                    Customers</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Movie
                                                                                    Creator</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">
                                                                                AngularJS, C#</td>
                                                                            <td class="text-end">
                                                                                <span
                                                                                    class="badge badge-light-danger">Rejected</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                                    Users</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Awesome
                                                                                    Users</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">
                                                                                Laravel,Metronic</td>
                                                                            <td class="text-end">
                                                                                <span
                                                                                    class="badge badge-light-primary">Success</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="symbol symbol-45px me-2">
                                                                                    <span class="symbol-label">
                                                                                        <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}"
                                                                                            class="h-50 align-self-center"
                                                                                            alt="" />
                                                                                    </span>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                                    Authors</a>
                                                                                <span
                                                                                    class="text-muted fw-bold d-block">Most
                                                                                    Successful</span>
                                                                            </td>
                                                                            <td class="text-end text-muted fw-bold">Python,
                                                                                MySQL</td>
                                                                            <td class="text-end">
                                                                                <span class="badge badge-light-warning">In
                                                                                    Progress</span>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                    <span class="svg-icon svg-icon-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <rect opacity="0.5" x="18"
                                                                                                y="13" width="13" height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-180 18 13)"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                                <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                                    <div class="text-dark order-2 order-md-1">
                                        <span class="text-gray-400 fw-bold me-1">Created by</span>
                                        <a href="https://keenthemes.com" target="_blank"
                                            class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
                                    </div>
                                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                                        <li class="menu-item">
                                            <a href="https://keenthemes.com" target="_blank"
                                                class="menu-link px-2">About</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://keenthemes.com/support" target="_blank"
                                                class="menu-link px-2">Support</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://1.envato.market/EA4JP" target="_blank"
                                                class="menu-link px-2">Purchase</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
                    data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
                    <div class="card shadow-none rounded-0">
                        <div class="card-header" id="kt_activities_header">
                            <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
                            <div class="card-toolbar">
                                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                                    id="kt_activities_close">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body position-relative" id="kt_activities_body">
                            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5"
                                data-kt-scroll="true" data-kt-scroll-height="auto"
                                data-kt-scroll-wrappers="#kt_activities_body"
                                data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                                data-kt-scroll-offset="5px">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="timeline-line w-40px"></div>
                                        <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                            <div class="symbol-label bg-light">
                                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
                                                            fill="black" />
                                                        <path
                                                            d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="timeline-content mb-10 mt-n1">
                                            <div class="pe-3 mb-5">
                                                <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus
                                                    Mobile APp” project:</div>
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                        data-bs-boundary="window" data-bs-placement="top"
                                                        title="Nina Nilson">
                                                        <img src="{{ asset('media/avatars/150-11.jpg') }}" alt="img" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overflow-auto pb-5">
                                                <div
                                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                    <a href="#"
                                                        class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting
                                                        with customer</a>
                                                    <div class="min-w-175px pe-2">
                                                        <span class="badge badge-light text-muted">Application Design</span>
                                                    </div>
                                                    <div
                                                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                                        <div class="symbol symbol-circle symbol-25px">
                                                            <img src="{{ asset('media/avatars/150-3.jpg') }}" alt="img" />
                                                        </div>
                                                        <div class="symbol symbol-circle symbol-25px">
                                                            <img src="{{ asset('media/avatars/150-11.jpg') }}" alt="img" />
                                                        </div>
                                                        <div class="symbol symbol-circle symbol-25px">
                                                            <div
                                                                class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">
                                                                A</div>
                                                        </div>
                                                    </div>
                                                    <div class="min-w-125px pe-2">
                                                        <span class="badge badge-light-primary">In Progress</span>
                                                    </div>
                                                    <a href="#"
                                                        class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                                    <a href="#"
                                                        class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project
                                                        Delivery Preparation</a>
                                                    <div class="min-w-175px">
                                                        <span class="badge badge-light text-muted">CRM System
                                                            Development</span>
                                                    </div>
                                                    <div
                                                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                                        <div class="symbol symbol-circle symbol-25px">
                                                            <img src="{{ asset('media/avatars/150-5.jpg') }}" alt="img" />
                                                        </div>
                                                        <div class="symbol symbol-circle symbol-25px">
                                                            <div
                                                                class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">
                                                                B</div>
                                                        </div>
                                                    </div>
                                                    <div class="min-w-125px">
                                                        <span class="badge badge-light-success">Completed</span>
                                                    </div>
                                                    <a href="#"
                                                        class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-line w-40px"></div>
                                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                                            <div class="symbol-label bg-light">
                                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                                                            fill="black" />
                                                        <path
                                                            d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="timeline-content mb-10 mt-n2">
                                            <div class="overflow-auto pe-3">
                                                <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that
                                                    speak human workshop</div>
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                        data-bs-boundary="window" data-bs-placement="top"
                                                        title="Alan Nilson">
                                                        <img src="{{ asset('media/avatars/150-2.jpg') }}" alt="img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="timeline-line w-40px"></div>
                                        <div class="timeline-icon symbol symbol-circle symbol-40px">
                                            <div class="symbol-label bg-light">
                                                <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
                                                            fill="black" />
                                                        <path opacity="0.3"
                                                            d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="timeline-content mb-10 mt-n1">
                                            <div class="mb-5 pe-3">
                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New
                                                    Incoming Project Files:</a>
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                        data-bs-boundary="window" data-bs-placement="top"
                                                        title="Jan Hummer">
                                                        <img src="{{ asset('media/avatars/150-6.jpg') }}" alt="img" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overflow-auto pb-5">
                                                <div
                                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                        <img alt="" class="w-30px me-3"
                                                            src="{{ asset('media/svg/files/pdf.svg') }}" />
                                                        <div class="ms-1 fw-bold">
                                                            <a href="#" class="fs-6 text-hover-primary fw-bolder">Finance
                                                                KPI App Guidelines</a>
                                                            <div class="text-gray-400">1.9mb</div>
                                                        </div>
                                                        v>
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <img alt="" class="w-30px me-3"
                                                                src="{{ asset('media/svg/files/doc.svg') }}" />
                                                            <div class="ms-1 fw-bold">
                                                                <a href="#" class="fs-6 text-hover-primary fw-bolder">Client
                                                                    UAT Testing Results</a>
                                                                <div class="text-gray-400">18kb</div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-aligns-center">
                                                            <img alt="" class="w-30px me-3"
                                                                src="{{ asset('media/svg/files/css.svg') }}" />
                                                            <div class="ms-1 fw-bold">
                                                                <a href="#"
                                                                    class="fs-6 text-hover-primary fw-bolder">Finance
                                                                    Reports</a>
                                                                <div class="text-gray-400">20mb</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-line w-40px"></div>
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                fill="black" />
                                                            <path
                                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content mb-10 mt-n1">
                                                <div class="pe-3 mb-5">
                                                    <div class="fs-5 fw-bold mb-2">Task
                                                        <a href="#" class="text-primary fw-bolder me-1">#45890</a>merged
                                                        with
                                                        <a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads
                                                        Pro Admin Dashboard project:
                                                    </div>
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Nina Nilson">
                                                            <img src="{{ asset('media/avatars/150-11.jpg') }}" alt="img" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-line w-40px"></div>
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                fill="black" />
                                                            <path
                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content mb-10 mt-n1">
                                                <div class="pe-3 mb-5">
                                                    <div class="fs-5 fw-bold mb-2">3 new application design concepts added:
                                                    </div>
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Marcus Dotson">
                                                            <img src="{{ asset('media/avatars/150-3.jpg') }}" alt="img" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="overflow-auto pb-5">
                                                    <div
                                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                        <div class="overlay me-10">
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-200px"
                                                                    src="{{ asset('media/demos/demo1.png') }}" />
                                                            </div>
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                        </div>
                                                        <div class="overlay me-10">
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-200px"
                                                                    src="{{ asset('media/demos/demo2.png') }}" />
                                                            </div>
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                        </div>
                                                        <div class="overlay">
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-200px"
                                                                    src="{{ asset('media/demos/demo3.png') }}" />
                                                            </div>
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-line w-40px"></div>
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                fill="black" />
                                                            <path opacity="0.3"
                                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content mb-10 mt-n1">
                                                <div class="pe-3 mb-5">
                                                    <div class="fs-5 fw-bold mb-2">New case
                                                        <a href="#" class="text-primary fw-bolder me-1">#67890</a>is
                                                        assigned to you in Multi-platform Database Design project
                                                    </div>
                                                    <div class="overflow-auto pb-5">
                                                        <div class="d-flex align-items-center mt-1 fs-6">
                                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                            <a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-line w-40px"></div>
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                fill="black" />
                                                            <path
                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content mb-10 mt-n1">
                                                <div class="pe-3 mb-5">
                                                    <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Robert Rich">
                                                            <img src="{{ asset('media/avatars/150-14.jpg') }}" alt="img" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="overflow-auto pb-5">
                                                    <div
                                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                            <div class="mb-3 mb-md-0 fw-bold">
                                                                <h4 class="text-gray-900 fw-bolder">Database Backup Process
                                                                    Completed!</h4>
                                                                <div class="fs-6 text-gray-700 pe-7">Login into Metronic
                                                                    Admin Dashboard to make sure the data integrity is OK
                                                                </div>
                                                            </div>
                                                            <a href="#"
                                                                class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-line w-40px"></div>
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                                fill="black" />
                                                            <path opacity="0.3"
                                                                d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                                fill="black" />
                                                            <path opacity="0.3"
                                                                d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content mt-n1">
                                                <div class="pe-3 mb-5">
                                                    <div class="fs-5 fw-bold mb-2">New order
                                                        <a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed
                                                        for Workshow Planning &amp; Budget Estimation
                                                    </div>
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                        <a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                                <a href="../../demo7/dist/pages/profile/activity.html"
                                    class="btn btn-bg-body text-primary">View All Activities
                                    <span class="svg-icon svg-icon-3 svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                transform="rotate(-180 18 13)" fill="black" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                            </div>
                        </div>
                    </div>
                    >
                    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
                        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
                        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
                        <div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
                            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                                <div class="card-title">
                                    <div class="d-flex justify-content-center flex-column me-3">
                                        <a href="#"
                                            class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
                                            Cox</a>
                                        <div class="mb-0 lh-1">
                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                            <span class="fs-7 fw-bold text-muted">Active</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <div class="me-2">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="bi bi-three-dots fs-3"></i>
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts
                                                </div>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_users_search">Add Contact</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title="Specify a contact email to send an invitation"></i></a>
                                            </div>
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Groups</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                            title="Coming soon">Create Group</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                            title="Coming soon">Invite Members</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                            title="Coming soon">Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="kt_drawer_chat_messenger_body">
                                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                                    <div class="d-flex justify-content-start mb-10">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-15.jpg') }}" />
                                                </div>
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                                data-kt-element="message-text">How likely are you to recommend our company
                                                to your friends and family ?</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-10">
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-26.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                                data-kt-element="message-text">Hey there, we’re just writing to let you know
                                                that you’ve been subscribed to a repository on GitHub.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-10">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-15.jpg') }}" />
                                                </div>
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                                data-kt-element="message-text">Ok, Understood!</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-10">
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-26.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                                data-kt-element="message-text">You’ll receive notifications for all issues,
                                                pull requests!</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-10">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-15.jpg') }}" />
                                                </div>
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                                data-kt-element="message-text">You can unwatch this repository immediately
                                                by clicking here:
                                                <a href="https://keenthemes.com">Keenthemes.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-10">
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-26.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                                data-kt-element="message-text">Most purchased Business courses during this
                                                sale!</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-10">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-15.jpg') }}" />
                                                </div>
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                                data-kt-element="message-text">Company BBQ to celebrate the last quater
                                                achievements and goals. Food and drinks provided</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                        <div class="d-flex flex-column align-items-end">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="me-3">
                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-26.jpg') }}" />
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                                data-kt-element="message-text"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="{{ asset('media/avatars/150-15.jpg') }}" />
                                                </div>
                                                <div class="ms-3">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
                                                        Cox</a>
                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                </div>
                                            </div>
                                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                                data-kt-element="message-text">Right before vacation season we have the next
                                                Big Deal for you.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                                    placeholder="Type a message"></textarea>
                                <!--begin:Toolbar-->
                                <div class="d-flex flex-stack">
                                    <div class="d-flex align-items-center me-2">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                            data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-paperclip fs-3"></i>
                                        </button>
                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                            data-bs-toggle="tooltip" title="Coming soon">
                                            <i class="bi bi-upload fs-3"></i>
                                        </button>
                                    </div>
                                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    >
                    <button id="kt_explore_toggle"
                        class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0"
                        title="Explore Metronic" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">
                        <span id="kt_explore_toggle_label">Explore</span>
                    </button>
                    >
                    <div id="kt_explore" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
                        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
                        data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
                        <div class="card shadow-none rounded-0 w-100">
                            <div class="card-header" id="kt_explore_header">
                                <h3 class="card-title fw-bolder text-gray-700">Explore Metronic</h3>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                                        id="kt_explore_close">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" id="kt_explore_body">
                                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body"
                                    data-kt-scroll-dependencies="#kt_explore_header" data-kt-scroll-offset="5px">
                                    <div class="mb-0">
                                        <div class="mb-7">
                                            <div class="d-flex flex-stack">
                                                <h3 class="mb-0">Metronic Licenses</h3>
                                                <a href="https://themeforest.net/licenses/standard" class="fw-bold"
                                                    target="_blank">License FAQs</a>
                                            </div>
                                        </div>
                                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular
                                                            License</div>
                                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            data-bs-content="Use, by you or one client in a single end product which end users are not charged for."></i>
                                                    </div>
                                                    <div class="fs-7 text-muted">For single end product used by you or one
                                                        client</div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                                    <span class="text-dark fs-1 fw-bolder">39</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended
                                                            License</div>
                                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                                                    </div>
                                                    <div class="fs-7 text-muted">For single end product with paying users.
                                                    </div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                                    <span class="text-dark fs-1 fw-bolder">939</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom
                                                            License</div>
                                                    </div>
                                                    <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success"
                                                        target="_blank">Contact Us</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy
                                            Now</a>
                                        <div class="mb-0">
                                            <h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
                                            <div class="row g-5">
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo1.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo1"
                                                                class="btn btn-sm btn-success shadow">Demo 1</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo2.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo2"
                                                                class="btn btn-sm btn-success shadow">Demo 2</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo3.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo3"
                                                                class="btn btn-sm btn-success shadow">Demo 3</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo4.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo4"
                                                                class="btn btn-sm btn-success shadow">Demo 4</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo5.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo5"
                                                                class="btn btn-sm btn-success shadow">Demo 5</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo6.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo6"
                                                                class="btn btn-sm btn-success shadow">Demo 6</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo7.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo7"
                                                                class="btn btn-sm btn-success shadow">Demo 7</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo8.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo8"
                                                                class="btn btn-sm btn-success shadow">Demo 8</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo9.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo9"
                                                                class="btn btn-sm btn-success shadow">Demo 9</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo10.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo11.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo12.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo13.png') }}" alt="demo"
                                                                class="w-100" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <a href="https://preview.keenthemes.com/metronic8/demo13"
                                                                class="btn btn-sm btn-success shadow">Demo 13</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo14.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo15.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo16.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo17.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                                        <div class="overlay-wrapper">
                                                            <img src="{{ asset('media/demos/demo19.png') }}" alt="demo"
                                                                class="w-100 opacity-25" />
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                                            <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                                                                Coming soon</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    >
                    >
                    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog mw-650px">
                            <div class="modal-content">
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                    <div class="text-center mb-13">
                                        <h1 class="mb-3">Invite a Friend</h1>
                                        <div class="text-muted fw-bold fs-5">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
                                        </div>
                                    </div>
                                    <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                                        <img alt="Logo" src="{{ asset('media/svg/brand-logos/google-icon.svg') }}"
                                            class="h-20px me-3" />Invite Gmail Contacts
                                    </div>
                                    <div class="separator d-flex flex-center mb-8">
                                        <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
                                    </div>
                                    <textarea class="form-control form-control-solid mb-8" rows="3"
                                        placeholder="Type or paste emails here"></textarea>
                                    <div class="mb-10">
                                        <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-1.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                            Smith</a>
                                                        <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                            Macy</a>
                                                        <div class="fw-bold text-muted">melody@altbox.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-26.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                            Smith</a>
                                                        <div class="fw-bold text-muted">max@kt.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-4.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                            Bean</a>
                                                        <div class="fw-bold text-muted">sean@dellito.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-15.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                            Cox</a>
                                                        <div class="fw-bold text-muted">brian@exchange.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                            Collins</a>
                                                        <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-8.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                            Mitcham</a>
                                                        <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                            Owen</a>
                                                        <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-6.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                            Wilson</a>
                                                        <div class="fw-bold text-muted">dam@consilting.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                            Bold</a>
                                                        <div class="fw-bold text-muted">emma@intenso.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-7.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                            Crown</a>
                                                        <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                            Doe</a>
                                                        <div class="fw-bold text-muted">robert@benko.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-17.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-bold text-muted">miller@mapple.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                            Kunic</a>
                                                        <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="{{ asset('media/avatars/150-10.jpg') }}" />
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                            Wilder</a>
                                                        <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-stack py-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                            Collins</a>
                                                        <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                    </div>
                                                </div>
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-stack">
                                        <div class="me-5 fw-bold">
                                            <label class="fs-6">Adding Users by Team Members</label>
                                            <div class="fs-7 text-muted">If you need more info, please check budget planning
                                            </div>
                                        </div>
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-bold text-muted">Allowed</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    >
                    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-900px">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Create App</h2>
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body py-lg-10 px-lg-10">
                                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                        id="kt_modal_create_app_stepper">
                                        <div
                                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                                            <div class="stepper-nav ps-lg-10">
                                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                                    <div class="stepper-line w-40px"></div>
                                                    <div class="stepper-icon w-40px h-40px">
                                                        <i class="stepper-check fas fa-check"></i>
                                                        <span class="stepper-number">1</span>
                                                    </div>
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title">Details</h3>
                                                        <div class="stepper-desc">Name your App</div>
                                                    </div>
                                                </div>
                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                    <div class="stepper-line w-40px"></div>
                                                    <div class="stepper-icon w-40px h-40px">
                                                        <i class="stepper-check fas fa-check"></i>
                                                        <span class="stepper-number">2</span>
                                                    </div>
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title">Frameworks</h3>
                                                        <div class="stepper-desc">Define your app framework</div>
                                                    </div>
                                                    v>
                                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                                        <div class="stepper-line w-40px"></div>
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">3</span>
                                                        </div>
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Database</h3>
                                                            <div class="stepper-desc">Select the app database type</div>
                                                        </div>
                                                    </div>
                                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                                        <div class="stepper-line w-40px"></div>
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">4</span>
                                                        </div>
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Billing</h3>
                                                            <div class="stepper-desc">Provide payment details</div>
                                                        </div>
                                                    </div>
                                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                                        <div class="stepper-line w-40px"></div>
                                                        <div class="stepper-icon w-40px h-40px">
                                                            <i class="stepper-check fas fa-check"></i>
                                                            <span class="stepper-number">5</span>
                                                        </div>
                                                        <div class="stepper-label">
                                                            <h3 class="stepper-title">Completed</h3>
                                                            <div class="stepper-desc">Review and Submit</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-row-fluid py-lg-5 px-lg-15">
                                                <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                                    <div class="current" data-kt-stepper-element="content">
                                                        <div class="w-100">
                                                            <div class="fv-row mb-10">
                                                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                                    <span class="required">App Name</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Specify your unique app name"></i>
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-control-solid"
                                                                    name="name" placeholder="" value="" />
                                                            </div>
                                                            <div class="fv-row">
                                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                                    <span class="required">Category</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Select your app category"></i>
                                                                </label>
                                                                <!--begin:Options-->
                                                                <div class="fv-row">
                                                                    <!--begin:Option-->
                                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                                        <!--begin:Label-->
                                                                        <span class="d-flex align-items-center me-2">
                                                                            <!--begin:Icon-->
                                                                            <span class="symbol symbol-50px me-6">
                                                                                <span class="symbol-label bg-light-primary">
                                                                                    <span
                                                                                        class="svg-icon svg-icon-1 svg-icon-primary">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <!--begin:Info-->
                                                                            <span class="d-flex flex-column">
                                                                                <span class="fw-bolder fs-6">Quick Online
                                                                                    Courses</span>
                                                                                <span class="fs-7 text-muted">Creating a
                                                                                    clear text structure is just one
                                                                                    SEO</span>
                                                                            </span>
                                                                        </span>
                                                                        <!--begin:Input-->
                                                                        <span
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="category" value="1" />
                                                                        </span>
                                                                    </label>
                                                                    <!--begin:Option-->
                                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                                        <!--begin:Label-->
                                                                        <span class="d-flex align-items-center me-2">
                                                                            <!--begin:Icon-->
                                                                            <span class="symbol symbol-50px me-6">
                                                                                <span class="symbol-label bg-light-danger">
                                                                                    <span
                                                                                        class="svg-icon svg-icon-1 svg-icon-danger">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24px" height="24px"
                                                                                            viewBox="0 0 24 24">
                                                                                            <g stroke="none"
                                                                                                stroke-width="1" fill="none"
                                                                                                fill-rule="evenodd">
                                                                                                <rect x="5" y="5" width="5"
                                                                                                    height="5" rx="1"
                                                                                                    fill="#000000" />
                                                                                                <rect x="14" y="5" width="5"
                                                                                                    height="5" rx="1"
                                                                                                    fill="#000000"
                                                                                                    opacity="0.3" />
                                                                                                <rect x="5" y="14" width="5"
                                                                                                    height="5" rx="1"
                                                                                                    fill="#000000"
                                                                                                    opacity="0.3" />
                                                                                                <rect x="14" y="14"
                                                                                                    width="5" height="5"
                                                                                                    rx="1" fill="#000000"
                                                                                                    opacity="0.3" />
                                                                                            </g>
                                                                                        </svg>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <!--begin:Info-->
                                                                            <span class="d-flex flex-column">
                                                                                <span class="fw-bolder fs-6">Face to Face
                                                                                    Discussions</span>
                                                                                <span class="fs-7 text-muted">Creating a
                                                                                    clear text structure is just one
                                                                                    aspect</span>
                                                                            </span>
                                                                        </span>
                                                                        <!--begin:Input-->
                                                                        <span
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="category" value="2" />
                                                                        </span>
                                                                    </label>
                                                                    <!--begin:Option-->
                                                                    <label class="d-flex flex-stack cursor-pointer">
                                                                        <!--begin:Label-->
                                                                        <span class="d-flex align-items-center me-2">
                                                                            <!--begin:Icon-->
                                                                            <span class="symbol symbol-50px me-6">
                                                                                <span class="symbol-label bg-light-success">
                                                                                    <span
                                                                                        class="svg-icon svg-icon-1 svg-icon-success">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24" fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                                                                fill="black" />
                                                                                            <path
                                                                                                d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <!--begin:Info-->
                                                                            <span class="d-flex flex-column">
                                                                                <span class="fw-bolder fs-6">Full Intro
                                                                                    Training</span>
                                                                                <span class="fs-7 text-muted">Creating a
                                                                                    clear text structure copywriting</span>
                                                                            </span>
                                                                        </span>
                                                                        <!--begin:Input-->
                                                                        <span
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="category" value="3" />
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-kt-stepper-element="content">
                                                        <div class="w-100">
                                                            <div class="fv-row">
                                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                                    <span class="required">Select Framework</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Specify your apps framework"></i>
                                                                </label>
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                    <!--begin:Label-->
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <!--begin:Icon-->
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span class="symbol-label bg-light-warning">
                                                                                <i
                                                                                    class="fab fa-html5 text-warning fs-2x"></i>
                                                                            </span>
                                                                        </span>
                                                                        <!--begin:Info-->
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bolder fs-6">HTML5</span>
                                                                            <span class="fs-7 text-muted">Base Web
                                                                                Projec</span>
                                                                        </span>
                                                                    </span>
                                                                    <!--begin:Input-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            checked="checked" name="framework" value="1" />
                                                                    </span>
                                                                </label>
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                    <!--begin:Label-->
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <!--begin:Icon-->
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span class="symbol-label bg-light-success">
                                                                                <i
                                                                                    class="fab fa-react text-success fs-2x"></i>
                                                                            </span>
                                                                        </span>
                                                                        <!--begin:Info-->
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bolder fs-6">ReactJS</span>
                                                                            <span class="fs-7 text-muted">Robust and
                                                                                flexible app framework</span>
                                                                        </span>
                                                                    </span>
                                                                    <!--begin:Input-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="framework" value="2" />
                                                                    </span>
                                                                </label>
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                    <!--begin:Label-->
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <!--begin:Icon-->
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span class="symbol-label bg-light-danger">
                                                                                <i
                                                                                    class="fab fa-angular text-danger fs-2x"></i>
                                                                            </span>
                                                                        </span>
                                                                        <!--begin:Info-->
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bolder fs-6">Angular</span>
                                                                            <span class="fs-7 text-muted">Powerful data
                                                                                mangement</span>
                                                                        </span>
                                                                    </span>
                                                                    <!--begin:Input-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="framework" value="3" />
                                                                    </span>
                                                                </label>
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer">
                                                                    <!--begin:Label-->
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <!--begin:Icon-->
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span class="symbol-label bg-light-primary">
                                                                                <i
                                                                                    class="fab fa-vuejs text-primary fs-2x"></i>
                                                                            </span>
                                                                        </span>
                                                                        <!--begin:Info-->
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bolder fs-6">Vue</span>
                                                                            <span class="fs-7 text-muted">Lightweight and
                                                                                responsive framework</span>
                                                                        </span>
                                                                    </span>
                                                                    <!--begin:Input-->
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="framework" value="4" />
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-kt-stepper-element="content">
                                                        <div class="w-100">
                                                            <div class="fv-row mb-10">
                                                                <label class="required fs-5 fw-bold mb-2">Database
                                                                    Name</label>
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-control-solid"
                                                                    name="dbname" placeholder="" value="master_db" />
                                                            </div>
                                                            <div class="fv-row">
                                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                                    <span class="required">Select Database Engine</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Select your app database engine"></i>
                                                                </label>
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span class="symbol-label bg-light-success">
                                                                                <i
                                                                                    class="fas fa-database text-success fs-2x"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bolder fs-6">MySQL</span>
                                                                            <span class="fs-7 text-muted">Basic MySQL
                                                                                database</span>
                                                                        </span>
                                                                    </span>
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="dbengine" checked="checked" value="1" />
                                                                    </span>
                                                                </label>
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span class="symbol-label bg-light-danger">
                                                                                <i
                                                                                    class="fab fa-google text-danger fs-2x"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bolder fs-6">Firebase</span>
                                                                            <span class="fs-7 text-muted">Google based app
                                                                                data management</span>
                                                                        </span>
                                                                    </span>
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="dbengine" value="2" />
                                                                    </span>
                                                                </label>
                                                                <!--begin:Option-->
                                                                <label class="d-flex flex-stack cursor-pointer">
                                                                    <span class="d-flex align-items-center me-2">
                                                                        <span class="symbol symbol-50px me-6">
                                                                            <span class="symbol-label bg-light-warning">
                                                                                <i
                                                                                    class="fab fa-amazon text-warning fs-2x"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="d-flex flex-column">
                                                                            <span class="fw-bolder fs-6">DynamoDB</span>
                                                                            <span class="fs-7 text-muted">Amazon Fast NoSQL
                                                                                Database</span>
                                                                        </span>
                                                                    </span>
                                                                    <span
                                                                        class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="dbengine" value="3" />
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-kt-stepper-element="content">
                                                        <div class="w-100">
                                                            <div class="d-flex flex-column mb-7 fv-row">
                                                                <label
                                                                    class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                    <span class="required">Name On Card</span>
                                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                        data-bs-toggle="tooltip"
                                                                        title="Specify a card holder's name"></i>
                                                                </label>
                                                                <input type="text" class="form-control form-control-solid"
                                                                    placeholder="" name="card_name" value="Max Doe" />
                                                            </div>
                                                            <div class="d-flex flex-column mb-7 fv-row">
                                                                <label class="required fs-6 fw-bold form-label mb-2">Card
                                                                    Number</label>
                                                                <div class="position-relative">
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Enter card number" name="card_number"
                                                                        value="4111 1111 1111 1111" />
                                                                    <div
                                                                        class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                                        <img src="{{ asset('media/svg/card-logos/visa.svg') }}"
                                                                            alt="" class="h-25px" />
                                                                        <img src="{{ asset('media/svg/card-logos/mastercard.svg') }}"
                                                                            alt="" class="h-25px" />
                                                                        <img src="{{ asset('media/svg/card-logos/american-express.svg') }}"
                                                                            alt="" class="h-25px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-10">
                                                                <div class="col-md-8 fv-row">
                                                                    <label
                                                                        class="required fs-6 fw-bold form-label mb-2">Expiration
                                                                        Date</label>
                                                                    <div class="row fv-row">
                                                                        <div class="col-6">
                                                                            <select name="card_expiry_month"
                                                                                class="form-select form-select-solid"
                                                                                data-control="select2"
                                                                                data-hide-search="true"
                                                                                data-placeholder="Month">
                                                                                <option></option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10</option>
                                                                                <option value="11">11</option>
                                                                                <option value="12">12</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <select name="card_expiry_year"
                                                                                class="form-select form-select-solid"
                                                                                data-control="select2"
                                                                                data-hide-search="true"
                                                                                data-placeholder="Year">
                                                                                <option></option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                                <option value="2025">2025</option>
                                                                                <option value="2026">2026</option>
                                                                                <option value="2027">2027</option>
                                                                                <option value="2028">2028</option>
                                                                                <option value="2029">2029</option>
                                                                                <option value="2030">2030</option>
                                                                                <option value="2031">2031</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 fv-row">
                                                                    <label
                                                                        class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                        <span class="required">CVV</span>
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Enter a card CVV code"></i>
                                                                    </label>
                                                                    <div class="position-relative">
                                                                        <input type="text"
                                                                            class="form-control form-control-solid"
                                                                            minlength="3" maxlength="4" placeholder="CVV"
                                                                            name="card_cvv" />
                                                                        <div
                                                                            class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                                            <span class="svg-icon svg-icon-2hx">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none">
                                                                                    <path d="M22 7H2V11H22V7Z"
                                                                                        fill="black" />
                                                                                    <path opacity="0.3"
                                                                                        d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                                        fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-stack">
                                                                <div class="me-5">
                                                                    <label class="fs-6 fw-bold form-label">Save Card for
                                                                        further billing?</label>
                                                                    <div class="fs-7 fw-bold text-muted">If you need more
                                                                        info, please check budget planning</div>
                                                                </div>
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="1" checked="checked" />
                                                                    <span class="form-check-label fw-bold text-muted">Save
                                                                        Card</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-kt-stepper-element="content">
                                                        <div class="w-100 text-center">
                                                            <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                                            <div class="text-muted fw-bold fs-3">Submit your app to
                                                                kickstart your project.</div>
                                                            <div class="text-center px-4 py-15">
                                                                <img src="{{ asset('media/illustrations/sigma-1/9.png') }}"
                                                                    alt="" class="w-100 mh-300px" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-stack pt-10">
                                                        <div class="me-2">
                                                            <button type="button" class="btn btn-lg btn-light-primary me-3"
                                                                data-kt-stepper-action="previous">
                                                                <span class="svg-icon svg-icon-3 me-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="6" y="11" width="13"
                                                                            height="2" rx="1" fill="black" />
                                                                        <path
                                                                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-lg btn-primary"
                                                                data-kt-stepper-action="submit">
                                                                <span class="indicator-label">Submit
                                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-180 18 13)"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                            <button type="button" class="btn btn-lg btn-primary"
                                                                data-kt-stepper-action="next">Continue
                                                                <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        >
                        <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content rounded">
                                    <div class="modal-header justify-content-end border-0 pb-0">
                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                        transform="rotate(45 7.41422 6)" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                                        <div class="mb-13 text-center">
                                            <h1 class="mb-3">Upgrade a Plan</h1>
                                            <div class="text-muted fw-bold fs-5">If you need more info, please check
                                                <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                                                <a href="#"
                                                    class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                                    data-kt-plan="month">Monthly</a>
                                                <a href="#"
                                                    class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                                    data-kt-plan="annual">Annual</a>
                                            </div>
                                            <div class="row mt-10">
                                                <div class="col-lg-6 mb-10 mb-lg-0">
                                                    <div class="nav flex-column">
                                                        <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                                            data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                                    <input class="form-check-input" type="radio" name="plan"
                                                                        checked="checked" value="startup" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h2
                                                                        class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                                        Startup</h2>
                                                                    <div class="fw-bold opacity-50">Best for startups</div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <span class="mb-2">$</span>
                                                                <span class="fs-3x fw-bolder" data-kt-plan-price-month="39"
                                                                    data-kt-plan-price-annual="399">39</span>
                                                                <span class="fs-7 opacity-50">/
                                                                    <span data-kt-element="period">Mon</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                            data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                                    <input class="form-check-input" type="radio" name="plan"
                                                                        value="advanced" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h2
                                                                        class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                                        Advanced</h2>
                                                                    <div class="fw-bold opacity-50">Best for 100+ team size
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <span class="mb-2">$</span>
                                                                <span class="fs-3x fw-bolder" data-kt-plan-price-month="339"
                                                                    data-kt-plan-price-annual="3399">339</span>
                                                                <span class="fs-7 opacity-50">/
                                                                    <span data-kt-element="period">Mon</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                            data-bs-toggle="tab"
                                                            data-bs-target="#kt_upgrade_plan_enterprise">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                                    <input class="form-check-input" type="radio" name="plan"
                                                                        value="enterprise" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h2
                                                                        class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                                        Enterprise
                                                                        <span
                                                                            class="badge badge-light-success ms-2 fs-7">Most
                                                                            popular</span>
                                                                    </h2>
                                                                    <div class="fw-bold opacity-50">Best value for 1000+
                                                                        team</div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <span class="mb-2">$</span>
                                                                <span class="fs-3x fw-bolder" data-kt-plan-price-month="999"
                                                                    data-kt-plan-price-annual="9999">999</span>
                                                                <span class="fs-7 opacity-50">/
                                                                    <span data-kt-element="period">Mon</span></span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                                    <input class="form-check-input" type="radio" name="plan"
                                                                        value="custom" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h2
                                                                        class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                                        Custom</h2>
                                                                    <div class="fw-bold opacity-50">Requet a custom license
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="tab-content rounded h-100 bg-light p-10">
                                                        <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                                            <div class="pb-5">
                                                                <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                                                <div class="text-muted fw-bold">Optimal for 10+ team size
                                                                    and new startup</div>
                                                            </div>
                                                            <div class="pt-1">
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up
                                                                        to 10 Active Users</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up
                                                                        to 30 Project Integrations</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-muted flex-grow-1">Finance
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <rect x="7" y="15.3137" width="12" height="2"
                                                                                rx="1" transform="rotate(-45 7 15.3137)"
                                                                                fill="black" />
                                                                            <rect x="8.41422" y="7" width="12" height="2"
                                                                                rx="1" transform="rotate(45 8.41422 7)"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-muted flex-grow-1">Accounting
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <rect x="7" y="15.3137" width="12" height="2"
                                                                                rx="1" transform="rotate(-45 7 15.3137)"
                                                                                fill="black" />
                                                                            <rect x="8.41422" y="7" width="12" height="2"
                                                                                rx="1" transform="rotate(45 8.41422 7)"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-muted flex-grow-1">Network
                                                                        Platform</span>
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <rect x="7" y="15.3137" width="12" height="2"
                                                                                rx="1" transform="rotate(-45 7 15.3137)"
                                                                                fill="black" />
                                                                            <rect x="8.41422" y="7" width="12" height="2"
                                                                                rx="1" transform="rotate(45 8.41422 7)"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="fw-bold fs-5 text-muted flex-grow-1">Unlimited
                                                                        Cloud Space</span>
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <rect x="7" y="15.3137" width="12" height="2"
                                                                                rx="1" transform="rotate(-45 7 15.3137)"
                                                                                fill="black" />
                                                                            <rect x="8.41422" y="7" width="12" height="2"
                                                                                rx="1" transform="rotate(45 8.41422 7)"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                                            <div class="pb-5">
                                                                <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                                                <div class="text-muted fw-bold">Optimal for 100+ team size
                                                                    and grown company</div>
                                                            </div>
                                                            <div class="pt-1">
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up
                                                                        to 10 Active Users</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up
                                                                        to 30 Project Integrations</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-muted flex-grow-1">Network
                                                                        Platform</span>
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <rect x="7" y="15.3137" width="12" height="2"
                                                                                rx="1" transform="rotate(-45 7 15.3137)"
                                                                                fill="black" />
                                                                            <rect x="8.41422" y="7" width="12" height="2"
                                                                                rx="1" transform="rotate(45 8.41422 7)"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="fw-bold fs-5 text-muted flex-grow-1">Unlimited
                                                                        Cloud Space</span>
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <rect x="7" y="15.3137" width="12" height="2"
                                                                                rx="1" transform="rotate(-45 7 15.3137)"
                                                                                fill="black" />
                                                                            <rect x="8.41422" y="7" width="12" height="2"
                                                                                rx="1" transform="rotate(45 8.41422 7)"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                                            <div class="pb-5">
                                                                <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                                                <div class="text-muted fw-bold">Optimal for 1000+ team and
                                                                    enterpise</div>
                                                            </div>
                                                            <div class="pt-1">
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up
                                                                        to 10 Active Users</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up
                                                                        to 30 Project Integrations</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
                                                                        Module</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-7">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Network
                                                                        Platform</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <span
                                                                        class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                                        Cloud Space</span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                                                height="20" rx="10" fill="black" />
                                                                            <path
                                                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-center flex-row-fluid pt-12">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                                        transform="rotate(90 13 6)" fill="black" />
                                    <path
                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </div>
                    
                    </div>
                </div> --}}
                <script src="{{ asset('js/global/plugins.bundle.js') }}"></script>
                <script src="{{ asset('js/scripts.bundle.js') }}"></script>
                <script src="{{ asset('css/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
                <script src="{{ asset('js/custom/widgets.js') }}"></script>
                <script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
                <script src="{{ asset('js/custom/modals/create-app.js') }}"></script>
                <script src="{{ asset('js/custom/modals/upgrade-plan.js') }}"></script>
            </div>
        </div>
    </body>

</html>