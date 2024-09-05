<!--begin::Toolbar-->
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Stock Lens</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="/home/member" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">Stock Lens FIFO View</li>
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
                                <th class="min-w-125px">Tracking no.</th>
                                <th class="text-center min-w-200px">TAG FROM BETA</th>
                                <th class="text-center min-w-125px">ORDER CYCLE</th>
                                <th class="text-center min-w-200px">TAG</th>
                                <th class="min-w-125px">CATEGORIZE</th>
                                <th class="min-w-200px">TASK CREATE DATE/TIME</th>
                                <th class="min-w-100px" data-priority="2">STATUS</th>
                                <th class="min-w-100px" data-priority="1">DETAILS</th>
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
		var userlist = "jsondata/getJobtaskStockTags/0"; // seq3 1= open , 2 = keyin
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
					{ data: 'trackingId' },
					{ data: 'tagsBeta' },
					{ data: 'morning_only' },
					{ data: 'tagsJob' },
					{ data: 'categoriesName' },
					{ data: 'createdate' },
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
						targets: 4,
						data: null,
						orderable: false,
						className: 'text-center',
						render: function (data, type, row) {
							let badges = '';

							if(row.morning_only == 'yes'){
								badges += `<span class="badge badge-light-primary fs-6 mb-3">วิ่งเช้ารอบเดียว</span><br>`;
							}

							if(row.evening_only == 'yes'){
								badges += `<span class="badge badge-light-warning fs-6 mb-3">วิ่งเย็นรอบเดียว</span><br>`;
							}

							if(row.working_day_only == 'yes'){
								badges += `<span class="badge badge-light-info fs-6 mb-3">วิ่งแค่ จ-ศ</span><br>`;
							}

							return badges.trim();
						},
					},
					{
						targets: -2,
						data: null,
						orderable: false,
						className: 'text-end',
						render: function (data, type, row) {
							if(data.jobStatus === '1'){
								return `
									<span class="badge badge-light-primary fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '2'){
								return `
									<span class="badge badge-light-success fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '3'){
								return `
									<span class="badge badge-light-info fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '4'){
								return `
									<span class="badge badge-success fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '5'){
								return `
									<span class="badge badge-light-info fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '6'){
								return `
									<span class="badge badge-light-info fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '7'){
								return `
									<span class="badge badge-light-info fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '8'){
								return `
									<span class="badge badge-light-info fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '9'){
								return `
									<span class="badge badge-danger fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '10'){
								return `
									<span class="badge badge-light-danger fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '11'){
								return `
									<span class="badge badge-light-danger fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '12'){
								return `
									<span class="badge badge-light-danger fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '13'){
								return `
									<span class="badge badge-light-danger fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '14'){
								return `
									<span class="badge badge-success fs-6">${data.statusname}</span>
								`;
							}
							if(data.jobStatus === '15'){
								return `
									<span class="badge badge-info fs-6">${data.statusname}</span>
								`;
							}
						},
					},
					{
						targets: -1,
						data: null,
						orderable: false,
						className: 'text-end',
						render: function (data, type, row) {
                            return `
								<a href="<?php echo base_url();?>edittask/${data.id}" class="btn btn-light-primary btn-sm">
									Edit
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
<script>
	 $("#kt_header_navs_keyin").addClass('active');
	 $("#kt_header_navs_tab_2").addClass('active show');
	 $("#Stocklenfifo").addClass('btn-light-primary');
</script>