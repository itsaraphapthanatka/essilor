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
                           <form class="form" action="#" id="kt_modal_add_event_form">
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
                                                    <option value="<?=$month['month_code'];?>"><?=$month['month_name_th'];?></option>
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
                                                         <input class="form-check-input" type="checkbox" value="<?=$day->day_code;?>" id="kt_calendar_datepicker_allday" name="checkday[]" />
                                                         <span class="fw-semibold" for="kt_calendar_datepicker_allday"><?= $day->day;?></span>
                                                     </label>
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
                                                          <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" id="timerowmo" value=""/>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <label class="form-label">สิ้นสุด:</label>
                                                          <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" id="etimerowmo" value=">"/>
                                                      </div>
                                                      <div class="col-md-2">
                                                          <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                              <input class="form-check-input" type="checkbox" value="" id="form_checkbox" />
                                                              <label class="form-check-label" for="form_checkbox">
                                                              เปิดใช้งาน
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <a href="javascript:;" id="saverowmo" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                              
                                                             <div class="savemos"> บันทึก </div>
                                                          </a>
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
                   <div class="modal-dialog modal-dialog-centered mw-650px">
                       <!--begin::Modal content-->
                       <div class="modal-content">
                           <!--begin::Modal header-->
                           <div class="modal-header border-0 justify-content-end">
                               <!--begin::Edit-->
                               <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
                                   <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                   <span class="svg-icon svg-icon-2">
                                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                           <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                       </svg>
                                   </span>
                                   <!--end::Svg Icon-->
                               </div>
                               <!--end::Edit-->
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
                           <div class="modal-body pt-0 pb-20 px-lg-17">
                               <!--begin::Row-->
                               <div class="d-flex">
                                   <!--begin::Icon-->
                                   <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                   <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                           <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                           <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                                       </svg>
                                   </span>
                                   <!--end::Svg Icon-->
                                   <!--end::Icon-->
                                   <div class="mb-9">
                                       <!--begin::Event name-->
                                       <div class="d-flex align-items-center mb-2">
                                           <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name"></span>
                                           <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                       </div>
                                       <!--end::Event name-->
                                       <!--begin::Event description-->
                                       <div class="fs-6" data-kt-calendar="event_description"></div>
                                       <!--end::Event description-->
                                   </div>
                               </div>
                               <!--end::Row-->
                               <!--begin::Row-->
                               <div class="d-flex align-items-center mb-2">
                                   <!--begin::Icon-->
                                   <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                   <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                           <circle fill="currentColor" cx="12" cy="12" r="8" />
                                       </svg>
                                   </span>
                                   <!--end::Svg Icon-->
                                   <!--end::Icon-->
                                   <!--begin::Event start date/time-->
                                   <div class="fs-6">
                                       <span class="fw-bold">วันที่ริ่มนัด</span>
                                       <span data-kt-calendar="event_start_date"></span>
                                   </div>
                                   <!--end::Event start date/time-->
                               </div>
                               <!--end::Row-->
                               <!--begin::Row-->
                               <div class="d-flex align-items-center mb-9">
                                   <!--begin::Icon-->
                                   <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                   <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                           <circle fill="currentColor" cx="12" cy="12" r="8" />
                                       </svg>
                                   </span>
                                   <!--end::Svg Icon-->
                                   <!--end::Icon-->
                                   <!--begin::Event end date/time-->
                                   <div class="fs-6">
                                       <span class="fw-bold">วันที่สิ้นสุดนัด</span>
                                       <span data-kt-calendar="event_end_date"></span>
                                   </div>
                                   <!--end::Event end date/time-->
                               </div>
                               <!--end::Row-->
                               <!--begin::Row-->
                               <div class="d-flex align-items-center mb-5">
                                   <!--begin::Icon-->
                                   <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                   <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                           <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                       </svg>
                                   </span>
                                   <!--end::Svg Icon-->
                                   <!--end::Icon-->
                                   <!--begin::Event location-->
                                   <div class="fs-6" data-kt-calendar="event_location"></div>
                                   <!--end::Event location-->
                               </div>
                               <!--end::Row-->
                               <!--begin::Row-->
                               <div class="d-flex align-items-center">
                                   <!--begin::Icon-->
                                   <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                   <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                       <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z" fill="currentColor"/>
                                           <path opacity="0.3" d="M19 4H5V20H19V4Z" fill="currentColor"/>
                                       </svg>
                                   </span>
                                   <!--end::Svg Icon-->
                                   <!--end::Icon-->
                                   <!--begin::Event location-->
                                   <div class="fs-6" data-kt-calendar="event_mobile"></div>
                                   <!--end::Event location-->
                               </div>
                               <!--end::Row-->
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
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialDate: TODAY,
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,

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
            minDate: "today",
            weekNumbers: true
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
                                        $.ajax({
                                            url: '<?php echo base_url(); ?>setupCalendar',
                                            type: 'POST',
                                            data: {
                                                'uid': uid(),
                                                'type': calendartype,
                                                'title': "Setup",
                                                'description': "Event",
                                                'location': "Lo",
                                                'mobile': "0",
                                                'dstart': kt_calendar_datepicker_start_date,
                                                // 'stime': startTime,
                                                'enddate': kt_calendar_datepicker_start_date,
                                                // 'etime': endTime
                                            },
                                            success: function(data) {
                                                var json = data;
                                                console.log(json);
                                                // if (json.result == 'true') {
                                                //     $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                                                // }else{
                                                //     $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                                                // }
                                            }
                                        });
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

        // Detect all day event
        var eventNameMod;
        var startDateMod;
        var endDateMod;

        // Generate labels
        if (data.allDay) {
            eventNameMod = 'All Day';
            startDateMod = moment(data.startDate).format('Do MMM, YYYY');
            endDateMod = moment(data.endDate).format('Do MMM, YYYY');
        } else {
            eventNameMod = '';
            startDateMod = moment(data.startDate).format('DD/MM/YYYY - HH:mm');
            endDateMod = moment(data.endDate).format('DD/MM/YYYY - HH:mm');
        }

        // Populate view data
        viewEventName.innerText = data.eventName;
        viewAllDay.innerText = eventNameMod;
        viewEventDescription.innerText = data.eventDescription ? data.eventDescription : '--';
        viewEventLocation.innerText = data.eventLocation ? data.eventLocation : '--';
        viewEventMobile.innerText = data.eventMobile ? data.eventMobile : '--';
        viewStartDate.innerText = startDateMod;
        viewEndDate.innerText = endDateMod;
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
                    calendar.getEventById(data.id).remove();

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
            handleEditButton();
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
const calendartype = document.getElementById("calendartype").value;
const datebetweendiv = document.getElementById("datebetweendiv");
const datedaydiv = document.getElementById("datedaydiv");
const dateactive = document.getElementById("dateactive");
datedaydiv.style.display = "block";
datebetweendiv.style.display = "none";
monthdiv.style.display = "none";
dateactive.style.display = "none";
function chktype(){
var select = document.getElementById('calendartype');
var value = select.options[select.selectedIndex].value;
console.log(value);
    if(value == '1'){
        monthdiv.style.display = "block";
        datebetweendiv.style.display = "none";
        datedaydiv.style.display = "none";
        dateactive.style.display = "block";
    }else if(value == '2'){
        monthdiv.style.display = "none";
        datebetweendiv.style.display = "block";
        datedaydiv.style.display = "none";
        dateactive.style.display = "none";
    }else if(value == '3'){
       monthdiv.style.display = "none";
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