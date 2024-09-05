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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Project BOQ</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="<?php echo base_url(); ?>theme/dist/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Archive</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
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
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Table widget 12-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Card title-->
                                <div class="card-title flex-column">
                                    <h2 class="mb-3"><span></span></h2>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Datatable-->
                                    <table id="kt_datatable_horizontal_scroll" class="table align-middle table-row-dashed fs-6 gy-5">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px">Tender Code</th>
                                                <th class="min-w-150px">Tender Name</th>
                                                <th class="min-w-80px">Status</th>
                                                <th class="min-w-80px">Control BOQ</th>
                                                <th class="min-w-80px">Control Budget</th>
                                                <th class="min-w-80px" data-priority="2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                        </tbody>
                                    </table>
                                    <!--end::Datatable-->
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Table widget 12-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<script src="<?php echo base_url();?>theme/dist/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>

<script>var HOST_URL = "<?php echo base_url();?>";</script>
<script>
	"use strict";

	// Class definition
	var KTDatatablesServerSide = function () {
		// Shared variables
		var table;
		var dt;
		var filterPayment;
		var user_role = "<?=session()->get('user_role') ?>";
		var channalid = '10';
		var userlist = "jsondata/getTenderBoq";
		var type_status = {
				0: {"title": "งานใหม่", "state": "primary"},
				1: {"title": "กำลังดำเนินงาน", "state": "info"},
				2: {"title": "เสร็จสิ้น", "state": "success"},
			};
		// Private functions
		var initDatatable = function () {
			dt = $("#kt_datatable_horizontal_scroll").DataTable({
				searchDelay: 500,
				processing: false,
				serverSide: false,
				order: [[0, 'asc']],
				stateSave: false,  
				responsive: true,
				ajax: {
					url: HOST_URL + userlist,
					// url: "https://preview.keenthemes.com/api/datatables.php",
				},
				columns: [
					{ data: 'bd_tenid' },
					{ data: 'bd_pname' },
					{ data: 'bd_status' },
					{ data: 'chkconbqq' },
					{ data: 'controlbg' },
					{ data: null },
				],
				columnDefs: [
                    {
                        targets: 2, //สถานะ
                        className: 'text-center',
                        render: function(data, type, row) {
                            var index = row.bd_status;
                            if (!row.bd_status) {
                                return '<span class="ms-2 badge badge-light-warning fw-bold">Wait</span>';
                            } else if (row.bd_status == "win") {
                                return '<span class="ms-2 badge badge-light-success fw-bold text-uppercase">Win</span>';
                            } else if (row.bd_status == "wait") {
                                return '<span class="ms-2 badge badge-light-primary fw-bold text-uppercase">In Process</span>';
                            } else if (row.bd_status == "close") {
                                return '<span class="ms-2 badge badge-light-secondary fw-bold text-uppercase">Close</span>';
                            } else if (row.bd_status == "loss") {
                                return '<span class="ms-2 badge badge-light-danger fw-bold text-uppercase">Reject Join Bid</span>';
                            }
                        }
                    },
                    {
						targets: 3, // control Boq
						className: 'text-center',
						render: function(data, type, row) {
							if (row.chkconbqq == 0) {
								return '';
							} else{
								return '<i class="ki-duotone ki-check text-success fs-1"></i>';
							}
						}
					},
                    {
						targets: 4, // control Budget
						className: 'text-center',
						render: function(data, type, row) {
							if (row.controlbg == 1) {
								return '';
							} else{
								return '<i class="ki-duotone ki-check text-success fs-1"></i>';
							}
						}
					},
					{
						targets: -1,
						data: null,
						orderable: false,
						className: 'text-end',
						render: function (data, type, row) {
								return `
								<a href="/selectboq/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>/${row.bd_no}" class="btn btn-light btn-active-light-primary btn-sm">
									Select
								</a>
							`;
						},
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

		// Filter Datatable
		var handleFilterDatatable = () => {
			const filterStatus = document.querySelector('[data-kt-ecommerce-order-filter="status"]');
			$(filterStatus).on('change', e => {
				let value = e.target.value;
				if (value === 'all') {
					value = '';
				}
				console.log(value);
				dt.column(12).search(value).draw();
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
				handleFilterDatatable();
				handleDeleteRows();
				handleResetForm();
			}
		}
	}();

	// On document ready
	KTUtil.onDOMContentLoaded(function () {
		KTDatatablesServerSide.init();
	});
</script>

<script>
   $("#tab_<?= $seq1; ?>").addClass('show');
	$("#tab_group_<?= $seq2; ?>").addClass('show');
	$("#tab_sub_<?= $seq3; ?>").addClass('active');  
</script>