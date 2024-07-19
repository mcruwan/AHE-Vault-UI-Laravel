<!--begin::Menu-->
<div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">

    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
        <span class="menu-link">
            <a href="/" class="menu-title">Dashboard</a>
        </span>
    </div>

    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
        <!--begin:Menu link-->
        <span class="menu-link">
            <a href="data-management" class="menu-title">Data Management</a>
        </span>
    </div>

    <div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
        <!--begin:Menu link-->
        <span class="menu-link">
            <a href="analytics-reporting" class="menu-title">Analytics & Reporting
            </a>
        </span>
    </div>

    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
        <!--begin:Menu link-->
        <span class="menu-link">
            <a href="analytics-reporting" class="menu-title">More</a>
        </span>

        <?php include_once('widgets/sub-menu.php'); ?>
    </div>

</div>
<!--end::Menu-->