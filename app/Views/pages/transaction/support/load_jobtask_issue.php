<div class="table-responsive">
    <!--begin::Table-->
    <table  id="kt_datatable_horizontal_scroll<?=$status;?>" class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
        <thead>
            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">

                <th class="min-w-100px">transaction</th>
                <th class="min-w-175px">Last Action</th>
                <th class="min-w-70px">Customer ID</th>
                <th class="min-w-100px">Tracking ID</th>
                <th class="min-w-100px">Order Status</th>
                <th class="min-w-100px">Ticket ID</th>
                <th class="min-w-100px">Action</th>
            </tr>
        </thead>
        <tbody class="fw-semibold text-gray-600">
            
        </tbody>
    </table>
    <!--end::Table-->
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
		var list = "jsondata/getJobtaskSupport/<?=$issueid;?>/<?=$status;?>/<?=$month;?>/<?=$year;?>";
		// Private functions
		var initDatatable = function () {
			dt = $("#kt_datatable_horizontal_scroll<?=$status;?>").DataTable({
				searchDelay: 500,
				processing: true,

				serverSide: true,
				order: [[0, 'asc']],
				stateSave: false,  
				responsive: false,
				scrollY: "500px",
    			scrollCollapse: true,
    			paging: false,
    			dom: "<'table-responsive'tr>",
				ajax: {
					url: HOST_URL + list,
					// url: "https://preview.keenthemes.com/api/datatables.php",
				},
				columns: [
					{ data: 'id' },
					{ data: 'commentName' },
					{ data: 'ecpcode' },
					{ data: 'trackingId' },
					{ data: 'jobStatus' },
					{ data: 'ticketCode' },
					{ data: null },
				],
				columnDefs: [
					{
						target: 0,
						render: function(data, type, row) {
							let bulletColor = 'bg-success';
							if (row.ticketCodeCount >= 3) {
								bulletColor = 'bg-danger';
							} else if (row.ticketCodeCount >= 2) {
								bulletColor = 'bg-warning';
							}
							
							return `<div class="position-relative ps-6 pe-3 py-2">
										<span class="bullet bullet-dot ${bulletColor} me-2 h-10px w-10px"></span>
										<span class="fw-bold text-gray-600 fs-6">${row.ticketCodeCount == 0 ? 1 : row.ticketCodeCount}</span>
									</div>`;
						}
					},
					{
						targets: 1,
						render: function(data, type, row) {
							let textColor = 'gray-800';
							if (row.ticketCodeCount >= 3) {
								textColor = 'danger';
							}
							return `<div class="d-flex align-items-center">
										<div class="d-flex justify-content-start flex-column">
											<div class="text-${textColor} mb-1">${row.commentName}</div>
										</div>
									</div>`;
						}
					},
					{
						targets: 2,
						render: function(data, type, row) {
							let textColor = 'gray-800';
							if (row.ticketCodeCount >= 3) {
								textColor = 'danger';
							}
							return `<div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <div class="text-${textColor} mb-1">${row.ecpcode}_${row.customer_name}</div>
                                        </div>
                                    </div>`;
						}
					},
					{
						target: 3,
						render: function(data, type, row) {
								let textColor = 'gray-800';
								if (row.ticketCodeCount >= 3) {
									textColor = 'danger';
								}
							return `<div class="d-flex align-items-center">
										<div class="d-flex justify-content-start flex-column">
											<div class="text-${textColor} mb-1">${row.trackingId}</div>
										</div>			
									</div>`;
						}
					},
                    {   target: 4,
                        render: function(data,type,row){
							
							let status = row.jobStatus == 12 ? row.statusname : row.statusname;
							let color = row.jobStatus == 12 ? 'badge-light-success' : 'badge-light-warning';
                            return `
									<span class="badge ${color} fs-6" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="">${status}</span>
								`;
                        }
                    },
					{
						target: 5,
						render: function(data, type, row) {
							let textColor = 'gray-800';
							if (row.ticketCodeCount >= 3) {
								textColor = 'danger';
							}
							return `<div class="d-flex align-items-center">
										<div class="d-flex justify-content-start flex-column">
											<div class="text-${textColor} mb-1">${row.ticketCode}</div>
										</div>
									</div>`;
						}
					},
					{
						targets: -1,
						render: function(data, type, row) {
							return `
								<a data-bs-toggle="modal" id="ticketCode${data.ticketCode}" onclick="loadTransaction('${data.ticketCode}')" data-bs-target="#takejob${data.id}" class="btn btn-light-primary btn-sm">
									Update
								</a>
								<div  class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"  id="takejob${data.id}">
									<div class="modal-dialog modal-xl">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Pending Ticket Transaction Record</h5>

												<!--begin::Close-->
												<div  onclick="closeModal('${data.ticketCode}','${data.commentID}')" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
												</div>
												<!--end::Close-->
											</div>

											<div class="modal-body">
												<h2 class="card-title align-items-start flex-column">Customer ID Transaction Record</h2>
												<span class="text-primary mt-1 fw-semibold fs-2">${data.ecpcode}_${data.customer_name}</span>
												<div class="row">
													<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
														<a class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
															<span class="svg-icon svg-icon-muted svg-icon-2hx">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																	<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"/>
																	<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
																</svg>
															</span>
															Ticket ID : ${data.ticketCode}
														</a>
													</div>
												</div>
												<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2 mb-10">
													<!--begin::Page title-->
													<div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
														<!--begin::Breadcrumb-->
														<span class="text-primary mt-1 fw-semibold fs-2">รายการติดตามผล <div class="badge fs-2 badge-primary">${data.ticketCodeCount}</div></span>
														
														<!--end::Breadcrumb-->

													</div>
													<!--end::Page title-->
													<!--begin::Actions-->
													<div class="d-flex align-items-center">
															<button type="button" onclick="handleLoadActionType('${data.ticketCode}','${data.commentID}')" id="updatetransaction${data.ticketCode}" data-bs-stacked-modal="#transaction${data.ticketCode}" class="btn btn-primary me-3">New Update</button>
														</div>
													<!--end::Actions-->
												</div>
												<!--begin::Table-->
												<div id="loadtransaction${data.ticketCode}">
													<div class="table-responsive">
														<!--begin::Datatable-->
														<table id="kt_datatable_horizontal_scroll<?=$status;?>" class="table align-middle table-row-dashed fs-6 gy-5" >
															<thead>
																<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

																	<th class="min-w-200px">Transaction ID</th>
																	<th class="min-w-200px">Ticket ID</th>
																	<th class="min-w-125px">Contact Type</th>
																	<th class="min-w-12px">Action Type</th>
																	<th class="min-w-125px">Result</th>
																	<th class="min-w-200px">Comment</th>
																	<th class="min-w-125px">Follow Up</th>
																	<th class="min-w-125px">Issue Type</th>
																</tr>
															</thead>
															<tbody class="text-gray-600 fw-semibold">
															</tbody>
														</table>
														<!--end::Datatable-->
													</div>
												</div>
													
												<!--end::Table-->
											</div>
											<div class="modal-footer">
												<button type="button" id="closeModal${data.ticketCode}" onclick="closeModal('${data.ticketCode}','${data.commentID}')" class="btn btn-light" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade stacked-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" id="transaction${data.ticketCode}">
									<div class="modal-dialog modal-lg modal-dialog-scrollable">
										
										<div class="modal-content border border-primary">
											<div class="modal-header">
												<h3 class="modal-title">Pending Ticket</h3>

												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
													<i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
												</div>
												<!--end::Close-->
											</div>

											<div class="modal-body">
											<form id="add_form" action="<?php echo base_url();?>CreateTransactionSupport" method="post" enctype="multipart/form-data">
												<h1>${data.commentName} Ticket Transaction Detail</h1>
												<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
													<a class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
														<span class="svg-icon svg-icon-muted svg-icon-2hx">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"/>
																<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
															</svg>
														</span>
														Ticket ID : ${data.ticketCode}
													</a>
												</div>
												<div class="row mb-6">
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Ticket ID</label>
													<div class="col-lg-8">
														<div class="row">
															<div class="col-lg-12 fv-row">
																<input type="text" name="ticketid" readonly class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ticket ID" value="${row.ticketCode}" />
																<input type="hidden" name="comment" value="${data.commentID}">
															</div>
														</div>
													</div>
												</div>
												<div class="row mb-6">
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Tracking no.</label>
													<div class="col-lg-8">
														<div class="row">
															<div class="col-lg-12 fv-row">
																<input type="text" name="trackingid" readonly class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Tracking no." value="${data.trackingId}" />
															</div>
														</div>
													</div>
												</div>
												<div class="row mb-6">
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact Type</label>
													<div class="col-lg-8">
														<div id="loadContactType${data.ticketCode}"></div>
														
													</div>
												</div>
												<div class="row mb-6">
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact Name</label>
													<div class="col-lg-8">
														<div class="row">
															<div class="col-lg-12 fv-row">
																<input type="text" id="contactName${data.ticketCode}" name="contactName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Contact Name" value="" />
															</div>
														</div>
													</div>
												</div>
												<div class="row mb-6">
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Action Type</label>
													<div class="col-lg-8">
														<div id="loadActionType${data.ticketCode}"></div>
													</div>
												</div>
											</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary me-10" id="saveTransactionDD${data.ticketCode}" onclick="SaveTransaction('${data.ticketCode}')">
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
									function loadTransaction(ticketCode) {
										console.log('loadTransaction'+ticketCode);
										const transactionContainer = document.getElementById('loadtransaction'+ticketCode);
										if (transactionContainer) {
											fetch('<?= base_url(); ?>loadTransaction/'+ticketCode)
												.then(response => response.text())
												.then(data => {
													transactionContainer.innerHTML = data;
												})
												.catch(error => {
													console.error('เกิดข้อผิดพลาดในการโหลดข้อมูล:', error);
													transactionContainer.innerHTML = 'เกิดข้อผิดพลาดในการโหลดข้อมูล';
												});
										}
									}

									
									
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
									
									function handleLoadActionType(ticketCode,commentID){
										console.log(commentID);
										$('#loadContactType'+ ticketCode).load('<?= base_url(); ?>loadContactType/'+ticketCode+'/'+commentID);
										$('#loadActionType'+ ticketCode).load('<?= base_url(); ?>loadActionType/'+ticketCode+'/'+commentID);
									}

									function SaveTransaction(rowID){
									console.log('rowID:', rowID);  // Check the value of rowID
										const form = document.getElementById('add_form');
										const submitButton = document.getElementById('saveTransactionDD'+rowID);
										submitButton.setAttribute("data-kt-indicator", "on");

										const contactName = document.getElementById('contactName' + rowID).value;
										const actionType = document.getElementById('actionType' + rowID).value;
										const actionTypeFlag = document.getElementById('actionTypeFlag' + rowID).value;
										const contactType = document.getElementById('contactType' + rowID).value;
										console.log("AA : "+contactName);
										console.log("BB : "+actionType);
										console.log("Action Type Flag : "+actionTypeFlag);
										console.log("CC : "+contactType);

										if(!contactType){
											toastr.warning("Please input Contact Type.");
											submitButton.removeAttribute('data-kt-indicator');
										}else if(contactName == ""){
											toastr.warning("Please input Contact Name.");
											submitButton.removeAttribute('data-kt-indicator');
										}else if(!actionType){
											toastr.warning("Please input Action Type.");
											submitButton.removeAttribute('data-kt-indicator');
										}else{
											// สร้าง FormData object จากฟอร์ม
											const formData = new FormData(form);
											
											// เพิ่มข้อมูลเพิ่มเติมที่ต้องการส่ง
											formData.append('ticketid', rowID);
											formData.append('contactName', contactName);
											formData.append('contactType', contactType);
											formData.append('actionType', actionType);
											formData.append('actionTypeFlag', actionTypeFlag);
											
											// ส่งข้อมูลด้วย AJAX
											$.ajax({
												type: 'POST',
												url: '<?= base_url('CreateTransactionSupport'); ?>',
												data: formData,
												processData: false,
												contentType: false,
												success: function(response) {
													console.log(response);
													submitButton.removeAttribute('data-kt-indicator');
													
													if(response.status === 'สำเร็จ') {
														Swal.fire({
															text: response.message,
															icon: 'success',
															buttonsStyling: false,
															confirmButtonText: "ตกลง",
															customClass: {
																confirmButton: "btn btn-success"
															}
														}).then(function (result) {
															if (result.isConfirmed) {
																
																loadTransaction(response.ticketCode);
																//$('#loadtable').load('<?= base_url(); ?>loadtable/'+response.issueID+'/pending/'+response.month+'/'+response.year);
																
																
																$('#takejob' + rowID).modal('hide');
																$('#transaction' + rowID).modal('hide');
																$('.modal-backdrop').remove();
																$('body').removeClass('modal-open');
																
															}
														});


													} else {
														Swal.fire({
															text: response.message,
															icon: 'error',
															buttonsStyling: false,
															confirmButtonText: "ตกลง",
															customClass: {
																confirmButton: "btn btn-danger"
															}
														});
													}
												},
												error: function(xhr, status, error) {
													console.error(error);
													submitButton.removeAttribute('data-kt-indicator');
													Swal.fire({
														text: "เกิดข้อผิดพลาดในการส่งข้อมูล กรุณาลองใหม่อีกครั้ง",
														icon: 'error',
														buttonsStyling: false,
														confirmButtonText: "ตกลง",
														customClass: {
															confirmButton: "btn btn-danger"
														}
													});
												}
											});
										}
									}
									function closeModal(ticketCode,commentID) {
										var status = '<?=$status;?>';
										console.log('Comment ID : '+commentID);
										console.log('closeModal'+ticketCode);
										const currentMonth = ('0' + (new Date().getMonth() + 1)).slice(-2);
										const currentYear = new Date().getFullYear();
										const modal = document.getElementById('takejob' + ticketCode);
										console.log("commentID : "+commentID);
										console.log("currentMonth : "+currentMonth);
										console.log("currentYear : "+currentYear);
										if(status == 'pending'){
											$('#actionTypeContainer').load('<?= base_url(); ?>loadbadgeCountPending/'+commentID);
											$('#loadtable').load('<?= base_url(); ?>loadtable/' + commentID + '/pending/' + currentMonth + '/' + currentYear);
										}else if(status == 'inprogress'){
											$('#loadtableInprogress').load('<?= base_url(); ?>loadtable/' + commentID + '/inprogress/' + currentMonth + '/' + currentYear);
										}
										$('#countView').load('<?= base_url(); ?>loadCountView');
									}
								<\/script>
							`;
						}
					},
				],
				// Add data-filter attribute
				createdRow: function (row, data, dataIndex) {
					$(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
				}
			});

			table = dt.$;

			// Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
			dt.on('draw', function () {
				handleDeleteRows();
				KTMenu.createInstances();
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