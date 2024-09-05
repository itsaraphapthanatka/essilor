<!--begin::Toolbar-->
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Setting</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="/home/member" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item text-gray-600">
                    <a href="#" class="text-gray-600 text-hover-primary">Setting</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">>Tag Category Listview</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start px-10">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <form id="add_form" action="<?php echo base_url();?>update_tagCategory" method="post" enctype="multipart/form-data">
            <div class="card mb-6">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Tag Category</h3>
                        </div>
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Category Name</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row">
                                    <input type="hidden" name="categoryid" value="<?=$category['id'];?>" />
                                    <input type="text" name="categoryname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Category Name" value="<?=$category['category_name'];?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row">
                                    <select class="form-select form-select-lg form-select-solid" name="tag_category_status" data-control="select2" data-placeholder="Select an option">
                                        <?php if($category['category_status'] == 'active'){ ?><option value="active" selected>Active</option><?php } else { ?><option value="active">Active</option><?php }?>
                                        <?php if($category['category_status'] == 'inactive'){ ?><option value="inactive" selected>Inactive</option><?php } else { ?><option value="inactive">Inactive</option><?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="<?php echo base_url();?>TagCategory" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                    <!-- <button type="button" id="add_submit" class="btn btn-primary px-6">Save Changes</button> -->
                    <button type="button" id="add_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->

<script>
     $("#tab_3").addClass('active');
	 $("#kt_header_navs_tab_3").addClass('active show');
	 $("#tagCategory").addClass('btn-light-primary');
</script>

<script>
     var KTAppEcommerceSaveProduct = function () {
		const handleSubmit = () => {
			// Define variables
			let validator;
			// Get elements
			const form = document.getElementById('add_form');
			const submitButton = document.getElementById('add_submit');
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        'categoryname': {
                            validators: {
                                notEmpty: {
                                    message: 'Category Name is required'
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
							var frm = $('#add_form');
							frm.submit(function (ev) {
								$.ajax({
									type: frm.attr('method'),
									url: frm.attr('action'),
									data: frm.serialize(),
										success: function (data) {
											console.log(data);

                                        // setTimeout(function () {
											submitButton.removeAttribute('data-kt-indicator');
											Swal.fire({
												text: data.message,
												icon: data.status,
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
													window.location.href = "<?php echo base_url();?>TagCategory";
												}
											});
										// }, 2000);
									}
								});
								ev.preventDefault();

							});
							$("#add_form").submit();
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
	 	};
	 }();

     KTUtil.onDOMContentLoaded(function () {
		 KTAppEcommerceSaveProduct.init();
	 });

</script>