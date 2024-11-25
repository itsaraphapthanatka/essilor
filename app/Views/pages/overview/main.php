


<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">                        
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 mb-5">
			<div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack mb-5">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
						Dashboard
					</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="<?=base_url()?>theme/dist/index.html" class="text-muted text-hover-primary">
								Home
							</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<!--end::Item-->				
						<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								Dashboard
							</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				</div>
				<div id="kt_app_content_container" class="app-container  container-xxl ">
					<div class="row g-5 g-xl-10 g-xl-10">
						<div class="col-xl-6 mb-5 mb-xl-10">     
							<!--begin::List widget 6-->
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800">Keyin Duty</span>
									</h3>
									<!--end::Title-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body pt-4">                 
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
											<!--begin::Table head-->
											<thead>
												<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">   
													<th class="text-center p-0 w-50px pb-1">ไอคอน</th>
													<th class="text-center ps-0 min-w-140px">ประเภทลูกค้า</th>
													<th class="text-center ps-0 min-w-140px">รอ KEY</th>
													<th class="text-center ps-0 min-w-140px">สำเร็จ</th>
													<th class="text-center ps-0 min-w-140px">งาน D+1</th>                                     
												</tr>
											</thead>
											<!--end::Table head-->

											<!--begin::Table body-->
											<tbody>                                  
												<tr>
													<td class="text-center">
														<div class="fs-2hx bg-light-primary text-primary fw-bold p-2">RX</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-2hx pe-0">V.I.P.</span>
													</td>
													<td class="text-center text-danger fs-2hx fw-bold"><?=$dash['rx_keyin_vip']?></td>
													<td class="text-center text-success fs-2hx fw-bold"><?=$dash['rx_keyin_vip_success']?></td>
													<td class="text-center text-primary fs-2hx fw-bold"><?=$d_1['rx_keyin_vip_d1']?></td>                                        
												</tr>                                     
												<tr>
													<td class="text-center">
														<div class="bg-light-primary text-primary fs-2hx fw-bold p-2">RX</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary fs-2hx mb-1 pe-0">Partner</span>
													</td>
													<td class="text-center text-danger fs-2hx fw-bold"><?=$dash['rx_keyin_standard']?></td>
													<td class="text-center text-success fs-2hx fw-bold"><?=$dash['rx_keyin_standard_success']?></td>
													<td class="text-center text-primary fs-2hx fw-bold"><?=$d_1['rx_keyin_standard_d1']?></td>                                        
												</tr>                                     
												<tr>
													<td class="text-center">
														<div class="bg-light-danger text-danger fw-bold fs-2hx p-2">STOCK</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-2hx pe-0">V.I.P.</span>
													</td>
													<td class="text-center text-danger fs-2hx fw-bold"><?=$dash['stock_keyin_vip']?></td>
													<td class="text-center text-success fs-2hx fw-bold"><?=$dash['stock_keyin_vip_success']?></td>
													<td class="text-center text-primary fs-2hx fw-bold"><?=$d_1['stock_keyin_vip_d1']?></td>                                        
												</tr>                                     
												<tr>
													<td class="text-center">
														<div class="bg-light-danger text-danger fs-2hx fw-bold p-2">STOCK</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-2hx pe-0">Partner</span>
													</td>
													<td class="text-center text-danger fs-2hx fw-bold"><?=$dash['stock_keyin_standard']?></td>
													<td class="text-center text-success fs-2hx fw-bold"><?=$dash['stock_keyin_standard_success']?></td>
													<td class="text-center text-primary fs-2hx fw-bold"><?=$d_1['stock_keyin_standard_d1']?></td>                                        
												</tr>                                     
											</tbody>
											<!--end::Table body-->
										</table>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Body-->
								</div>
							<!--end::List widget 6-->
						</div>
						<div class="col-xl-6 mb-5 mb-xl-10">     
							<!--begin::List widget 6-->
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800">Call Center</span>
									</h3>
									<!--end::Title-->

									<!--begin::Toolbar-->
									<!-- <div class="card-toolbar">   
										<a href="<?=base_url()?>theme/dist/apps/ecommerce/catalog/categories.html" class="btn btn-sm btn-light">View All</a>        
									</div> -->
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body pt-4">
									<div class="accordion mb-5" id="kt_accordion_1">
										<div class="accordion-item">
											<h2 class="accordion-header" id="kt_accordion_1_header_1">
												<button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-expanded="true" aria-controls="kt_accordion_1_body_1">
													Setup Iframe for Call Center
												</button>
											</h2>
											<div id="kt_accordion_1_body_1" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
												<div class="accordion-body">
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6 mb-5">
														<!--begin::Icon-->
														<i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>
														<!--end::Icon-->
														
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
															<!--begin::Content-->
															<div class="mb-3 mb-md-0 fw-semibold">
																<h4 class="text-gray-900 fw-bold">Iframe</h4>
																<div class="fs-6 text-gray-700 pe-7">Enable Iframe Link for Call Center</div>
															</div>
															<!--end::Content-->
															
															<!--begin::Action-->
															<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														
														<!--begin::Iframe-->
														
														<!--end::Iframe-->
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!--begin::Table container-->
									<div id="loadiframe">
										<!--begin::Table-->
										<?=$config['value'];?>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Body-->
								</div>
							<!--end::List widget 6-->
						</div>
					</div>
					<div class="row g-5 g-xl-10 g-xl-10">
						<div class="col-xl-6 mb-5 mb-xl-10">     
							<!--begin::List widget 6-->
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pb-10 pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800">Support Duty</span>
									</h3>
									<!--end::Title-->
								</div>
								<!--end::Header-->
								<!--begin::Card body-->
								<div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
									<!--begin::Items-->
									<div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
										<!--begin::Item-->
										<div class="me-md-2 badge badge-primary fs-base">
											<span class="fs-2 fw-bold me-2 lh-1 ls-n2">งานเดือนนี้</span>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
											<!--begin::Statistics-->
											<div class="d-flex mb-2">
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$countJobtasksByStatus['complete'];?></span>
											</div>
											<!--end::Statistics-->
											<!--begin::Description-->
											<span class="fs-6 fw-semibold text-success">OK</span>
											<!--end::Description-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="m-0 ">
											<!--begin::Statistics-->
											<div class="d-flex align-items-center mb-2">
												<!--begin::Value-->
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$countJobtasksByStatus['inProgress'];?></span>
												<!--end::Value-->
											</div>
											<!--end::Statistics-->
											<!--begin::Description-->
											<span class="fs-6 fw-semibold text-danger">Not Pass</span>
											<!--end::Description-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="m-0 border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
											<!--begin::Statistics-->
											<div class="d-flex align-items-center mb-2">
												<!--begin::Value-->
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$countJobtasksByStatus['pending'];?></span>
												<!--end::Value-->
											</div>
											<!--end::Statistics-->
											<!--begin::Description-->
											<span class="fs-6 fw-semibold text-primary">PENDING</span>
											<!--end::Description-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
									<!--begin::Items-->
									<div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
										<!--begin::Item-->
										<div class="me-md-2 badge badge-dark fs-base">
											<span class="fs-2 fw-bold me-2 lh-1 ls-n2">PENDING</span>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
											<!--begin::Statistics-->
											<div class="d-flex mb-2">
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$pendingCount['One']?></span>
											</div>
											<!--end::Statistics-->
											<!--begin::Description-->
											<span class="badge badge-light-success fs-base fs-6 fw-semibold">ค้าง 1 วัน</span>
											<!--end::Description-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="m-0">
											<!--begin::Statistics-->
											<div class="d-flex align-items-center mb-2">
												<!--begin::Value-->
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$pendingCount['Two']?></span>
												<!--end::Value-->
											</div>
											<!--end::Statistics-->
											<!--begin::Description-->
											<span class="badge badge-light-primary fs-base fs-6 fw-semibold">ค้าง 2 วัน</span>
											<!--end::Description-->
										</div>
										<!--end::Item-->
										<div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
											<!--begin::Statistics-->
											<div class="d-flex align-items-center mb-2">
												<!--begin::Value-->
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$pendingCount['Tree']?></span>
												<!--end::Value-->
											</div>
											<!--end::Statistics-->
											<!--begin::Description-->
											<span class="badge badge-light-warning fs-base fs-6 fw-semibold">ค้าง 3 วัน</span>
											<!--end::Description-->
										</div>
										<!--end::Item-->
										<div class="m-0">
											<!--begin::Statistics-->
											<div class="d-flex align-items-center mb-2">
												<!--begin::Value-->
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$pendingCount['TreePlus']?></span>
												<!--end::Value-->
											</div>
											<!--end::Statistics-->
											<!--begin::Description-->
											<span class="badge badge-light-danger fs-base fs-6 fw-semibold">มากกว่า 3 วัน</span>
											<!--end::Description-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
									<!--begin::Items-->
									<div class="d-flex flex-wrap d-grid gap-10 px-9 mb-5">
										<!--begin::Item-->
										<div class="me-md-2 badge badge-danger fs-base">
											<span class="fs-2 fw-bold me-2 lh-1 ls-n2">MAX</span>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
											<div class="badge badge-light-success">
												<!--begin::Statistics-->
												<div class="d-flex mb-2">
													<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?= $maxDuration ? $maxDuration : 0;?></span>
												</div>
												<!--end::Statistics-->
												<!--begin::Description-->
												<span class="fs-6 fw-semibold text-gray-500">เดือนนี้</span>
												<!--end::Description-->
											</div>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::List widget 6-->
						</div>
						<div class="col-xl-6 mb-5 mb-xl-10">     
							<!--begin::List widget 6-->
							<div class="card card-flush h-md-100">
								<!--begin::Header-->
								<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800">QC/Answer Duty</span>
									</h3>
									<!--end::Title-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body pt-4">                 
									<!--begin::Table container-->
									<table class="table table-row-dashed align-middle mb-5">
										<thead>
											<tr>
												<th rowspan="2"></th>
											</tr>
											<tr>
												<th></th>
												<th class="text-center"><span class="fs-6 fw-bold text-success m-5">Pass</span></th>
												<th class="text-center"><span class="fs-6 fw-bold text-danger m-5">Reject</span></th>
												<th class="text-center"><span class="fs-6 fw-bold text-primary m-5">Pending</span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" width="30%" class="text-center">
													<div class="me-md-2  badge badge-primary fs-base">
														<span class="fs-2 fw-bold m-5">QC</span>
													</div>
												</td>
												<td class="ps-0"><span class="fs-6 fw-bold m-5">Today</span></td>
												<td class="text-center"><span class="fs-2hx fw-bold text-gray-800 m-5"><?=$countJob['countpass'];?></span></td>
												<td class="text-center"><span class="fs-2hx fw-bold text-gray-800 m-5"><?=$countJob['countreject'];?></span></td>
												<td class="text-center"><span class="fs-2hx fw-bold text-gray-800 m-5"><?=$countJob['countwait'];?></span></td>
											</tr>
											<tr>
												<td class="ps-0"><span class="fs-6 fw-bold m-5">Month</span></td>
												<td class="text-center"><span class="fs-2hx fw-bold text-gray-800 m-5"><?=$countJob['countpassmonth'];?></span></td>
												<td class="text-center"><span class="fs-2hx fw-bold text-gray-800 m-5"><?=$countJob['countrejectmonth'];?></span></td>
												<td class="text-center"><span class="fs-2hx fw-bold text-gray-800 m-5"><?=$countJob['countwaitmonth'];?></span></td>
											</tr>
										</tbody>
									</table>
									<!--end::Table-->
									<!--begin::Table container-->
									<table class="table table-row-dashed align-middle">
										<thead>
											<tr>
												<th rowspan="2"></th>
											</tr>
											<tr>
												<th class="text-center"><span class="fs-6 fw-bold text-danger m-5">No.1</span></th>
												<th class="text-center"><span class="fs-6 fw-bold text-gray-800 m-5">No.2</span></th>
												<th class="text-center"><span class="fs-6 fw-bold text-gray-800 m-5">No.3</span></th>
												<th class="text-center"><span class="fs-6 fw-bold text-gray-800 m-5">No.4</span></th>
												<th class="text-center"><span class="fs-6 fw-bold text-gray-800 m-5">No.5</span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="text-center">
												<div class="me-md-2  badge badge-dark fs-base">
													<span class="fs-2 fw-bold m-5">TOP 5 <br/> REJECT </span>
												</div>
												<?php if (empty($top5RejectQCByUser)): ?>
													<?php for ($i = 0; $i < 5; $i++): ?>
														<td class="text-center">
															<div class="mb-2">
																<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0</span>
															</div>
															<?php
																$badgeClass = 'badge-light-danger';
																for ($j = 0; $j < $i; $j++) {
																	if ($j+1 == 1) {
																		$badgeClass = 'badge-light-warning';
																	} elseif ($j+1 == 2) {
																		$badgeClass = 'badge-light-primary';
																	} elseif ($j+1 == 3) {
																		$badgeClass = 'badge-light-secondary';
																	} elseif ($j+1 >= 4) {
																		$badgeClass = 'badge-light-success';
																	}
																}
															?>
															<span class="badge <?=$badgeClass;?> fs-base fs-6 fw-semibold">User <?=$i+1;?></span>
															
														</td>
													<?php endfor; ?>
												<?php else: ?>
													<?php foreach($top5RejectQCByUser as $index => $rows): ?>
														<td class="text-center">
															<div class="mb-2">
																<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"><?=$rows->reject_count;?></span>
															</div>
															<?php
																$badgeClass = 'badge-light-danger';
																switch ($index) {
																	case 0:
																		$badgeClass = 'badge-light-danger';
																		break;
																	case 1:
																		$badgeClass = 'badge-light-warning';
																		break;
																	case 2:
																		$badgeClass = 'badge-light-primary';
																		break;
																	case 3:
																		$badgeClass = 'badge-light-secondary';
																		break;
																	default:
																		$badgeClass = 'badge-light-success';
																		break;
																}
															?>
															<span class="badge <?=$badgeClass;?> fs-base fs-6 fw-semibold"><?=$rows->callQCuser;?></span>
														</td>
													<?php endforeach; ?>
												<?php endif; ?>												
											</tr>
										</tbody>
									</table>
									<!--end::Table-->
								</div>
								<!--end::Body-->
								</div>
							<!--end::List widget 6-->
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
<!--begin::Modal - Two-factor authentication-->
<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<!--begin::Modal header-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header flex-stack">
				<!--begin::Title-->
				<h2>Choose iframe Method</h2>
				<!--end::Title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
				<form data-kt-element="apps-form" class="form" action="#">
					<div class="mb-3 text-start">
						<label class="fs-6 fw-semibold mb-2">Iframe <span class="text-primary">(Setup width="100%" height="350")</span></label>
						<textarea type="text" rows="5" class="form-control form-control-solid" placeholder="iframe" 
							name="iframe" id="takeiframe"><?=$config['value'];?></textarea>
					</div>
					<!--begin::Actions-->
					<div class="d-flex flex-center">
						<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
						<button type="button" data-kt-element="apps-submit" id="enableiframe" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait... 
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			
			</div>
			<!--begin::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal header-->
</div>
<!--end::Modal - Two-factor authentication-->
<script>
     $("#tab_1").addClass('active');
	 $("#kt_header_navs_tab_1").addClass('active show');
	 $("#menu_overview").addClass('btn-light-primary');

	 $("#enableiframe").on('click',function(){
		var iframe = $('#takeiframe').val();
		$.ajax({
			url: '<?php echo base_url(); ?>enableIframe',
			type: 'POST',
			data: {
				'iframe': iframe,
			},
			success: function(result) {
				var json = result;
				console.log(json);
				$("#loadiframe").html("loading..");
				$("#loadiframe").load('<?=base_url();?>loadiframe');
				$("#kt_modal_two_factor_authentication").modal('hide');
				$("#kt_accordion_1_body_1").collapse('toggle');
				toastr.success(json.status);
			}
		});
	 });
</script>
