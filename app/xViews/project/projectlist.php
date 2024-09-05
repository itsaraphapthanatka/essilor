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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">จัดการโครงการ</h1>
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
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <a href="/projectCreate" type="button" class="btn btn-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->เพิ่มโครงการ</a>
                                <!--end::Add user-->
                                <!--begin::Add user-->
                                <!-- <a href="/stimulsoft/demo/js/demo.html" type="button" class="btn btn-primary"> -->
                                <!-- <a href="https://asset.se-thai.com/report/viewreportasset?module=ap&typ=report&reportname=admin_assetregister.mrt&compcode=SE&createname=asset&status=&assetgroupcode=&assetcode=&projectcode=&departmentcode=&staffcode=&locationcode=&rental=N&assetname=&assettype=" type="button" class="btn btn-primary"> -->
                                <a href="https://report.appreview.co.th/viewer.php?reportname=projectlist_sql.mrt" type="button" class="btn btn-primary">
                                <!-- <a href="/report?reportname=projectlist.mrt" type="button" class="btn btn-primary"> -->
                                    รายงานโครงการทั้งหมด
                                </a>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
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
                                <th class="min-w-125px">วันที่</th>
                                <th class="min-w-125px">ชื่อโครงการ/ตอน</th>
                                <th class="min-w-125px">รหัสโครงการ</th>
                                <!-- <th class="min-w-125px">ช่อง</th> -->
                                <th class="min-w-125px">ชื่อลูกค้า</th>
                                <th class="min-w-125px">ชื่อย่อโครงการ</th>
                                <th class="min-w-125px">รายละเอียดโครงการ</th>
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
        if (user_role == 1) {
            var userlist = "jsondata/getAllproject";
        }else if(user_role == 2){
            var userlist = "jsondata/getAllproject";
            // var userlist = "jsondata/getAllUsersController";
        }else if(user_role == 3){
            var userlist = "jsondata/getAllproject";
        }
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
                    url: HOST_URL + userlist,
                    // url: "https://preview.keenthemes.com/api/datatables.php",
                },
                columns: [
                    { data: null},
                    { data: 'start_date1' },
                    { data: 'project_name'},
                    { data: 'project_code'},
                    // { data: 'channel_name'},
                    { data: 'client_name'},
                    { data: 'project'},
                    { data: 'description' },
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
                        targets: 2,
                        render: function ( data, type, row ) {
							var index = row.pstatus;

							return  '<a href="#" class="text-gray-800 text-hover-primary mb-1">'+row.project_name+'</a>' + 
                                    '<span class="ms-2 badge badge-light-' + type_status[index]['state'] + ' fw-bold">' + type_status[index]['title'] + '</span>' +
                                '<div class="d-flex flex-column"><span>'+ row.channel_name + '</span></div>';
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
                                    ตัวเลือก
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
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="postproduction/${row.pid}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                            Post Production
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="statusporject/${row.pid}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                            สถานะโครงการ
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="projectEdit/${row.pid}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                            แก้ไข
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                                            ลบ
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
                    }).then(function (result) {
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
                            }).then(function () {
                                Swal.fire({
                                    text: "You have deleted " + projectCode + "!.",
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