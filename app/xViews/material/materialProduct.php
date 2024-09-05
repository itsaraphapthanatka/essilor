<!--begin::Main-->
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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Setup Material Product</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="/home/<?=session()->get('compcode');?>" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Setup Material Product</li>
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
				<!--begin::Card-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header pt-8">
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Material Product" />
							</div>
							<!--end::Search-->
						</div>
						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Toolbar-->
							<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
								<!--begin::Export-->
								<button type="button" class="btn btn-flex btn-light-primary me-3" id="kt_file_manager_new_folder">
								<i class="ki-duotone ki-add-folder fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>New Folder</button>
								<!--end::Export-->
								<!--begin::Add customer-->
								<button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
								<i class="ki-duotone ki-folder-up fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>Upload Files</button>
								<!--end::Add customer-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Group actions-->
							<div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
								<div class="fw-bold me-5">
								<span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected</div>
								<button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Delete Selected</button>
							</div>
							<!--end::Group actions-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Table header-->
						<div class="d-flex flex-stack">
							<!--begin::Folder path-->
							<div class="badge badge-lg badge-light-primary">
								<div class="d-flex align-items-center flex-wrap">
								<i class="ki-duotone ki-abstract-32 fs-2 text-primary me-3">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<a href="/setupMaterial/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>">[<?=$type['mattype_code']?>]<?=$type['mattype_name'];?></a>
								<i class="ki-duotone ki-right fs-2 text-primary mx-1"></i>
                                <a href="/setupMaterialgroup/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>/<?=$mat_type;?>/<?=$mat_group;?>">[<?=$group['matgroup_code'];?>] <?=$group['matgroup_name'];?></a>
								<i class="ki-duotone ki-right fs-2 text-primary mx-1"></i>
								<a href="/setupMaterialsubGroup/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>/<?=$mat_type;?>/<?=$mat_group;?>/<?=$mat_subgroup;?>">[<?=$subgroup['matsubgroup_code'];?>] <?=$subgroup['matsubgroup_name'];?></a>
								<!-- <i class="ki-duotone ki-right fs-2 text-primary mx-1"></i>
								demo1 -->
							</div>
							</div>
							<!--end::Folder path-->
						</div>
						<!--end::Table header-->
						<!--begin::Table header-->
						<div class="d-flex flex-stack">
							<!--begin::Folder path-->
							<div class="badge badge-lg badge-light-success">
								<div class="d-flex align-items-center flex-wrap">
								<i class="ki-duotone ki-abstract-32 fs-2 text-success me-3">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
                                <?=$type['mattype_code']?><?=$group['matgroup_code'];?><?=$subgroup['matsubgroup_code'];?>
							</div>
							</div>
							<!--end::Folder path-->
						</div>
						<!--end::Table header-->
						<!--begin::Table-->
						<table id="kt_datatable_" data-kt-filemanager-table="folders" class="table align-middle table-row-dashed fs-6 gy-5">
							<thead>
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="min-w-10px">Code</th>
									<th class="min-w-150px">Name</th>
									<th class="min-w-125px">Status</th>
									<th class="text-center w-125px">Actions</th>
								</tr>
							</thead>
							<tbody class="fw-semibold text-gray-600">
							
							</tbody>
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				<!--begin::Upload template-->
				<table class="d-none">
					<tr id="kt_file_manager_new_folder_row" data-kt-filemanager-template="upload">
						<td></td>
						<td id="kt_file_manager_add_folder_form" class="fv-row">
							<div class="d-flex align-items-center">
								<!--begin::Folder icon-->
								<span id="kt_file_manager_folder_icon">
									<i class="ki-duotone ki-folder fs-2x text-primary me-4">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<!--end::Folder icon-->
								<!--begin:Input-->
								<input type="text" name="new_folder_name" placeholder="Enter the folder name" class="form-control mw-250px me-3" />
								<!--end:Input-->
								<!--begin:Submit button-->
								<button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_add_folder">
									<span class="indicator-label">
										<i class="ki-duotone ki-check fs-1"></i>
									</span>
									<span class="indicator-progress">
										<span class="spinner-border spinner-border-sm align-middle"></span>
									</span>
								</button>
								<!--end:Submit button-->
								<!--begin:Cancel button-->
								<button class="btn btn-icon btn-light-danger" id="kt_file_manager_cancel_folder">
									<span class="indicator-label">
										<i class="ki-duotone ki-cross fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<span class="indicator-progress">
										<span class="spinner-border spinner-border-sm align-middle"></span>
									</span>
								</button>
								<!--end:Cancel button-->
							</div>
						</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<!--end::Upload template-->
				<!--begin::Modals-->
				<!--begin::Modal - Upload File-->
				<div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content">
							<!--begin::Form-->
							<form class="form" action="none" id="kt_modal_upload_form">
								<!--begin::Modal header-->
								<div class="modal-header">
									<!--begin::Modal title-->
									<h2 class="fw-bold">Upload files</h2>
									<!--end::Modal title-->
									<!--begin::Close-->
									<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
										<i class="ki-duotone ki-cross fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
									<!--end::Close-->
								</div>
								<!--end::Modal header-->
								<!--begin::Modal body-->
								<div class="modal-body pt-10 pb-15 px-lg-17">
									<!--begin::Input group-->
									<div class="form-group">
										<!--begin::Dropzone-->
										<div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
											<!--begin::Controls-->
											<div class="dropzone-panel mb-4">
												<a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
												<a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
												<a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
											</div>
											<!--end::Controls-->
											<!--begin::Items-->
											<div class="dropzone-items wm-200px">
												<div class="dropzone-item p-5" style="display:none">
													<!--begin::File-->
													<div class="dropzone-file">
														<div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
															<span data-dz-name="">some_image_file_name.jpg</span>
															<strong>(
															<span data-dz-size="">340kb</span>)</strong>
														</div>
														<div class="dropzone-error mt-0" data-dz-errormessage=""></div>
													</div>
													<!--end::File-->
													<!--begin::Progress-->
													<div class="dropzone-progress">
														<div class="progress bg-gray-300">
															<div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
														</div>
													</div>
													<!--end::Progress-->
													<!--begin::Toolbar-->
													<div class="dropzone-toolbar">
														<span class="dropzone-start">
															<i class="ki-duotone ki-to-right fs-1"></i>
														</span>
														<span class="dropzone-cancel" data-dz-remove="" style="display: none;">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<span class="dropzone-delete" data-dz-remove="">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Toolbar-->
												</div>
											</div>
											<!--end::Items-->
										</div>
										<!--end::Dropzone-->
										<!--begin::Hint-->
										<span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
										<!--end::Hint-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Modal body-->
							</form>
							<!--end::Form-->
						</div>
					</div>
				</div>
				<!--end::Modal - Upload File-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
<!--end:::Main-->
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
		var mat_type = "<?=$mat_type?>";
        var mat_group = "<?=$mat_group?>";
        var mat_subgroup = "<?=$mat_subgroup?>";
        console.log(mat_type);
        console.log(mat_group);
        console.log(mat_subgroup);
		var userlist = "jsondata/getmaterialProduct/"+mat_type+"/"+mat_group+"/"+mat_subgroup;
		var type_status = {
				0: {"title": "งานใหม่", "state": "primary"},
				1: {"title": "กำลังดำเนินงาน", "state": "info"},
				2: {"title": "เสร็จสิ้น", "state": "success"},
			};
		// Private functions
		var initDatatable = function () {
			dt = $("#kt_datatable_").DataTable({
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
					{ data: 'matcode' },
					{ data: 'matname' },
					{ data: 'matstatus' },
					{ data: null },
				],
				columnDefs: [
                    {
                        targets: 0, // mattype_code
					},
                    {
                        targets: 1, // mattype_name
						render: function(data, type, row) {
							return `<a href="/setupMaterialSpec/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>/${row.mattype_code}/${row.matgroup_code}/${row.matsubgroup_code}/${row.matcode}">${row.matname}</a>`;
						}
					},
                    {
                        targets: 2, //สถานะ
                        className: 'text-center',
                        render: function(data, type, row) {
                            var index = row.pstatus;
                            if (!row.matstatus) {
                                return '<span class="ms-2 badge badge-light-warning fw-bold"></span>';
                            } else if (row.matstatus == "yes") {
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
										<a href="/setupMaterialsubGroup/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>/${row.matgroup_id}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
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
