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
							<h3 class="fw-bold m-0">แก้ไขสาขา</h3>
						</div>
						<!--end::Card title-->
					</div>
					<!--begin::Card header-->
					<!--begin::Content-->
					<div id="kt_account_settings_profile_details" class="collapse show">
						<!--begin::Form-->
						<form id="kt_account_profile_details_form" method="post" action="/branchedit" enctype="multipart/form-data" class="form">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">สาขา</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row">
												<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="<?=$res['branch_name'];?>" />
												<input type="hidden" name="cid" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="<?=$res['id'];?>" />
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Card body-->
							
							<!--begin::Actions-->
							<div class="card-footer d-flex justify-content-end py-6 px-9">
								<a href="/branch" class="btn btn-light btn-active-light-primary me-2">ยกเลิก</a>
								<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">บันทึก</button>
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
									message: 'กรุณากรอกชื่อสาขา'
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

</script>

<script>
	$("#tab_business").addClass('active');
	$("#kt_app_sidebar_secondary_environment").addClass('show active')
</script>