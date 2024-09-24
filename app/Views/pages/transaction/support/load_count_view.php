 <!--begin::Col-->
 <div class="col-xl-12 mb-5 mb-xl-10">
    <!--begin::Row-->
    <div class="row g-lg-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-md-4 col-xl-4 mb-5 mb-xl-10">
            <!--begin::Card widget 12-->
            <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10 h-lg-100">
                <!--begin::Card body-->
                <div class="card-body py-9">  
                    <!--begin::Row-->               
                    <div class="row gx-9 h-100">
                        <!--begin::Col-->               
                        <div class="col-sm-6 mb-10 mb-sm-0">
                            <!--begin::value-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Value-->
                                    <span class="fs-3 fw-bold text-gray-800 me-2 lh-1 ls-n2">
                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/arrows/arr070.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"/>
                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"/>
                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"/>
                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"/>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->Today</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-2 fw-semibold text-gray-500">งานรอตรวจ</span>
                                <!--end::Description-->
                            </div>
                            <!--end::value-->
                        </div>
                        <!--end::Col-->  

                        <!--begin::Col-->               
                        <div class="col-sm-6">
                            <!--begin::value-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Value-->
                                    <span class="fs-7hx fw-bold text-gray-800 me-2 lh-1 ls-n2"> <?=$countJobtasksByStatus['pending'];?> </span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::value-->
                        </div>
                        <!--end::Col-->  
                    </div>
                    <!--end::Row-->         
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 12-->
            
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 col-xl-4 mb-5 mb-xl-10">
            <!--begin::Card widget 12-->
            <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10 h-lg-100" style="background-color: #F1416C;background-image:url('<?=base_url();?>theme/demo20/assets/media/patterns/vector-1.png')">
                <!--begin::Card body-->
                <div class="card-body py-9">  
                    <!--begin::Row-->               
                    <div class="row gx-9 h-100">
                        <!--begin::Col-->               
                        <div class="col-sm-6 mb-10 mb-sm-0">
                            <!--begin::value-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Value-->
                                    <span class="fs-3 fw-bold text-white me-2 lh-1 ls-n2">
                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/arrows/arr070.svg-->
                                        <span class="svg-icon svg-icon-white svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"/>
                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"/>
                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"/>
                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"/>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->Today</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-2 fw-semibold text-white">งานที่ตรวจแล้วไม่ผ่าน</span>
                                <!--end::Description-->
                            </div>
                            <!--end::value-->
                        </div>
                        <!--end::Col-->  

                        <!--begin::Col-->               
                        <div class="col-sm-6">
                            <!--begin::value-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Value-->
                                    <span class="fs-7hx fw-bold text-white me-2 lh-1 ls-n2"><?=$countJobtasksByStatus['inProgress'];?></span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::value-->
                        </div>
                        <!--end::Col-->  
                    </div>
                    <!--end::Row-->         
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 12-->
            
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 col-xl-4 mb-5 mb-xl-10">
            <!--begin::Card widget 12-->
            <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10 h-lg-100" style="background: linear-gradient(90deg, #20AA3E 100%, #03A588 50%);">
                <!--begin::Card body-->
                <div class="card-body py-9">  
                    <!--begin::Row-->               
                    <div class="row gx-9 h-100">
                        <!--begin::Col-->               
                        <div class="col-sm-6 mb-10 mb-sm-0">
                            <!--begin::value-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Value-->
                                    <span class="fs-3 fw-bold text-white me-2 lh-1 ls-n2">
                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/metronic/docs/core/html/src/media/icons/duotune/arrows/arr070.svg-->
                                        <span class="svg-icon svg-icon-white svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor"/>
                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor"/>
                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor"/>
                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor"/>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->Today</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-2 fw-semibold text-white">งานที่ตรวจผ่านแล้ว</span>
                                <!--end::Description-->
                            </div>
                            <!--end::value-->
                        </div>
                        <!--end::Col-->  

                        <!--begin::Col-->               
                        <div class="col-sm-6">
                            <!--begin::value-->
                            <div class="mb-4 px-9">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center flex-grow-1">
                                    <!--begin::Value-->
                                    <span class="fs-7hx fw-bold text-white me-2 lh-1 ls-n2"><?=$countJobtasksByStatus['complete'];?></span>
                                    <!--end::Value-->
                                    <!--begin::Label-->

                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::value-->
                        </div>
                        <!--end::Col-->  
                    </div>
                    <!--end::Row-->         
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 12-->
            
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
<!--end::Col-->