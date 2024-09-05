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
                <li class="breadcrumb-item text-gray-600">Tag Listview</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center">
            <button type="button" hidden class="btn btn-primary me-3">New Tag</button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start px-10">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <form id="add_form" action="<?php echo base_url();?>CrateTags" method="post" enctype="multipart/form-data">
            <div class="card mb-6">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Tag Info</h3>
                        </div>
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tag Name</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="tagname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Tag Name" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tag Meaning</label>
                        <div class="col-lg-8">
                        <div class="col-lg-12 fv-row">
                                <input type="text" name="tag_meaning" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Tag Meaning" value=""/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Tag Category</label>
                        <div class="col-lg-8">
                            <div class="col-lg-12 fv-row">
                                <select name="tag_category" data-control="select2" data-placeholder="Select a format" data-hide-search="false" class="form-select form-select-solid fw-bold">
                                <option value=""></option>    
                                <?php foreach ($category as $key => $value) { ?>
                                        <option value="<?php echo $value['id'];?>"><?php echo $value['category_name'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Text Color</label>
                        <div class="col-lg-8">
                            <div class="col-lg-12 fv-row">
                            <input type="color" class="form-control form-control-color" id="tagColorInput" name="text_color" value="#563d7c" title="Choose your color">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Background Color</label>
                        <div class="col-lg-8">
                            <div class="col-lg-12 fv-row">
                            <input type="color" class="form-control form-control-color" id="bgColorInput" name="bg_color" value="#563d7c" title="Choose your color">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="<?php echo base_url();?>view_tags" class="btn btn-light btn-active-light-primary me-2">Discard</a>
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
	 $("#tagview").addClass('btn-light-primary');
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
                        'tagname': {
                            validators: {
                                notEmpty: {
                                    message: 'Tag Name is required'
                                }
                            }
                        },
                        'tag_meaning': {
                            validators: {
                                notEmpty: {
                                    message: 'Tag Meaning is required'
                                }
                            }
                        },
                        // 'tag_category': {
                        //     validators: {
                        //         notEmpty: {
                        //             message: 'Tag Category is required'
                        //         }
                        //     }
                        // },
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
													window.location.href = "<?php echo base_url();?>view_tags";
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