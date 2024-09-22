<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row gy-5 gx-xl-10">
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
        </div>
        <!--begin::Order details page-->
        <div class="d-flex flex-column gap-7 gap-lg-10">
            <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">Pending Ticket</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" hidden data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">Urgent Order</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_history">In progress</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin::Button-->
                <!--begin::Dropdowns-->
                    <!--begin::Dropdowns-->
                    <div class="d-flex">
                        <select id="month" class="form-select me-3" aria-label="Select month">
                            <?php
                            $currentMonth = date('m');

                            $months = [
                                '01' => 'January', '02' => 'February', '03' => 'March', '04' => 'April',
                                '05' => 'May', '06' => 'June', '07' => 'July', '08' => 'August',
                                '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'
                            ];
                            foreach ($months as $value => $month) {
                                $selected = ($value == $currentMonth) ? 'selected' : '';
                                echo "<option value=\"$value\" $selected>$month</option>";
                            }
                            ?>
                        </select>

                        <select id="year" class="form-select" aria-label="Select year">
                            <?php
                            $currentYear = date('Y');

                            for ($year = $currentYear; $year <= $currentYear + 6; $year++) {
                                $selected = ($year == $currentYear) ? 'selected' : '';
                                echo "<option value=\"$year\" $selected>$year</option>";
                            }
                            ?>
                        </select>
                    </div>
                <!--end::Dropdowns-->
            </div>

            
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Contacts App- Getting Started-->
                        <div class="row g-7">
                            <!--begin::Contact groups-->
                            <div class="col-lg-6 col-xl-3">
                                <!--begin::Contact group wrapper-->
                                <div class="card card-flush">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7" id="kt_chat_contacts_header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Issue</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-5">
                                        <!--begin::Contact groups-->
                                        <div id="actionTypeContainer">
                                           
                                        </div>
                                        <!--end::Contact groups-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Contact group wrapper-->
                            </div>
                            <!--end::Contact groups-->
                            <!--begin::Content-->
                            <div class="col-xl-9">
                                <!--begin::Card-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Pending Ticket</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                       <div id="loadtable"></div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Contacts App- Getting Started-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Contacts App- Getting Started-->
                        <div class="row g-7">
                            <!--begin::Contact groups-->
                            <div class="col-lg-6 col-xl-3">
                                <!--begin::Contact group wrapper-->
                                <div class="card card-flush">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7" id="kt_chat_contacts_header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>Issue</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-5">
                                        <!--begin::Contact groups-->
                                        <div class="d-flex flex-column gap-5">
                                            <?php foreach ($commentTypeInprogress as $row):?>
                                            <!--begin::Contact group-->
                                            <div class="d-flex flex-stack">
                                                <a style="cursor: pointer;" onclick="handleIssueInprogress('<?=$row->id;?>')" id="issueinprogress<?=$row->id;?>" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary"><?= $row->commentName; ?></a>
                                                <div class="badge badge-light-primary"><?= $row->comment_count; ?></div>
                                            </div>
                                            <!--begin::Contact group-->
                                            <script>

                                                function handleIssueInprogress(rowid) {
                                                    var selectedMonth = $('#month').val();
                                                    var selectedYear = $('#year').val();
                                                    $('#loadtableInprogress').load('<?= base_url(); ?>loadtable/' + rowid + '/inprogress/' + selectedMonth + '/' + selectedYear);
                                                    console.log(rowid);

                                                    // Remove the active class from all issues
                                                    $('a[id^="issueinprogress"]').removeClass('text-primary').addClass('text-gray-800');
                                                    // Add active class to the selected issue
                                                    $('#issueinprogress' + rowid).addClass('text-primary').removeClass('text-gray-800');
                                                }
                                            </script>
                                            <?php endforeach;?>
                                        </div>
                                        <!--end::Contact groups-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Contact group wrapper-->
                            </div>
                            <!--end::Contact groups-->
                            <!--begin::Content-->
                            <div class="col-xl-9">
                                <!--begin::Card-->
                                <div class="card card-flush py-4 flex-row-fluid">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>In Progress</h2>
                                        </div>
                                    </div>


                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                       <div id="loadtableInprogress"></div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Contacts App- Getting Started-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Order details page-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->
<script>
    $("#kt_header_navs_support").addClass('active');
    $("#kt_header_navs_tab_3").addClass('active show');
    $("#dashboardSupportMenu").addClass('btn-light-primary');
    $('#actionTypeContainer').load('<?= base_url(); ?>loadbadgeCountPending/1');

    // เพิ่มฟังก์ชันนี้ที่ด้านล่างของไฟล์
    function updateContent() {
        var selectedMonth = $('#month').val();
        var selectedYear = $('#year').val();
        var activeIssueId = $('a[id^="issuepending"].text-primary').attr('id').replace('issuepending', '');   
        var activeIssueIdInprogress = $('a[id^="issueinprogress"].text-primary').attr('id').replace('issueinprogress', '');
        
        // อัปเดตเนื้อหาสำหรับ Pending Ticket

        $('#loadtable').load('<?= base_url(); ?>loadtable/' + activeIssueId + '/pending/' + selectedMonth + '/' + selectedYear);
        
        // อัปเดตเนื้อหาสำหรับ In progress

        $('#loadtableInprogress').load('<?= base_url(); ?>loadtable/' + activeIssueIdInprogress + '/inprogress/' + selectedMonth + '/' + selectedYear);
        
        // อัปเดต badge counts

        $('#actionTypeContainer').load('<?= base_url(); ?>loadbadgeCountPending/' + activeIssueId + '/' + selectedMonth + '/' + selectedYear);
    }


    // เพิ่ม event listeners สำหรับ dropdowns
    $('#month, #year').change(function() {
        updateContent();
    });

    // เรียกใช้ฟังก์ชันเมื่อโหลดหน้าเว็บ
    $(document).ready(function() {
        updateContent();
    });
</script>