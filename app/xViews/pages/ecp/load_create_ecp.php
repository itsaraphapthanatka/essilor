<!--begin::Toolbar-->
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">ECP Creation</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="/home/member" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">Create New ECP</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center">
            <button type="button" hidden class="btn btn-primary me-3">New ECP</button>
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
            <form id="add_form" action="<?php echo base_url();?>CreateEcp" method="post" enctype="multipart/form-data">
                <!--begin::Card-->
                <div class="card mb-6">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">ECP Info</h3>
                            </div>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">ECP Code</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="ecpcode" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="ECP Code" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">ECP Name</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="ecpname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="ECP Name" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Payment</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <select name="payment" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                            <option value="credit" selected>Credit</option>
                                            <option value="cash">Cash</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Customer Alert 1</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <select name="customer_alert1" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                            <option value="credit" selected>สาขาท่าพระ แมสฯวิ่ง 2 รอบ</option>
                                            <option value="cash">สาขาพระราม5 แมสฯวิ่งรอบเช้า 1 รอบ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Customer Alert 2</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <select name="customer_alert_2" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                            <option value="credit" selected>สาขาบางบอน แมสฯวิ่งรอบเช้า 1 รอบ</option>
                                            <option value="cash">สาขาพระราม5 แมสฯวิ่งรอบเช้า 2 รอบ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Customer Alert 3</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <select name="customer_alert_3" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                            <option value="credit" selected>สาขาพระราม5 แมสฯวิ่งรอบเช้า 1 รอบ</option>
                                            <option value="cash">สาขาพระราม5 แมสฯวิ่งรอบเช้า 2 รอบ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card mb-6">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Promotion Info</h3>
                            </div>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">ชื่อเรื่อง</label>
                            <div class="col-lg-8">
                                <div class="row">
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="title" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="SA24_0348" value=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">BU</label>
                            <div class="col-lg-8">
                            <div class="col-lg-12 fv-row">
                                <input type="text" name="bu" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Essilor" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Type</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="promo_type" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="โปรร้าน" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Promotion</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="promo_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Selling Right" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Start and End Date</label>
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Detail</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <div class="form-floating">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Leave a comment here" id="Detail" name="detail" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Detail</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card mb-6">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Logistic</h3>
                            </div>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Region</label>
                            <div class="col-lg-8">
                                <div class="row">
                                <div class="col-lg-12 fv-row">
                                        <select name="region" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                            <option value="credit" selected>BKK</option>
                                            <option value="cash">Roi-Et</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">สาย</label>
                            <div class="col-lg-8">
                            <div class="col-lg-12 fv-row">
                                    <select name="routecode" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value="18" selected>18-เพชรเกษม</option>
                                        <option value="19">19-รัชดา</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Code(2)</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="code2" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value="credit" selected>LG-18</option>
                                        <option value="cash">LG-19</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">ไม่โชว์ราคา</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="show_price" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value="no" selected>No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">ทิ้งบิล</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="leave_bill" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value="1" selected>ทิ้งบิล-สนญ.</option>
                                        <option value="2">ทิ้งบิล-สาขา</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">ร้านที่ Comment เปลี่ยนที่ส่ง</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="store_comment" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Remark</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="logis_remark" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">วิ่งเช้ารอบเดียว</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="morning_only" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">วิ่งเย็นรอบเดียว</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="evening_only" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">วิ่งแค่ จ-ศ</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="working_day_only" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Note</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="logis_note" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                        <option value="1" selected>ทิ้งบิล-สนญ.</option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">ส่งที่</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="logis_delivery" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">คอลัมน์1</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="column1" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Note by พี่ดา พี่ตุ่น</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="logis_note2" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                        <option value="1" selected>ทิ้งบิล-สนญ.</option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">comment</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="logis_comment" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value=""></option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card mb-6">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">VIP</h3>
                            </div>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">c_customer_parent_group</label>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="c_customer_parent_group" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="c_customer_parent_group" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Essilor Experts</label>
                            <div class="col-lg-8">
                            <div class="col-lg-12 fv-row">
                                    <input type="text" name="essilor_experts" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Essilor Experts" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Essilor Partner</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="essilor_partner" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Essilor Partner" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nikon Lenswear Partner</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="nikon_lenwear_partner" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Nikon Lenswear Partner" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">อัพเกรด Coating</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="upgrade_coating" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value="yes" selected>Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">อัพเกรด Azio</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="upgrade_azio" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value="yes" selected>Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">อัพเกรด F360</label>
                            <div class="col-lg-8">
                                <div class="col-lg-12 fv-row">
                                    <select name="upgrade_f360" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                        <option value="yes" selected>Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="<?php echo base_url();?>view_ecp" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                        <!-- <button type="button" id="add_submit" class="btn btn-primary px-6">Save Changes</button> -->
                        <button type="button" id="add_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
                <!--end::Card-->
            </form>
        </div>
    <!--end::Post-->
</div>
<!--end::Container-->

<script>
     $("#tab_2").addClass('active');
	 $("#kt_header_navs_tab_2").addClass('active show');
	 $("#create_ecp").addClass('btn-light-primary');
</script>
<script>
     var KTAppEcommerceSaveProduct = function () {
		const handleSubmit = () => {
			// Define variables
			let validator;
			// Get elements
			const form = document.getElementById('add_form');
			const submitButton = document.getElementById('add_submit');
			// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            validator = FormValidation.formValidation(
                form,
                {
                    fields: {
                        'ecpcode': {
                            validators: {
                                notEmpty: {
                                    message: 'ECP Code is required'
                                }
                            }
                        },
                        'ecpname': {
                            validators: {
                                notEmpty: {
                                    message: 'ECP Name is required'
                                }
                            }
                        },
                        'title': {
                            validators: {
                                notEmpty: {
                                    message: 'Title is required'
                                }
                            }
                        },
                        'bu': {
                            validators: {
                                notEmpty: {
                                    message: 'BU is required'
                                }
                            }
                        },
                        'type': {
                            validators: {
                                notEmpty: {
                                    message: 'Type is required'
                                }
                            }
                        },
                        'promotion': {
                            validators: {
                                notEmpty: {
                                    message: 'Promotion is required'
                                }
                            }
                        },
                        'calendar_event_start_date': {
                            validators: {
                                notEmpty: {
                                    message: 'Start Date is required'
                                }
                            }
                        },
                        'calendar_event_end_date': {
                            validators: {
                                notEmpty: {
                                    message: 'End Date is required'
                                }
                            }
                        },
                        'detail': {
                            validators: {
                                notEmpty: {
                                    message: 'detail is required'
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
			// Handle submit button
			submitButton.addEventListener('click', e => {
				// e.preventDefault();
				// Validate form before submit
				if (validator) {
					validator.validate().then(function (status) {
						if (status == 'Valid') {
							submitButton.setAttribute('data-kt-indicator', 'on');
							// Disable submit button whilst loading
							submitButton.disabled = true;
							var frm = $('#add_form');
							frm.submit(function (ev) {
								$.ajax({
									type: frm.attr('method'),
									url: frm.attr('action'),
									data: frm.serialize(),
										success: function (data) {
											console.log(data);

                                        // setTimeout(function () {
											submitButton.removeAttribute('data-kt-indicator');
											Swal.fire({
												text: data.message,
												icon: data.status,
												buttonsStyling: false,
												confirmButtonText: "Ok, got it!",
												customClass: {
													confirmButton: "btn btn-primary"
												}
											}).then(function (result) {
												if (result.isConfirmed) {
													// Enable submit button after loading
													submitButton.disabled = false;
													// Redirect to customers list page
													window.location.href = "<?php echo base_url();?>view_ecp";
												}
											});
										// }, 2000);
									}
								});
								ev.preventDefault();

							});
							$("#add_form").submit();
						}
					});
				}
			})
		}

	 	// Public methods
	 	return {
	 		init: function () {
				handleSubmit();
	 		}
	 	};
	 }();

     KTUtil.onDOMContentLoaded(function () {
		 KTAppEcommerceSaveProduct.init();
	 });
     $("#kt_calendar_datepicker_start_date").flatpickr();
     $("#kt_calendar_datepicker_end_date").flatpickr();
</script>