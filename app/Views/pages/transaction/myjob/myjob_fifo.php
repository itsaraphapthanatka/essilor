<!--begin::Toolbar-->
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Keyin</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="/home/member" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600"> My Job FIFO</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center">
            <!-- <button class="btn btn-success me-3" id="ipaa">test</button>
            <button class="btn btn-success me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Upload</button>
            <button type="button" onclick="download('/template/template_ecp_data.xlsx','template_ecp_data.xlsx')" class="btn btn-danger me-3">Download </button>
            <button type="button" class="btn btn-primary me-3">New ECP</button> -->
			<?php if($res['recordsFiltered'] === 0){?>
				<button type="button" id="calljob" class="btn btn-primary me-3">Call Job</button>
			<?php }else{ ?>
				<button type="button" disabled id="calljob" class="btn btn-primary me-3">Call Job</button>
			<?php } ?>
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
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <div class="table-responsive">
                    <!--begin::Datatable-->
                    <table id="kt_datatable_horizontal_scroll" class="table align-middle table-row-dashed fs-6 gy-5" >
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-200px">Tracking ID</th>
                                <th class="min-w-200px">ECPCode</th>
                                <th class="min-w-125px">Order</th>
                                <th class="text-center min-w-200px">TAG FROM BETA</th>
                                <th class="text-center min-w-125px">ORDER CYCLE</th>
                                <th class="text-center min-w-200px">TAG</th>
                                <th class="min-w-125px">CATEGORIZE</th>
                                <th class="min-w-200px">TASK CREATE DATE/TIME</th>
                                <th class="min-w-200px">CUSTOMER TYPE</th>
                                <th class="text-center min-w-150px" data-priority="2">ACTION1</th>
								<th class="text-center min-w-150px" data-priority="1">ACTION2</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        </tbody>
                    </table>
                    <!--end::Datatable-->
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
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
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Import Data</h1>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form class="form" action="#" method="post">
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                <!--begin::Message-->
                                <div class="dz-message needsclick">
                                    <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>

                                    <!--begin::Info-->
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                        <span class="fs-7 fw-semibold text-gray-500">Upload up to 1 files</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                        <!--end::Input group-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<script>var HOST_URL = "<?php echo base_url();?>";</script>
<script>
	"use strict";

	// Class definition
	var KTDatatablesServerSide = function () {
		// Shared variables
		var table;
		var dt;
		var filterPayment;
		var channalid = '10';
		var userlist = "jsondata/getJobtaskListFiFo/1";
		// Private functions
		var initDatatable = function () {
			dt = $("#kt_datatable_horizontal_scroll").DataTable({
				searchDelay: 500,
				processing: false,
				serverSide: false,
				order: [[0, 'asc']],
				stateSave: false,  
				responsive: false,
				scrollY: "500px",
    			scrollCollapse: true,
    			paging: false,
    			dom: "<'table-responsive'tr>",
				ajax: {
					url: HOST_URL + userlist,
					// url: "https://preview.keenthemes.com/api/datatables.php",
				},
				columns: [
					{ data: 'id' },
					{ data: 'ecpcode' },
					{ data: 'totalOrder' },
					{ data: 'tagsBeta' },
					{ data: 'cyclename' },
					{ data: 'tagsJob' },
					{ data: 'categoriesName' },
					{ data: 'createdate' },
                    { data: 'customer_type' },
					{ data: null },
					{ data: null },
				],
				columnDefs: [
					{
						target: 0,
						visible: false,
					},
					{
						targets: 1,
						render: function(data, type, row) {
							return `<div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <div class="text-gray-800 fw-bold mb-1 fs-5">${row.ecpcode}</div>
                                            <span class="text-gray-400 fw-semibold d-block fs-6">${row.customer_name}</span>
                                        </div>
                                    </div>`;
						}
					},
					{
						target: 3,
						visible: false,
					},
					{
						targets: 4,
						visible: false,
						className: 'text-center',
						render: function(data, type, row) {
							if(row.ocid === '1'){
								return `<span class="badge badge-light-primary fs-6">${row.cyclename}</span>`;
							}
							if(row.ocid === '2'){
								return `<span class="badge badge-light-warning fs-6">${row.cyclename}</span>`;
							}
							if(row.ocid === '3'){
								return `<span class="badge badge-light-danger fs-6">${row.cyclename}</span>`;
							}
						}
					},
					{
						target: 5,
						visible: false,
					},
					{
						targets: -3,
						visible: false,
					},
					{
						targets: -2,
						data: null,
						orderable: false,
						className: 'text-center',
						render: function (data, type, row) {
							return `
								<a data-bs-toggle="modal" data-bs-target="#takejob${data.id}" class="btn btn-light-primary btn-sm">
									Take Job
								</a>

								<div class="modal fade" tabindex="-1" id="takejob${data.id}">
									<div class="modal-dialog modal-fullscreen">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Keyin Detail</h5>

												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
												</div>
												<!--end::Close-->
											</div>

											<div class="modal-body">
												<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
													<div class="col-xl-3 text-start">
														<div class="card card-flush card-dashed border-primary">
															<div class="card-header">
																<h1 class="card-title">Info</h1>
															</div>
															<div class="card-body">
																<div class="row gx-10 mb-5">
																	<div class="col-lg-6">
																		<label class="form-label fs-4 fw-bold text-primary mb-3">ECP Code</label>
																		<div class="mb-5">
																			<span>${row.ecpcode}</span>
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">ECP Name</label>
																		<div class="mb-5">
																			<span>${row.customer_name}</span>
																		</div>
																	</div>
																</div>
																<div class="row gx-10 mb-5">
																	<div class="col-lg-6">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">Order cycle</label>
																		<div class="mb-5">
																		${(() => {
																			let badges = '';
																			if(row.ocid === '1'){
																				return `<span class="badge badge-light-primary fs-6">${row.cyclename}</span>`;
																			}
																			if(row.ocid === '2'){
																				return `<span class="badge badge-light-warning fs-6">${row.cyclename}</span>`;
																			}
																			if(row.ocid === '3'){
																				return `<span class="badge badge-light-danger fs-6">${row.cyclename}</span>`;
																			}
																			return badges.trim();
																		})()}
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">Categorize</label>
																		<div class="mb-5">
																			<span>${row.categoriesName}</span>
																		</div>
																	</div>
																</div>
																<div class="row gx-10 mb-5">
																	<div class="col-lg-12">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">Ship to</label>
																		<div class="mb-5">
																			${row.shipto}
																		</div>
																	</div>
																</div>
																<div class="row gx-10 mb-5">
																	<div class="col-lg-12">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">Tag From Beta</label>
																		<div class="mb-5">
																			${row.tagsBeta}
																		</div>
																	</div>
																</div>
																<div class="row gx-10 mb-5">
																	<div class="col-lg-12">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">Tag (s)</label>
																		<div class="mb-5">
																			${row.tagsJob}
																		</div>
																	</div>
																</div>
																<div class="row gx-10 mb-5">
																	<div class="col-lg-12">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">Tag Categorize</label>
																		<div class="mb-5">
																			${row.categoriesName}
																		</div>
																	</div>
																</div>
																<div class="row gx-10 mb-5">
																	<div class="col-lg-12">
																		<label class="form-label fs-4 fw-bold text-gray-700 mb-3">Alert 1</label>
																		<div class="mb-5">
																			${row.customer_alert_1 === null ? "-" : row.customer_alert_1}
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-9 text-start">
														<div class="row gx-10 mb-5">
															<div class="card card-flush card-dashed border-primary">
																<div class="card-header">
																	<h1 class="card-title">Order Capture</h1>
																</div>
																<div class="card-body card-scroll h-750px">
																	${row.capture}
																</div>
															</div>
														</div>
														<div class="row gx-10 mb-5">
															${(() => {
																if (row.image) {
																	let images = row.image.split(','); // Split the concatenated images string into an array
																	return images.map(image => {
																		return `
																		<div class="col-md-6 col-lg-4 col-xl-3">
																			<div class="card card-flush shadow-sm h-100">
																				<div class="card-body d-flex justify-content-center text-center flex-column p-1">
																					<div>
																						<a class="d-block overlay" target="_blank" data-fslightbox="lightbox-basic" href="<?=base_url();?>uploads/taskImage/${image.trim()}">
																							<!--begin::Image-->
																							<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-300px"
																								style="background-image:url('<?=base_url();?>uploads/taskImage/${image.trim()}')">
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
																		</div>`;
																	}).join(''); // Join the array back into a single string of HTML
																} else {
																	return ''; // Return an empty string if row.image is null or undefined
																}
															})()}
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-danger" data-bs-stacked-modal="#add_comment${row.id}">Add Comment</button>
														<button type="button" class="btn btn-primary" data-bs-stacked-modal="#complete${row.id}">Complete</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="modal fade stacked-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" id="add_comment${row.id}">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content bg-light-primary border border-primary">
											<div class="modal-header">
												<h3 class="modal-title">Select Issue</h3>

												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
												</div>
												<!--end::Close-->
											</div>

											<div class="modal-body">
												<h3 class="mb-3">${row.totalOrder} Order</h3>
												<span>
													Please Select Your Customer Issue and Click Send to Support Teams.
												</span>
												<div class="mb-3">
													<input type="hidden" class="form-control" id="taskID${row.id}" name="${row.id}" value="${row.id}">
												</div>
												<div class="mb-3">
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" 
															data-placeholder="Select a Comment" name="addcomment" id="selectedComment${row.id}" 
															title="Select a comment type" onchange="handleCommentChange('${row.id}')">
														
													</select>
												</div>
												<div class="mb-3 text-start" id="tracking${row.id}" hidden>
													<label class="fs-6 fw-semibold mb-2">TrackingID</label>
													<input type="text" class="form-control form-control-solid" placeholder="TrackingID" 
														name="trackingID" id="trackingID${row.id}"/>
												</div>
												<div class="mb-3">
													<textarea class="form-control form-control-solid" id="commentKeyinDesc${row.id}" name="commentKeyinDesc" rows="4" placeholder="Enter your comment here"></textarea>
												</div>
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary me-10" id="saveComment${row.id}" onclick="showSelectedComment('${row.id}','${row.totalOrder}')">
													<span class="indicator-label">
														Complete
													</span>
													<span class="indicator-progress">
														Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
													</span>
												</button>
											</div>

										</div>
									</div>
								</div>

								<div class="modal fade stacked-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" id="complete${row.id}">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content bg-light-primary border border-primary">
											<div class="modal-header">
												<h3 class="modal-title">Select Issue</h3>

												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
												</div>
												<!--end::Close-->
											</div>

											<div class="modal-body">
												<h3 class="mb-3">${row.totalOrder} Order</h3>
												<span>
													Please Select Your Customer Issue and Click Send to Support Teams.
												</span>
												<div class="mb-3">
													<input type="hidden" class="form-control" id="taskID${row.id}" name="${row.id}" value="${row.id}">
												</div>
												<div class="mb-3">
													<select hidden class="form-select form-select-solid" data-control="select2" data-hide-search="true" 
															data-placeholder="Select a Comment" name="addcomment" id="selectedCommentcomplete${row.id}" 
															title="Select a comment type" onchange="handleCommentChange('${row.id}')">
														
													</select>
												</div>
												<div class="mb-3 text-start" id="tracking${row.id}">
													<label class="fs-6 fw-semibold mb-2">TrackingID</label>
													<input type="text" class="form-control form-control-solid" placeholder="TrackingID" 
														name="trackingID" id="trackingIDcomplete${row.id}"/>
												</div>
												
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary me-10" id="saveCommentno${row.id}" onclick="showSelectedCommentNoTracking('${row.id}','${row.totalOrder}')">
													<span class="indicator-label">
														Complete
													</span>
													<span class="indicator-progress">
														Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
													</span>
												</button>
											</div>

										</div>
									</div>
								</div>

								<script>
								var elements = Array.prototype.slice.call(document.querySelectorAll("[data-bs-stacked-modal]"));

									if (elements && elements.length > 0) {
										elements.forEach((element) => {
											if (element.getAttribute("data-kt-initialized") === "1") {
												return;
											}

											element.setAttribute("data-kt-initialized", "1");

											element.addEventListener("click", function(e) {
												e.preventDefault();

												const modalEl = document.querySelector(this.getAttribute("data-bs-stacked-modal"));

												if (modalEl) {
													const modalBackdrop = document.createElement('div');
													modalBackdrop.className = 'modal-backdrop fade show stacked-backdrop'; // เพิ่ม backdrop แบบ stacked
													document.body.appendChild(modalBackdrop);

													const modal = new bootstrap.Modal(modalEl);
													modal.show();

													modalEl.addEventListener('hidden.bs.modal', function() {
														document.body.removeChild(modalBackdrop); // ลบ backdrop เมื่อ modal ถูกปิด
													});
												}
											});
										});
									}
									function handleCommentChange(rowid) {
									console.log(rowid);
									console.log(rowid);
										const selectedComment = document.getElementById('selectedComment'+rowid).value;
										const trackingDiv = document.getElementById('tracking'+rowid);

										// Example: Show the TrackingID input only if the selected comment is "1"
										if (selectedComment != "8") {
											trackingDiv.removeAttribute("hidden");
										} else {
											trackingDiv.setAttribute("hidden", true);
										}
									}

									function showSelectedComment(rowid,orderTotal) {
										var button = document.querySelector("#saveComment${row.id}");
										button.setAttribute("data-kt-indicator", "on");
										const selectedComment = $('#selectedComment' + rowid).val();
										const commentDesc = $('#commentKeyinDesc' + rowid).val();
										console.log(commentDesc);
										console.log("RowID :" + rowid);
										const trackingID = $('#trackingID' + rowid).val();
										const taskID = $('#taskID' + rowid).val();
										
										// Regular expression to match RX or BL followed by 10 digits
										const trackingPattern = /^(RX|BL)/;
										const trimmedID = $.trim(trackingID); // jQuery trim method
										const trackingIDs = trimmedID.split(','); // แยก trackingID เป็น array
										const isValidTrackingID = trackingIDs.every(id => trackingPattern.test(id) && id.length == 12); // เช็คว่าแต่ละ ID ถูกต้องและไม่เกิน 12 ตัว

										if (isValidTrackingID) {
											// Check if the trackingID is in the orderTotal and the orderTotal has 4 items
											if(orderTotal >= 1){
												// เช็คจำนวน orderTotal กับ trackingID
												if(trimmedID.split(',').length == orderTotal){ // เปลี่ยน aa เป็น orderTotal
													$.ajax({
														type: 'POST',
														url: '<?= base_url("SaveCommentByTrackingID") ?>', // Ensure the URL is correct
														data: { 
															trackingID: trimmedID, 
															comment: selectedComment, 
															commentDesc: commentDesc,
															taskID: taskID 
														},
														success: function(response) {
															console.log(response);
															window.location.href = "<?= base_url('myjobfifo') ?>"; // Ensure the URL is correct
														},
														error: function(xhr, status, error) {
															console.error('AJAX error:', status, error);
															toastr.error("AJAX error:', status, error");
														}
													});
												}else{
													button.removeAttribute("data-kt-indicator");
													toastr.warning("กรุณาตรวจสอบ trackingID.");
												}
											}else{
												button.removeAttribute("data-kt-indicator");
												toastr.warning("กรุณาตรวจสอบจำนวน trackingID ");
											}
										} else {
										 	button.removeAttribute("data-kt-indicator");
											toastr.warning("กรุณาตรวจสอบ trackingID , ต้องเป็นรูปแบบ 'RX' หรือ 'BL' และไม่เกิน 12 ตัวอักษร.");
										}
									}
									
									function showSelectedCommentNoTracking(rowid,orderTotal) {
										console.log("notack");
										var button = document.querySelector("#saveCommentno${row.id}");
										button.setAttribute("data-kt-indicator", "on");
										const selectedComment = $('#selectedComment' + rowid).val();
										const commentDesc = $('#commentKeyinDesc' + rowid).val();
										console.log("commentDesc No Tracking:" + commentDesc);
										console.log("RowID :" + rowid);
										const trackingID = $('#trackingIDcomplete' + rowid).val();
										const taskID = $('#taskID' + rowid).val();
										
										// Regular expression to match RX or BL followed by 10 digits
										const trackingPattern = /^(RX|BL)/;
										const trimmedID = $.trim(trackingID); // jQuery trim method
										const trackingIDs = trimmedID.split(','); // แยก trackingID เป็น array
										console.log(trackingIDs);
										console.log(trimmedID.split(',').length);
										const isValidTrackingID = trackingIDs.every(id => trackingPattern.test(id) && id.length == 12); // เช็คว่าแต่ละ ID ถูกต้องและไม่เกิน 12 ตัว

										if (isValidTrackingID) {
											// Check if the trackingID is in the orderTotal and the orderTotal has 4 items
											if(orderTotal >= 1){
												// เช็คจำนวน orderTotal กับ trackingID
												if(trimmedID.split(',').length == orderTotal){ // เปลี่ยน aa เป็น orderTotal
													$.ajax({
														type: 'POST',
														url: '<?= base_url("SaveCommentByTrackingID") ?>', // Ensure the URL is correct
														data: { 
															trackingID: trimmedID, 
															comment: selectedComment, 
															commentDesc: commentDesc,
															taskID: taskID,
														},
														success: function(response) {
															console.log(response);
															window.location.href = "<?= base_url('myjobfifo') ?>"; // Ensure the URL is correct
														},
														error: function(xhr, status, error) {
															console.error('AJAX error:', status, error);
															toastr.error("AJAX error:', status, error");
														}
													});
												}else{
													button.removeAttribute("data-kt-indicator");
													toastr.warning("กรุณาตรวจสอบ trackingID.");
												}
											}else{
												button.removeAttribute("data-kt-indicator");
												toastr.warning("กรุณาตรวจสอบจำนวน trackingID ");
											}
										} else {
										 	button.removeAttribute("data-kt-indicator");
											toastr.warning("กรุณาตรวจสอบ trackingID , ต้องเป็นรูปแบบ 'RX' หรือ 'BL' และไม่เกิน 12 ตัวอักษร.");
										}
									}

								<\/script>
							`;
						},
					},
					{
						targets: -1,
						data: null,
						orderable: false,
						className: 'text-center',
						render: function (data, type, row) {
                            return `
								<a href="<?php echo base_url();?>returnjob/${data.id}/myjobfifo" class="btn btn-light-danger btn-sm">
									Return Job
								</a>
							`;
						},
					},
				],
				// Add data-filter attribute
				createdRow: function (row, data, dataIndex) {
					$(row).find('td:eq(8)').attr('data-filter', data.customer_type);
				}
			});

			table = dt.$;

			// Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
			dt.on('draw', function () {
				handleDeleteRows();
				KTMenu.createInstances();
			});
		}

		// Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
		var handleSearchDatatable = function () {
			const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
			filterSearch.addEventListener('keyup', function (e) {
				dt.search(e.target.value).draw();
			});
		}

		// Call Job
		var hadleCallJob = () => {
			const calljobButton = document.getElementById('calljob');
			calljobButton.addEventListener('click', function (e) {
				// Destroy the existing DataTable instance
				if ($.fn.DataTable.isDataTable("#kt_datatable_horizontal_scroll")) {
					$("#kt_datatable_horizontal_scroll").DataTable().clear().destroy();
				}
				// Reinitialize the DataTable
				$.ajax({
					url: '<?php echo base_url(); ?>jsondata/getJobtaskUpdateCalljob/1',
					type: 'GET',
					success: function(result) {
						var json = result;
						console.log(json);
						if(json.recordsTotal == 0){
							$("#calljob").prop('disabled',false);
						}else{
							$("#calljob").prop('disabled',true);
						}
						// toastr.success(json.recordsTotal);
					}
				});
				// console.log(`initDatatable function has ${functionLines} lines.`);
				initDatatable();
			});
		}

		// Delete customer
		var handleDeleteRows = () => {
			// Select all delete buttons
			const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

			deleteButtons.forEach(d => {
				// Delete button on click
				d.addEventListener('click', function (e) {
					e.preventDefault();

					// Select parent row
					const parent = e.target.closest('tr');

					// Get customer name
					const id = parent.querySelectorAll('td')[0].innerText;

					// SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
					Swal.fire({
						text: "Are you sure you want to delete " + id + "?",
						icon: "warning",
						showCancelButton: true,
						buttonsStyling: false,
						confirmButtonText: "Yes, delete!",
						cancelButtonText: "No, cancel",
						customClass: {
							confirmButton: "btn fw-bold btn-danger",
							cancelButton: "btn fw-bold btn-active-light-primary"
						}
					}).then(function (result) {
						if (result.value) {
							// Simulate delete request -- for demo purpose only
							console.log(id);
							$.ajax({
								url: '<?php echo base_url(); ?>deletedepartmentUnit',
								type: 'POST',
								data: {
									'code': id,
								},
								success: function(result) {
									var json = result;
									console.log(json);
									toastr.success(json.message);
								}
							});
							
							Swal.fire({
								text: "Deleting " + id,
								icon: "info",
								buttonsStyling: false,
								showConfirmButton: false,
								timer: 2000
							}).then(function () {
								Swal.fire({
									text: "You have deleted " + id + "!.",
									icon: "success",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn fw-bold btn-primary",
									}
								}).then(function () {
									// delete row data from server and re-draw datatable
									dt.draw();
									window.location="/projectlist";
								});
							});
						} else if (result.dismiss === 'cancel') {
							Swal.fire({
								text: id + " was not deleted.",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn fw-bold btn-primary",
								}
							});
						}
					});
				})
			});
		}

		// Reset Filter
		var handleResetForm = () => {
			// Select reset button
			const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]');

		
		}



		// Public methods
		return {
			init: function () {
				initDatatable();
				hadleCallJob();
				handleSearchDatatable();
				handleDeleteRows();
				handleResetForm();
			}
		}
	}();

	// On document ready
	KTUtil.onDOMContentLoaded(function () {
		KTDatatablesServerSide.init();
	});
    function download(url, filename) {
        fetch(url)
            .then(response => response.blob())
            .then(blob => {
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = filename;
            link.click();
        })
        .catch(console.error);
    }
</script>
<script>
    $("#tab_MyjobHead").addClass('active');
	$("#tab_Myjob1").addClass('active show');
	$("#myjobfifo").addClass('btn-light-primary');
</script>