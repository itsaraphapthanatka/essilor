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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Project</h1>
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
							<a href="/setupWareHouse/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" class="text-muted text-hover-primary">Project</a>
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
								<input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search" />
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
							<button hidden type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-plus"></i>
								Add Project
							</button>
						</div>
						<!--end::Card toolbar-->
						<!--end::Card header-->
					</div>
					<div class="card-body py-4">
						<div class="table-responsive">
							<!--begin::Datatable-->
							<table id="kt_datatable_horizontal_scroll" class="table align-middle table-row-dashed fs-6 gy-5">
								<thead>
									<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
										<th class="min-w-100px">Project Code</th>
										<th class="min-w-150px">Project Name</th>
										<th class="min-w-180px" hidden>Project Start</th>
										<th class="min-w-80px" hidden>Control BOQ</th>
										<th class="min-w-80px" hidden>Control Budget</th>
										<th class="min-w-80px" hidden>Project Status</th>
										<th class="min-w-80px" hidden>Sub Project</th>
										<th class="text-rigth min-w-100px" data-priority="2">Actions</th>
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

<!--begin::Modal-->
<div id="kt_datatable_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="min-height: 590px;">
            <div class="modal-header py-5">
                <h5 class="modal-title">Sub Project
                <span class="d-block text-muted font-size-sm" id="subproject"></span></h5>
				<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
				<div class="table-responsive">
					<!--begin::Datatable-->
					<div id="load_subproject"></div>
					<!--end::Datatable-->
				</div>
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-light-primary font-weight-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
					<i class="ki-duotone ki-plus"></i>
					Add Sub Project
				</button>
                <button type="button" class="btn btn-light font-weight-bold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->
<script>
	var HOST_URL = "<?php echo base_url(); ?>";
</script>

<script>
	"use strict";

	// Class definition
	var KTDatatablesServerSide = function() {
		// Shared variables
		var table;
		var dt;
		var subdt;
		var filterPayment;
		var user_role = "<?= session()->get('user_role') ?>";
		var channalid = '10';
		var userlist = "jsondata/getProjectAll";
		var type_status = {
			0: {
				"title": "งานใหม่",
				"state": "primary"
			},
			1: {
				"title": "กำลังดำเนินงาน",
				"state": "info"
			},
			2: {
				"title": "เสร็จสิ้น",
				"state": "success"
			},
		};
		// Private functions
		var initDatatable = function() {
			dt = $("#kt_datatable_horizontal_scroll").DataTable({
				searchDelay: 500,
				processing: false,
				serverSide: false,
				order: [
					[0, 'asc']
				],
				stateSave: false,
				responsive: true,
				ajax: {
					url: HOST_URL + userlist,
					// url: "https://preview.keenthemes.com/api/datatables.php",
				},
				columns: [{
						data: 'project_code'
					},
					{
						data: 'project_name'
					},
					{
						data: 'project_start',
						className: 'text-center',
                        visible: false,
						render: DataTable.render.moment( 'DD/MM/YYYY' )
					},
					{
						data: 'chkconbqq',
                        visible: false,
					},
					{
						data: 'controlbg',
                        visible: false,
					},
					{
						data: 'project_status',
                        visible: false,
					},
					{
						data: null,
                        visible: false,
					},
					{
						data: null
					},
				],
				columnDefs: [
					{
						targets: 1, // project name
						render: function(data, type, row) {
							return `<div class="d-flex align-items-center">
                                        <div class="symbol symbol-50px me-3">
                                            <img src="${HOST_URL}project/${row.project_img}" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">${row.project_name}</a>
                                            <span class="text-gray-400 fw-semibold d-block fs-7">${row.project_address}</span>
                                        </div>
                                    </div>`;
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
						targets: 5, //สถานะ
						className: 'text-center',
						render: function(data, type, row) {
							var index = row.pstatus;
							if (!row.project_status) {
								return '<span class="ms-2 badge badge-light-warning fw-bold"></span>';
							} else if (row.project_status == "normal") {
								return '<span class="ms-2 badge badge-light-success fw-bold text-uppercase">Active</span>';
							} else {
								return '<span class="ms-2 badge badge-light-warning fw-bold text-uppercase">inactive</span>';
							}
						}
					},
					{
						targets: 6, // Sub Project
						className: 'text-center',
						render: function(data, type, row) {
							// return '<a href="#"  data-toggle="modal" data-target="#myModal" data-projectname="' + row.project_name + '" class="btn btn-light-info btn-sm hover-scale" data-kt-docs-table-filter="subproject_row">Sub Project</a>';
							return '\
								<button data-project-id="' + row.project_id + '" data-project-code="' + row.project_code + '" data-project-name="'+ row.project_name +'" class="btn btn-light-info btn-sm hover-scale" title="View records">\
										Details\
								</button>';
						}
					},
					{
						targets: -1,
						data: null,
						orderable: false,
						className: 'text-end',
						render: function(data, type, row) {
							return `
							<a href="/setupWareHouse/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>/${row.project_id}" class="btn btn-light btn-active-light-primary btn-sm">
								Select
							</a>
						`;
						},
					},
				],
				// Add data-filter attribute
				createdRow: function(row, data, dataIndex) {
					$(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
				}
			});

			table = dt.$;

			// Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
			dt.on('draw', function() {
				handleDeleteRows();
				KTMenu.createInstances();
			});

			dt.on('click', '[data-project-id]', function() {
				$("#subproject").html($(this).data('project-name'));
				handlesubProject($(this).data('project-code'));
				$('#kt_datatable_modal').modal('show');
			});
		}

		// Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
		var handleSearchDatatable = function() {
			const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
			filterSearch.addEventListener('keyup', function(e) {
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
				d.addEventListener('click', function(e) {
					e.preventDefault();

					// Select parent row
					const parent = e.target.closest('tr');

					// Get customer name
					const projectCode = parent.querySelectorAll('td')[2].innerText;
					const usercode = parent.querySelectorAll('td')[1].innerText;
					const id = parent.querySelectorAll('td')[0].innerText;

					// SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
					Swal.fire({
						text: "Are you sure you want to delete " + projectCode + "?",
						icon: "warning",
						showCancelButton: true,
						buttonsStyling: false,
						confirmButtonText: "Yes, delete!",
						cancelButtonText: "No, cancel",
						customClass: {
							confirmButton: "btn fw-bold btn-danger",
							cancelButton: "btn fw-bold btn-active-light-primary"
						}
					}).then(function(result) {
						if (result.value) {
							// Simulate delete request -- for demo purpose only
							console.log(projectCode);
							$.ajax({
								url: '<?php echo base_url(); ?>deleteProject',
								type: 'POST',
								data: {
									'code': projectCode,
								},
								success: function(result) {
									var json = result;
									console.log(json);
									toastr.success(json.message);
								}
							});

							Swal.fire({
								text: "Deleting " + projectCode,
								icon: "info",
								buttonsStyling: false,
								showConfirmButton: false,
								timer: 2000
							}).then(function() {
								Swal.fire({
									text: "You have deleted " + projectCode + "!.",
									icon: "success",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn fw-bold btn-primary",
									}
								}).then(function() {
									// delete row data from server and re-draw datatable
									dt.draw();
									window.location = "/projectlist";
								});
							});
						} else if (result.dismiss === 'cancel') {
							Swal.fire({
								text: projectCode + " was not deleted.",
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

		var handlesubProject = (projectCode) => {
			$('#load_subproject').load('/setupsubProject/'+projectCode);
		}

		



		// Public methods
		return {
			init: function() {
				initDatatable();
				handleSearchDatatable();
				handleFilterDatatable();
				handleDeleteRows();
				handleResetForm();
			}
		}
	}();

	// On document ready
	KTUtil.onDOMContentLoaded(function() {
		KTDatatablesServerSide.init();
	});
</script>

<script>
	$("#tab_<?= $seq1; ?>").addClass('show');
	$("#tab_group_<?= $seq2; ?>").addClass('show');
	$("#tab_sub_<?= $seq3; ?>").addClass('active');
</script>