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
                <li class="breadcrumb-item text-gray-600">List VIP View</li>
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
                        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
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
                    <!-- <table id="kt_datatable_horizontal_scroll" class="table align-middle table-row-dashed fs-6 gy-5" >
                        <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-100px">ECPCODE</th>
                            <th class="min-w-125px">ECPNAME</th>
                            <th class="text-center min-w-200px">LOYALTY PROGRAM</th>
                            <th class="text-center min-w-200px">LOYALTY PROGRAM 2</th>
                            <th class="text-center min-w-125px">PAYMENT TYPE</th>
                            <th class="text-center min-w-125px">LG-BKK</th>
                            <th class="text-end min-w-100px" data-priority="2">DETAILS</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        </tbody>
                    </table> -->
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
		var userlist = "getECP";
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
					{ data: 'customer_cd' },
					{ data: 'customer_name' },
					{ data: 'c_partner' },
					{ data: 'c_experts' },
					{ data: 'payment_term_cd' },
					{ data: 'routecode' },
					{ data: null },
				],
				columnDefs: [
                    {
                        targets: 2, //c_partner
                        className: 'text-center',
                        render: function(data, type, row) {
                            var index = row.pstatus;
                            if (!row.c_partner) {
                                return 'NA';
                            } else {
                                return row.c_partner;
                            }
                        }
                    },
                    {
                        targets: 3, //c_experts
                        className: 'text-center',
                        render: function(data, type, row) {
                            if (!row.c_experts) {
                                return 'NA';
                            } else {
                                return row.c_experts;
                            }
                        }
                    },
                    {
                        targets: 4, //payment_term_cd
                        className: 'text-center',
                        render: function(data, type, row) {
                            if (!row.payment_term_cd) {
                                return 'NA';
                            } else {
                                return row.payment_term_cd;
                            }
                        }
                    },
                    {
                        targets: 5, //routecode
                        className: 'text-center',
                        render: function(data, type, row) {
                            if (!row.routecode) {
                                return 'NA';
                            } else {
                                return row.routecode;
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
								<a href="#" class="btn btn-light btn-active-light-primary btn-sm">
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
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "<?php echo base_url();?>import/ecpdata", // Set the url for your upload script location
    paramName: "userfile", // The name that will be used to transfer the file
    acceptedFiles: ".xlsx",
    maxFiles: 1,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function(file, done) {
        if (file.name == "wow.jpg") {
            done("Naha, you don't.");
        } else {
            done();
            window.location.href = "/home/member";
        }
    }
});
$.getJSON("http://jsonip.com/?callback=?", function (data) {
    console.log(data);
    console.log(data.ip);
});

document.getElementById('ipAddress').innerHTML = document.getElementById('ipAddress').innerHTML+"<br/> Name " + navigator.appName;
document.getElementById('ipAddress').innerHTML = document.getElementById('ipAddress').innerHTML+"<br/> Product " + navigator.product;


// var shell = WScript.CreateObject("WScript.Shell");
// shell.Run("scutil --get LocalHostName");
</script>
