<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-4 py-lg-8">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0"></h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search"/>
                            </div>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->เพิ่มผู้ใช้งาน</button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <div class="card-body py-4">
                        <!--begin::Datatable-->
                        <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th>ลำดับ</th>
                                <th>รหัสพนักงาน</th>
                                <th class="min-w-125px">ผู้ใช้งาน</th>
                                <th>บทบาท</th>
                                <!-- <th>สร้างเมื่อ</th> -->
                                <th>สถานะ</th>
                                <th class="text-end min-w-100px" data-priority="2">ตัวเลือก</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                            </tbody>
                        </table>
                        <!--end::Datatable-->
                    </div>
                </div>
                
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
    <!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">เพิ่มผู้ใช้งาน</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" method="post" action="/saveAddUser" enctype="multipart/form-data" class="form">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 text-center">
                            <!--begin::Label-->
                            <label class="d-block fw-semibold fs-6 mb-5">รูปโปรไฟล์</label>
                            <!--end::Label-->
                            <!--begin::Image placeholder-->
                            <style>.image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image-dark.svg'); }</style>
                            <!--end::Image placeholder-->
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image.svg);"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="userfile" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">รหัสพนักงาน</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="usercode" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="รหัสพนักงาน" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">ชื่อ</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="fname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="ชื่อ" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">นามสกุล</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="lname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="นามสกุล" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">ชื่อเล่น</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="middlename" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="ชื่อเล่น" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">แผนก</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="department" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="แผนก" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">ตำแหน่ง</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="position" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="ตำแหน่ง" value="" />
                            <!--end::Input-->
                        </div>
                         <!--begin::Input group-->
                         <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">อีเมล</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">เบอร์โทร</label>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="mobile" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="เบอร์โทร" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="separator separator-dashed separator-border border-primary my-10"></div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">ชื่อผู้ใช้งาน</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="ชื่อผู้ใช้งาน" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">รหัสผ่าน</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                           <!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row" data-kt-password-meter="true">
												<div class="position-relative mb-3">
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="user_pass" autocomplete="off" value="" />
													<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
														<i class="bi bi-eye-slash fs-2"></i>
														<i class="bi bi-eye fs-2 d-none"></i>
													</span>
												</div>
												<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
													<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
													<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
													<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
													<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
												</div>
											</div>
											<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Col-->
                            <!--end::Input-->
                        </div>
                        <div class="separator separator-dashed separator-border border-primary my-10"></div>
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-5">บทบาท </label>
                            <!--end::Label-->
                            <!--begin::Roles-->
                            <?php if (session()->get('user_role') == 1) {?>
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_0" checked='checked' />
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                                            <div class="fw-bold text-gray-800">Super Administrator</div>
                                            <div class="text-gray-600">Best full access for business owners and company administrators</div>
                                        </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Input row-->
                                <div class='separator separator-dashed my-5'></div>
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_1" />
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_modal_update_role_option_1">
                                            <div class="fw-bold text-gray-800">Producer</div>
                                            <div class="text-gray-600">Best for Control people using the Project</div>
                                        </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Input row-->
                                <div class='separator separator-dashed my-5'></div>
                                <!--begin::Input row-->
                                <div class="d-flex fv-row">
                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_2" />
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_modal_update_role_option_2">
                                            <div class="fw-bold text-gray-800">User</div>
                                            <div class="text-gray-600">Best for people Working time</div>
                                        </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Roles-->
                            <?php }else if(session()->get('user_role') == 2){ ?>
                                 <!--begin::Input row-->
                                 <div class="d-flex fv-row">
                                     <!--begin::Radio-->
                                     <div class="form-check form-check-custom form-check-solid">
                                         <!--begin::Input-->
                                         <input class="form-check-input me-3" disabled="disabled" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_0"/>
                                         <!--end::Input-->
                                         <!--begin::Label-->
                                         <label class="form-check-label" for="kt_modal_update_role_option_0">
                                             <div class="fw-bold text-gray-800">Super Administrator</div>
                                             <div class="text-gray-600">Best full access for business owners and company administrators</div>
                                         </label>
                                         <!--end::Label-->
                                     </div>
                                     <!--end::Radio-->
                                 </div>
                                 <!--end::Input row-->
                                 <!--end::Input row-->
                                 <div class='separator separator-dashed my-5'></div>
                                 <!--begin::Input row-->
                                 <div class="d-flex fv-row">
                                     <!--begin::Radio-->
                                     <div class="form-check form-check-custom form-check-solid">
                                         <!--begin::Input-->
                                         <input class="form-check-input me-3" disabled="disabled" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_1"/>
                                         <!--end::Input-->
                                         <!--begin::Label-->
                                         <label class="form-check-label" for="kt_modal_update_role_option_1">
                                             <div class="fw-bold text-gray-800">Admin Controller</div>
                                             <div class="text-gray-600">Best for Control people using the Room</div>
                                         </label>
                                         <!--end::Label-->
                                     </div>
                                     <!--end::Radio-->
                                 </div>
                                 <!--end::Input row-->
                                 <div class='separator separator-dashed my-5'></div>
                                 <!--begin::Input row-->
                                 <div class="d-flex fv-row">
                                     <!--begin::Radio-->
                                     <div class="form-check form-check-custom form-check-solid">
                                         <!--begin::Input-->
                                         <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_2" checked='checked' />
                                         <!--end::Input-->
                                         <!--begin::Label-->
                                         <label class="form-check-label" for="kt_modal_update_role_option_2">
                                             <div class="fw-bold text-gray-800">Admin Branch</div>
                                             <div class="text-gray-600">Best for people in branch</div>
                                         </label>
                                         <!--end::Label-->
                                     </div>
                                     <!--end::Radio-->
                                 </div>
                                 <!--end::Roles-->
                            <?php }else if(session()->get('user_role') == 3){ ?>
                                 <!--begin::Input row-->
                                  <div class="d-flex fv-row">
                                      <!--begin::Radio-->
                                      <div class="form-check form-check-custom form-check-solid">
                                          <!--begin::Input-->
                                          <input class="form-check-input me-3" disabled="disabled"  name="user_role" type="radio" value="1" id="kt_modal_update_role_option_0" />
                                          <!--end::Input-->
                                          <!--begin::Label-->
                                          <label class="form-check-label" for="kt_modal_update_role_option_0">
                                              <div class="fw-bold text-gray-800">Super Administrator</div>
                                              <div class="text-gray-600">Best full access for business owners and company administrators</div>
                                          </label>
                                          <!--end::Label-->
                                      </div>
                                      <!--end::Radio-->
                                  </div>
                                  <!--end::Input row-->
                                  <!--end::Input row-->
                                  <div class='separator separator-dashed my-5'></div>
                                  <!--begin::Input row-->
                                  <div class="d-flex fv-row">
                                      <!--begin::Radio-->
                                      <div class="form-check form-check-custom form-check-solid">
                                          <!--begin::Input-->
                                          <input class="form-check-input me-3" name="user_role" disabled="disabled" type="radio" value="2" id="kt_modal_update_role_option_1" />
                                          <!--end::Input-->
                                          <!--begin::Label-->
                                          <label class="form-check-label" for="kt_modal_update_role_option_1">
                                              <div class="fw-bold text-gray-800">Admin Controller</div>
                                              <div class="text-gray-600">Best for Control people using the Room</div>
                                          </label>
                                          <!--end::Label-->
                                      </div>
                                      <!--end::Radio-->
                                  </div>
                                  <!--end::Input row-->
                                  <div class='separator separator-dashed my-5'></div>
                                  <!--begin::Input row-->
                                  <div class="d-flex fv-row">
                                      <!--begin::Radio-->
                                      <div class="form-check form-check-custom form-check-solid">
                                          <!--begin::Input-->
                                          <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_2" checked='checked' />
                                          <!--end::Input-->
                                          <!--begin::Label-->
                                          <label class="form-check-label" for="kt_modal_update_role_option_2">
                                              <div class="fw-bold text-gray-800">Admin Branch</div>
                                              <div class="text-gray-600">Best for people in branch</div>
                                          </label>
                                          <!--end::Label-->
                                      </div>
                                      <!--end::Radio-->
                                  </div>
                                  <!--end::Roles-->
                            <?php } ?>
                            
                        </div>
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Confirm</span>
                            <span class="indicator-progress">กรุณารอ...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Add task-->
<!-- <script src="<?php echo base_url();?>theme/dist/assets/js/custom/account/settings/signin-methods.js"></script>
<script src="<?php echo base_url();?>theme/dist/assets/js/custom/apps/user-management/users/list/table.js"></script>
<script src="<?php echo base_url();?>theme/dist/assets/js/custom/apps/user-management/users/list/export-users.js"></script> -->
<!-- <script src="<?php echo base_url();?>theme/src/js/custom/apps/user-management/users/list/add.js"></script> -->

<script>var HOST_URL = "<?php echo base_url();?>";</script>

<script>
    "use strict";

    // Class definition
    var KTDatatablesServerSide = function () {
        // Shared variables
        var table;
        var dt;
        var filterPayment;
        var user_role = "<?=session()->get('user_role') ?>";
        console.log(user_role);
        if (user_role == 1) {
            var userlist = "jsondata/getAllUsers";
        }else if(user_role == 2){
            var userlist = "jsondata/getAllUsersBranch";
            // var userlist = "jsondata/getAllUsersController";
        }else if(user_role == 3){
            var userlist = "jsondata/getAllUsersBranch";
        }

        // Private functions
        var initDatatable = function () {
            dt = $("#kt_datatable_example_1").DataTable({
                searchDelay: 500,
                processing: false,
                serverSide: false,
                order: [[4, 'desc']],
                stateSave: false,  
                responsive: true,
                ajax: {
                    url: HOST_URL + userlist,
                    // url: "https://preview.keenthemes.com/api/datatables.php",
                },
                columns: [
                    { data: 'id'},
                    { data: 'code'},
                    { data: null},
                    { data: 'user_role'},
                    // { data: 'user_created_at' },
                    { data: 'user_status' },
                    { data: null },
                ],
                columnDefs: [
                    {
                        targets: 0,
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        targets: 2,
                        className: 'd-flex align-items-center',
                        render: function (data, type, row) {
                            if (row.user_img == null) {
                                return `
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="#">
                                            <div class="symbol-label">
                                                <img src="${HOST_URL}theme/dist/assets/media/avatars/300-27.jpg" alt="${row.user_img}" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-800 text-hover-primary mb-1">${row.firstname} ${row.lastname} (${row.middlename})</a>
                                        <span>${row.user_email}</span>
                                    </div>`;
                            }else{
                                return `
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="#">
                                            <div class="symbol-label">
                                                <img src="${HOST_URL}profile/${row.user_img}" alt="${row.user_img}" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-gray-800 text-hover-primary mb-1">${row.firstname} ${row.lastname} (${row.middlename})</a>
                                        <span>${row.user_email}</span>
                                    </div>`;
                            }
                        }
                    },
                    {
                        targets: 3,
                        className: 'align-items-center',
                        render: function (data, type, row) {
                            if (row.user_role == "1") {
                                return `<span class="badge badge-light-primary badge-lg">Super Administrator</span>`;
                            }else if (row.user_role == "2") {
                                return `<span class="badge badge-light-success badge-lg">Producer</span>`;
                            }else if (row.user_role == "3") {
                                return `<span class="badge badge-light-info badge-lg">User</span>`;
                            }
                        }
                    },
                    {
                        targets: -2,
                        className: 'align-items-center',
                        render: function (data, type, row) {
                            if (row.user_status == "active") {
                                return `<span class="badge badge-light-primary badge-lg">ใช้งาน</span>`;
                            }else {
                                return `<span class="badge badge-light-info badge-lg">ไม่ได้ใช้งาน</span>`;
                            }
                        }
                    },
                    {
                        targets: -1,
                        data: null,
                        orderable: false,
                        className: 'text-end',
                        render: function (data, type, row) {
                            if(row.code == "admin"){
                                return `
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                    ตัวเลือก
                                    <span class="svg-icon fs-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="editUser/${row.id}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                            แก้ไข
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            `;
                            }else{
                                return `
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                    ตัวเลือก
                                    <span class="svg-icon fs-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="editUser/${row.id}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                            แก้ไข
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                                            ลบ
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            `;
                            }
                           
                        },
                    },
                ],
                // Add data-filter attribute
                createdRow: function (row, data, dataIndex) {
                    $(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
                }
            });

            table = dt.$;

            // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
            dt.on('draw', function () {
                handleDeleteRows();
                KTMenu.createInstances();
            });
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = function () {
            const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                dt.search(e.target.value).draw();
            });
        }

        // Filter Datatable
        var handleFilterDatatable = () => {
            // Select filter options
            filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="payment_type"] [name="payment_type"]');
            const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');
        }

        // Delete customer
        var handleDeleteRows = () => {
            // Select all delete buttons
            const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

            deleteButtons.forEach(d => {
                // Delete button on click
                d.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Select parent row
                    const parent = e.target.closest('tr');

                    // Get customer name
                    const customerName = parent.querySelectorAll('td')[2].innerText;
                    const usercode = parent.querySelectorAll('td')[1].innerText;
                    const id = parent.querySelectorAll('td')[0].innerText;

                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete " + customerName + "?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            // Simulate delete request -- for demo purpose only
                            console.log(customerName);
                            $.ajax({
                                url: '<?php echo base_url(); ?>deleteuser',
                                type: 'POST',
                                data: {
                                    'code': usercode,
                                },
                                success: function(result) {
                                    var json = result;
                                    console.log(json);
                                    toastr.success(json.message);
                                }
                            });
                            
                            Swal.fire({
                                text: "Deleting " + customerName,
                                icon: "info",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 2000
                            }).then(function () {
                                Swal.fire({
                                    text: "You have deleted " + customerName + "!.",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                }).then(function () {
                                    // delete row data from server and re-draw datatable
                                    dt.draw();
                                    window.location="/add_user";
                                });
                            });
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: customerName + " was not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            });
                        }
                    });
                })
            });
        }

        // Reset Filter
        var handleResetForm = () => {
            // Select reset button
            const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]');

        
        }



        // Public methods
        return {
            init: function () {
                initDatatable();
                handleSearchDatatable();
                handleFilterDatatable();
                handleDeleteRows();
                handleResetForm();
            }
        }
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTDatatablesServerSide.init();
    });
</script>
<script>
    $("#tab_user").addClass('active');
    $("#kt_app_sidebar_secondary_user").addClass('show active');   
</script>
<script>
    "use strict";
    
    // Class definition
    var KTUsersAddUser = function () {
        // Shared variables
        const element = document.getElementById('kt_modal_add_user');
        const form = element.querySelector('#kt_modal_add_user_form');
        const modal = new bootstrap.Modal(element);
    
        // Init add schedule modal
        var initAddUser = () => {
    
            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            var validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        'fname': {
                            validators: {
                                notEmpty: {
                                    message: 'first Name is required'
                                }
                            }
                        },
                        'lname': {
                            validators: {
                                notEmpty: {
                                    message: 'Last Name Name is required'
                                }
                            }
                        },
                        'middlename': {
                            validators: {
                                notEmpty: {
                                    message: 'Middle Name is required'
                                }
                            }
                        },
                        'department': {
                            validators: {
                                notEmpty: {
                                    message: 'Department is required'
                                }
                            }
                        },
                        'position': {
                            validators: {
                                notEmpty: {
                                    message: 'Position is required'
                                }
                            }
                        },
                        'user_name': {
                            validators: {
                                notEmpty: {
                                    message: 'Username is required'
                                }
                            }
                        },
                        'mobile': {
                            validators: {
                                notEmpty: {
                                    message: 'Mobile is required'
                                }
                            }
                        },
                        'user_pass': {
                            validators: {
                                notEmpty: {
                                    message: 'Password is required'
                                }
                            }
                        },
                        'user_email': {
                            validators: {
                                notEmpty: {
                                    message: 'Valid email address is required'
                                }
                            }
                        },
                    },
    
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );
    
            // Submit button handler
            const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
            submitButton.addEventListener('click', e => {
                e.preventDefault();
    
                // Validate form before submit
                if (validator) {
                    validator.validate().then(function (status) {
                        console.log('validated!');
    
                        if (status == 'Valid') {
                            // Show loading indication
                            submitButton.setAttribute('data-kt-indicator', 'on');
    
                            // Disable button to avoid multiple click 
                            submitButton.disabled = false;
    
                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            setTimeout(function () {
                                // Remove loading indication
                                submitButton.removeAttribute('data-kt-indicator');
    
                                // Enable button
                                submitButton.disabled = false;
    
                                // Show popup confirmation 
                                Swal.fire({
                                    text: "Form has been successfully submitted!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        modal.hide();
                                    }
                                });
    
                                form.submit(); // Submit form
                            }, 2000);
                        } else {
                            // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    });
                }
            });
    
            // Cancel button handler
            const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
            cancelButton.addEventListener('click', e => {
                e.preventDefault();
    
                Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function (result) {
                    if (result.value) {
                        form.reset(); // Reset form			
                        modal.hide();	
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Your form has not been cancelled!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            });
    
            // Close button handler
            const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
            closeButton.addEventListener('click', e => {
                e.preventDefault();
    
                Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function (result) {
                    if (result.value) {
                        form.reset(); // Reset form			
                        modal.hide();	
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Your form has not been cancelled!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            });
        }
    
        return {
            // Public functions
            init: function () {
                initAddUser();
            }
        };
    }();
    
    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTUsersAddUser.init();
    });
</script>