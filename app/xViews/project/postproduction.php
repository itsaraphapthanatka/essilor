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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Post Production</h1>
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
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Content-->
				<div id="kt_app_content" class="app-content flex-column-fluid">
					<!--begin::Content container-->
					<div id="kt_app_content_container" class="app-container container-xxl">
						<!--begin::Card-->
						<div class="card card-flush">
							<!--begin::Card body-->
							<div class="card-body">
								<!--begin:::Tabs-->
								<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
									<!--begin:::Tab item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
										<i class="ki-duotone ki-home fs-2 me-2"></i>แผนก Edit</a>
									</li>
									<!--end:::Tab item-->
									<!--begin:::Tab item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
										<i class="ki-duotone ki-shop fs-2 me-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
										</i>แผนก Motion</a>
									</li>
									<!--end:::Tab item-->
									<!--begin:::Tab item-->
									<li class="nav-item" hidden>
										<a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization">
										<i class="ki-duotone ki-compass fs-2 me-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>แผนก Creative</a>
									</li>
									<!--end:::Tab item-->
								</ul>
								<!--end:::Tabs-->
								<!--begin:::Tab content-->
								<div class="tab-content" id="myTabContent">
									<!--begin:::Tab pane-->
									<div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
										<!--begin::Form-->
										<form id="kt_ecommerce_add_product_form" classs="form d-flex flex-column flex-lg-row" action="/postproductionedit" method="post" enctype="multipart/form-data">
											<!--begin::Heading-->
											<div class="row mb-7">
												<div class="col-md-9 offset-md-3">
													<h2>แผนก Edit</h2>
												</div>
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7">
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span>Start (Date)</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set the title of the store for SEO.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<!--begin::Input-->
													<input id="kt_date_start_edit" name="start_date_edit" placeholder="เลือกวันที่" class="form-control mb-2" value="<?=$res['depart_edit_start_date'];?>" />
													<input type="hidden" id="project_id" name="project_id" class="form-control mb-2" value="<?=$id;?>" />
													<!--end::Input-->
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7">
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span>End (Date)</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set theme style for the store.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<div class="w-100">
														<!--begin::Select2-->
														<input id="kt_date_end_edit" name="end_date_edit" placeholder="เลือกวันที่" class="form-control mb-2" value="<?=$res['depart_edit_end_date'];?>" />
														<!--end::Select2-->
													</div>
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7" hidden>
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Status</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set default layout style for the store.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<div class="w-100">
														<!--begin::Select2-->
														<select class="form-select" name="layout" data-control="select2" data-placeholder="Select a layout">
															<option></option>
															<option value="draft1" selected="selected">Draft 1</option>
															<option value="draft2">Draft 2</option>
															<option value="draft3">Draft 3</option>
															<option value="draft4">Draft 4</option>
															<option value="draft5">Draft 5</option>
															<option value="draft6">Draft 6</option>
															<option value="draft7">Draft 7</option>
															<option value="draft8">Draft 8</option>
															<option value="draft9">Draft 9</option>
															<option value="draft10">Draft 10</option>
														</select>
														<!--end::Select2-->
													</div>
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Action buttons-->
											<div class="row py-5">
												<div class="col-md-9 offset-md-3">
													<div class="d-flex">
														<!--begin::Button-->
														<a href="/projectlist" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</a>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="button" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
															<span class="indicator-label">Save</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
												</div>
											</div>
											<!--end::Action buttons-->
										</form>
										<!--end::Form-->
									</div>
									<!--end:::Tab pane-->
									<!--begin:::Tab pane-->
									<div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
										<!--begin::Form-->
										<form id="kt_ecommerce_settings_general_store" classs="form d-flex flex-column flex-lg-row" action="/postproductionmotion" method="post" enctype="multipart/form-data">
											<!--begin::Heading-->
											<div class="row mb-7">
												<div class="col-md-9 offset-md-3">
													<h2>แผนก Motion</h2>
												</div>
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7">
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span>Start (Date)</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set the title of the store for SEO.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<!--begin::Input-->
													<input id="kt_date_start_motion" name="start_date_motion" placeholder="เลือกวันที่" class="form-control mb-2" value="<?=$res['depart_motion_start_date'];?>" />
													<input type="hidden" id="project_id_motion" name="project_id_motion" class="form-control mb-2" value="<?=$id;?>" />
													<!--end::Input-->
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7">
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span>End (Date)</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set theme style for the store.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<div class="w-100">
														<!--begin::Select2-->
														<input id="kt_date_end_motion" name="end_date_motion" placeholder="เลือกวันที่" class="form-control mb-2" value="<?=$res['depart_motion_end_date'];?>" />
														<!--end::Select2-->
													</div>
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7" hidden>
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Status</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set default layout style for the store.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<div class="w-100">
														<!--begin::Select2-->
														<select class="form-select" name="layout" data-control="select2" data-placeholder="Select a layout">
															<option></option>
															<option value="draft1" selected="selected">Draft 1</option>
															<option value="draft2">Draft 2</option>
															<option value="draft3">Draft 3</option>
															<option value="draft4">Draft 4</option>
															<option value="draft5">Draft 5</option>
															<option value="draft6">Draft 6</option>
															<option value="draft7">Draft 7</option>
															<option value="draft8">Draft 8</option>
															<option value="draft9">Draft 9</option>
															<option value="draft10">Draft 10</option>
														</select>
														<!--end::Select2-->
													</div>
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Action buttons-->
											<div class="row py-5">
												<div class="col-md-9 offset-md-3">
													<div class="d-flex">
														<!--begin::Button-->
														<a href="/projectlist" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</a>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="button" id="kt-ecommerce-settings" class="btn btn-primary">
															<span class="indicator-label">Save</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
												</div>
											</div>
											<!--end::Action buttons-->
										</form>
										<!--end::Form-->
									</div>
									<!--end:::Tab pane-->
									<!--begin:::Tab pane-->
									<div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
										<!--begin::Form-->
										<form id="kt_ecommerce_settings_general_localization" class="form" action="#">
											<!--begin::Heading-->
											<div class="row mb-7">
												<div class="col-md-9 offset-md-3">
													<h2>แผนก Creative</h2>
												</div>
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7">
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span>Start (Date)</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set the title of the store for SEO.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<!--begin::Input-->
													<input id="kt_date_start_creative" name="start_date_creative" placeholder="เลือกวันที่" class="form-control mb-2" value="" />
													<!--end::Input-->
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7">
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span>End (Date)</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set theme style for the store.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<div class="w-100">
														<!--begin::Select2-->
														<input id="kt_date_end_creative" name="end_date_creative" placeholder="เลือกวันที่" class="form-control mb-2" value="" />
														<!--end::Select2-->
													</div>
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row fv-row mb-7">
												<div class="col-md-3 text-md-end">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold form-label mt-3">
														<span class="required">Status</span>
														<span class="ms-1" data-bs-toggle="tooltip" title="Set default layout style for the store.">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</label>
													<!--end::Label-->
												</div>
												<div class="col-md-9">
													<div class="w-100">
														<!--begin::Select2-->
														<select class="form-select" name="layout" data-control="select2" data-placeholder="Select a layout">
															<option></option>
															<option value="draft1" selected="selected">Draft 1</option>
															<option value="draft2">Draft 2</option>
															<option value="draft3">Draft 3</option>
															<option value="draft4">Draft 4</option>
															<option value="draft5">Draft 5</option>
															<option value="draft6">Draft 6</option>
															<option value="draft7">Draft 7</option>
															<option value="draft8">Draft 8</option>
															<option value="draft9">Draft 9</option>
															<option value="draft10">Draft 10</option>
														</select>
														<!--end::Select2-->
													</div>
												</div>
											</div>
											<!--end::Input group-->
											<!--begin::Action buttons-->
											<div class="row py-5">
												<div class="col-md-9 offset-md-3">
													<div class="d-flex">
														<!--begin::Button-->
														<a href="/project/<?=$res['channel_id'];?>" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</a>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
															<span class="indicator-label">Save</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
												</div>
											</div>
											<!--end::Action buttons-->
										</form>
										<!--end::Form-->
									</div>
									<!--end:::Tab pane-->
								</div>
								<!--end:::Tab content-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card-->
					</div>
					<!--end::Content container-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>

<script>
	 $("#tab_home").addClass('show');
	 $("#tab_project").addClass('active');
	 
	 $('#kt_date_start_edit').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 $('#kt_date_start_motion').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 $('#kt_date_start_creative').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	  
	 $('#kt_date_end_edit').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 $('#kt_date_end_motion').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 $('#kt_date_end_creative').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 
	 var KTAppEcommerceSaveProduct = function () {
		 
		const handleSubmit = () => {
			// Define variables
			let validator;
		
			// Get elements
			const form = document.getElementById('kt_ecommerce_add_product_form');
			const submitButton = document.getElementById('kt_ecommerce_add_product_submit');
		
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
			validator = FormValidation.formValidation(
				form,
				{
					fields: {
						'start_date_edit': {
							validators: {
								notEmpty: {
									message: 'Start Date is required'
								}
							}
						},
						'end_date_edit': {
							validators: {
								notEmpty: {
									message: 'End Date is required'
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
							var frm = $('#kt_ecommerce_add_product_form');
							frm.submit(function (ev) {
								$.ajax({
									type: frm.attr('method'),
									url: frm.attr('action'),
									data: frm.serialize(),
										success: function (data) {
											console.log(data);

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
					
													// Redirect to customers list page
													// window.location.href = "/projectlist";
												}
											});
										}, 2000);
									}
								});
								ev.preventDefault();

							});
							$("#kt_ecommerce_add_product_form").submit();
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
		const handleSubmitMotion = () => {
			// Define variables
			let validator;
		
			// Get elements
			const form = document.getElementById('kt_ecommerce_settings_general_store');
			const submitButton = document.getElementById('kt-ecommerce-settings');
		
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
			validator = FormValidation.formValidation(
				form,
				{
					fields: {
						'start_date_motion': {
							validators: {
								notEmpty: {
									message: 'Start Date is required'
								}
							}
						},
						'end_date_motion': {
							validators: {
								notEmpty: {
									message: 'End Date is required'
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
							var frm = $('#kt_ecommerce_settings_general_store');
							frm.submit(function (ev) {
								$.ajax({
									type: frm.attr('method'),
									url: frm.attr('action'),
									data: frm.serialize(),
										success: function (data) {
											console.log(data);

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
					
													// Redirect to customers list page
													// window.location.href = "/projectlist";
												}
											});
										}, 2000);
									}
								});
								ev.preventDefault();

							});
							$("#kt_ecommerce_settings_general_store").submit();
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
				handleSubmitMotion();
			 }
		 };
		 
	 }();
	 // On document ready
	 KTUtil.onDOMContentLoaded(function () {
		 KTAppEcommerceSaveProduct.init();
	 });
</script>