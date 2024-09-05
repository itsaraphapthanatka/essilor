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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Project</h1>
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
				<form id="kt_ecommerce_add_product_form" action="/CrateProject" method="post" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row">
					<!--begin::Aside column-->
					<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
						<!--begin::Thumbnail settings-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Picture</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body text-center pt-0">
								<!--begin::Image input-->
								<!--begin::Image input placeholder-->
								<style>.image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('<?php echo base_url();?>theme/dist/assets/media/svg/files/blank-image-dark.svg'); }</style>
								<!--end::Image input placeholder-->
								<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
									<!--begin::Preview existing avatar-->
									<div class="image-input-wrapper w-150px h-150px"></div>
									<!--end::Preview existing avatar-->
									<!--begin::Label-->
									<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
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
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Cancel-->
									<!--begin::Remove-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
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
						<!--begin::Status-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Project Status</h2>
								</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<div class="rounded-circle bg-primary w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
								</div>
								<!--begin::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Select2-->
								<select class="form-select mb-2" name="project_status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
									<option></option>
									<option value="0" selected="selected">New</option>
									<option value="1">In Process</option>
									<option value="2">Complete</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Status-->
					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<div class="d-flex flex-column gap-7 gap-lg-10">
							<!--begin::Inventory-->
							<div class="card card-flush py-4">
								<!--begin::Card header-->
								<div class="card-header">
									<div class="card-title">
										<h2>Project Details</h2>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body">
									<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-10 fs-3 fw-bold">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Project Details</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Job Details</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_3">Project Admin</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_4">Project Consultants</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
											<div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Project Code</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" readonly="readonly" id="project_code" name="project_code" class="form-control form-control-solid mb-2" placeholder="Project Code" value="<?=$project['project_code'];?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Project Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="project_name" class="form-control mb-2" placeholder="Project Name" value="<?=$project['project_name'];?>" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Address</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="address" class="form-control mb-2" placeholder="Address" value="<?=$project['project_address'];?>" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Business Unit</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select" data-kt-repeater="select2" data-placeholder="Open this select menu" data-allow-clear="true" name="bu" id="bu">
                                                        <option></option>
                                                        <?php foreach ($bu as $key => $value) {?>
															<?php if ($value['business_code'] == $project['business_unit']) {?>
																<option selected value="<?=$value['business_code'];?>"><?=$value['business_name'];?></option>
															<?php }else{ ?>
                                                            <option value="<?=$value['business_code'];?>"><?=$value['business_name'];?></option>
                                                        <?php } } ?>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Business Job Type</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <!-- <input id="job_type" name="job_type" placeholder="Business Job Type" class="form-control mb-2" /> -->
                                                    <select class="form-select" data-kt-repeater="select2" data-placeholder="Open this select menu" data-allow-clear="true" id="job_type" name="job_type">
                                                        <option></option>
                                                        <?php foreach ($jobtype as $key => $value) {?>
															<?php if ($value['type_code'] == $project['project_biztype']) {?>
																<option selected value="<?=$value['type_code'];?>"><?=$value['type_name'];?></option>
															<?php }else{?>
                                                            <option value="<?=$value['type_code'];?>"><?=$value['type_name'];?></option>
                                                        <?php } } ?>
                                                    </select>
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
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">W/T (%)</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="wtper" name="wtper" aria-label="" value="<?=$project['project_wt'];?>"/>
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">VAT (%)</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="vatper" name="vatper" aria-label="" value="<?=$project['project_vat'];?>"/>
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Insurance Contract/Year</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="insuranceContract" name="insuranceContract" aria-label="" value="<?=$project['project_contract'];?>"/>
                                                        <span class="input-group-text">Year</span>
                                                    </div>
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
                                                    <label class="required form-label">Start Project</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input id="kt_date_start" name="start_date" placeholder="Start Project" class="form-control mb-2" value="<?=$project['project_start'];?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Close Project</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input id="kt_date_end" name="end_date" placeholder="End Project" class="form-control mb-2" value="<?=$project['project_stop']?>" />
                                                    <!--end::Input-->
                                                </div>
                                                <div class="mb-10 fv-row w-100 flex-md-root">

                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Description</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea type="text" class="form-control form-control-lg mb-3 mb-lg-0" id="desc" name="description"><?=$project['project_detail'];?></textarea>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

										</div>
										<div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3 d-flex align-items-center">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold">Control BOQ:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<!--begin::Switch-->
													<div class="form-check form-switch form-check-custom form-check-solid me-10">
														<input class="form-check-input h-30px w-50px" name="controlboq" type="checkbox" id="controlboq" <?php echo ($project['chkconbqq'] == 1 ? "checked" : "") ?> />
														<label class="form-check-label" for="controlboq">Active</label>
													</div>
													<!--begin::Switch-->
												</div>
												<!--end::Col-->
											</div>
											<script>
												const switchButton = document.getElementById('controlboq');
												switchButton.addEventListener('change', function() {
													if (this.checked) {
													switchButton.value = '1';
													console.log('Switch is ON');
													} else {
													switchButton.value = '0';
													console.log('Switch is OFF');
													}
												});
											</script>
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">Control Budget:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<!--begin::Input-->
													<select name="controlbg"  data-control="select2" data-hide-search="true" class="form-select mb-2">
														<?php if ($project['controlbg'] == '1') {?>
															<option value="1" selected>Not Control</option>
															<option value="2">By Summary Cost Code</option>
														<?php }else{?>
															<option value="1">Not Control</option>
															<option value="2" selected>By Summary Cost Code</option>
														<?php } ?>
														
													</select>
													<!--end::Input-->
												</div>
												<!--end::Col-->
											</div>
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">Tender No.:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<!--begin::Input-->
													<select name="tenderno" id="tenderno" aria-label="Select a Tender Bid" data-control="select2" data-hide-search="false" data-allow-clear="true" data-placeholder="Select a Tender Bid..." class="form-select mb-2">
														<option></option>
														<?php foreach ($tender_h as $key => $value) {?>
															<?php if($project['bd_tenid'] == $value['bd_tenid']){?>
																<option selected value="<?=$value['bd_tenid'];?>"><?=$value['bd_pname'];?></option>
															<?php }?>
															<?php if ($value['bd_status'] == "win") {?>
																
															<?php }else{ ?>
															<option value="<?=$value['bd_tenid'];?>"><?=$value['bd_pname'];?></option>
														<?php } }?>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Col-->
											</div>
											<script>
												// const selectTender = document.getElementById('tenderno');
												$("#tenderno").on('change', function() {
													const tdno = $("#tenderno").val();
													$("#systemtype").load('<?php echo base_url(); ?>loadhtml/load_system/'+tdno);
												});
											</script>
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">Contract Amount:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<!--begin::Input-->
													<div class="input-group">
                                                        <input type="text" readonly class="form-control form-control-solid" id="contractAmount" name="contractAmount" aria-label=""/>
                                                        <!-- <span class="input-group-text">Amount</span> -->
                                                    </div>
													<!--end::Input-->
												</div>
												<!--end::Col-->
											</div>
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-3">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-2">System Type:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9">
													<div data-kt-ecommerce-catalog-add-product="auto-options">
														<div id="systemtype">
															<div class="form-group">
																<div data-repeater-list="systemtype" class="d-flex flex-column gap-3">
																	<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																		<div class="w-100 w-md-300px">
																			<select class="form-select" data-kt-repeater="select2" name="system_type_name" data-placeholder="Please Select System Type" data-kt-add-project="project_option">
																				<option></option>
																				<?php foreach ($systemType as $key => $value) {?>
																					<option value="<?=$value['systemid'];?>"><?=$value['systemname'];?></option>
																				<?php } ?>
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
																<i class="ki-duotone ki-plus fs-2"></i>Add System Type</button>
															</div>
														</div>
													</div>
												</div>
												<!--end::Col-->
											</div>
										</div>
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
										<div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
											<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-2">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-7">Administrator:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-10">
													<div data-kt-ecommerce-catalog-add-product="auto-options">
														<div id="project_admin">
															<div class="form-group">
																<div data-repeater-list="project_admin" class="d-flex flex-column gap-3">
																	<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Name:</label>
																		<input type="text" class="form-control" id="admin_name" name="admin_name" aria-label=""/>
																		</div>
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Position:</label>
																			<input type="text" class="form-control" id="admin_position" name="admin_position" aria-label=""/>
																		</div>
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Mobile:</label>
																			<input type="text" class="form-control" id="admin_mobile" name="admin_mobile" aria-label=""/>
																		</div>
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Email:</label>
																			<input type="text" class="form-control" id="admin_email" name="admin_email" aria-label=""/>
																		</div>
																		<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger mt-6">
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
																<i class="ki-duotone ki-plus fs-2"></i>Add Administrators</button>
															</div>
														</div>
													</div>
												</div>
												<!--end::Col-->
											</div>
										</div>
										<div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
										<div class="fv-row row mb-10">
												<!--begin::Col-->
												<div class="col-md-2">
													<!--begin::Label-->
													<label class="fs-6 fw-semibold mt-7">Consultants:</label>
													<!--end::Label-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-10">
													<div data-kt-ecommerce-catalog-add-product="auto-options">
														<div id="project_consult">
															<div class="form-group">
																<div data-repeater-list="project_consult" class="d-flex flex-column gap-3">
																	<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Name:</label>
																		<input type="text" class="form-control" id="consult_name" name="consult_name" aria-label=""/>
																		</div>
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Position:</label>
																			<input type="text" class="form-control" id="consult_position" name="consult_position" aria-label=""/>
																		</div>
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Mobile:</label>
																			<input type="text" class="form-control" id="consult_mobile" name="consult_mobile" aria-label=""/>
																		</div>
																		<div class="w-100 w-md-150px">
																		<label class="fs-6 fw-semibold mt-2">Email:</label>
																			<input type="text" class="form-control" id="consult_email" name="consult_email" aria-label=""/>
																		</div>
																		<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger mt-6">
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
																<i class="ki-duotone ki-plus fs-2"></i>Add Consultants</button>
															</div>
														</div>
													</div>
												</div>
												<!--end::Col-->
											</div>
											
										</div>
									</div>
								</div>
								<!--end::Card header-->
							</div>
							<!--end::Inventory-->
						</div>
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="/setupProject/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
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
</script>
<script>
	$("#year").on('change',function(){
		const type = '';
		const year = document.getElementById('year').value;
		const project = document.getElementById('project').value;
		const channelcode = document.getElementById('channel_code').value;
		// alert(type+'-'+project+'-'+year);
		$.ajax({
			url: '<?php echo base_url(); ?>jsondata/getnumberruning',
			type: 'POST',
			data: {
				'year': year,
				'type': type,
				'project': project
			},
			success: function(result) {
				var json = result;
				if (json<=9) {
					var x1 = "000"+json;
				}
				else if (json<=99) {
					var x1 = "00"+json;
				}
				else if (json<=999) {
					var x1 = "0"+json;
				}
				$('#runno').val(x1);
				console.log(x1);
				$("#project_code").val(type+"-"+project+"-"+year+"-"+x1);
				// console.log(json.project);
				// if(!json){
				// 	var channelcode = '-';
				// }else{
				// 	var channelcode = json.code;
				// }
				// $("#project_code").val(type.value+"-"+channelcode+"-"+year.value+"-"+runno.value);
				// $("#channel_code").val(channelcode);
			}
		});
	});


	Inputmask("decimal", {
    	"rightAlignNumerics": false
	}).mask("#wtper,#vatper,#insuranceContract,#contractAmount,#systemtypevalue");
</script>
