<!--begin::Toolbar-->
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="px-10 d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Task Creation</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="<?=base_url();?>main" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="<?=base_url();?>main" class="text-gray-600 text-hover-primary">Task Creation</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">New Task Create</li>
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
        <form id="add_form" action="<?php echo base_url();?>EditJobTask" method="post" enctype="multipart/form-data">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h3 class="card-title">Edit Task Detail <?=$jobtask['id'];?></h3>
                        
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">ECP Code From Beta</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select a Code" id="ecpcode" name="ecpcode">
                            <?php foreach ($ecp as $key => $value) {
                                if ($jobtask['ecpid'] === $value['id']) {?>
                                     <option selected value="<?=$value['customer_cd'];?>"><?=$value['customer_cd'];?></option>
                                <?php }else{ ?>
                                    <option value="<?=$value['customer_cd'];?>"><?=$value['customer_cd'];?></option>
                                <?php } ?>
                                   
                                <?php } ?>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">ECP Name From Beta</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <input class="form-control form-control-solid" readonly placeholder="ECP Name From Beta" id="ecpname" name="ecpname" value="<?=$ecpname['customer_name'];?>"/>
                                <input type="hidden" class="form-control form-control-solid" readonly placeholder="ECP Name From Beta" id="cycleID" name="cycleID" value="<?=$jobtask['orderCycleId'];?>" />
                                <input type="hidden" class="form-control form-control-solid" readonly placeholder="ECP Name From Beta" id="ecpid" name="ecpid" value="<?=$ecpname['id'];?>"/>
                                <input type="hidden" name="jobid" id="jobid" value="<?=$jobtask['id'];?>"/>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Tag Categorize</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Tag" id="tagCategory" name="tagCategory">
                                <option value="">Select ...</option>
                                <?php foreach ($tagCate as $key => $value) {
                                    if ($jobtask['tagsCategoryId'] === $value['id']) {?>
                                        <option selected value="<?=$value['id'];?>"><?=$value['category_name'];?></option>
                                    <?php }else{ ?>
                                        <option value="<?=$value['id'];?>"><?=$value['category_name'];?></option>
                                    <?php } ?>
                                    
                                <?php } ?>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                       
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Tag From Beta</label>
                            <!--begin::Input-->
                           
                            <div class="position-relative d-flex align-items-center">
                                <input class="form-control form-control-solid" readonly placeholder="Tag From Beta" name="tagsbeta" id="tagsbeta" value="<?=$tagbetaArr;?>" />
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Order Cycle</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!-- <input class="form-control form-control-solid" readonly placeholder="Tag From Beta" id="cycle" name="cycle" /> -->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Order Cycle" name="cycle">
                                    <option value="">Select ...</option>
                                    <?php foreach ($orderCycle as $key => $value) {
                                        if ($jobtask['orderCycleId'] == $value['id']) { ?>
                                            <option selected value="<?=$value['id'];?>"><?=$value['cyclename'];?></option>
                                        <?php }else{?>
                                            <option value="<?=$value['id'];?>"><?=$value['cyclename'];?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Categorize</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Categorize" id="category" name="Categorize">
                                <option value="">Select ...</option>
                                <?php foreach ($category as $key => $value) {?>
                                    <?php if ($jobtask['categoryId'] === $value['id']) {?>
                                        <option selected value="<?=$value['id'];?>"><?=$value['categoriesName'];?></option>
                                    <?php }else{ ?>
                                        <option value="<?=$value['id'];?>"><?=$value['categoriesName'];?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Tag (s)</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!-- <input class="form-control form-control-solid" value="" placeholder="Tags" name="tags" id="tags" /> -->
                                <select class="form-select form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="Select an option" data-allow-clear="true" name="tags[]" id="tags" multiple="multiple">
                                    <option></option>
                                    <?php foreach ($tags as $key => $value) { ?>
                                        <option value="<?=$value['id'];?>" data-text-color="<?=$value['text_color'];?>" data-background-color="<?=$value['background_color'];?>">
                                            <?= $value['tag_name'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-3 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Tracking ID</label>
                            <?php if($jobtask['trackingId'] == ""){?>
                                <input type="text" class="form-control form-control-solid" placeholder="TrackingID" name="trackingID" id="tracking" value=""/>
                            <?php }else{?>
                                <input type="text" readonly class="form-control form-control-solid" placeholder="TrackingID" name="trackingID" id="tracking" value="<?=$jobtask['trackingId'];?>"/>
                            <?php } ?>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div class="row g-8 mb-8">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Paste Capture </label>
                            <textarea id="kt_docs_tinymce_basic" name="kt_docs_tinymce_basic" class="tox-target"><?=$jobtask['capture'];?></textarea>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="row g-8 mb-8">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Attach Picture More </label>
                            <div class="fv-row mb-8">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_dropzonejs_example_1">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>

                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                            <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                                <input type="hidden" id="fakename" name="fakename">
                            </div>
                            <!-- file View-->
                            <!-- <div class="fv-row" id="load_file">
                                <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                                    <?php
                                    foreach ($JobImage as $key => $value) {
                                         $filePath  = "uploads/taskImage/".$value["ass_imgg"];
                                         $kb       = filesize( $filePath  ) / 1024;
                                         $mb       = $kb / 1024;
                                        $actualExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                                        'File extension: ' . $actualExtension . "<br/>";
                                    ?>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="card card-flush shadow-sm h-100">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                    <div class="card-toolbar">
                                                        <a href="<?=base_url();?>deletefile/<?=$value['id']?>/<?=$value['ass_code'];?>" id="deletefile">
                                                            <span class="position-absolute top-0 start-100 translate-middle  badge badge-circle badge-danger">
                                                                <i class="ki-solid ki-abstract-11 text-light fs-6"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="<?=base_url('uploads/taskImage/'.$value["ass_imgg"].'');?>" target="_blank" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                        <div class="symbol symbol-60px mb-5">
                                                            <?php
                                                            $mimeType = mime_content_type($filePath); // Assuming $value->ass_imgg is correct
                                                            if ($actualExtension === 'pdf') { ?>
                                                                <img src="<?= base_url(); ?>theme/demo20/assets/media/svg/files/pdf.svg" class="theme-light-show" alt="" />
                                                                <img src="<?= base_url(); ?>theme/demo20/assets/media/svg/files/pdf-dark.svg" class="theme-dark-show" alt="" />
                                                            <?php } elseif ($actualExtension=== 'xls' || $actualExtension === 'xlsx') { ?>
                                                                <img src="<?= base_url(); ?>theme/demo20/assets/media/svg/files/xls-svgrepo-com.svg" class="theme-light-show" alt="" />
                                                            <?php } elseif ($actualExtension === 'doc' || $actualExtension === 'docx') { ?>
                                                                <img src="<?= base_url(); ?>theme/demo20/assets/media/svg/files/doc-svgrepo-com.svg" class="theme-light-show" alt="" />
                                                            <?php } elseif ($actualExtension === 'jpg' || $actualExtension === 'jpeg'){?>
                                                                <img src="<?= base_url(); ?>theme/demo20/assets/media/svg/files/jpg-svgrepo-com.svg" class="theme-light-show" alt="" />
                                                            <?php } elseif ($actualExtension === 'png'){?>
                                                                <img src="<?= base_url(); ?>theme/demo20/assets/media/svg/files/png-svgrepo-com.svg" class="theme-light-show" alt="" />
                                                            <?php } ?>
                                                        </div>
                                                        <div class="fs-5 fw-bold mb-2"><?=$value['ass_imgg']?></div>
                                                    </a>
                                                    <div class="fs-7 fw-semibold text-gray-500"><?= 'File size: ' . round($kb, 2) . ' KB (' . round($mb, 2) . ' MB)'?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div> -->
                            <!-- end file View-->
                            <!--begin::Overlay-->
                            <div class="rounded border p-10 p-lg-20">
                                <div class="row">
                                <?php
                                    foreach ($JobImage as $key => $value) { ?>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="card card-flush shadow-sm h-100">
                                                <div class="card-body d-flex justify-content-center text-center flex-column p-1">
                                                    <div class="card-toolbar">
                                                        <a href="<?=base_url();?>deletefile/<?=$value['id']?>/<?=$value['ass_code'];?>" id="deletefile">
                                                            <span class="position-absolute top-0 start-100 translate-middle  badge badge-circle badge-danger">
                                                                <i class="ki-solid ki-abstract-11 text-light fs-6"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div >
                                                        <a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?=base_url('uploads/taskImage/'.$value["ass_imgg"].'');?>">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-550px"
                                                                style="background-image:url('<?=base_url('uploads/taskImage/'.$value["ass_imgg"].'');?>')">
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Action-->
                                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                                <i class="bi bi-eye-fill text-white fs-3x"></i>
                                                            </div>
                                                            <!--end::Action-->
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php } ?>
                                </div>
                            </div>
                            <!--end::Overlay-->
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <!--end::Card body-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="<?php echo base_url();?>main" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                    <!-- <button type="button" id="add_submit" class="btn btn-primary px-6">Save Changes</button> -->
                    <button type="button" id="add_submit" class="btn btn-primary me-2">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
            <!--end::Card-->
        </form>
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->


<script>
     $("#kt_header_navs_taskCreation").addClass('active show');
	 $("#kt_header_navs_tab_1").addClass('active');
	 $("#creattion_task_list_view").addClass('btn-light-primary');
     $("#kt_header_navs_keyin").addClass('active');
	 $("#kt_header_navs_tab_2").addClass('active show');
     $("#vipview").addClass('btn-light-primary');
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
                        'ecpcode': {
                            validators: {
                                notEmpty: {
                                    message: 'ecpcode is required'
                                }
                            }
                        },
                        'tagCategory': {
                            validators: {
                                notEmpty: {
                                    message: 'Tag Categorize is required'
                                }
                            }
                        },
                        'tagbeta': {
                            validators: {
                                notEmpty: {
                                    message: 'Tag From Beta is required'
                                }
                            }
                        },
                        'Categorize': {
                            validators: {
                                notEmpty: {
                                    message: 'Categorize is required'
                                }
                            }
                        },
                        'tags': {
                            validators: {
                                notEmpty: {
                                    message: 'Tag (s) is required'
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
                                tinymce.triggerSave();
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
													window.location.href = "<?php echo base_url();?>main";
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
        const handleMydropZone = () => {
            var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
                url: "<?=base_url();?>import/uploadFileTaskcreation", // Set the url for your upload script location
                init: function() {
                    this.on("sending", function(file, xhr, formData){
                            formData.append("data", $("#fakename").val());
                            console.log(formData)
                    });
                },
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 5,
                maxFilesize: 2, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                        $("#fakename").val(Math.random().toString(36).slice(2, 7));
                    }
                }
            });
        }
        const handletinymce = () => {
            var options = {
                    selector: "#kt_docs_tinymce_basic",
                    height : "480",
                    plugins: 'save',
                    menubar: false,
                    toolbar: false,
                };
            if ( KTThemeMode.getMode() === "dark" ) {
                options["skin"] = "oxide-dark";
                options["content_css"] = "dark";
            }
            tinymce.init(options);
        }
        const handletags = () => {
            var tagInput = document.querySelector('input[name=tags]');
            $.ajax({
                url: '<?=base_url()?>jsondata/getAllTags',
                success: function(response) {
                    var tagify = new Tagify(tagInput, {
                        whitelist:response.tags,
                        dropdown: {
                            maxItems: 20,           // <- mixumum allowed rendered suggestions
                            classname: 'tags-look', // <- custom classname for this dropdown, so it could be targeted
                            enabled: 0,             // <- show suggestions on focus
                            closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
                        }
                    });
                }
            });
        }
        const handleEcpSelect =() => {
            $('#ecpcode').on('select2:select', function (e) {
                var selectedValue = e.params.data.id;

                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>getecp',
                    data: { selectedValue: selectedValue },
                    success: function(response) {
                        console.log(response);
                        $("#ecpname").val(response.data.customer_name);
                        $("#cycleID").val(response.data.logis_cycle);
                        $("#ecpid").val(response.data.id);
                        let tagsData = response.tags; // Array of tag details
                        let tagsUse = response.tt.map(tag => tag.toLowerCase()); // Normalize tagsUse to lowercase for case-insensitive matching
                        let cycle = response.cycle;
                        if (tagsData && tagsData.length) {
                            var $tagSelect = $('#tagbeta');
                            // Clear previous options
                            $tagSelect.empty();

                            // Populate the select with new options
                            $.each(tagsData, function(index, tag) {
                                var option = new Option(tag.tag_name, tag.id, false, tagsUse.includes(tag.tag_name.toLowerCase()));
                                $(option).attr('data-text-color', tag.text_color);
                                $(option).attr('data-background-color', tag.background_color);
                                $tagSelect.append(option);
                            });

                            // Initialize or re-initialize Select2 with customized tag style
                            $tagSelect.select2({
                                templateResult: formatState,
                                templateSelection: formatState
                            });

                            // Set the selected values based on the tagsUse array
                            var selectedIds = tagsData.filter(tag => tagsUse.includes(tag.tag_name.toLowerCase())).map(tag => tag.id);
                            console.log(selectedIds);
                            $tagSelect.val(selectedIds).trigger('change');
                        }
                        if (cycle) {
                            // Convert the cycle array to a comma-separated string
                            var cycleText = cycle.join(', ');

                            // Get the input field
                            var input1 = document.querySelector("#cycle");

                            // Check if Tagify is already initialized on the input
                            if (input1._tagify) {
                                // If Tagify is already initialized, update the value
                                input1._tagify.removeAllTags();
                                input1._tagify.addTags(cycleText);
                            } else {
                                // If Tagify is not initialized, set the value and initialize Tagify with custom template
                                input1.value = cycleText;

                                // Initialize Tagify with custom colors using HSL
                                new Tagify(input1, {
                                    // Function to customize each tag's appearance using HSL colors
                                    templates: {
                                        tag: function(tagData) {
                                            let hslColor;

                                            // Define HSL color logic based on the tag's value
                                            switch (tagData.value) {
                                                case 'วิ่งเช้ารอบเดียว':
                                                    hslColor = 'hsl(210, 100%, 95%)';  // Bootstrap Primary Color (Blue)
                                                    break;
                                                case 'วิ่งเย็นรอบเดียว':
                                                    hslColor = 'hsl(45, 100%, 48%)'; // Green (Hue = 120)
                                                    break;
                                                case 'วิ่งแค่ จ-ศ':
                                                    hslColor = 'hsl(259, 81%, 57%)';   // Red (Hue = 0)
                                                    break;
                                                default:
                                                    hslColor = 'hsl(211, 100%, 50%)'; // Fallback to Bootstrap Primary Color
                                            }

                                            return `
                                                <tag title="${tagData.value}" contenteditable='false' spellcheck="false" tabIndex="-1" class="tagify__tag" style="background-color: ${hslColor};">
                                                    <x title="remove tag" class="tagify__tag__removeBtn"></x>
                                                    <div>
                                                        <span class="tagify__tag-text">${tagData.value}</span>
                                                    </div>
                                                </tag>`;
                                        }
                                    }
                                });
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', status, error);
                    }
                });

                function formatState(state) {
                    if (!state.id) {
                        return state.text; // Return the original text if there's no data
                    }

                    var textColor = $(state.element).data('text-color');
                    var backgroundColor = $(state.element).data('background-color');

                    var $state = $(
                        '<span class="badge" style="color:' + textColor + '; background-color:' + backgroundColor + ';">' + state.text + '</span>'
                    );

                    return $state;
                }
            });

        }
        const handleTagCategorySelect = () => {
            $('#tagCategory').on('select2:select', function (e) {
                var tagInput = document.querySelector('input[name=tags]');
                var selectedValue = e.params.data.id;

                $.ajax({
                    type: 'POST',
                    url: '<?=base_url()?>findTags',
                    data: { selectedValue: selectedValue },
                    success: function(response) {
                        // console.log(response);
                        let tagsData = response.tagsAll; // Array of tag details
                        let tagsUse = response.tt.map(tag => tag.toLowerCase()); // Normalize tagsUse to lowercase for case-insensitive matching
                        
                        if (tagsData && tagsData.length) {
                            var $tagSelect = $('#tags');
                            // Clear previous options
                            $tagSelect.empty();

                            // Populate the select with new options
                            $.each(tagsData, function(index, tag) {
                                var option = new Option(tag.tag_name, tag.id, false, tagsUse.includes(tag.tag_name.toLowerCase()));
                                $(option).attr('data-text-color', tag.text_color);
                                $(option).attr('data-background-color', tag.background_color);
                                $tagSelect.append(option);
                            });
                            // Initialize or re-initialize Select2 with customized tag style
                            $tagSelect.select2({
                                templateResult: formatState,
                                templateSelection: formatState
                            });

                            // Set the selected values based on the tagsUse array
                            var selectedIds = tagsData.filter(tag => tagsUse.includes(tag.tag_name.toLowerCase())).map(tag => tag.id);
                            // console.log(selectedIds);
                            $tagSelect.val(selectedIds).trigger('change');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', status, error);
                    }
                });
                function formatState(state) {
                    if (!state.id) {
                        return state.text; // Return the original text if there's no data
                    }

                    var textColor = $(state.element).data('text-color');
                    var backgroundColor = $(state.element).data('background-color');

                    var $state = $(
                        '<span class="badge" style="color:' + textColor + '; background-color:' + backgroundColor + ';">' + state.text + '</span>'
                    );

                    return $state;
                }
            });
        }
        const initReady = () => {

            $('#tagbeta').select2({
                templateResult: formatState,
                templateSelection: formatState
            });
            $('#tags').select2({
                templateResult: formatState,
                templateSelection: formatState
            });
            // $('#tagbeta').prop('disabled', true);
            $("#tagbeta").prop("readonly", true);

            // tagBeta
            var jobid = document.getElementById('jobid').value;
            var ecpid = document.getElementById('ecpid').value;
            console.log(jobid);
            $.ajax({
                type: 'POST',
                url: '<?=base_url();?>getTagECP',
                data: { jobid: jobid, ecpid: ecpid },
                success: function(response) {
                    console.log(response);
                    let tagsData = response.tags; // Array of tag details
                    let tagsUse = response.tt.map(tag => tag.toLowerCase()); // Normalize tagsUse to lowercase for case-insensitive matching
                    let cycle = response.cycle;
                    console.log(cycle);
                    if (tagsData && tagsData.length) {
                        var inputElement = document.getElementById("tagsbeta");
                        // Prepare the tag data for Tagify (convert Select2 data to Tagify-friendly format)
                        var tagItems = tagsData.map(tag => ({
                            value: tag.tag_name,
                            id: tag.id,
                            textColor: hexToHsl(tag.text_color),
                            backgroundColor: hexToHsl(tag.background_color)
                        }));

                        // Initialize Tagify with custom styling for each tag
                        var tagify = new Tagify(inputElement, {
                            enforceWhitelist: true,  // Only allow tags from the list
                            whitelist: tagItems,  // Set the whitelist to the tagItems array
                            templates: {
                                tag: function(tagData) {
                                    return `
                                        <tag title="${tagData.value}" contenteditable='false' spellcheck="false" tabIndex="-1" class="tagify__tag" style="color: ${tagData.textColor}; background-color: ${tagData.backgroundColor};">
                                            <x title="remove tag" class="tagify__tag__removeBtn"></x>
                                            <div>
                                                <span class="tagify__tag-text">${tagData.value}</span>
                                            </div>
                                        </tag>`;
                                }
                            }
                        });

                        // Preselect tags based on tagsUse array
                        var selectedTags = tagsData
                            .filter(tag => tagsUse.includes(tag.tag_name.toLowerCase()))  // Filter tags that exist in tagsUse
                            .map(tag => tag.tag_name);  // Map the filtered tags to just their names
                            tagify.removeAllTags();
                            console.log(selectedTags);
                            tagify.addTags(selectedTags);  // Add these tags to the Tagify instance
                    }
                    if (cycle) {
                            // Convert the cycle array to a comma-separated string
                            var cycleText = cycle.join(', ');

                            // Get the input field
                            var input1 = document.querySelector("#cycle");

                            // Check if Tagify is already initialized on the input
                            if (input1._tagify) {
                                // If Tagify is already initialized, update the value
                                input1._tagify.removeAllTags();
                                input1._tagify.addTags(cycleText);
                            } else {
                                // If Tagify is not initialized, set the value and initialize Tagify with custom template
                                input1.value = cycleText;

                                // Initialize Tagify with custom colors using HSL
                                new Tagify(input1, {
                                    // Function to customize each tag's appearance using HSL colors
                                    templates: {
                                        tag: function(tagData) {
                                            let hslColor;
                                            // Define HSL color logic based on the tag's value
                                            switch (tagData.value) {
                                                case 'วิ่งเช้ารอบเดียว':
                                                    hslColor = 'hsl(210, 100%, 95%)';  // Bootstrap Primary Color (Blue)
                                                    break;
                                                case 'วิ่งเย็นรอบเดียว':
                                                    hslColor = 'hsl(45, 100%, 48%)'; // Green (Hue = 120)
                                                    break;
                                                case 'วิ่งแค่ จ-ศ':
                                                    hslColor = 'hsl(259, 81%, 57%)';   // Red (Hue = 0)
                                                    break;
                                                default:
                                                    hslColor = 'hsl(211, 100%, 50%)'; // Fallback to Bootstrap Primary Color
                                            }

                                            return `
                                                <tag title="${tagData.value}" contenteditable='false' spellcheck="false" tabIndex="-1" class="tagify__tag" style="background-color: ${hslColor};">
                                                    <x title="remove tag" class="tagify__tag__removeBtn"></x>
                                                    <div>
                                                        <span class="tagify__text-color-white">${tagData.value}</span>
                                                    </div>
                                                </tag>`;
                                        }
                                    }
                                });
                            }
                        }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', status, error);
                }
            });
            // tag(s)
            var tagInput = document.querySelector('input[name=tags]');
            var category = document.getElementById('tagCategory').value;
            console.log(category);
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>findTags',
                data: { selectedValue: category },
                success: function(response) {
                    // console.log(response);
                    let tagsData = response.tagsAll; // Array of tag details
                    let tagsUse = response.tt.map(tag => tag.toLowerCase()); // Normalize tagsUse to lowercase for case-insensitive matching

                    if (tagsData && tagsData.length) {
                        var $tagSelect = $('#tags');
                        // Clear previous options
                        $tagSelect.empty();

                        // Populate the select with new options
                        $.each(tagsData, function(index, tag) {
                            var option = new Option(tag.tag_name, tag.id, false, tagsUse.includes(tag.tag_name.toLowerCase()));
                            $(option).attr('data-text-color', tag.text_color);
                            $(option).attr('data-background-color', tag.background_color);
                            $tagSelect.append(option);
                        });
                        // Initialize or re-initialize Select2 with customized tag style
                        $tagSelect.select2({
                            templateResult: formatState,
                            templateSelection: formatState
                        });

                        // Set the selected values based on the tagsUse array
                        var selectedIds = tagsData.filter(tag => tagsUse.includes(tag.tag_name.toLowerCase())).map(tag => tag.id);
                        // console.log(selectedIds);
                        $tagSelect.val(selectedIds).trigger('change');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', status, error);
                }
            });
            function formatState(state) {
                if (!state.id) {
                    return state.text; // Return the original text if there's no data
                }

                var textColor = $(state.element).data('text-color');
                var backgroundColor = $(state.element).data('background-color');

                var $state = $(
                    '<span class="badge" style="color:' + textColor + '; background-color:' + backgroundColor + ';">' + state.text + '</span>'
                );

                return $state;
            }
        }
	 	// Public methods
	 	return {
	 		init: function () {
                initReady();
				handleSubmit();
                handleMydropZone();
                handletinymce();
                handleEcpSelect();
                handleTagCategorySelect();
                // handletags();
	 		}
	 	};
	 }();

     KTUtil.onDOMContentLoaded(function () {
		 KTAppEcommerceSaveProduct.init();
	 });



</script>


