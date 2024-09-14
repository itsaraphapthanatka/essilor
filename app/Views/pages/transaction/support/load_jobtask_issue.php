<div class="table-responsive">
    <!--begin::Table-->
    <table  id="kt_datatable_horizontal_scroll" class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
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
		var list = "jsondata/getJobtaskSupport/<?=$issueid;?>";
		// Private functions
		var initDatatable = function () {
			dt = $("#kt_datatable_horizontal_scroll").DataTable({
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
						render: function(data, type, row){
							return `<div class="position-relative ps-6 pe-3 py-2">
										<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
										<span class="fw-bold text-gray-600 fs-6">1</span>
									</div>`;
						}
					},
					{
						targets: 2,
						render: function(data, type, row) {
							return `<div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <div class="text-gray-800 mb-1">${row.ecpcode}_${row.customer_name}</div>
                                        </div>
                                    </div>`;
						}
					},
                    {   target: 4,
                        render: function(data,type,row){
                            return `
									<span class="badge badge-light-success fs-6" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="">${row.statusname}</span>
								`;
                        }
                    },
					{
						targets: -1,
						render: function(data, type, row) {
							return `
								<a data-bs-toggle="modal" data-bs-target="#takejob${data.id}" class="btn btn-light-primary btn-sm">
									Update
								</a>
								<div class="modal fade" tabindex="-1" id="takejob${data.id}">
									<div class="modal-dialog modal-xl">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Pending Ticket Transaction Record</h5>

												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
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
											</div>
										</div>
									</div>
								</div>
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
	

		// Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
		var handleSearchDatatable = function () {
			const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
			filterSearch.addEventListener('keyup', function (e) {
				dt.search(e.target.value).draw();
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