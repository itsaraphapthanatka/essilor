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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">เลือกช่อง</h1>
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
						<div class="card-title">
							<div class="d-flex align-items-center position-relative my-1">
							<span class="svg-icon svg-icon-1 position-absolute ms-6">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="ค้นหา"/>
							</div>
						</div>
						<!--begin::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Group actions-->
							<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
								<div class="fw-bold me-5">
								<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
								<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
							</div>
							<!--end::Group actions-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<div class="card-body py-4">
						<!--begin::Datatable-->
						<table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
							<thead>
							<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
								<th>ลำดับ</th>
								<th class="min-w-125px">ช่อง</th>
								<th class="text-end min-w-100px" data-priority="2">ตัวเลือก</th>
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
		console.log(user_role);
			var channelgate = "jsondata/getChannel";
		var type_status = {
				0: {"title": "งานใหม่", "state": "primary"},
				1: {"title": "กำลังดำเนินงาน", "state": "info"},
				2: {"title": "เสร็จสิ้น", "state": "success"},
			};
		// Private functions
		var initDatatable = function () {
			dt = $("#kt_datatable_example_1").DataTable({
				searchDelay: 500,
				processing: false,
				serverSide: false,
				order: [[0, 'asc']],
				stateSave: false,  
				responsive: true,
				ajax: {
					url: HOST_URL + channelgate,
					// url: "https://preview.keenthemes.com/api/datatables.php",
				},
				columns: [
					{ data: null},
					{ data: 'name'},
					{ data: null },
				],
				columnDefs: [
					{
						targets: 0,
						render: function (data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						}
					},
					{
						targets: -1,
						data: null,
						orderable: false,
						className: 'text-end',
						render: function (data, type, row) {
								return `
								<a href="project/${row.id}" class="btn btn-light btn-active-light-primary btn-sm">
									เลือก
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
			// Select filter options
			filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="payment_type"] [name="payment_type"]');
			const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');
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
					const customerName = parent.querySelectorAll('td')[2].innerText;
					const channelName = parent.querySelectorAll('td')[1].innerText;
					const id = parent.querySelectorAll('td')[0].innerText;

					// SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
					Swal.fire({
						text: "Are you sure you want to delete " + channelName + "?",
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
							console.log(channelName);
							$.ajax({
								url: '<?php echo base_url(); ?>channelDel',
								type: 'POST',
								data: {
									'channelName': channelName,
								},
								success: function(result) {
									var json = result;
									console.log(json);
									toastr.success(json.message);
								}
							});
							
							Swal.fire({
								text: "Deleting " + channelName,
								icon: "info",
								buttonsStyling: false,
								showConfirmButton: false,
								timer: 2000
							}).then(function () {
								Swal.fire({
									text: "You have deleted " + channelName + "!.",
									icon: "success",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn fw-bold btn-primary",
									}
								}).then(function () {
									// delete row data from server and re-draw datatable
									dt.draw();
									window.location="/channellist";
								});
							});
						} else if (result.dismiss === 'cancel') {
							Swal.fire({
								text: customerName + " was not deleted.",
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
	"use strict";
	
	// Class definition
	var KTUsersAddUser = function () {
		// Shared variables
		const element = document.getElementById('kt_modal_add_user');
		const form = element.querySelector('#kt_modal_add_user_form');
		const modal = new bootstrap.Modal(element);
	
		// Init add schedule modal
		var initAddUser = () => {
	
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
			var validator = FormValidation.formValidation(
				form,
				{
					fields: {
						'fname': {
							validators: {
								notEmpty: {
									message: 'first Name is required'
								}
							}
						},
						'lname': {
							validators: {
								notEmpty: {
									message: 'Last Name Name is required'
								}
							}
						},
						'middlename': {
							validators: {
								notEmpty: {
									message: 'Middle Name is required'
								}
							}
						},
						'department': {
							validators: {
								notEmpty: {
									message: 'Department is required'
								}
							}
						},
						'position': {
							validators: {
								notEmpty: {
									message: 'Position is required'
								}
							}
						},
						'user_name': {
							validators: {
								notEmpty: {
									message: 'Username is required'
								}
							}
						},
						'mobile': {
							validators: {
								notEmpty: {
									message: 'Mobile is required'
								}
							}
						},
						'user_pass': {
							validators: {
								notEmpty: {
									message: 'Password is required'
								}
							}
						},
						'user_email': {
							validators: {
								notEmpty: {
									message: 'Valid email address is required'
								}
							}
						},
					},
	
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						bootstrap: new FormValidation.plugins.Bootstrap5({
							rowSelector: '.fv-row',
							eleInvalidClass: '',
							eleValidClass: ''
						})
					}
				}
			);
	
			// Submit button handler
			const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
			submitButton.addEventListener('click', e => {
				e.preventDefault();
	
				// Validate form before submit
				if (validator) {
					validator.validate().then(function (status) {
						console.log('validated!');
	
						if (status == 'Valid') {
							// Show loading indication
							submitButton.setAttribute('data-kt-indicator', 'on');
	
							// Disable button to avoid multiple click 
							submitButton.disabled = false;
	
							// Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							setTimeout(function () {
								// Remove loading indication
								submitButton.removeAttribute('data-kt-indicator');
	
								// Enable button
								submitButton.disabled = false;
	
								// Show popup confirmation 
								Swal.fire({
									text: "Form has been successfully submitted!",
									icon: "success",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								}).then(function (result) {
									if (result.isConfirmed) {
										modal.hide();
									}
								});
	
								form.submit(); // Submit form
							}, 2000);
						} else {
							// Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
							Swal.fire({
								text: "Sorry, looks like there are some errors detected, please try again.",
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn btn-primary"
								}
							});
						}
					});
				}
			});
	
			// Cancel button handler
			const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
			cancelButton.addEventListener('click', e => {
				e.preventDefault();
	
				Swal.fire({
					text: "Are you sure you would like to cancel?",
					icon: "warning",
					showCancelButton: true,
					buttonsStyling: false,
					confirmButtonText: "Yes, cancel it!",
					cancelButtonText: "No, return",
					customClass: {
						confirmButton: "btn btn-primary",
						cancelButton: "btn btn-active-light"
					}
				}).then(function (result) {
					if (result.value) {
						form.reset(); // Reset form			
						modal.hide();	
					} else if (result.dismiss === 'cancel') {
						Swal.fire({
							text: "Your form has not been cancelled!.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-primary",
							}
						});
					}
				});
			});
	
			// Close button handler
			const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
			closeButton.addEventListener('click', e => {
				e.preventDefault();
				form.reset(); // Reset form			
						modal.hide();
			  
			});
		}
	
		return {
			// Public functions
			init: function () {
				initAddUser();
			}
		};
	}();
	
	// On document ready
	KTUtil.onDOMContentLoaded(function () {
		KTUsersAddUser.init();
	});
</script>
<script>
	 $("#tab_home").addClass('show');
	 $("#tab_project").addClass('active');
</script>