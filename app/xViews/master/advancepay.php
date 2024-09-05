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
							<h3 class="fw-bold m-0">ตั้งค่าเงินมัดจำ</h3>
						</div>
						<!--end::Card title-->
					</div>
					<!--begin::Card header-->
					<!--begin::Content-->
					<div id="kt_account_settings_profile_details" class="collapse show">
						<!--begin::Form-->
						<form id="kt_account_profile_details_form" class="form">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<div class="row mb-6">
									<!--begin::Label-->
									<label class="col-lg-4 col-form-label required fw-semibold fs-6">จำนวนเงินมัดจำ:</label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-4">
										<div class="input-group mb-5">
											<input type="text" class="form-control" id="advanceAmount" name="advanceAmount" placeholder="Amount" value="<?=$adv_amount['adv_amount'];?>"/>
											<span class="input-group-text">บาท</span>
										</div>
									</div>
									<!--end::Col-->
								</div>
							</div>
							<!--end::Card body-->
							<!--begin::Actions-->
							<div class="card-footer d-flex justify-content-end py-6 px-9">
								<button type="reset" class="btn btn-light btn-active-light-primary me-2">ยกเลิก</button>
								<button type="button" class="btn btn-primary" id="savetimedelay">บันทึก</button>
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
	Inputmask("decimal", {
		"rightAlignNumerics": false
	}).mask("#advanceAmount");
	$("#savetimedelay").on('click',function(){
		const amount = $("#advanceAmount").val();
		$.ajax({
			url: '<?php echo base_url(); ?>saveAvance',
			type: 'POST',
			data: {'data': amount },
			success: function(data) {
				var json = data;
				console.log(json);
				toastr.success(data.message);
			}
		});
		
	});
	$("#tab_appoint").addClass('active');
	$("#kt_app_sidebar_secondary_collections").addClass('show active');
</script>