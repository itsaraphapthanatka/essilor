<script>
var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
</script>
<!--end::Theme mode setup on page load-->
<!--begin::Main-->
<!--begin::Root-->

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header bg-gray-700">
                <!--begin::Header top-->
                <div class="header-top d-flex align-items-stretch flex-grow-1">
                    <!--begin::Container-->
                    <div class="d-flex container-xxl align-items-stretch">
                        <!--begin::Brand-->
                        <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                            <!--begin::Heaeder navs toggle-->
                            <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2" id="kt_header_navs_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Heaeder navs toggle-->
                            <!--begin::Logo-->
                            <a href="/home/level" class="d-flex align-items-center">
                                <!-- <img alt="Logo" src="<?php echo base_url();?>theme/demo20/assets/media/logos/demo20.svg" class="h-25px h-lg-30px" /> -->
                            </a>
                            <!--end::Logo-->
                            <!--begin::Tabs wrapper-->
                            <div class="align-self-end overflow-auto" id="kt_brand_tabs">

                                <!--begin::Header tabs wrapper-->
                                <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                                    <!--begin::Header tabs-->
                                    <ul class="nav flex-nowrap text-nowrap">
                                        <?php if(session()->get('type') == "task_creator"){ ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" id="kt_header_navs_taskCreation" href="#kt_header_navs_tab_1">Task Creation</a>
                                        </li>
                                        <?php } ?>
                                        <?php if(session()->get('type') == 'keyin'){ ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" id="kt_header_navs_keyin" href="#kt_header_navs_tab_2">Keyin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_Myjob1" id="tab_MyjobHead">My Job</a>
                                        </li>
                                        <?php } ?>
                                        <?php if(session()->get('type') == 'support'){ ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" id="kt_header_navs_support" href="#kt_header_navs_tab_3">CS Support</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" hidden data-bs-toggle="tab" href="#tab_Myjob">My Job</a>
                                        </li>
                                        <?php } ?>
                                        <?php if(session()->get('type') == 'feedback'){ ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" id="kt_header_navs_feedback" href="#kt_header_navs_tab_4">QC/Answer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_Myjobqc1" id="tab_Myjobqc" >My Job</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <!--begin::Header tabs-->
                                </div>
                                <!--end::Header tabs wrapper-->
                            </div>
                            <!--end::Tabs wrapper-->
                        </div>
                        <!--end::Brand-->
                        <!--begin::Topbar-->
                        <div class="d-flex align-items-center flex-row-auto">
                            <!--begin::User-->
                            <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                                <!--begin::User info-->
                                <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <!--begin::Name-->
                                    <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                        <span class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1"><?=session()->get('m_name');?></span>
                                        <span class="text-white fs-8 fw-bold lh-1"><?=session()->get('mtype');?></span>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Symbol-->
                                    <?php
                                    $db = \Config\Database::connect();
                                    $query = $db->query("SELECT user_img FROM users where id = '".session()->get('userid')."' limit 1");
                                    $users = $query->getResult();
                                    $user_img = $users[0]->user_img;
                                    if($user_img == null){
                                        $user_img = "no_avatar.jpg";
                                    }
                                    ?>
                                    <div class="symbol symbol-30px symbol-md-40px">
                                        <img src="<?php echo base_url();?>profile/<?=$user_img;?>" alt="image" />
                                    </div>
                                    <!--end::Symbol-->
                                </div>
                                <!--end::User info-->
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                               
                                                <img alt="Logo" src="<?php echo base_url();?>profile/<?=$user_img;?>" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5"><?=session()->get('m_name');?></div>
                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?=session()->get('mtype');?></a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                        <?php if(session()->get('m_name') == "ghost"){ ?>
											<div class="menu-item px-5">
												<a id="trancate" class="menu-link px-5">Transaction trancate</a>
											</div>
											<div class="menu-item px-5">
												<a id="trancateMaster" class="menu-link px-5">Master trancate</a>
											</div>
                                        <?php } ?>
                                        <?php if(session()->get('m_name') == "ghost" || session()->get('mtype') == "member"){ ?>
											<div class="menu-item px-5">
												<a id="backup" class="menu-link px-5">Backup Database</a>
											</div>
											<div class="menu-item px-5">
												<a id="exportExcel" class="menu-link px-5">Export to Excel</a>
											</div>
                                        <?php } ?>
											<div class="menu-item px-5">
												<a href="<?=base_url();?>guest" class="menu-link px-5">Change Duty</a>
											</div>
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="<?php echo base_url();?>logout" class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            </div>
                            <!--end::User -->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header top-->

            </div>
            <!--end::Header-->
    <script>
        $('#kt_header_navs_keyin').on('click',function(){
            window.location.href = "<?php echo base_url();?>main";
        })
    </script>