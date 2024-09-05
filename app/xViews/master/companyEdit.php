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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Company</h1>
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
				<!--begin::Form-->
				<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" method="post" action="/EditProject" enctype="multipart/form-data">
					<!--begin::Aside column-->
					<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
						<!--begin::Thumbnail settings-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Company Image</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body text-center pt-0">
								<!--begin::Image input-->
								<!--begin::Image input placeholder-->
								<!-- <style>.image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image-dark.svg'); }</style> -->
								<!--end::Image input placeholder-->
								<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
									<!--begin::Preview existing avatar-->
									<?php if($res['comp_img'] == null){?>
										<div class="image-input-wrapper w-150px h-150px" style="background-image: url(/theme/dist/assets/media/svg/files/blank-image.svg)"></div>
									<?php }else{?>
										<div class="image-input-wrapper w-150px h-150px" style="background-image: url(/comp/<?= $res['comp_img'];?>)"></div>
									<?php }?>
									<!--end::Preview existing avatar-->
									<!--begin::Label-->
									<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Image">
										<i class="ki-duotone ki-pencil fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<!--begin::Inputs-->
										<input type="file" name="userfile" accept=".png, .jpg, .jpeg" />
										<input type="hidden" name="avatar_remove" />
										<!--end::Inputs-->
									</label>
									<!--end::Label-->
									<!--begin::Cancel-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Image">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Cancel-->
									<!--begin::Remove-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Image">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Remove-->
								</div>
								<!--end::Image input-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the Project image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
								<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Thumbnail settings-->
					</div>
					<!--end::Aside column-->
                    
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="companythai" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Company Detail</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Company Code</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" readonly="readonly" name="compcode" class="form-control form-control-solid mb-2" placeholder="รหัสบริษัท" value="<?=$res['compcode']?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Companay Name (Thai)</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="company_nameth" class="form-control mb-2" placeholder="ชื่อบริษัท" value="<?=$res['company_nameth'];?>" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Company Name (ENG)</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="company_name" class="form-control mb-2" placeholder="ชื่อบริษัท (ENG)" value="<?=$res['company_name'];?>" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                             <!--begin::Input group-->
                                             <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Address</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <!-- <div id="kt_project_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div> -->
                                                <textarea class="form-control form-control-lg mb-3 mb-lg-0" rows="5" id="company_addr" name="company_addr"><?=$res['company_address'];?></textarea>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Tax ID</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="taxno" class="form-control mb-2" placeholder="เลขประจำตัวผู้เสียภาษี" value="<?=$res['company_taxnum'];?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Telephone</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="tel" placeholder="เบอร์โทร" class="form-control mb-2" value="<?=$res['company_tel'];?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="form-label">FAX</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="fax" class="form-control mb-2" placeholder="แฟกซ์" value="<?=$res['company_fax'];?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Email</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" id="email" name="email" placeholder="อีเมล์" class="form-control mb-2" value="<?=$res['company_email'];?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                     <!--begin::Label-->
                                                     <label class="form-label">Contact</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="contact" placeholder="ผู้ติดต่อ" class="form-control mb-2" value="<?=$res['company_contact'];?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                 <!--begin::Input group-->
                                                 <div class="mb-10 fv-row w-100 flex-md-root">

                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div hidden class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Description</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <!-- <div id="kt_project_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div> -->
                                                <textarea class="form-control form-control-lg mb-3 mb-lg-0" id="desc_no_use" name="desc_no_use"></textarea>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="/setupCompany/<?=$seq1;?>/<?=$seq2;?>" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
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
	$("#tab_sub_<?= $seq3; ?>").addClass('active')

	 $('#kt_date_start').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	  
	 $('#finished_date').flatpickr({
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "Y-m-d",
	  });
	  
	 $('#kt_date_end').flatpickr({
		 mode: "multiple",
		  altInput: true,
		  altFormat: "d/m/Y",
		  dateFormat: "d/m/Y",
	  });
	 
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
	 $('#kt_producer_date_start').flatpickr({
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
		 const initChannalShot = () => {
			  // Tnit new repeating condition types
			  const allConditionTypes = document.querySelectorAll('[data-kt-channalshot="channalshot_name"]');
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
			$('#employee').repeater({
				initEmpty: false,
		
				defaultValues: {
					'text-input': 'foo'
				},
		
				show: function () {
					$(this).slideDown();
					$(this).find('[data-kt-repeater="select2"]').select2();
					$(this).find('[data-kt-repeater="input"]').val('add');
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
						break;
					}
					case "1": {
						target.classList.remove(...statusClasses);
						target.classList.add('bg-info');
						break;
					}
					case "2": {
						target.classList.remove(...statusClasses);
						target.classList.add('bg-success');
						break;
					}
					default:
						break;
				}
			});
		}
		// const handleDateformat = () => {
		// 	const select = document.getElementById('kt_date_end');
		// 	$(select).on('change', function (e) {
		// 		// const myArray = e.target.value.split(", ");
		// 		
		// 		// document.getElementById("kt_date_end2").value = e.target.value;
		// 		// $("#kt_date_end2").val(myArray);
		// 		console.log(e.target.value);
		// 		$("#kt_date_end2").val(e.target.value);
		// 		// console.log
		// 		// const value =  date(e.target.value).toLocaleDateString('en-GB');
		// 		
		// 		// document.getElementById('kt_date_end2').value = value;
		// 		// console.log(moment(e.target.value).format('DD/MM/YYYY'));
		// 		
		// 	
		// 	});
		// }
		const handleSubmit = () => {
			// Get elements
			const form = document.getElementById('kt_ecommerce_add_product_form');
			const submitButton = document.getElementById('kt_ecommerce_add_product_submit');
			submitButton.addEventListener('click', e => {

				submitButton.setAttribute('data-kt-indicator', 'on');
			
				// Disable submit button whilst loading
				submitButton.disabled = false;
			});
		}
	 	// Public methods
	 	return {
	 		init: function () {
		 		initChannal();
				handleSubmit();
				initChannalShot();
		 		initJobname();
				initDescriptions();
				initEmployeeAdd();
				initConditionsSelect2();
				handleStatus();
				// handleDateformat();
				$('[data-kt-repeater="select2"]').select2();
	 		}
	 	};
	 	
	 }();
	 // On document ready
	 KTUtil.onDOMContentLoaded(function () {
		 KTAppEcommerceSaveProduct.init();
	 });
</script>