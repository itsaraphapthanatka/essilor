<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Form-->
				<form id="kt_ecommerce_add_product_form" action="/CrateProject" method="post" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row">
					
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<div class="d-flex flex-column gap-7 gap-lg-10">
							<!--begin::Inventory-->
							<div class="card card-flush py-4">
								<!--begin::Card header-->
								<div class="card-header">
									<div class="card-title">
										<h2>New Tender Project</h2>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body">
									<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-10 fs-3 fw-bold">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Tender Details</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3 class="mb-6">Project Tender</h3>
                                                    <div class="fv-row row mb-10">
                                                        <!--begin::Col-->
                                                        <div class="col-md-3">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold mt-2">Tender No:</label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-9">
                                                            <!--begin::Input-->
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="tender_no" name="tender_no" aria-label=""/>
                                                                <!-- <span class="input-group-text">Amount</span> -->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h3 class="mb-6">Bid Bond</h3>
                                                    <div class="fv-row row mb-10">
                                                        <!--begin::Col-->
                                                        <div class="col-md-3">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold mt-2">Bid Bond Amount:</label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-9">
                                                            <!--begin::Input-->
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="bidbond" name="bidbond" aria-label=""/>
                                                                <!-- <span class="input-group-text">Amount</span> -->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                            </div>    
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="fv-row row mb-10">
                                                        <!--begin::Col-->
                                                        <div class="col-md-3">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold mt-2">Tender Name:</label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-9">
                                                            <!--begin::Input-->
                                                            <div class="input-group">
                                                                <input type="text" name="tender_name" class="form-control mb-2" placeholder="Tender Name" value="" />
                                                                <!-- <span class="input-group-text">Amount</span> -->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="fv-row row mb-10">
                                                        <!--begin::Col-->
                                                        <div class="col-md-3">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-semibold mt-2">Bid Bond Date:</label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-9">
                                                            <!--begin::Input-->
                                                            <div class="input-group">
                                                                <input type="text" id="kt_bidbond_start" name="kt_bidbond_start" class="form-control mb-2" placeholder="Bid Bond Date" value="" />
                                                                <!-- <span class="input-group-text">Amount</span> -->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="fv-row row mb-10">
                                                        <!--begin::Col-->
                                                        <div class="col-md-3">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-semibold mt-2">Start Date:</label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-9">
                                                            <!--begin::Input-->
                                                            <div class="input-group">
                                                                <input type="text" id="kt_date_start" name="start_date" class="form-control mb-2" placeholder="Start Date" value="" />
                                                                <!-- <span class="input-group-text">Amount</span> -->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="fv-row row mb-10">
                                                        <!--begin::Col-->
                                                        <div class="col-md-3">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-semibold mt-2">Customer/Owner:</label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-9">
                                                            <!--begin::Input-->
                                                            <div class="input-group">
                                                                <select class="form-select" data-kt-repeater="select2" data-placeholder="Open this select menu" data-allow-clear="true" name="bu" id="bu">
                                                                    <option></option>
                                                                </select>
                                                                <!-- <span class="input-group-text">Amount</span> -->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="fv-row row mb-10">
                                                        <!--begin::Col-->
                                                        <div class="col-md-3">
                                                            <!--begin::Label-->
                                                            <label class="required fs-6 fw-semibold mt-2">Tender Amount:</label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-md-9">
                                                            <!--begin::Input-->
                                                            <div class="input-group">
                                                                <input type="text" readonly class="form-control form-control-solid text-end" id="contractAmount" name="contractAmount" aria-label=""/>
                                                                <!-- <span class="input-group-text">Amount</span> -->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div> 


                                            <div class="row mb-7">
                                                <div class="col-md-6">
                                                    <h3>Tender Job</h3>
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Tender Job:</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div data-kt-ecommerce-catalog-add-product="auto-options">
														<div id="systemtype">
															<div class="form-group">
																<div data-repeater-list="systemtype" class="d-flex flex-column gap-3">
																	<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																		<div class="w-100 w-md-300px">
																			<select class="form-select" data-kt-repeater="select2" name="system_type_name" data-placeholder="Please Select System Type" data-kt-add-project="project_option">
																				<option></option>
																				
																			</select>
																		</div>
																		<div class="w-100 w-md-200px">
																			<input type="text" class="form-control amount" id="systemtypevalue" name="systemtypevalue" aria-label=""/>
																		</div>
																		<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																			<i class="ki-duotone ki-cross fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</button>
																	</div>
																</div>
															</div>
															<div class="form-group mt-5">
																<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
																<i class="ki-duotone ki-plus fs-2"></i>Add Job</button>
															</div>
														</div>
													</div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <script>
                                                document.addEventListener('input', function (e) {
                                                    if (e.target.classList.contains('amount')) {
                                                        updateTotalAmount();
                                                    }
                                                });

                                                function updateTotalAmount() {
                                                    let total = 0;
                                                    document.querySelectorAll('.amount').forEach(function (input) {
                                                        total += parseFloat(input.value) || 0;
                                                    });
                                                    document.getElementById('contractAmount').value = total.toFixed(2);
                                                }

                                            </script>
										</div>
										
									</div>
								</div>
								<!--end::Card header-->
							</div>
							<!--end::Inventory-->
						</div>
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="/ArchiveTender/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="button" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
								<span class="indicator-label">Confirm</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
					</div>
					<!--end::Main column-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
</div>

<script>
	$("#tab_<?= $seq1; ?>").addClass('show');
	$("#tab_group_<?= $seq2; ?>").addClass('show');
	$("#tab_sub_<?= $seq3; ?>").addClass('active');
	 
	 $('#finished_date').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 $('#kt_date_start').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	 $('#kt_bidbond_start').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	  
 	$('#kt_date_end').flatpickr({
	  	altInput: true,
	  	altFormat: "d/m/Y",
	  	dateFormat: "Y-m-d",
  	});
	 
	 var KTAppEcommerceSaveProduct = function () {
		 
	 	const initChannal = () => {
		 	// Tnit new repeating condition types
		 	const allConditionTypes = document.querySelectorAll('[data-kt-channal="channal_name"]');
		 	allConditionTypes.forEach(type => {
			 	if ($(type).hasClass("select2-hidden-accessible")) {
				 	return;
			 	} else {
				 	$(type).select2({
					 	minimumResultsForSearch: -1
				 	});
			 	}
		 	});
	 	}
	 	const initJobname = () => {
		 	// Tnit new repeating condition types
		 	const allConditionTypes = document.querySelectorAll('[data-kt-typejob="typejob"]');
		 	allConditionTypes.forEach(type => {
			 	if ($(type).hasClass("select2-hidden-accessible")) {
				 	return;
			 	} else {
				 	$(type).select2({
					 	minimumResultsForSearch: -1
				 	});
			 	}
		 	});
	 	}
	 	const initDescriptions = () => {
		 	// Define all elements for quill editor
		 	const elements = [
			 	'#kt_ecommerce_add_product_description',
			 	'#kt_project_description'
		 	];
	 	
		 	// Loop all elements
		 	elements.forEach(element => {
			 	// Get quill element
			 	let quill = document.querySelector(element);
	 	
			 	// Break if element not found
			 	if (!quill) {
				 	return;
			 	}
	 	
			 	// Init quill --- more info: https://quilljs.com/docs/quickstart/
			 	quill = new Quill(element, {
				 	modules: {
					 	toolbar: [
						 	[{
							 	header: [1, 2, false]
						 	}],
						 	['bold', 'italic', 'underline'],
						 	['image', 'code-block']
					 	]
				 	},
				 	placeholder: 'Type your text here...',
				 	theme: 'snow' // or 'bubble'
			 	});
		 	});
	 	}
		const initEmployeeAdd = () => {
			$('#systemtype').repeater({
				initEmpty: false,
		
				defaultValues: {
					'text-input': 'foo'
				},
		
				show: function () {
					$(this).slideDown();
					$(this).find('[data-kt-repeater="select2"]').select2();
					// Init select2 on new repeated items
					initConditionsSelect2();
				},
		
				hide: function (deleteElement) {
					$(this).slideUp(deleteElement);
				}
			});
		}
		const initAdminstratorAdd = () => {
			$('#project_consult').repeater({
				initEmpty: false,
		
				defaultValues: {
					'text-input': 'foo'
				},
		
				show: function () {
					$(this).slideDown();
					$(this).find('[data-kt-repeater="select2"]').select2();
					// Init select2 on new repeated items
					initConditionsSelect2();
				},
		
				hide: function (deleteElement) {
					$(this).slideUp(deleteElement);
				}
			});
		}
		const initConsultantsAdd = () => {
			$('#project_admin').repeater({
				initEmpty: false,
		
				defaultValues: {
					'text-input': 'foo'
				},
		
				show: function () {
					$(this).slideDown();
					$(this).find('[data-kt-repeater="select2"]').select2();
					// Init select2 on new repeated items
					initConditionsSelect2();
				},
		
				hide: function (deleteElement) {
					$(this).slideUp(deleteElement);
				}
			});
		}
		const initConditionsSelect2 = () => {
			// Tnit new repeating condition types
			const allConditionTypes = document.querySelectorAll('[data-kt-add-project="project_option"]');
			allConditionTypes.forEach(type => {
				if ($(type).hasClass("select2-hidden-accessible")) {
					return;
				} else {
					$(type).select2({
						minimumResultsForSearch: -1
					});
				}
			});
		}
		const handleStatus = () => {
			const target = document.getElementById('kt_ecommerce_add_product_status');
			const select = document.getElementById('kt_ecommerce_add_product_status_select');
			const statusClasses = ['bg-primary', 'bg-success', 'bg-info'];
		
			$(select).on('change', function (e) {
				const value = e.target.value;
		
				switch (value) {
					case "0": {
						target.classList.remove(...statusClasses);
						target.classList.add('bg-primary');
						// hideDatepicker();
						break;
					}
					case "1": {
						target.classList.remove(...statusClasses);
						target.classList.add('bg-info');
						// showDatepicker();
						break;
					}
					case "2": {
						target.classList.remove(...statusClasses);
						target.classList.add('bg-success');
						// hideDatepicker();
						break;
					}
					default:
						break;
				}
			});
		}
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
						'project_name': {
							validators: {
								notEmpty: {
									message: 'Project name is required'
								}
							}
						},
						'yearpc': {
							validators: {
								notEmpty: {
									message: 'Year is required'
								}
							}
						},
						'projectcode2pc': {
							validators: {
								notEmpty: {
									message: 'Running No. is required'
								}
							}
						},
						'shot_project_code': {
							validators: {
								notEmpty: {
									message: 'Shot Project Code is required'
								}
							}
						},
						'project_code': {
							validators: {
								notEmpty: {
									message: 'Project Code is required'
								}
							}
						},
						'typejob': {
							validators: {
								notEmpty: {
									message: 'Job Type is required'
								}
							}
						},
						'channel_id': {
							validators: {
								notEmpty: {
									message: 'Channel Name is required'
								}
							}
						},
						'cast': {
							validators: {
								notEmpty: {
									message: 'Cast is required'
								}
							}
						},
						'client_name': {
							validators: {
								notEmpty: {
									message: 'Client Name is required'
								}
							}
						},
						'start_date': {
							validators: {
								notEmpty: {
									message: 'Start Date is required'
								}
							}
						},
						'on_set_date': {
							validators: {
								notEmpty: {
									message: 'On Set Date is required'
								}
							}
						},
						'finished_date': {
							validators: {
								notEmpty: {
									message: 'Finished Date is required'
								}
							}
						},
						'total_time': {
							validators: {
								notEmpty: {
									message: 'Total Time is required'
								}
							}
						},
						'total_time': {
							validators: {
								notEmpty: {
									message: 'Total Time is required'
								}
							}
						},
						'project': {
							validators: {
								notEmpty: {
									message: 'Shot Project Code is required'
								}
							}
						},
						'producer_name': {
							validators: {
								notEmpty: {
									message: 'Producer Name is required'
								}
							}
						},
						'creative': {
							validators: {
								notEmpty: {
									message: 'creative Name is required'
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
				// e.preventDefault();
		
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
													window.location.href = "/project/";
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
		
	 	// Public methods
	 	return {
	 		init: function () {
		 		initChannal();
		 		initJobname();
				initDescriptions();
				initEmployeeAdd();
				initAdminstratorAdd();
				initConsultantsAdd();
				initConditionsSelect2();
				handleStatus();
				handleSubmit();
				$('[data-kt-repeater="select2"]').select2();
	 		}
	 	};
	 	
	 }();
	 // On document ready
	 KTUtil.onDOMContentLoaded(function () {
		 KTAppEcommerceSaveProduct.init();
	 });

	 $("#typejob,#channelname,#year,#runno").on('change',function(){
		const type = document.getElementById('typejob');
		// const channelname = document.getElementById('channelname');
		const year = document.getElementById('year');
		const runno = document.getElementById('runno');
		const channelname = "";
		console.log(channelname);
		$.ajax({
			url: '<?php echo base_url(); ?>getChannelID',
			type: 'POST',
			data: {
				'channelID': channelname,
			},
			success: function(result) {
				var json = result;
				if(!json){
					var channelcode = '-';
				}else{
					var channelcode = json.code;
				}
				$("#project_code").val(type.value+"-"+channelcode+"-"+year.value+"-"+runno.value);
				$("#channel_code").val(channelcode);
			}
		});
	});

    Inputmask("decimal", {
    	"rightAlignNumerics": false
	}).mask("#contractAmount,#systemtypevalue,#bidbond");
</script>

