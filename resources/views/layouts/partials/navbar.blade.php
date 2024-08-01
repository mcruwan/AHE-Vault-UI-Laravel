<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate-="true"
    data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Header container-->
    <div class="app-container container-xxl d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <!--begin::Header wrapper-->
        <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
            id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100"
                data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="#kt_header_menu" data-kt-menu="true">

                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{ url('dashboard') }}" class="menu-title">Dashboard</a>
                        </span>
                    </div>

                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">

                        <span class="menu-link">
                            <a href="{{ url('data-management') }}" class="menu-title">Data Management</a>
                        </span>
                    </div>

                    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">

                        <span class="menu-link">
                            <a href="{{ url('analytics-reporting') }}" class="menu-title">Analytics & Reporting
                            </a>
                        </span>
                    </div>

                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">

                        <span class="menu-link">
                            <a href="{{ url('analytics-reporting') }}" class="menu-title">More</a>
                        </span>

                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                data-kt-menu-dismiss="true">
                                <div class="row">
                                    <div class="col mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">

                                        <div class="menu-item px-2 m-0">
                                            <a href="{{ url('#') }}" class="menu-link">
                                                <span
                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded h-40px me-3">
                                                    <i class="ki-outline ki-rocket text-primary fs-1"></i>
                                                </span>
                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Rankings</span>
                                                    <span class="fs-7 fw-semibold text-muted">Explore the top Public and
                                                        Private Universities in ASEAN</span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-2 m-0">
                                            <a href="{{ url('#') }}" class="menu-link">
                                                <span
                                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded h-40px me-3">
                                                    <i class="ki-outline ki-chart text-primary fs-1"></i>
                                                </span>
                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Ratings</span>
                                                    <span class="fs-7 fw-semibold text-muted">Through stakeholder
                                                        feedback and innovative methodologies</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Menu wrapper-->
            <!--begin::Logo wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Logo wrapper-->
                <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
                    id="kt_app_sidebar_toggle">
                    <i class="ki-outline ki-abstract-14 fs-2"></i>
                </div>
                <!--end::Logo wrapper-->
                <!--begin::Logo image-->
                <a href="{{ url('/') }}" class="d-flex d-lg-none">
                    <img alt="Logo" src="assets/media/logos/ahe-vault-logo.png" class="h-20px theme-light-show" />
                    <img alt="Logo" src="assets/media/logos/ahe-vault-logo.png" class="h-20px theme-dark-show" />
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Chat-->
                <div class="app-navbar-item ms-1 ms-lg-3">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-circle btn-color-gray-500 btn-active-color-primary btn-custom shadow-xs bg-body"
                        id="kt_drawer_chat_toggle">
                        <i class="ki-outline ki-message-notif fs-1"></i>
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Chat-->
                <!--begin::Header menu mobile toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n4" title="Show header menu">
                    <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-outline ki-text-align-left fs-2 fw-bold"></i>
                    </div>
                </div>
                <!--end::Header menu mobile toggle-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
</div>
