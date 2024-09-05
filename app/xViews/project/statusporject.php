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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">สถานะโครงการ</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
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
					<!--begin::Content-->
					<div id="kt_account_settings_profile_details" class="collapse show">
						<!--begin::Form-->
						<form id="kt_account_profile_details_form" method="post" action="/saveProjectStatus" enctype="multipart/form-data" class="form">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<input type="hidden" name="project_id" id="project_id" value="<?=$res['id'];?>">
								<!--begin::Input group-->
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">วันที่ได้รับอนุมัติจากโปรดิวเซอร์</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row">
												<input id="kt_date_start" name="producer_approved_date" placeholder="เลือกวันที่" class="form-control mb-2" value="<?=$res['producer_approved_date'];?>" />
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
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">Barter Trade</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row">
												<select class="form-select" name="bartertrade" data-control="select2" data-placeholder="Select a layout">
													<option></option>
													<?php if($res['barter_trade'] == 'no'){ ?><option value="no" selected>no</option><?php } else { ?><option value="no">no</option><?php }?>
													<?php if($res['barter_trade'] == 'yes'){ ?><option value="yes" selected>yes</option><?php } else { ?><option value="yes">yes</option><?php }?>
												</select>
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
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">สถานะโครงการ</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row">
												<select class="form-select" name="statusproject" data-control="select2" data-placeholder="Select a layout">
													<?php if($res['total_status'] == 'In Process'){ ?><option value="In Process" selected>In Process</option><?php } else { ?><option value="In Process">In Process</option><?php }?>
													<?php if($res['total_status'] == 'In Stock'){ ?><option value="In Stock" selected>In Stock</option><?php } else { ?><option value="In Stock">In Stock</option><?php }?>
													<?php if($res['total_status'] == 'Completed'){ ?><option value="Completed" selected>Completed</option><?php } else { ?><option value="Completed">Completed</option><?php }?>
													<?php if($res['total_status'] == 'On Hold'){ ?><option value="On Hold" selected>On Hold</option><?php } else { ?><option value="On Hold">On Hold</option><?php }?>
													<?php if($res['total_status'] == 'Canceled'){ ?><option value="Canceled" selected>Canceled</option><?php } else { ?><option value="Canceled">Canceled</option><?php }?>
												</select>
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
									<label class="col-lg-4 col-form-label fw-semibold fs-6">หมายเหตุ</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-12 fv-row">
												<textarea class="form-control mb-3" name="remark" rows="3" data-kt-element="input" placeholder="Type a message"><?=$res['remark_total_status'];?></textarea>
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
								<a href="/project/<?=$res['channel_id'];?>" class="btn btn-light btn-active-light-primary me-2">ยกเลิก</a>
								<button type="button" class="btn btn-primary" id="kt_account_profile_details_submit">บันทึก</button>
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
		const handleSubmit = () => {
			// Define variables
			let validator;
		
			// Get elements
			const form = document.getElementById('kt_account_profile_details_form');
			const submitButton = document.getElementById('kt_account_profile_details_submit');
		
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
			validator = FormValidation.formValidation(
				form,
				{
					fields: {
						'producer_approved_date': {
							validators: {
								notEmpty: {
									message: 'Date Approved from Producer is required'
								}
							}
						},
						'bartertrade': {
							validators: {
								notEmpty: {
									message: 'Barter Trade is required'
								}
							}
						},
						'statusproject': {
							validators: {
								notEmpty: {
									message: 'Project Status is required'
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
		
			// Handle submit button
			submitButton.addEventListener('click', e => {
				e.preventDefault();
		
				// Validate form before submit
				if (validator) {
					validator.validate().then(function (status) {
						console.log('validated!');
		
						if (status == 'Valid') {
							submitButton.setAttribute('data-kt-indicator', 'on');
		
							// Disable submit button whilst loading
							submitButton.disabled = true;
		
							setTimeout(function () {
								submitButton.removeAttribute('data-kt-indicator');
		
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
										// Enable submit button after loading
										submitButton.disabled = false;
										var frm = $('#kt_account_profile_details_form');
										
										frm.submit(function (ev) {
											$.ajax({
												type: frm.attr('method'),
												url: frm.attr('action'),
												data: frm.serialize(),
												success: function (data) {
													console.log(data);
													// var json = jQuery.parseJSON(data);
													// console.log($.trim(data));
													submitButton.removeAttribute('data-kt-indicator');
												}
											});
											ev.preventDefault();

										});
										$("#kt_account_profile_details_form").submit();
									}
								});
							}, 2000);
						} else {
							Swal.fire({
								html: "กรุณากรอกข้อมูลที่กำหนด",
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
			})
		}
	
	
		// Public methods
		return {
			init: function () {
				handleSubmit();
			}
		}
	}();
	
	// On document ready
	KTUtil.onDOMContentLoaded(function() {
		KTAccountSettingsProfileDetails.init();
	});

</script>


<script>
	$("#tab_home").addClass('show');
    $("#tab_project").addClass('active');
	  
  	$('#kt_date_start').flatpickr({
	   	altInput: true,
	   	altFormat: "d/m/Y",
	   	dateFormat: "Y-m-d",
   	});
</script>