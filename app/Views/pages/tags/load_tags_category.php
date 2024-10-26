<!--begin::Toolbar-->
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">Setting</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="/home/member" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item text-gray-600">
                    <a href="#" class="text-gray-600 text-hover-primary">Setting</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">Tag Category Listview</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center">
            <a href="<?php echo base_url();?>load_create_tagCategory" class="btn btn-primary me-3">New Tag Category</a>
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
                            <th class="min-w-20px">No.</th>
                            <th class="min-w-100px">TAG Category NAME</th>
                            <th class="min-w-20px">isStock</th>
                            <th class="min-w-125px">STATUS</th>
                            <th class="text-end min-w-100px" data-priority="2">DETAILS</th>
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


<script>
     $("#tab_3").addClass('active');
	 $("#kt_header_navs_tab_3").addClass('active show');
	 $("#tagCategory").addClass('btn-light-primary');
</script>
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
		var userlist = "getTagCategory";
		// Private functions
		var initDatatable = function () {
			dt = $("#kt_datatable_horizontal_scroll").DataTable({
				searchDelay: 500,
				processing: false,
				serverSide: false,
				order: [[0, 'asc']],
				stateSave: false,
				responsive: false,
				ajax: {
					url: HOST_URL + userlist,
					// url: "https://preview.keenthemes.com/api/datatables.php",
				},
				columns: [
					{ data: 'id' },
					{ data: 'category_name' },
					{ data: 'isStock' },
					{ data: 'category_status' },
					{ data: null },
				],
				columnDefs: [
                    {
                        targets: 1, //tag_name
                        className: 'text-center',
                    },
                    {
                        targets: 2, //isstock
                        className: 'text-center',
						// visible: false,
						render: function (data, type, row) {
							if (row.isStock == "Y") {
								return `
									<i class="ki-duotone ki-check-circle fs-2 text-success">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								`;
							} else {
								return ``;
							}
						},
                    },
					{
                        targets: 4, //status
                        className: 'text-center',
                    },
					{
						targets: -1,
						data: null,
						orderable: false,
						className: 'text-end',
						render: function (data, type, row) {
                            return `
								<a href="<?php echo base_url();?>edit_tagCategory/${data.id}" class="btn btn-light btn-active-light-primary btn-sm">
									Edit
								</a>
								<a href="#" class="btn btn-danger btn-active-light-danger btn-sm" data-kt-docs-table-filter="delete_row">
									Delete
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
					const name = parent.querySelectorAll('td')[1].innerText;


					Swal.fire({
						text: "Are you sure you want to delete " + name + "?",
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
								url: '<?php echo base_url(); ?>delaacstegorietag',
								type: 'POST',
								data: {
									'id': id,
								},
								success: function(result) {
									var json = result;
									console.log(json);
									switch (json.result) {
										case "successed":
											toastr.success(json.message);
											dt.ajax.reload();
											break;

										case "error":
											toastr.error(json.message);
											break;

										case "warning":
											toastr.warning(json.message);
											break;
									}
								}
							});
						} else if (result.dismiss === 'cancel') {
							Swal.fire({
								text: name + " was not deleted.",
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