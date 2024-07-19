@extends ('layouts.admin')

@section('title', 'Data Management')

@section('content')

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-0">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Data Management</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Data Management</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">

                    <!--begin::Row-->
                    <div class="row g-6 g-xl-9">

                        <div class="col-md-6 col-xl-4">
                            <!--begin::Card-->
                            <div class="card border-hover-primary">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-9">
                                    <!--begin::Card Title-->
                                    <div class="card-title m-0">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px w-50px bg-light">
                                            <img src="assets/media/svg/brand-logos/kanba.svg" alt="image"
                                                class="p-3" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Car Title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end:: Card header-->
                                <!--begin:: Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Name-->
                                    <div class="fs-3 fw-bold text-gray-900">Public & Private University Ranking: ASEAN 2024
                                    </div>
                                    <!--end::Name-->

                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 p-4 my-4">
                                        <div
                                            class="d-flex justify-content-between fw-bolder fs-6 text-gray-800 w-100 mt-auto mb-3">
                                            <span>Data Completion Progress</span>
                                        </div>
                                        <div class="w-100 bg-light-success rounded" style="height: 24px">
                                            <div id="uni-progress" class="bg-success rounded" role="progressbar"
                                                style="height: 24px; width: 100%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semibold fs-7 w-100 text-left mt-2">
                                            <span id="uni-progress-text">100% Completed</span>
                                        </div>
                                    </div>

                                    <a href="{{ url('uni-data-overview?title=1') }}"
                                        class="btn btn-primary mx-auto mt-8 d-block" type="button">View Data</a>
                                </div>
                                <!--end:: Card body-->
                            </div>
                            <!--end::Card-->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <!--begin::Card-->
                            <div class="card border-hover-primary">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-9">
                                    <!--begin::Card Title-->
                                    <div class="card-title m-0">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px w-50px bg-light">
                                            <img src="assets/media/svg/brand-logos/kanba.svg" alt="image"
                                                class="p-3" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Car Title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In-Progress</span>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end:: Card header-->
                                <!--begin:: Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Name-->
                                    <div class="fs-3 fw-bold text-gray-900">Public & Private University Ranking: ASEAN 2025
                                    </div>
                                    <!--end::Name-->

                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 p-4 my-4">
                                        <div
                                            class="d-flex justify-content-between fw-bolder fs-6 text-gray-800 w-100 mt-auto mb-3">
                                            <span>Data Completion Progress</span>
                                        </div>
                                        <div class="w-100 bg-light-primary rounded" style="height: 24px">
                                            <div id="uni-progress" class="bg-primary rounded" role="progressbar"
                                                style="height: 24px; width: 37%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semibold fs-7 w-100 text-left mt-2">
                                            <span id="uni-progress-text">37% Completed</span>
                                        </div>
                                    </div>

                                    <a href="{{ url('uni-data-overview?title=2') }}"
                                        class="btn btn-primary mx-auto mt-8 d-block" type="button">View Data</a>
                                </div>
                                <!--end:: Card body-->
                            </div>
                            <!--end::Card-->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <!--begin::Card-->
                            <div class="card border-hover-primary">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-9">
                                    <!--begin::Card Title-->
                                    <div class="card-title m-0">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px w-50px bg-light">
                                            <img src="assets/media/svg/brand-logos/treva.svg" alt="image"
                                                class="p-3" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Car Title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <span class="badge badge-light-warning fw-bold me-auto px-4 py-3">Pending</span>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end:: Card header-->
                                <!--begin:: Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Name-->
                                    <div class="fs-3 fw-bold text-gray-900 mb-12">JOB-Ready RATING</div>
                                    <!--end::Name-->

                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 p-4 my-4">
                                        <div
                                            class="d-flex justify-content-between fw-bolder fs-6 text-gray-800 w-100 mt-auto mb-3">
                                            <span>Data Completion Progress</span>
                                        </div>
                                        <div class="w-100 bg-light-primary rounded" style="height: 24px">
                                            <div id="uni-progress" class="bg-primary rounded" role="progressbar"
                                                style="height: 24px; width: 0%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="fw-semibold fs-7 w-100 text-left mt-2">
                                            <span id="uni-progress-text">0% Completed</span>
                                        </div>
                                    </div>

                                    <a href="{{ url('uni-data-overview?title=3') }}"
                                        class="btn btn-primary mx-auto mt-8 d-block" type="button">View Data</a>
                                </div>
                                <!--end:: Card body-->
                            </div>
                            <!--end::Card-->
                        </div>

                    </div>
                    <!--end::Row-->

                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->

    </div>

@endsection
