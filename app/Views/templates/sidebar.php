<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Sidebar primary-->
    <div class="app-sidebar-primary">
        <!--begin::Header-->
        <div class="d-flex flex-column flex-center fs-6 fw-bold px-2 mb-5" id="kt_app_sidebar_primary_header">พื้นที่ทำงาน</div>
        <!--end::Header-->
        <!--begin::Sidebar navbar-->
        <div class="app-sidebar-nav flex-grow-1 hover-scroll-overlay-y px-5 pt-2" id="kt_app_sidebar_primary_nav" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_sidebar_primary_header, #kt_app_sidebar_primary_footer" data-kt-scroll-wrappers="#kt_app_content, #kt_app_sidebar_primary_nav" data-kt-scroll-offset="5px">
            <!--begin::Nav-->
            <ul class="nav">
                <?php if(session()->get('user_role') == 1 || session()->get('user_role') == 2){ ?>
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_dahsboard" id="tab_dashboard" class="nav-link py-4 px-1 btn">
                        <i class="fa-solid fa-calendar-check fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">แผงควบคุม</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <?php } ?>
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_collections" id="tab_appoint" class="nav-link py-4 px-1 btn">
                        <i class="fa-solid fa-calendar-check fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">นัดหมาย</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <!--begin::Navbar item-->
                <li class="nav-item py-1" hidden>
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_apis" id="tab_team" class="nav-link py-4 px-1 btn">
                        <i class="fa-solid fa-people-group fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">จัดการทีม</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <!--begin::Navbar item-->
                <li class="nav-item py-1" hidden>
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_customer" id="tab_book" class="nav-link py-4 px-1 btn">
                        <i class="fa-solid fa-book fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">สมุดรายชื่อ</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <!--end::Navbar item-->
                <?php if(session()->get('user_role') == 1){ ?>
                <!--begin::Navbar item-->
                <li class="nav-item py-1">
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_environment" id="tab_business" class="nav-link py-4 px-1 btn">
                        <i class="fa-solid fa-briefcase fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">จัดการธุรกิจ</span>
                    </a>
                </li>
                <!--end::Navbar item-->
                <?php } ?>
                <!--begin::Navbar item-->
                <?php if(session()->get('user_role') == 1 || session()->get('user_role') == 2){ ?>
                <li class="nav-item py-1">
                    <!--begin::Navbar link-->
                    <a data-bs-toggle="tab" href="#kt_app_sidebar_secondary_user" id="tab_user" class="nav-link py-4 px-1 btn">
                    <i class="fa-solid fa-users fs-1"></i>
                        <span class="pt-2 fs-9 fs-lg-7 fw-bold">ตั้งค่าผู้ใช้งาน</span>
                    </a>
                    <!--end::Navbar link-->
                </li>
                <?php } ?>
                <!--end::Navbar item-->
            </ul>
            <!--end::Nav-->
        </div>
        <!--end::Sidebar navbar-->
        <!--begin::Footer-->
        <div class="app-sidebar-footer d-flex flex-column flex-center" id="kt_app_sidebar_primary_footer">
            <!--begin::Menu-->
            <div class="mb-0">
                <button type="button" class="btn btn-icon btn-color-gray-400 btn-active-color-primary" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                    <i class="fonticon-setting fs-1"></i>
                </button>
                <!--begin::Menu 2-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">การตั้งค่า</div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator mb-3 opacity-75"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <!-- <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">My Company</a>
                    </div> -->
                    <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <!-- <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">My Platform</a>
                    </div> -->
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities">
                                <span class="menu-icon">
                                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/arrows/arr096.svg-->
                                     <img src="<?php echo base_url();?>theme/dist/assets/media/flags/thailand.svg" class="me-4 w-25px" style="border-radius: 4px" alt="">
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">ภาษาไทย</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator mt-3 opacity-75"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="/logout">
                                <span class="menu-icon">
                                     <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/arrows/arr096.svg-->
                                     <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 20 11)" fill="currentColor"/>
                                            <path d="M18.1313 11.6927L16.3756 10.2297C15.9054 9.83785 15.8732 9.12683 16.306 8.69401C16.6957 8.3043 17.3216 8.28591 17.7336 8.65206L20.6592 11.2526C21.1067 11.6504 21.1067 12.3496 20.6592 12.7474L17.7336 15.3479C17.3216 15.7141 16.6957 15.6957 16.306 15.306C15.8732 14.8732 15.9054 14.1621 16.3756 13.7703L18.1313 12.3073C18.3232 12.1474 18.3232 11.8526 18.1313 11.6927Z" fill="currentColor"/>
                                            <path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">ออกจากระบบ</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Sidebar primary-->
    


