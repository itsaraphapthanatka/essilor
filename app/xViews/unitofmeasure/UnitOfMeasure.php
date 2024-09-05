
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
					<!-- <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ช่อง </h1> -->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Setup Unit Of Measure</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								<a href="/home/<?=session()->get('compcode');?>" class="text-muted text-hover-primary">Home</a>
							</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<!--end::Item-->		
						<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								<a href="/setupJobtype/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" class="text-muted text-hover-primary">Setup Unit Of Measure</a>
							</li>
						<!--end::Item-->	
					</ul>
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
			<div id="kt_app_content_container" class="app-container container-fluid">
				<div class="card">
					<!--begin::Card header-->
					<div class="card-header border-0 pt-6">
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
								<input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search"/>
							</div>
						</div>
						<!--begin::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
							<a href="/home/<?= session()->get('compcode');?>" type="button" class="btn btn-light">
								<i class="ki-duotone ki-arrow-left">
									<span class="path1"></span>
									<span class="path2"></span>
								 </i>
							Back</a>
							<!--begin::Export dropdown-->
							<a href="/companyNew/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
							    <i class="ki-duotone ki-plus"></i>
								Add UOM
                            </a>
						</div>
						<!--end::Card toolbar-->
					<!--end::Card header-->
				</div>
                <div class="card-body py-4">
                    <div class="table-responsive">
                    <!--begin::Datatable-->
                    <table id="kt_datatable_horizontal_scroll" class="table align-middle table-row-dashed fs-6 gy-5" >
                        <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-100px">UOM Code</th>
                            <th class="min-w-125px">UOM Name</th>
                            <th class="text-center min-w-100px">Status</th>
                            <th class="text-end min-w-100px" data-priority="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        </tbody>
                    </table>
                    <!--end::Datatable-->
                    </div>
                </div>
				
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
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
		var user_role = "<?=session()->get('user_role') ?>";
		var channalid = '10';
		var userlist = "jsondata/getUOM";
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
					{ data: 'unit_code' },
					{ data: 'unit_name' },
					{ data: 'status' },
					{ data: null },
				],
				columnDefs: [
                    {
                        targets: 0, // department_code
					},
                    {
                        targets: 2, //สถานะ
                        className: 'text-center',
                        render: function(data, type, row) {
                            var index = row.pstatus;
                            if (!row.status) {
                                return '<span class="ms-2 badge badge-light-warning fw-bold"></span>';
                            } else if (row.status == "yes") {
                                return '<span class="ms-2 badge badge-light-success fw-bold text-uppercase">Active</span>';
                            } else {
                                return '<span class="ms-2 badge badge-light-warning fw-bold text-uppercase">Inactive</span>';
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
								<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
									Actions
									<span class="svg-icon fs-5 m-0">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"></polygon>
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
											</g>
										</svg>
									</span>
								</a>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">									
									<div class="menu-item px-3">
										<a href="/departmentUnitEdit/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>/${row.unit_id}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
											Edit
										</a>
									</div>
									<!--end::Menu item-->

									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
											Delete
										</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
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