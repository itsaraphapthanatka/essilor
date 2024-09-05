<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">BOQ Detail</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Tenders</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>Filter</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776109f5fa">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776109f5fa" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Navbar-->
                <div class="card mb-6 mb-xl-9">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3"><?=$tender['bd_pname'];?></a>
                                            <span class="badge badge-light-success me-auto"><?=strtoupper($tender['bd_status']);?></span>
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Description-->
                                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">Code: <?=$tender['bd_tenid'];?></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->
                                    <div class="d-flex mb-4">
                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                                        <!--begin::Menu-->
                                        <div class="me-0">
                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                            </button>
                                            <!--begin::Menu 3-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                <!--begin::Heading-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                    <!--end::Input-->
                                                                    <!--end::Label-->
                                                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                    <!--end::Label-->
                                                                </label>
                                                                <!--end::Switch-->
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap justify-content-start">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-4 fw-bold">29 Jan, 2023</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Due Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Open Tasks</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Budget Spent</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Details-->
                        <div class="separator"></div>
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6 active" data-bs-toggle="tab" href="#kt_tab_pane_1">BOQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6" data-bs-toggle="tab" href="#kt_tab_pane_2">Summary Budget Cost</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6" data-bs-toggle="tab" href="#kt_tab_pane_3">Summary Material</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary py-5 me-6" data-bs-toggle="tab" href="#kt_tab_pane_4">NON BOQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Row-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                        <div class="card card-flush mt-6 mt-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header mt-5">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">Bill of Quantity</h3>
                                    <div class="fs-6 text-gray-400">Total 260,300 sepnt so far</div>
                                </div>
                                <!--begin::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <table id="kt_datatable_horizontal_scroll" class="table table-striped table-row-bordered gy-5 gs-7 border rounded w-100">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th rowspan="2" class="align-middle text-center border-bottom border-end min-w-200px">Job</th>
                                                <th rowspan="2" class="align-middle text-center border-bottom border-end min-w-200px">Cost (Material)</th>
                                                <th rowspan="2" class="align-middle text-center border-bottom border-end min-w-200px">Cost (Labor)</th>
                                                <th rowspan="2" class="align-middle text-center border-bottom border-end min-w-200px">Material</th>
                                                <th rowspan="2" class="align-middle text-center border-bottom border-end min-w-200px">Material (Labor)</th>
                                                <th colspan="8" class="border-bottom text-center">Budget</th>
                                                <th rowspan="3" class="align-middle text-center border-start border-bottom border-end w-200px">Unit</th>
                                            </tr>
                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                <th class="align-middle text-center border-end min-w-80px">Qty</th>
                                                <th class="align-middle text-center border-end min-w-100px">Material Price</th>
                                                <th class="align-middle text-center border-end min-w-150px">Material Amount</th>
                                                <th class="align-middle text-center border-end min-w-100px">Labor Price</th>
                                                <th class="align-middle text-center border-end min-w-150px">Labor Amount</th>
                                                <th class="align-middle text-center border-end min-w-150px">Subcontact Price</th>
                                                <th class="align-middle text-center border-end min-w-150px">Subcontact Amount</th>
                                                <th class="align-middle text-center border-end min-w-100px">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                        <div class="card card-flush mt-6 mt-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header mt-5">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">Project Spendings 2</h3>
                                    <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar my-1">
                                    <!--begin::Select-->
                                    <div class="me-6 my-1">
                                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All time</option>
                                            <option value="thisyear">This year</option>
                                            <option value="thismonth">This month</option>
                                            <option value="lastmonth">Last month</option>
                                            <option value="last90days">Last 90 days</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Select-->
                                    <div class="me-4 my-1">
                                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All Orders</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Declined">Declined</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="In Transit">In Transit</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                            <tr>
                                                <th class="min-w-250px">Manager</th>
                                                <th class="min-w-150px">Date</th>
                                                <th class="min-w-90px">Amount</th>
                                                <th class="min-w-90px">Status</th>
                                                <th class="min-w-50px text-end">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Oct 25, 2023</td>
                                                <td>$925.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                                            <div class="fw-semibold text-gray-400">melody@altbox.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$961.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                                            <div class="fw-semibold text-gray-400">max@kt.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$903.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$523.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                            <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$621.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                            <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Aug 19, 2023</td>
                                                <td>$846.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                                            <div class="fw-semibold text-gray-400">f.mit@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$938.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$446.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                                            <div class="fw-semibold text-gray-400">owen.neil@gmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$537.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                            <div class="fw-semibold text-gray-400">dam@consilting.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$467.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                                            <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$412.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                            <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>May 05, 2023</td>
                                                <td>$769.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                                            <div class="fw-semibold text-gray-400">robert@benko.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$485.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$540.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                            <div class="fw-semibold text-gray-400">lucy.m@fentech.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$686.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                            <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$731.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                            <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 24, 2023</td>
                                                <td>$661.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                            <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$852.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$919.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                            <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$575.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$640.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Dec 20, 2023</td>
                                                <td>$832.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                            <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$899.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$559.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jul 25, 2023</td>
                                                <td>$989.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$929.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$973.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>May 05, 2023</td>
                                                <td>$432.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$546.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$966.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                        <div class="card card-flush mt-6 mt-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header mt-5">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">Project Spendings 3</h3>
                                    <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar my-1">
                                    <!--begin::Select-->
                                    <div class="me-6 my-1">
                                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All time</option>
                                            <option value="thisyear">This year</option>
                                            <option value="thismonth">This month</option>
                                            <option value="lastmonth">Last month</option>
                                            <option value="last90days">Last 90 days</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Select-->
                                    <div class="me-4 my-1">
                                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All Orders</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Declined">Declined</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="In Transit">In Transit</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                            <tr>
                                                <th class="min-w-250px">Manager</th>
                                                <th class="min-w-150px">Date</th>
                                                <th class="min-w-90px">Amount</th>
                                                <th class="min-w-90px">Status</th>
                                                <th class="min-w-50px text-end">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Oct 25, 2023</td>
                                                <td>$925.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                                            <div class="fw-semibold text-gray-400">melody@altbox.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$961.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                                            <div class="fw-semibold text-gray-400">max@kt.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$903.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$523.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                            <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$621.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                            <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Aug 19, 2023</td>
                                                <td>$846.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                                            <div class="fw-semibold text-gray-400">f.mit@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$938.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$446.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                                            <div class="fw-semibold text-gray-400">owen.neil@gmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$537.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                            <div class="fw-semibold text-gray-400">dam@consilting.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$467.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                                            <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$412.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                            <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>May 05, 2023</td>
                                                <td>$769.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                                            <div class="fw-semibold text-gray-400">robert@benko.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$485.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$540.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                            <div class="fw-semibold text-gray-400">lucy.m@fentech.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$686.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                            <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$731.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                            <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 24, 2023</td>
                                                <td>$661.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                            <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$852.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$919.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                            <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$575.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$640.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Dec 20, 2023</td>
                                                <td>$832.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                            <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$899.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$559.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jul 25, 2023</td>
                                                <td>$989.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$929.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$973.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>May 05, 2023</td>
                                                <td>$432.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$546.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$966.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
                        <div class="card card-flush mt-6 mt-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header mt-5">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h3 class="fw-bold mb-1">Project Spendings 4</h3>
                                    <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar my-1">
                                    <!--begin::Select-->
                                    <div class="me-6 my-1">
                                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All time</option>
                                            <option value="thisyear">This year</option>
                                            <option value="thismonth">This month</option>
                                            <option value="lastmonth">Last month</option>
                                            <option value="last90days">Last 90 days</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Select-->
                                    <div class="me-4 my-1">
                                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">All Orders</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Declined">Declined</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="In Transit">In Transit</option>
                                        </select>
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                            <tr>
                                                <th class="min-w-250px">Manager</th>
                                                <th class="min-w-150px">Date</th>
                                                <th class="min-w-90px">Amount</th>
                                                <th class="min-w-90px">Status</th>
                                                <th class="min-w-50px text-end">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Oct 25, 2023</td>
                                                <td>$925.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                                            <div class="fw-semibold text-gray-400">melody@altbox.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$961.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                                            <div class="fw-semibold text-gray-400">max@kt.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$903.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$523.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                            <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$621.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                            <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Aug 19, 2023</td>
                                                <td>$846.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                                            <div class="fw-semibold text-gray-400">f.mit@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$938.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$446.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                                            <div class="fw-semibold text-gray-400">owen.neil@gmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$537.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                                            <div class="fw-semibold text-gray-400">dam@consilting.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$467.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                                            <div class="fw-semibold text-gray-400">emma@intenso.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$412.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                            <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>May 05, 2023</td>
                                                <td>$769.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                                            <div class="fw-semibold text-gray-400">robert@benko.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$485.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$540.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                                            <div class="fw-semibold text-gray-400">lucy.m@fentech.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$686.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                            <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$731.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                                            <div class="fw-semibold text-gray-400">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 24, 2023</td>
                                                <td>$661.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                                            <div class="fw-semibold text-gray-400">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$852.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$919.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                                            <div class="fw-semibold text-gray-400">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$575.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$640.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Dec 20, 2023</td>
                                                <td>$832.00</td>
                                                <td>
                                                    <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                                            <div class="fw-semibold text-gray-400">mik@pex.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Sep 22, 2023</td>
                                                <td>$899.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Feb 21, 2023</td>
                                                <td>$559.00</td>
                                                <td>
                                                    <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jul 25, 2023</td>
                                                <td>$989.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                                            <div class="fw-semibold text-gray-400">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Nov 10, 2023</td>
                                                <td>$929.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$973.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Online-->
                                                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                            <!--end::Online-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                                            <div class="fw-semibold text-gray-400">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>May 05, 2023</td>
                                                <td>$432.00</td>
                                                <td>
                                                    <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                                            <div class="fw-semibold text-gray-400">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Mar 10, 2023</td>
                                                <td>$546.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Wrapper-->
                                                        <div class="me-5 position-relative">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                                            <div class="fw-semibold text-gray-400">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </td>
                                                <td>Jun 20, 2023</td>
                                                <td>$966.00</td>
                                                <td>
                                                    <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>

                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--end::Footer-->
</div>
<script>
	var HOST_URL = "<?php echo base_url(); ?>";
</script>
<script>
	"use strict";

	// Class definition
	var KTDatatablesServerSide = function() {
		// Shared variables
		var table;
		var dt;
		var subdt;
		var filterPayment;
        var tenderid = "<?=$tender['bd_tenid'];?>";
		var userlist = "jsondata/getBOQByTender/TD-20030001";
		// Private functions
		var initDatatable = function() {
			dt = $("#kt_datatable_horizontal_scroll").DataTable({
				searchDelay: 500,
				processing: false,
				serverSide: false,
				order: [
					[0, 'asc']
				],
				stateSave: false,
				ajax: {
					url: HOST_URL + userlist,
				},
				columns: [{
						data: 'boq_job'
					},
					{
						data: 'subcostcode'
					},
					{
						data: 'subcostcode',
					},
					{
						data: 'newmatcode'
					},
					{
						data: 'newmatcode'
					},
					{
						data: 'qty_bg'
					},
					{
						data: 'matpricebg'
					},
					{
						data: 'matamtbg'
					},
					{
						data: 'labpricebg'
					},
					{
						data: 'labamtbg'
					},
					{
						data: 'subpricebg'
					},
					{
						data: 'subamtbg'
					},
					{
						data: 'totalamt'
					},
					{
						data: 'totalamt'
					},
					{
						data: 'unitname'
					},
					
				],
				// Add data-filter attribute
				createdRow: function(row, data, dataIndex) {
					$(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
				}
			});

			table = dt.$;

			// Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
			dt.on('draw', function() {
				handleDeleteRows();
				KTMenu.createInstances();
			});
		}

		// Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
		var handleSearchDatatable = function() {
			const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
			filterSearch.addEventListener('keyup', function(e) {
				dt.search(e.target.value).draw();
			});
		}

		// Filter Datatable
		var handleFilterDatatable = () => {
			const filterStatus = document.querySelector('[data-kt-ecommerce-order-filter="status"]');
			$(filterStatus).on('change', e => {
				let value = e.target.value;
				if (value === 'all') {
					value = '';
				}
				console.log(value);
				dt.column(12).search(value).draw();
			});

		}

	

		



		// Public methods
		return {
			init: function() {
				initDatatable();
				handleSearchDatatable();
				handleFilterDatatable();
			}
		}
	}();

	// On document ready
	KTUtil.onDOMContentLoaded(function() {
		KTDatatablesServerSide.init();
	});
</script>