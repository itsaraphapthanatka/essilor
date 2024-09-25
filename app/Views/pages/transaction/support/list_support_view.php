<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row gy-5 gx-xl-10">
            <div id="countView"></div>
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
                        <select id="month" class="form-select me-3" aria-label="Select month" style="width: 150px;">
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
    $('#countView').load('<?= base_url(); ?>loadCountView');
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