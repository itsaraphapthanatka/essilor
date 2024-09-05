<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-4 py-lg-8">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0"></h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar wrapper-->
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
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>
                            <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Room"/>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->เพิ่มห้อง</button>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <div class="card-body py-4">
                        <!--begin::Datatable-->
                        <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-50px">ID</th>
                                <th>Room</th>
                                <!-- <th>Controller</th> -->
                                <!-- <th>Language</th> -->
                                <!-- <th>Status</th> -->
                                <th class="text-end min-w-100px">Actions</th>
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
	<!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">เพิ่มห้อง</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form" action="<?php echo base_url();?>addRoomMaster" method="post" enctype="multipart/form-data">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7" hidden>
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">สาขา</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select class="form-select form-select-solid" data-placeholder="เลือกสาขา" data-allow-clear="true">
                               <?php foreach($branch as $val){?>
                                    <option value="<?=$val['branch_code'];?>"><?=$val['branch_name'];?></option>
                                <?php }?>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group--><!--begin::Input group-->
                        <div class="fv-row mb-7" hidden>
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">รหัสห้อง</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="room_code" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="รหัสห้อง" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">ชื่อห้อง</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="room_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="ชื่อห้อง" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7" hidden>
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">ผู้ดูแลห้อง</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <!-- <input type="text" name="branch_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="ชื่อห้อง" value="" /> -->
                            <select class="form-control form-control-solid mb-3 mb-lg-0" name="usercontrol" id="userControl">
                                 <?php foreach($user as $uval){?>
                                        <option value="<?=$uval['id'];?>"><?=$uval['user_name'];?></option>
                                    <?php } ?>
                             </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7" hidden>
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">สถานะ</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="branch_status" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="สถานะ" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Add task-->
<script src="<?php echo base_url();?>theme/dist/assets/js/custom/apps/user-management/users/list/table.js"></script>

<script>var HOST_URL = "<?php echo base_url();?>";</script>

<script>
    "use strict";

    // Class definition
    var KTDatatablesServerSide = function () {
        // Shared variables
        var table;
        var dt;

        // Private functions
        var initDatatable = function () {
            dt = $("#kt_datatable_example_1").DataTable({
                searchDelay: 100,
                processing: true,
                serverSide: true,
                order: [[2, 'desc']],
                stateSave: true,  
                ajax: {
                    url: HOST_URL + "jsondata/getAllRoom",
                    // url: "https://preview.keenthemes.com/api/datatables.php",
                },
                columns: [
                    { data: 'roomID'},
                    { data: 'room_name'},
                    // { data: 'room_controller'},
                    // { data: 'room_language'},
                    // { data: 'room_status'},
                    { data: null },
                ],
                columnDefs: [
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
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="editRoom/${row.id}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
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
                    const customerName = parent.querySelectorAll('td')[1].innerText;
                    const id = parent.querySelectorAll('td')[0].innerText;
                    console.log(id);
                    
                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete " + customerName + "?",
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
                            Swal.fire({
                                text: "Deleting " + customerName,
                                icon: "info",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 2000
                            }).then(function () {
                                Swal.fire({
                                    text: "You have deleted " + customerName + "!.",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                }).then(function () {
                                    $.ajax({
                                        url: '<?php echo base_url(); ?>deleteRoom',
                                        type: 'POST',
                                        data: {
                                            'id': id,
                                            'name': customerName,
                                        },
                                        success: function(result) {
                                            var json = result;
                                            console.log(json);
                                            toastr.success(json.message);
                                            window.location.href = "/room";
                                        }
                                    });
                                    // delete row data from server and re-draw datatable
                                    dt.draw();
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




        // Public methods
        return {
            init: function () {
                initDatatable();
                handleSearchDatatable();
                handleDeleteRows();
            }
        }
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTDatatablesServerSide.init();
    });
</script>

<script>
    $("#tab_business").addClass('active');
    $("#kt_app_sidebar_secondary_environment").addClass('show active');
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
                        'user_name': {
                            validators: {
                                notEmpty: {
                                    message: 'Full name is required'
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