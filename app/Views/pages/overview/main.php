<style>
	.card-custom {
		border-radius: 10px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		text-align: center;
		padding: 20px;
	}
	.status-box {
		display: ruby;
		justify-content: space-around;
		margin-top: 20px;
	}
	.status-item {
		width: 100px;
		height: 100px;
		display: flex;
		align-items: center;
		justify-content: center;
		border-radius: 10px;
		font-size: 24px;
		font-weight: bold;
	}
	.status-item-width {
		width: 100px;
		display: flex;
		align-items: center;
		justify-content: center;
		border-radius: 10px;
		font-size: 24px;
		font-weight: bold;
	}
	.status-item.pending {
		background-color: #000;
		color: #fff;
	}
	.status-item.ok {
		background-color: #19c;
		color: #fff;
	}
	.status-item.max {
		background-color: #F64E60;
		color: #fff;
	}
	.status-item.gray {
		background-color: #EFF2F5;
		color: #000000;
	}
	.white {
		background-color: #808080;
		color: #000000;
	}
	.status-item.yellow-text {
		background-color: #EFF2F5;
		color: #F1BC00;
	}
	.status-item.yellow-text {
		background-color: #EFF2F5;
		color: #F1BC00;
	}
	.status-item.green {
		background-color: #50CD89;
		color: #fff;
	}
</style>


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
														<div class="bg-light-primary text-primary fw-bold p-2">RX</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 pe-0">V.I.P.</span>
													</td>
													<td class="text-center text-danger fw-bold">10</td>
													<td class="text-center text-success fw-bold">20</td>
													<td class="text-center text-primary fw-bold">10</td>                                        
												</tr>                                     
												<tr>
													<td class="text-center">
														<div class="bg-light-primary text-primary fw-bold p-2">RX</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 pe-0">Partner</span>
													</td>
													<td class="text-center text-danger fw-bold">12</td>
													<td class="text-center text-success fw-bold">17</td>
													<td class="text-center text-primary fw-bold">10</td>                                        
												</tr>                                     
												<tr>
													<td class="text-center">
														<div class="bg-light-danger text-danger fw-bold p-2">STOCK</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 pe-0">V.I.P.</span>
													</td>
													<td class="text-center text-danger fw-bold">08</td>
													<td class="text-center text-success fw-bold">07</td>
													<td class="text-center text-primary fw-bold">10</td>                                        
												</tr>                                     
												<tr>
													<td class="text-center">
														<div class="bg-light-danger text-danger fw-bold p-2">STOCK</div>
													</td>
													<td class="ps-0 text-center">
														<span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 pe-0">Partner</span>
													</td>
													<td class="text-center text-danger fw-bold">15</td>
													<td class="text-center text-success fw-bold">13</td>
													<td class="text-center text-primary fw-bold">15</td>                                        
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
										<span class="card-label fw-bold text-gray-800">Top Selling Products</span>
										<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
									</h3>
									<!--end::Title-->

									<!--begin::Toolbar-->
									<div class="card-toolbar">   
										<a href="<?=base_url()?>theme/dist/apps/ecommerce/catalog/categories.html" class="btn btn-sm btn-light">View All</a>        
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body pt-4">                 
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										
										
										
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
							<div class="card card-custom">
								<h2 class="text-start">Support Duty</h2> 
								
								<div class="status-box">
									<span class="text-bold ps-20"></span>
									<span class="text-bold fs-3 ps-20">OK</span>
									<span class="text-bold fs-3 ps-20">PENDING</span>
								</div>
								<div class="status-box">
									<div class="status-item ok fs-3">งานเดือนนี้</div>
									<div class="status-item ok">19</div>
									<div class="status-item green">202</div>
								</div>
								<div class="status-box justify-content-center">
									<div class="status-item-width white fs-6 ms-12 me-12"></div>
									<div class="status-item-width white fs-6">ค้าง 1 วัน</div>
									<div class="status-item-width white fs-6">ค้าง 2 วัน</div>
									<div class="status-item-width white fs-6">ค้าง 3 วัน</div>
									<div class="status-item-width white fs-6">มากกว่า 3 วัน</div>
									<span class="status-item-width white fs-6"></span>
									<div class="status-item-width white fs-6">เดือนนี้</div>
								</div>
								<div class="status-box justify-content-center">
									<div class="status-item pending fs-6 ms-2">PENDING</div>
									<div class="status-item gray ms-2">02</div>
									<div class="status-item gray ms-2">04</div>
									<div class="status-item yellow-text ms-2">03</div>
									<div class="status-item gray ms-2">05</div>
									<span class="badge  badge-danger max ms-2">MAX</span>
									<div class="status-item green ms-2">05</div>
								</div>
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

									<!--begin::Toolbar-->
									<div class="card-toolbar">   
										<a href="<?=base_url()?>theme/dist/apps/ecommerce/catalog/categories.html" class="btn btn-sm btn-light">View All</a>        
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->

								<!--begin::Body-->
								<div class="card-body pt-4">                 
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										

									</div>
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
<script>
     $("#tab_1").addClass('active');
	 $("#kt_header_navs_tab_1").addClass('active show');
	 $("#menu_overview").addClass('btn-light-primary');
</script>