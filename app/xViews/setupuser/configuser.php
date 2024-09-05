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
                <!--begin::Sign-in Method-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">การลงชื่อเข้าใช้</h3>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_signin_method" class="collapse show">
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Email Address-->
                            <div class="d-flex flex-wrap align-items-center">
                                <!--begin::Label-->
                                <div id="kt_signin_email">
                                    <div class="fs-6 fw-bold mb-1">อีเมล</div>
                                    <div class="fw-semibold text-gray-600"><?= session()->get('user_email');?></div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Edit-->
                                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                    <!--begin::Form-->
                                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                        <div class="row mb-6">
                                            <div class="col-lg-6 mb-4 mb-lg-0">
                                                <div class="fv-row mb-0">
                                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">อีเมล</label>
                                                    <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" readonly="readonly" placeholder="Email Address" name="emailaddress" value="<?= session()->get('user_email');?>" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row mb-0">
                                                    <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">ยืนยันรหัสผ่าน</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">ยืนยัน</button>
                                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">ยกเลิก</button>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Action-->
                                <div id="kt_signin_email_button" class="ms-auto" hidden>
                                    <button class="btn btn-light btn-active-light-primary">แก้ไข</button>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Email Address-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Password-->
                            <div class="d-flex flex-wrap align-items-center mb-10">
                                <!--begin::Label-->
                                <div id="kt_signin_password">
                                    <div class="fs-6 fw-bold mb-1">รหัสผ่าน</div>
                                    <div class="fw-semibold text-gray-600">************</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Edit-->
                                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                    <!--begin::Form-->
                                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                        <div class="row mb-1">
                                            <div class="col-lg-4" hidden>
                                                <div class="fv-row mb-0">
                                                    <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">รหัสผ่านเก่า</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">รหัสผ่านใหม่</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4" hidden>
                                                <div class="fv-row mb-0">
                                                    <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">ยืนยันรหัสผ่านใหม่</label>
                                                    <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-text mb-5">รหัสผ่านต้องมีอักขระอย่างน้อย 8 ตัวและมีสัญลักษณ์พิเศษ</div>
                                        <div class="d-flex">
                                            <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">ยืนยัน</button>
                                            <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">ยกเลิก</button>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Action-->
                                <div id="kt_signin_password_button" class="ms-auto">
                                    <button class="btn btn-light btn-active-light-primary">แก้ไข</button>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Password-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Sign-in Method-->
                <!--begin::Deactivate Account-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">ปิดการใช้งานบัญชี</h3>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_deactivate" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_deactivate_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">คุณกำลังปิดใช้งานบัญชีของคุณ</h4>
                                            <div class="fs-6 text-gray-700">เพื่อความปลอดภัยเป็นพิเศษ คุณต้องยืนยันอีเมลหรือหมายเลขโทรศัพท์ของคุณเมื่อคุณรีเซ็ตรหัสผ่าน.
                                            <br />
                                            <a class="fw-bold" href="#">เรียนรู้เพิ่มเติม</a></div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                                <!--begin::Form input row-->
                                <div class="form-check form-check-solid fv-row">
                                    <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                                    <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">ฉันยืนยันการปิดใช้งานบัญชีของฉัน</label>
                                </div>
                                <!--end::Form input row-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">ปิดการใช้งานบัญชี</button>
                            </div>
                            <!--end::Card footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Deactivate Account-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>

<!-- <script src="<?php echo base_url();?>theme/dist/assets/js/custom/account/settings/signin-methods.js"></script> -->
<script>
    "use strict";
    
    // Class definition
    var KTAccountSettingsSigninMethods = function () {
        var signInForm;
        var signInMainEl;
        var signInEditEl;
        var passwordMainEl;
        var passwordEditEl;
        var signInChangeEmail;
        var signInCancelEmail;
        var passwordChange;
        var passwordCancel;
    
        var toggleChangeEmail = function () {
            signInMainEl.classList.toggle('d-none');
            signInChangeEmail.classList.toggle('d-none');
            signInEditEl.classList.toggle('d-none');
        }
    
        var toggleChangePassword = function () {
            passwordMainEl.classList.toggle('d-none');
            passwordChange.classList.toggle('d-none');
            passwordEditEl.classList.toggle('d-none');
        }
    
        // Private functions
        var initSettings = function () {  
            if (!signInMainEl) {
                return;
            }        
    
            // toggle UI
            signInChangeEmail.querySelector('button').addEventListener('click', function () {
                toggleChangeEmail();
            });
    
            signInCancelEmail.addEventListener('click', function () {
                toggleChangeEmail();
            });
    
            passwordChange.querySelector('button').addEventListener('click', function () {
                toggleChangePassword();
            });
    
            passwordCancel.addEventListener('click', function () {
                toggleChangePassword();
            });
        }
    
        var handleChangeEmail = function (e) {
            var validation;        
    
            if (!signInForm) {
                return;
            }
    
            validation = FormValidation.formValidation(
                signInForm,
                {
                    fields: {
                        emailaddress: {
                            validators: {
                                notEmpty: {
                                    message: 'Email is required'
                                },
                                emailAddress: {
                                    message: 'The value is not a valid email address'
                                }
                            }
                        },
    
                        confirmemailpassword: {
                            validators: {
                                notEmpty: {
                                    message: 'Password is required'
                                }
                            }
                        }
                    },
    
                    plugins: { //Learn more: https://formvalidation.io/guide/plugins
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row'
                        })
                    }
                }
            );
    
            signInForm.querySelector('#kt_signin_submit').addEventListener('click', function (e) {
                e.preventDefault();
                console.log('click');
    
                validation.validate().then(function (status) {
                    if (status == 'Valid') {
                        swal.fire({
                            text: "Sent password reset. Please check your email",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then(function(){
                            signInForm.reset();
                            validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                            toggleChangeEmail();
                        });
                    } else {
                        swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        });
                    }
                });
            });
        }
    
        var handleChangePassword = function (e) {
            var validation;
    
            // form elements
            var passwordForm = document.getElementById('kt_signin_change_password');
    
            if (!passwordForm) {
                return;
            }
    
            validation = FormValidation.formValidation(
                passwordForm,
                {
                    fields: {
                        // currentpassword: {
                        //     validators: {
                        //         notEmpty: {
                        //             message: 'Current Password is required'
                        //         }
                        //     }
                        // },
    
                        newpassword: {
                            validators: {
                                notEmpty: {
                                    message: 'New Password is required'
                                }
                            }
                        },
    
                        // confirmpassword: {
                        //     validators: {
                        //         notEmpty: {
                        //             message: 'Confirm Password is required'
                        //         },
                        //         identical: {
                        //             compare: function() {
                        //                 return passwordForm.querySelector('[name="newpassword"]').value;
                        //             },
                        //             message: 'The password and its confirm are not the same'
                        //         }
                        //     }
                        // },
                    },
    
                    plugins: { //Learn more: https://formvalidation.io/guide/plugins
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row'
                        })
                    }
                }
            );
    
            passwordForm.querySelector('#kt_password_submit').addEventListener('click', function (e) {
                e.preventDefault();
                console.log('click');
                const password = $("#newpassword").val();
                $.ajax({
                    url: '<?php echo base_url(); ?>changePassword',
                    type: 'POST',
                    data: {
                        'pass': password
                        
                    },
                    success: function(data) {
                        var json = data;
                        console.log(json);
                        if (json.result == 'successed') {
                            console.log(json.message);
                        }else{
                            console.log(json.message);
                        }
                    }
                });
    
                validation.validate().then(function (status) {
                    if (status == 'Valid') {
                        swal.fire({
                            text: "Sent password reset. Completed",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then(function(){
                            passwordForm.reset();
                            validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                            toggleChangePassword();
                        });
                    } else {
                        swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        });
                    }
                });
            });
        }
    
        // Public methods
        return {
            init: function () {
                signInForm = document.getElementById('kt_signin_change_email');
                signInMainEl = document.getElementById('kt_signin_email');
                signInEditEl = document.getElementById('kt_signin_email_edit');
                passwordMainEl = document.getElementById('kt_signin_password');
                passwordEditEl = document.getElementById('kt_signin_password_edit');
                signInChangeEmail = document.getElementById('kt_signin_email_button');
                signInCancelEmail = document.getElementById('kt_signin_cancel');
                passwordChange = document.getElementById('kt_signin_password_button');
                passwordCancel = document.getElementById('kt_password_cancel');
    
                initSettings();
                handleChangeEmail();
                handleChangePassword();
            }
        }
    }();
    
    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTAccountSettingsSigninMethods.init();
    });

</script>
<script>
    // Class definition
    var KTAccountSettingsDeactivateAccount = function () {
        // Private variables
        var form;
        var validation;
        var submitButton;
    
        // Private functions
        var initValidation = function () {
            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            validation = FormValidation.formValidation(
                form,
                {
                    fields: {
                        deactivate: {
                            validators: {
                                notEmpty: {
                                    message: 'Please check the box to deactivate your account'
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        submitButton: new FormValidation.plugins.SubmitButton(),
                        //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );
        }
    
        var handleForm = function () {
            submitButton.addEventListener('click', function (e) {
                e.preventDefault();
    
                validation.validate().then(function (status) {
                    if (status == 'Valid') {
    
                        swal.fire({
                            text: "Are you sure you would like to deactivate your account?",
                            icon: "warning",
                            buttonsStyling: false,
                            showDenyButton: true,
                            confirmButtonText: "Yes",
                            denyButtonText: 'No',
                            customClass: {
                                confirmButton: "btn btn-light-primary",
                                denyButton: "btn btn-danger"
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: '<?php echo base_url(); ?>deactivate',
                                    type: 'POST',
                                    data: {
                                        'id': "<?= session()->get('id');?>",
                                    },
                                    success: function(data) {
                                        var json = data;
                                        console.log(json);
                                        if (json.result == 'successed') {
                                            console.log(json.message);
                                            window.location.href = 'logout';
                                        }else{
                                            console.log(json.message);
                                        }
                                    }
                                });
                                Swal.fire({
                                    text: 'Your account has been deactivated.', 
                                    icon: 'success',
                                    confirmButtonText: "Ok",
                                    buttonsStyling: false,
                                    customClass: {
                                        confirmButton: "btn btn-light-primary"
                                    }
                                })
                            } else if (result.isDenied) {
                                Swal.fire({
                                    text: 'Account not deactivated.', 
                                    icon: 'info',
                                    confirmButtonText: "Ok",
                                    buttonsStyling: false,
                                    customClass: {
                                        confirmButton: "btn btn-light-primary"
                                    }
                                })
                            }
                        });
    
                    } else {
                        swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-light-primary"
                            }
                        });
                    }
                });
            });
        }
    
        // Public methods
        return {
            init: function () {
                form = document.querySelector('#kt_account_deactivate_form');
    
                if (!form) {
                    return;
                }
                
                submitButton = document.querySelector('#kt_account_deactivate_account_submit');
    
                initValidation();
                handleForm();
            }
        }
    }();
    
    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTAccountSettingsDeactivateAccount.init();
    });

</script>
<script>
    $("#tab_user").addClass('active');
    $("#kt_app_sidebar_secondary_user").addClass('show active');
</script>