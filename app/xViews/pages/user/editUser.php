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
				<!--begin::Basic info-->
				<div class="card mb-5 mb-xl-10">
					<!--begin::Card header-->
					<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bold m-0">Profile</h3>
						</div>
						<!--end::Card title-->
					</div>
					<!--begin::Card header-->
					<!--begin::Content-->
					<div id="kt_account_settings_profile_details" class="collapse show">
						<!--begin::Form-->
						<form id="kt_account_profile_details_form" method="post" action="<?=base_url()?>saveEditUser" enctype="multipart/form-data" class="form">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label fw-semibold fs-6">Image</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Image input-->
										<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
											<!--begin::Preview existing avatar-->
											<div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?=base_url();?>profile/<?= $res['user_img'];?>)"></div>
											<!--end::Preview existing avatar-->
											<!--begin::Label-->
											<label class="btn btn-icon btn-circle btn-active-color-info w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
												<i class="bi bi-pencil-fill fs-7"></i>
												<!--begin::Inputs-->
												<input type="file" name="userfile" accept=".png, .jpg, .jpeg" />
												<input type="hidden" name="avatar_remove" />
												<!--end::Inputs-->
											</label>
											<!--end::Label-->
											<!--begin::Cancel-->
											<span class="btn btn-icon btn-circle btn-active-color-info w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
												<i class="bi bi-x fs-2"></i>
											</span>
											<!--end::Cancel-->
											<!--begin::Remove-->
											<span class="btn btn-icon btn-circle btn-active-color-info w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
												<i class="bi bi-x fs-2"></i>
											</span>
											<!--end::Remove-->
										</div>
										<!--end::Image input-->
										<!--begin::Hint-->
										<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
										<!--end::Hint-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">User Name</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row">
												<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="<?=$res['user_name'];?>" />
												<input type="hidden" name="cid" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="<?=$res['id'];?>" />
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row">
													<input type="email" name="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Email" value="<?=$res['user_email'];?>" />
												</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row" data-kt-password-meter="true">
												<!-- <div class="input-icon input-icon-right">
													<input type="password" name="password" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="<?=$res['prekey'];?>" />
													<span>
														<i class="ki ki-hide icon-md" id="togglePassword"></i>
													</span>
												</div> -->
												<div class="position-relative mb-3">
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" value="<?=$res['prekey'];?>" />
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
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label fw-semibold fs-6">
										<span class="required">Mobile</span>
										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
									</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 fv-row">
										<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="<?=$res['mobile'];?>" />
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
                                <div class="separator separator-dashed separator-border border-primary my-10"></div>
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label fw-semibold fs-6">
										<span class="required">User Role</span>
										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
									</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 fv-row">
										<?php if ($res['user_role'] == 'member') {?>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3"  name="user_role" type="radio" value="member" id="kt_modal_update_role_option_0" checked='checked' />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_0">
														<div class="fw-bold text-gray-800">Member</div>
														<div class="text-gray-600">Best full access for Setting Management</div>
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
													<input class="form-check-input me-3"  name="user_role" type="radio" value="guest" id="kt_modal_update_role_option_1" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_1">
														<div class="fw-bold text-gray-800">Guest</div>
														<div class="text-gray-600">Best for Access Working</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Roles-->
										<?php }else if($res['user_role'] == 'guest'){ ?>
											 <!--begin::Input row-->
											 <div class="d-flex fv-row">
												 <!--begin::Radio-->
												 <div class="form-check form-check-custom form-check-solid">
													 <!--begin::Input-->
													 <input class="form-check-input me-3" disabled="disabled" name="user_role" type="radio" value="member" id="kt_modal_update_role_option_0"/>
													 <!--end::Input-->
													 <!--begin::Label-->
													 <label class="form-check-label" for="kt_modal_update_role_option_0">
														 <div class="fw-bold text-gray-800">Member</div>
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
													 <input class="form-check-input me-3" name="user_role" type="radio" value="guest" id="kt_modal_update_role_option_1" checked='checked'/>
													 <!--end::Input-->
													 <!--begin::Label-->
													 <label class="form-check-label" for="kt_modal_update_role_option_1">
														 <div class="fw-bold text-gray-800">Guest</div>
                                                         <div class="text-gray-600">Best for Access Working</div>
													 </label>
													 <!--end::Label-->
												 </div>
												 <!--end::Radio-->
											 </div>
											 <!--end::Roles-->
										<?php } ?>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Card body-->
							<!--begin::Actions-->
							<div class="card-footer d-flex justify-content-end py-6 px-9">
								<a href="<?=base_url();?>usersManage" class="btn btn-light btn-active-light-info me-2">Cancal</a>
								<button type="submit" class="btn btn-info" id="kt_account_profile_details_submit">Submit</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Basic info-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>

<script>
	"use strict";

	// Class definition
	var KTAccountSettingsProfileDetails = function () {
		// Private variables
		var form;
		var submitButton;
		var validation;

		// Private functions
		var initValidation = function () {
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
			validation = FormValidation.formValidation(
				form,
				{
					fields: {
						fname: {
							validators: {
								notEmpty: {
									message: 'User Name is required'
								}
							}
						},
						email: {
							validators: {
								notEmpty: {
									message: 'Email is required'
								}
							}
						},
						phone: {
							validators: {
								notEmpty: {
									message: 'Contact phone number is required'
								}
							}
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						submitButton: new FormValidation.plugins.SubmitButton(),
						defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
						bootstrap: new FormValidation.plugins.Bootstrap5({
							rowSelector: '.fv-row',
							eleInvalidClass: '',
							eleValidClass: ''
						})
					}
				}
			);
		}

		// Public methods
		return {
			init: function () {
				form = document.getElementById('kt_account_profile_details_form');

				if (!form) {
					return;
				}

				submitButton = form.querySelector('#kt_account_profile_details_submit');

				initValidation();
			}
		}
	}();

	// On document ready
	KTUtil.onDOMContentLoaded(function() {
		KTAccountSettingsProfileDetails.init();
	});

    $("#tab_4").addClass('active');
	 $("#kt_header_navs_tab_4").addClass('active show');
	 $("#usersManage").addClass('btn-light-primary');
</script>