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
               <!--begin::Card-->
               <div class="card">
                   <!--begin::Card header-->
                   <div class="card-header">
                       <h2 class="card-title fw-bold">ตั้งค่าเวลา</h2>
                       <div class="card-toolbar">
                           <button class="btn btn-flex btn-primary" data-kt-calendar="add">
                           <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                           <span class="svg-icon svg-icon-2">
                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                   <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                               </svg>
                           </span>
                           <!--end::Svg Icon-->ตั้งค่าเวลา</button>
                       </div>
                   </div>
                   <!--end::Card header-->
                   <!--begin::Card body-->
                   <div class="card-body">
                       <!--begin::Calendar-->
                       <div id="kt_calendar_app"></div>
                       <!--end::Calendar-->
                   </div>
                   <!--end::Card body-->
               </div>
               <!--end::Card-->
               <!--begin::Modals-->
               <!--begin::Modal - New Product-->
               <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                   <!--begin::Modal dialog-->
                   <div class="modal-dialog modal-dialog-centered mw-850px">
                       <!--begin::Modal content-->
                       <div class="modal-content">
                           <!--begin::Form-->
                           <form class="form" action="<?php echo base_url(); ?>setupCalendar" method="post" enctype="multipart/form-data" id="kt_modal_add_event_form">
                               <!--begin::Modal header-->
                               <div class="modal-header">
                                   <!--begin::Modal title-->
                                   <h2 class="fw-bold" data-kt-calendar="title">Add Event</h2>
                                   <!--end::Modal title-->
                                   <!--begin::Close-->
                                   <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
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
                               <div class="modal-body py-10 px-lg-17">
                                   <!--begin::Input group-->
                                   <div class="row row-cols-lg-3 g-10">
                                       <div class="col">
                                            <div class="fv-row mb-9">
                                                <select class="form-select" name="calendartype" onChange="chktype();" id="calendartype">
                                                    <option value="3">วัน</option>
                                                    <option value="2">สัปดาห์</option>
                                                    <option value="1">เดือน</option>
                                                </select>
                                            </div>
                                      </div>
                                       <div class="col" id="monthdiv">
                                            <div class="fv-row mb-9" >
                                                <select class="form-select" data-control="select2" data-placeholder="Select an option" name="calendarmonth" id="calendarmonth">
                                                    <?php foreach($month as $month){?>
                                                    <option value="<?=$month['month_num'];?>"><?=$month['month_name_th'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                      </div>
                                      <div class="col" id="datebetweendiv">
                                           <div class="fv-row">
                                               <!--begin::Input-->
                                               <input class="form-control form-control-solid" name="calendar_event_between_date" placeholder="Pick a start date" id="kt_calendar_datepicker_between_date" />
                                               <!--end::Input-->
                                           </div>
                                       </div>
                                      <div class="col" id="datedaydiv">
                                           <div class="fv-row">
                                               <!--begin::Input-->
                                               <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                               <!--end::Input-->
                                           </div>
                                       </div>
                                       <div class="col" id="monthdivyear">
                                           <div class="fv-row mb-9" >
                                               <select class="form-select" data-control="select2" data-placeholder="Select an option" name="calendaryear" id="calendaryear">
                                                   <option value="2023">2023</option>
                                                   <option value="2024">2024</option>
                                                   <option value="2025">2025</option>
                                                   <option value="2026">2026</option>
                                                   <option value="2027">2027</option>
                                                   <option value="2028">2028</option>
                                                   <option value="2029">2029</option>
                                                   <option value="2030">2030</option>
                                               </select>
                                           </div>
                                       </div>
                                  </div>
                                  <!--end::Input group-->
                                  <div id="dateactive">
                                      <div class="d-flex">
                                          <!--begin::Stat-->
                                          <div class="border border-primary border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                              <!--begin::Date-->                                     
                                              <span class="fs-6 text-gray-700 fw-bold">วันทำการ </span>                                
                                              <!--end::Date-->
                                      
                                              <div class="fv-row mt-5 mb-5">
                                                     <!--begin::Checkbox-->
                                                     <?php foreach($days as $day){?>
                                                     <label class="form-check form-check-custom form-check-inline form-check-solid">
                                                         <input class="form-check-input" type="checkbox" value="<?=$day->day_num;?>" id="kt_calendar_datepicker_allday<?=$day->id;?>" />
                                                         <span class="fw-semibold" for="kt_calendar_datepicker_allday"><?= $day->day;?></span>
                                                        <input type="hidden" id="chkvalue<?=$day->id;?>" name="checkday[]" />
                                                     </label>
                                                     <script>
                                                         $("#kt_calendar_datepicker_allday<?=$day->id;?>").on('click',function(){
                                                             const chk = $("#kt_calendar_datepicker_allday<?=$day->id;?>").prop('checked');
                                                             if (chk == true) {
                                                                 $("#chkvalue<?=$day->id;?>").val('1');
                                                             }else{
                                                                 $("#chkvalue<?=$day->id;?>").val('0');
                                                             }
                                                         })
                                                     </script>
                                                     <?php } ?>
                                                     <!--end::Checkbox-->
                                                 </div>
                                          </div>
                                          <!--end::Stat-->                       
                                      </div>
                                  </div>
                                  <div class="d-flex">
                                    <div class="border border-primary border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                        <span class="fs-6 text-gray-700 fw-bold">ช่วงเวลา </span>   
                                        <div id="kt_docs_repeater_basic">
                                       <!--begin::Form group-->
                                       <div class="form-group ms-2">
                                           <div data-repeater-list="kt_docs_repeater_basic">
                                               <div data-repeater-item>
                                                  <div class="form-group row position-relative mt-6">
                                                      <div class="col-md-3">
                                                          <label class="form-label">เริ่ม:</label>
                                                          <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" id="timerowmo" name="timestart" value=""/>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <label class="form-label">สิ้นสุด:</label>
                                                          <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" id="etimerowmo" name="tmeend" value=""/>
                                                      </div>
                                                      <div class="col-md-2">
                                                          <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                              <input class="form-check-input" type="checkbox" id="form_checkbox" name="chkopen" />
                                                              <label class="form-check-label" for="form_checkbox">
                                                              เปิดใช้งาน
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                              ลบแถว
                                                          </a>
                                                      </div>
                                                  </div>
                                               </div>
                                           </div>
                                       </div>
                                       <!--end::Form group-->
                                       <!--begin::Form group-->
                                       <div class="form-group mt-5">
                                           <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                               <i class="ki-duotone ki-plus fs-3"></i>
                                               เพิ่มเวลา
                                           </a>
                                       </div>
                                       <!--end::Form group-->
                                   </div>
                                    </div>
                                  </div>
                                  <br/>
                                    <div id="limittime">
                                        <div class="d-flex">
                                        <!--begin::Stat-->
                                        <div class="border border-warning border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-3 col-form-label required fw-semibold fs-6">จำกัดเวลาทำการ:</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-4">
                                                   <input type="text" class="form-control text-center" placeholder="3" aria-label="จำกัดเวลาทำการ" name="limitdate" aria-describedby="basic-addon2" value="3"/>
                                                <!--end::Col-->
                                                </div>
                                                <label class="col-lg-3 col-form-label fw-semibold fs-6">ครั้งต่อวัน</label>
                                            </div> 
                                        </div>
                                        <!--end::Stat-->
                                        </div>
                                    </div>
                                   <!--end::Input group-->
                               </div>
                               <!--end::Modal body-->
                               <!--begin::Modal footer-->
                               <div class="modal-footer flex-center">
                                   <!--begin::Button-->
                                   <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">ยกเลิก</button>
                                   <!--end::Button-->
                                   <!--begin::Button-->
                                   <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                       <span class="indicator-label">Confirm</span>
                                       <span class="indicator-progress">กำลังดำเนินการ...
                                       <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                   </button>
                                   <!--end::Button-->
                               </div>
                               <!--end::Modal footer-->
                           </form>
                           <!--end::Form-->
                       </div>
                   </div>
               </div>
               <!--end::Modal - New Product-->
               <!--begin::Modal - New Product-->
               <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                   <!--begin::Modal dialog-->
                   <div class="modal-dialog modal-dialog-centered mw-850px">
                       <!--begin::Modal content-->
                       <div class="modal-content">
                           <!--begin::Modal header-->
                           <div class="modal-header border-0 justify-content-end">
                               <!--begin::Edit-->
                               <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
                                   <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                   <span class="svg-icon svg-icon-2">
                                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                           <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                           <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                       </svg>
                                   </span>
                                   <!--end::Svg Icon-->
                               </div>
                               <!--end::Edit-->
                               <!--begin::Close-->
                               <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
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
                           <div class="loadedit" id="loadedit">
                           
                           </div>
                           <!--end::Modal body-->
                       </div>
                   </div>
               </div>
               <!--end::Modal - New Product-->
               <!--end::Modals-->
           </div>
           <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<script>
    "use strict";

// Class definition
var KTAppCalendar = function () {
    // Shared variables
    // Calendar variables
    var calendar;
    var data = {
        id: '',
        eventName: '',
        eventDescription: '',
        eventLocation: '',
        eventMobile: '',
        startDate: '',
        endDate: '',
        calendartype: '',
        calendarmonth: '',
        allDay: false
    };

    // Add event variables
    var eventName;
    var eventDescription;
    var eventLocation;
    var eventMobile;
    var startDatepicker;
    var startFlatpickr;
    var endDatepicker;
    var endFlatpickr;
    var calendarmonth;
    // var startTimepicker;
    var startTimeFlatpickr;
    // var endTimepicker
    var endTimeFlatpickr;
    var calendartype;
    var modal;
    var modalTitle;
    var form;
    var validator;
    var addButton;
    var submitButton;
    var cancelButton;
    var closeButton;

    // View event variables
    var viewEventName;
    var viewAllDay;
    var viewEventDescription;
    var viewEventLocation;
    var viewEventMobile;
    var viewStartDate;
    var viewEndDate;
    var viewModal;
    var viewEditButton;
    var viewDeleteButton;
    var viewcalendartype;


    // Private functions
    var initCalendarApp = function () {
        // Define variables
        var calendarEl = document.getElementById('kt_calendar_app');
        var todayDate = moment().startOf('day');
        var YM = todayDate.format('YYYY-MM');
        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
        var TODAY = todayDate.format('YYYY-MM-DD');
        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

        // Init calendar --- more info: https://fullcalendar.io/docs/initialize-globals
        calendar = new FullCalendar.Calendar(calendarEl, {
            //locale: 'es', // Set local --- more info: https://fullcalendar.io/docs/locale
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            initialDate: TODAY,
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            height: 550,

            // Select dates action --- more info: https://fullcalendar.io/docs/select-callback
            select: function (arg) {
                formatArgs(arg);
                // handleNewEvent();
            },

            // Click event --- more info: https://fullcalendar.io/docs/eventClick
            eventClick: function (arg) {
                formatArgs({
                    id: arg.event.id,
                    title: arg.event.title,
                    description: arg.event.extendedProps.description,
                    location: arg.event.extendedProps.location,
                    mobile: arg.event.extendedProps.mobile,
                    startStr: arg.event.startStr,
                    endStr: arg.event.endStr,
                    allDay: arg.event.allDay
                });
                
                handleViewEvent();
            },

            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
            eventColor: 'purple',
            events: '<?php echo base_url();?>getsetmonthtime',

            // Handle changing calendar views --- more info: https://fullcalendar.io/docs/datesSet
            datesSet: function(){
                // do some stuff
            }
        });

        calendar.render();
    }

    // Init validator
    const initValidator = () => {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    // 'calendar_event_name': {
                    //     validators: {
                    //         notEmpty: {
                    //             message: 'Event name is required'
                    //         }
                    //     }
                    // },
                    'calendar_event_start_date': {
                        validators: {
                            notEmpty: {
                                message: 'Start date is required'
                            }
                        }
                    },
                    // 'calendar_event_end_date': {
                    //     validators: {
                    //         notEmpty: {
                    //             message: 'End date is required'
                    //         }
                    //     }
                    // }
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
    }

    // Initialize datepickers --- more info: https://flatpickr.js.org/
    const initDatepickers = () => {
        startFlatpickr = flatpickr(startDatepicker, {
            enableTime: false,
            dateFormat: "Y-m-d",
            mode: "range",
            minDate: "today",
            weekNumbers: true,
            defaultDate: ["today"],
        });

        endFlatpickr = flatpickr(endDatepicker, {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today"
        });

        // startTimeFlatpickr = flatpickr(startTimepicker, {
        //     enableTime: true,
        //     noCalendar: true,
        //     dateFormat: "H:i",
        // });

        // endTimeFlatpickr = flatpickr(endTimepicker, {
        //     enableTime: true,
        //     noCalendar: true,
        //     dateFormat: "H:i",
        // });
    }

    // Handle add button
    const handleAddButton = () => {
        addButton.addEventListener('click', e => {
            // Reset form data
            data = {
                id: '',
                eventName: '',
                eventDescription: '',
                startDate: new Date(),
                endDate: new Date(),
                allDay: false
            };
            handleNewEvent();
            
        });
    }

    // Handle add new event
    const handleNewEvent = () => {
        // Update modal title
        modalTitle.innerText = "ตั้งค่าช่วงเวลา";

        modal.show();

        // Select datepicker wrapper elements
        const datepickerWrappers = form.querySelectorAll('[data-kt-calendar="datepicker"]');

        // Handle all day toggle
        // const allDayToggle = form.querySelector('#kt_calendar_datepicker_allday');
        // allDayToggle.addEventListener('click', e => {
        //     if (e.target.checked) {
        //         datepickerWrappers.forEach(dw => {
        //             dw.classList.add('d-none');
        //         });
        //     } else {
        //         endFlatpickr.setDate(data.startDate, true, 'Y-m-d');
        //         datepickerWrappers.forEach(dw => {
        //             dw.classList.remove('d-none');
        //         });
        //     }
        // });

        populateForm(data);

        // Handle submit form
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        // Simulate form submission
                        setTimeout(function () {
                            // Simulate form submission
                            submitButton.removeAttribute('data-kt-indicator');

                            // Show popup confirmation 
                            Swal.fire({
                                text: "New event added to calendar!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();

                                    // Enable submit button after loading
                                    submitButton.disabled = false;

                                    // Detect if is all day event
                                    // let allDayEvent = false;
                                    // if (allDayToggle.checked) { allDayEvent = true; }
                                    // if (startTimeFlatpickr.selectedDates.length === 0) { allDayEvent = true; }

                                    // Merge date & time
                                    var startDateTime = moment(startFlatpickr.selectedDates[0]).format();
                                    var endDateTime = moment(startFlatpickr.selectedDates[0]).format();
                                    // var endDateTime = moment(endFlatpickr.selectedDates[endFlatpickr.selectedDates.length - 1]).format();
                                    // if (!allDayEvent) {
                                        const startDate = moment(startFlatpickr.selectedDates[0]).format('YYYY-MM-DD');
                                        const endDate = startDate;
                                        // const startTime = moment(startTimeFlatpickr.selectedDates[0]).format('HH:mm:ss');
                                        // const endTime = moment(endTimeFlatpickr.selectedDates[0]).format('HH:mm:ss');

                                        // startDateTime = startDate + 'T' + startTime;
                                        // endDateTime = endDate + 'T' + endTime;
                                        startDateTime = startDate;
                                        endDateTime = endDate;
                                        const calendarmonth = document.getElementById("calendarmonth").value;
                                        const calendartype = document.getElementById("calendartype").value;
                                        const kt_calendar_datepicker_start_date = document.getElementById("kt_calendar_datepicker_start_date").value;
                                        console.log(calendartype)
                                        // $.ajax({
                                        //     url: '<?php echo base_url(); ?>setupCalendar',
                                        //     type: 'POST',
                                        //     data: {
                                        //         'uid': uid(),
                                        //         'type': calendartype,
                                        //         'title': "Setup",
                                        //         'description': "Event",
                                        //         'location': "Lo",
                                        //         'mobile': "0",
                                        //         'dstart': kt_calendar_datepicker_start_date,
                                        //         // 'stime': startTime,
                                        //         'enddate': kt_calendar_datepicker_start_date,
                                        //         // 'etime': endTime
                                        //     },
                                        //     success: function(data) {
                                        //         var json = data;
                                        //         console.log(json);
                                        //         // if (json.result == 'true') {
                                        //         //     $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                                        //         // }else{
                                        //         //     $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                                        //         // }
                                        //     }
                                        // });
                                        $("#kt_modal_add_event_form").submit(); 
                                    // }
                                   
                                    // Add new event to calendar
                                    calendar.addEvent({
                                        id: uid(),
                                        title: eventName.value,
                                        description: eventDescription.value,
                                        location: eventLocation.value,
                                        mobile: eventMobile.value,
                                        start: startDateTime,
                                        end: endDateTime,
                                        // allDay: allDayEvent
                                    });
                                    calendar.render();
                                    
                                    // Reset form for demo purposes only
                                    form.reset();
                                }
                            });

                            //form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning 
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
    }

    // Handle edit event
    const handleEditEvent = () => {
        // Update modal title
        modalTitle.innerText = "Edit an Event";

        modal.show();

        // Select datepicker wrapper elements
        const datepickerWrappers = form.querySelectorAll('[data-kt-calendar="datepicker"]');

        // Handle all day toggle
        // const allDayToggle = form.querySelector('#kt_calendar_datepicker_allday');
        // allDayToggle.addEventListener('click', e => {
        //     if (e.target.checked) {
        //         datepickerWrappers.forEach(dw => {
        //             dw.classList.add('d-none');
        //         });
        //     } else {
        //         endFlatpickr.setDate(data.startDate, true, 'Y-m-d');
        //         datepickerWrappers.forEach(dw => {
        //             dw.classList.remove('d-none');
        //         });
        //     }
        // });

        populateForm(data);

        // Handle submit form
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable submit button whilst loading
                        submitButton.disabled = true;

                        // Simulate form submission
                        setTimeout(function () {
                            // Simulate form submission
                            submitButton.removeAttribute('data-kt-indicator');

                            // Show popup confirmation 
                            Swal.fire({
                                text: "New event added to calendar!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();

                                    // Enable submit button after loading
                                    submitButton.disabled = false;

                                    // Remove old event
                                    calendar.getEventById(data.id).remove();
                                    console.log(data.id);

                                    // Detect if is all day event
                                    // let allDayEvent = false;
                                    // if (allDayToggle.checked) { allDayEvent = true; }
                                    // if (startTimeFlatpickr.selectedDates.length === 0) { allDayEvent = true; }

                                    // Merge date & time
                                    var startDateTime = moment(startFlatpickr.selectedDates[0]).format();
                                    var endDateTime = moment(endFlatpickr.selectedDates[endFlatpickr.selectedDates.length - 1]).format();
                                    // if (!allDayEvent) {
                                        const startDate = moment(startFlatpickr.selectedDates[0]).format('YYYY-MM-DD');
                                        const endDate = startDate;
                                        // const startTime = moment(startTimeFlatpickr.selectedDates[0]).format('HH:mm:ss');
                                        // const endTime = moment(endTimeFlatpickr.selectedDates[0]).format('HH:mm:ss');

                                        // startDateTime = startDate + 'T' + startTime;
                                        // endDateTime = endDate + 'T' + endTime;
                                        startDateTime = startDate;
                                        endDateTime = endDate;
                                    // }

                                    // Add new event to calendar
                                    calendar.addEvent({
                                        id: uid(),
                                        title: eventName.value,
                                        description: eventDescription.value,
                                        location: eventLocation.value,
                                        mobile: eventMobile.value,
                                        start: startDateTime,
                                        end: endDateTime,
                                        // allDay: allDayEvent
                                    });
                                    calendar.render();

                                    // Reset form for demo purposes only
                                    form.reset();
                                }
                            });

                            //form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning 
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
    }

    // Handle view event
    const handleViewEvent = () => {
        viewModal.show();
        var startDateMod;
        startDateMod = moment(data.startDate).format('Do MMM, YYYY');
        var i = 0;
        function move() {
          if (i == 0) {
            i = 1;
            var elem = document.getElementById("loadedit");
            var width = 1;
            var id = setInterval(frame, 10);
            function frame() {
              if (width >= 100) {
                clearInterval(id);
                i = 0;
              } else {
                width++;
                elem.style.width = width + "%";
              }
            }
          }
        }
        $(".loadedit").html(`<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Loading...</div>
            </div>`);
        $(".loadedit").load("/load_time?startdate="+data.startDate);
// 
//         // Detect all day event
//         var eventNameMod;
//         var startDateMod;
//         var endDateMod;
// 
//         // Generate labels
//         if (data.allDay) {
//             eventNameMod = 'All Day';
//             startDateMod = moment(data.startDate).format('Do MMM, YYYY');
//             endDateMod = moment(data.endDate).format('Do MMM, YYYY');
//         } else {
//             eventNameMod = '';
//             startDateMod = moment(data.startDate).format('DD/MM/YYYY - HH:mm');
//             endDateMod = moment(data.endDate).format('DD/MM/YYYY - HH:mm');
//         }
// 
//         // Populate view data
//         // console.log(data);
//         viewEventName.innerText = data.eventName;
//         viewEventDescription.innerText = data.eventDescription ? data.eventDescription : '--';
//         viewEventLocation.innerText = data.eventLocation ? data.eventLocation : '--';
//         viewEventMobile.innerText = data.eventMobile ? data.eventMobile : '--';
//         viewStartDate.innerText = startDateMod;
//         viewEndDate.innerText = endDateMod;
//         
    }

    // Handle delete event
    const handleDeleteEvent = () => {
        viewDeleteButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to delete this event?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        url: '<?php echo base_url(); ?>deletedateCalendar',
                        type: 'POST',
                        data: {
                            'dstart': data.startDate,
                        },
                        success: function(result) {
                            var json = result;
                            console.log(json);
                            toastr.success(json.message);
                            calendar.getEventById(data.id).remove();
                        }
                    });
                        // console.log(data.startDate);
                        viewModal.hide(); // Hide modal				
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your event was not deleted!.",
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

    // Handle edit button
    const handleEditButton = () => {
        viewEditButton.addEventListener('click', e => {
            e.preventDefault();

            viewModal.hide();
            handleEditEvent();
        });
    }

    // Handle cancel button
    const handleCancelButton = () => {
        // Edit event modal cancel button
        cancelButton.addEventListener('click', function (e) {
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
                    modal.hide(); // Hide modal				
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

    // Handle close button
    const handleCloseButton = () => {
        // Edit event modal close button
        closeButton.addEventListener('click', function (e) {
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
                    modal.hide(); // Hide modal				
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

    // Handle view button
    const handleViewButton = () => {
        const viewButton = document.querySelector('#kt_calendar_event_view_button');
        viewButton.addEventListener('click', e => {
            e.preventDefault();

            hidePopovers();
            handleViewEvent();
           
        });
    }

    // Helper functions

    // Reset form validator on modal close
    const resetFormValidator = (element) => {
        // Target modal hidden event --- For more info: https://getbootstrap.com/docs/5.0/components/modal/#events
        element.addEventListener('hidden.bs.modal', e => {
            if (validator) {
                // Reset form validator. For more info: https://formvalidation.io/guide/api/reset-form
                validator.resetForm(true);
            }
        });
    }

    // Populate form 
    const populateForm = () => {
        // eventName.value = data.eventName ? data.eventName : '';
        // eventDescription.value = data.eventDescription ? data.eventDescription : '';
        // eventLocation.value = data.eventLocation ? data.eventLocation : '';
        // eventMobile.value = data.eventMobile ? data.eventMobile : '';
        startFlatpickr.setDate(data.startDate, true, 'Y-m-d');

        // Handle null end dates
        const endDate = data.endDate ? data.endDate : moment(data.startDate).format();
        endFlatpickr.setDate(endDate, true, 'Y-m-d');

        const allDayToggle = form.querySelector('#kt_calendar_datepicker_allday');
        const datepickerWrappers = form.querySelectorAll('[data-kt-calendar="datepicker"]');
        if (data.allDay) {
            // allDayToggle.checked = true;
            datepickerWrappers.forEach(dw => {
                dw.classList.add('d-none');
            });
        } else {
            // startTimeFlatpickr.setDate(data.startDate, true, 'Y-m-d H:i');
            // endTimeFlatpickr.setDate(data.endDate, true, 'Y-m-d H:i');
            endFlatpickr.setDate(data.startDate, true, 'Y-m-d');
            // allDayToggle.checked = false;
            datepickerWrappers.forEach(dw => {
                dw.classList.remove('d-none');
            });
        }
    }

    // Format FullCalendar reponses
    const formatArgs = (res) => {
        data.id = res.id;
        data.eventName = res.title;
        data.eventDescription = res.description;
        data.eventLocation = res.location;
        data.eventMobile = res.mobile;
        data.startDate = res.startStr;
        data.endDate = res.endStr;
        // data.allDay = res.allDay;
    }

    // Generate unique IDs for events
    const uid = () => {
        return Date.now().toString() + Math.floor(Math.random() * 1000).toString();
    }

    return {
        // Public Functions
        init: function () {
            // Define variables
            // Add event modal
            const element = document.getElementById('kt_modal_add_event');
            form = element.querySelector('#kt_modal_add_event_form');
            eventName = form.querySelector('[name="calendar_event_name"]');
            eventDescription = form.querySelector('[name="calendar_event_description"]');
            eventLocation = form.querySelector('[name="calendar_event_location"]');
            eventMobile = form.querySelector('[name="calendar_event_mobile"]');
            startDatepicker = form.querySelector('#kt_calendar_datepicker_between_date');
            endDatepicker = form.querySelector('#kt_calendar_datepicker_start_date');
            calendarmonth = form.querySelector('#calendarmonth');
            // startTimepicker = form.querySelector('#kt_calendar_datepicker_start_time');
            // endTimepicker = form.querySelector('#kt_calendar_datepicker_end_time');
            addButton = document.querySelector('[data-kt-calendar="add"]');
            submitButton = form.querySelector('#kt_modal_add_event_submit');
            cancelButton = form.querySelector('#kt_modal_add_event_cancel');
            closeButton = element.querySelector('#kt_modal_add_event_close');
            modalTitle = form.querySelector('[data-kt-calendar="title"]');
            modal = new bootstrap.Modal(element);

            // View event modal
            const viewElement = document.getElementById('kt_modal_view_event');
            viewModal = new bootstrap.Modal(viewElement);
            viewEventName = viewElement.querySelector('[data-kt-calendar="event_name"]');
            viewAllDay = viewElement.querySelector('[data-kt-calendar="all_day"]');
            viewEventDescription = viewElement.querySelector('[data-kt-calendar="event_description"]');
            viewEventLocation = viewElement.querySelector('[data-kt-calendar="event_location"]');
            viewEventMobile = viewElement.querySelector('[data-kt-calendar="event_mobile"]');
            viewStartDate = viewElement.querySelector('[data-kt-calendar="event_start_date"]');
            viewEndDate = viewElement.querySelector('[data-kt-calendar="event_end_date"]');
            viewEditButton = viewElement.querySelector('#kt_modal_view_event_edit');
            viewDeleteButton = viewElement.querySelector('#kt_modal_view_event_delete');

            initCalendarApp();
            initValidator();
            initDatepickers();
            // handleEditButton();
            handleAddButton();
            handleDeleteEvent();
            handleCancelButton();
            handleCloseButton();
            // resetFormValidator(element);
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppCalendar.init();
});



const monthdiv = document.getElementById("monthdiv");
const monthdivyear = document.getElementById("monthdivyear");
const calendartype = document.getElementById("calendartype").value;
const datebetweendiv = document.getElementById("datebetweendiv");
const datedaydiv = document.getElementById("datedaydiv");
const dateactive = document.getElementById("dateactive");
datedaydiv.style.display = "block";
datebetweendiv.style.display = "none";
monthdiv.style.display = "none";
monthdivyear.style.display = "none";
dateactive.style.display = "none";
function chktype(){
var select = document.getElementById('calendartype');
var value = select.options[select.selectedIndex].value;
console.log(value);
    if(value == '1'){
        monthdiv.style.display = "block";
        monthdivyear.style.display = "block";
        datebetweendiv.style.display = "none";
        datedaydiv.style.display = "none";
        dateactive.style.display = "block";
        dateactive.style.display = "block";
    }else if(value == '2'){
        monthdiv.style.display = "none";
        monthdivyear.style.display = "none";
        datebetweendiv.style.display = "block";
        datedaydiv.style.display = "none";
        dateactive.style.display = "none";
    }else if(value == '3'){
       monthdiv.style.display = "none";
       monthdivyear.style.display = "none";
       datebetweendiv.style.display = "none";
       datedaydiv.style.display = "block";
       dateactive.style.display = "none";
    }
    

}

$('#kt_docs_repeater_basic').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});

$("#tab_appoint").addClass('active');
$("#kt_app_sidebar_secondary_collections").addClass('show active');
</script>