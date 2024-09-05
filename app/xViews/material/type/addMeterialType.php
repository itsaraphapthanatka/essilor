<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Form-->
				<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" method="post" action="/EditProject" enctype="multipart/form-data">
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="companythai" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>New Meterial Type </h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Meterial Type code</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="mat_type_code" class="form-control mb-2" placeholder="Meterial Type code" value="" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Meterial Type  Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="mat_type_name" class="form-control mb-2" placeholder="Meterial Type  Name" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="form-label">Status</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <!-- <div id="kt_project_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div> -->
                                                <select class="form-select min-w-100px" name="status" data-control="select2" data-hide-search="true" data-placeholder="เลือกเดือน" data-kt-ecommerce-order-filter="userstatus">
													<option value="active" selected>Active</option>
													<option value="inactive">Inactive</option>
												</select>
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
							<a href="/setupMaterial/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
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
</script>