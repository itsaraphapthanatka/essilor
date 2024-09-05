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
                <!--begin::Deactivate Account-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">ตั้งค่าช่วงเวลา</h3>
                            <input type="hidden" id="checkdays">
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_deactivate" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_deactivate_form" class="form">
                        <div class="py-5">
                            <div class="d-flex flex-column flex-md-row rounded border p-10">
                                <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px" role="tablist">
                                    <li class="nav-item w-md-200px me-0 mb-md-2" role="presentation">
                                        <a class="nav-link w-100 active btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_1" aria-selected="false" role="tab">
                                            <i class="ki-duotone ki-icons/duotune/general/gen001.svg fs-2 text-primary"></i>                        
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">จันทร์</span>
                                                <div class="mo">
                                                    <?php foreach($days as $dval){?>
                                                    <?php if($dval->day_code == "mo"){ ?>
                                                        <?php if($dval->status == "active"){ ?>
                                                                <span class="fs-7 text-success">เปิดใช้งาน</span>
                                                            <?php }else{?>
                                                               <span class="fs-7 text-danger">ปิดใช้งาน</span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-md-200px me-0 mb-md-2" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_2" aria-selected="false" tabindex="-1" role="tab">
                                            <i class="ki-duotone ki-icons/duotune/general/gen003.svg fs-2 text-primary"></i>                        
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">อังคาร</span>
                                                <div class="tu">
                                                <?php foreach($days as $dval){?>
                                                    <?php if($dval->day_code == "tu"){ ?>
                                                        <?php if($dval->status == "active"){ ?>
                                                                <span class="fs-7 text-success">เปิดใช้งาน</span>
                                                            <?php }else{?>
                                                               <span class="fs-7 text-danger">ปิดใช้งาน</span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-md-200px" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_3" aria-selected="false" tabindex="-1" role="tab">
                                            <i class="ki-duotone ki-icons/duotune/general/gen017.svg fs-2 text-primary"></i>                        
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">พุธ</span>
                                                <div class="we">
                                                <?php foreach($days as $dval){?>
                                                    <?php if($dval->day_code == "we"){ ?>
                                                        <?php if($dval->status == "active"){ ?>
                                                                <span class="fs-7 text-success">เปิดใช้งาน</span>
                                                            <?php }else{?>
                                                               <span class="fs-7 text-danger">ปิดใช้งาน</span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-md-200px" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_4" aria-selected="false" tabindex="-1" role="tab">
                                            <i class="ki-duotone ki-icons/duotune/general/gen017.svg fs-2 text-primary"></i>                        
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">พฤหัสบดี</span>
                                                <div class="th">
                                                <?php foreach($days as $dval){?>
                                                    <?php if($dval->day_code == "th"){ ?>
                                                        <?php if($dval->status == "active"){ ?>
                                                                <span class="fs-7 text-success">เปิดใช้งาน</span>
                                                            <?php }else{?>
                                                               <span class="fs-7 text-danger">ปิดใช้งาน</span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-md-200px" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_5" aria-selected="false" tabindex="-1" role="tab">
                                            <i class="ki-duotone ki-icons/duotune/general/gen017.svg fs-2 text-primary"></i>                        
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">ศุกร์</span>
                                                <div class="fr">
                                                <?php foreach($days as $dval){?>
                                                    <?php if($dval->day_code == "fr"){ ?>
                                                        <?php if($dval->status == "active"){ ?>
                                                                <span class="fs-7 text-success">เปิดใช้งาน</span>
                                                            <?php }else{?>
                                                               <span class="fs-7 text-danger">ปิดใช้งาน</span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>.
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-md-200px" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_6" aria-selected="false" tabindex="-1" role="tab">
                                            <i class="ki-duotone ki-icons/duotune/general/gen017.svg fs-2 text-primary"></i>                        
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">เสาร์</span>
                                                <div class="sa">
                                                <?php foreach($days as $dval){?>
                                                    <?php if($dval->day_code == "sa"){ ?>
                                                        <?php if($dval->status == "active"){ ?>
                                                                <span class="fs-7 text-success">เปิดใช้งาน</span>
                                                            <?php }else{?>
                                                               <span class="fs-7 text-danger">ปิดใช้งาน</span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-md-200px" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_7" aria-selected="false" tabindex="-1" role="tab">
                                            <i class="ki-duotone ki-icons/duotune/general/gen017.svg fs-2 text-primary"></i>                        
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">อาทิตย์</span>
                                                <div class="su">
                                                <?php foreach($days as $dval){?>
                                                    <?php if($dval->day_code == "su"){ ?>
                                                        <?php if($dval->status == "active"){ ?>
                                                                <span class="fs-7 text-success">เปิดใช้งาน</span>
                                                            <?php }else{?>
                                                               <span class="fs-7 text-danger">ปิดใช้งาน</span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content w-100" id="myTabContent">
                                    <div class="tab-pane fade show active" id="kt_vtab_pane_1" role="tabpanel">  
                                        <div class="d-flex flex-column">
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-inline-block position-relative ms-2 me-10">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-3 fw-bold">
                                                        ตั้งค่าช่วงเวลา
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Line-->
                                                    <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                    <!--end::Line-->
                                                </span>
                                                <?php foreach($days as $dval){?>
                                                <?php if($dval->day_code == "mo"){ ?>
                                                <div hidden class="form-check form-switch form-check-custom form-check-success form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" <?php if($dval->status == "active"){?> checked <?php }else{} ?>  value="mo" id="flexSwitchmo"/>
                                                    <label class="form-check-label" for="flexSwitch">
                                                        เปิดใช้งาน 
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_basic">
                                            <!--begin::Form group-->
                                            <div class="form-group ms-2">
                                                <?php foreach($query as $val){?>
                                                    <?php if($val->days == 'mo'){?>
                                                    <div class="form-group row position-relative mt-6" id="rowmo<?=$val->id;?>">
                                                        <div class="col-md-3">
                                                            <label class="form-label">เริ่ม:</label>
                                                            <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="time<?= $val->id;?>" placeholder="เวลา" value="<?php echo trim($val->time);?>"/>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label">สิ้นสุด:</label>
                                                            <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="etime<?= $val->id?>" placeholder="เวลา" value="<?php echo trim($val->etime);?>"/>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                <input class="form-check-input" type="checkbox" value="" <?php if($val->status == "active"){?> checked <?php }else{} ?> id="form_checkbox<?= $val->id?>" />
                                                                <label class="form-check-label" for="form_checkbox">
                                                                เปิดใช้งาน
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!-- <a href="javascript:;" id="editrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                
                                                                แก้ไข
                                                            </a> -->
                                                            <a href="javascript:;"  id="delrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                
                                                                ลบแถว
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $("#form_checkbox<?= $val->id;?>").on('click',function(){
                                                            const chk = $("#form_checkbox<?= $val->id;?>").prop('checked');
                                                            console.log(chk);
                                                            $.ajax({
                                                                  url: '<?php echo base_url(); ?>days/editchkrow',
                                                                  type: 'POST',
                                                                  data: {'id': '<?= $val->id;?>', 'flag': chk},
                                                                  success: function(data) {
                                                                      console.log(data);
                                                                      if (data.result == 'true') {
                                                                          toastr.success(data.message);
                                                                      }else{
                                                                          toastr.danger(data.message);
                                                                      }
                                                                  }
                                                              });
                                                        });
                                                        $("#editrow<?= $val->id;?>").on('click',function(){
                                                            
                                                            const time = $("#time<?= $val->id;?>").val();
                                                            const etime = $("#etime<?= $val->id;?>").val();
                                                            $.ajax({
                                                                  url: '<?php echo base_url(); ?>days/editrow',
                                                                  type: 'POST',
                                                                  data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                  success: function(data) {
                                                                      console.log(data);
                                                                  }
                                                              });
                                                        });
                                                        $("#delrow<?= $val->id;?>").on('click',function(){
                                                            const element = document.getElementById("rowmo<?=$val->id;?>");
                                                            element.remove();
                                                            const time = $("#time<?= $val->id;?>").val();
                                                            const etime = $("#etime<?= $val->id;?>").val();
                                                            $.ajax({
                                                                  url: '<?php echo base_url(); ?>days/delrow',
                                                                  type: 'POST',
                                                                  data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                  success: function(data) {
                                                                      console.log(data);
                                                                  }
                                                              });
                                                        });
                                                        
                                                    </script>
                                                    <?php } ?>
                                                <?php } ?>
                                                <div id="savemos"></div>
                                                <div data-repeater-list="kt_docs_repeater_basic">
                                                    <div data-repeater-item>
                                                       <div class="form-group row position-relative mt-6">
                                                           <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="timestart" value=""/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="tmeend" value=""/>
                                                           </div>
                                                           <div class="col-md-2">
                                                              <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                  <input class="form-check-input" type="checkbox" value="" name="chkopen"  id="checkboxadd" />
                                                                  <label class="form-check-label" for="form_checkbox">
                                                                  เปิดใช้งาน
                                                                  </label>
                                                              </div>
                                                          </div>
                                                          <input type="hidden" id="flag" name="flag" value="add">
                                                           <div class="col-md-4">
                                                           <a href="javascript:;" id="saverowmo" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                             <div class=""> บันทึก </div>
                                                          </a>
                                                               <!-- <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   ลบแถว
                                                               </a> -->
                                                           </div>
                                                       </div>
                                                    </div>
                                                </div>
                                                <script>
                                                   $("#saverowmo").on('click',function(){
                                                       
                                                       const dates = '<?=$dateParam;?>';
                                                       const time = $("#timestart").val();
                                                       const etime = $("#tmeend").val();
                                                       const form_checkbox = $("#checkboxadd").prop('checked');
                                                       $.ajax({
                                                             url: '<?php echo base_url(); ?>days/addrow',
                                                             type: 'POST',
                                                             data: {'day': 'mo','time': time, 'etime': etime, 'chk': form_checkbox},
                                                             success: function(data) {
                                                                 console.log(data);
                                                                 if (data.status == 'active') {
                                                                     var chk = `checked`;
                                                                 }
                                                                 $("#savemos").append(`
                                                                 <div class="form-group row position-relative mt-6">
                                                                         <div class="form-group row position-relative" id="rowmo${data.rowid}"> 
                                                                           <div class="col-md-3">
                                                                              <label class="form-label">เริ่ม:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="time${data.rowid}" value="${data.time}"/>
                                                                          </div>
                                                                          <div class="col-md-3">
                                                                              <label class="form-label">สิ้นสุด:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="etime${data.rowid}" value="${data.etime}"/>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                             <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                                 <input class="form-check-input" type="checkbox" value="" name="chkopen" id="form_checkbox${data.rowid}" ${chk} />
                                                                                 <label class="form-check-label" for="form_checkbox">
                                                                                 เปิดใช้งาน
                                                                                 </label>
                                                                             </div>
                                                                         </div>
                                                                             <input type="hidden" id="flag" name="flag" value="edit">
                                                                             <div class="col-md-4">
                                                                              <!-- <a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                                    แก้ไข
                                                                               </a> -->
                                                                               <a href="javascript:;" id="delrow${data.rowid}"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                    ลบแถว
                                                                               </a>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <script>
                                                                   $("#editrow${data.rowid}").on('click',function(){
                                                                       
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/editrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   $("#form_checkbox${data.rowid}").on('click',function(){
                                                                          const chk = $("#form_checkbox${data.rowid}").prop('checked');
                                                                             $.ajax({
                                                                                  url: '/days/editchkrow',
                                                                                  type: 'POST',
                                                                                  data: {'id': '${data.rowid}' ,'flag': chk},
                                                                                  success: function(data) {
                                                                                      console.log(data);
                                                                                      if (data.result == 'true') {
                                                                                          toastr.success(data.message);
                                                                                      }else{
                                                                                          toastr.danger(data.message);
                                                                                      }
                                                                              }
                                                                          });
                                                                     });
                                                                   $("#delrow${data.rowid}").on('click',function(){
                                                                       const element = document.getElementById("rowmo${data.rowid}");
                                                                       element.remove();
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/delrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   <\/script>
                                                                   `);
                                                                 $("#timestart").val("");
                                                                 $("#tmeend").val("");
                                                             }
                                                         });
                                                   });
                                               </script>
                                                    <!--end::Form group-->
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <!-- <div class="form-group mt-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    เพิ่มเวลา
                                                </a>
                                            </div> -->
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                                        <div class="d-flex flex-column">
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-inline-block position-relative ms-2 me-10">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-3 fw-bold">
                                                        ตั้งค่าช่วงเวลา
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Line-->
                                                    <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                    <!--end::Line-->
                                                </span>
                                                <?php foreach($days as $dval){?>
                                                <?php if($dval->day_code == "tu"){ ?>
                                                <div hidden class="form-check form-switch form-check-custom form-check-success form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" <?php if($dval->status == "active"){?> checked <?php }else{} ?>  value="tu" id="flexSwitchtu"/>
                                                    <label class="form-check-label" for="flexSwitch">
                                                        <?php if($dval->status == "active"){?> เปิดใช้งาน <?php }else{ echo "ปิดใช้งาน";} ?>  
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_basic_2">
                                            <!--begin::Form group-->
                                            <div class="form-group ms-2">
                                                <?php foreach($query as $val){?>
                                                    <?php if($val->days == 'tu'){?>
                                                   <div class="form-group row position-relative mt-6" id="rowtu<?= $val->id;?>">
                                                       <div class="col-md-3">
                                                           <label class="form-label">เริ่ม:</label>
                                                           <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="time<?= $val->id;?>" placeholder="เวลา" value="<?php echo trim($val->time);?>"/>
                                                       </div>
                                                       <div class="col-md-3">
                                                           <label class="form-label">สิ้นสุด:</label>
                                                           <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="etime<?= $val->id?>" placeholder="เวลา" value="<?php echo trim($val->etime);?>"/>
                                                       </div>
                                                       <div class="col-md-2">
                                                           <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                               <input class="form-check-input" type="checkbox" value="" <?php if($val->status == "active"){?> checked <?php }else{} ?> id="form_checkbox<?= $val->id?>" />
                                                               <label class="form-check-label" for="form_checkbox">
                                                               เปิดใช้งาน
                                                               </label>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                           <!-- <a href="javascript:;" id="editrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                               
                                                               แก้ไข
                                                           </a> -->
                                                           <a href="javascript:;"  id="delrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                               
                                                               ลบแถว
                                                           </a>
                                                       </div>
                                                   </div>
                                                   <script>
                                                       $("#editrow<?= $val->id;?>").on('click',function(){
                                                           
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/editrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                 }
                                                             });
                                                       });
                                                       $("#form_checkbox<?= $val->id?>").on('click',function(){
                                                            const chk = $("#form_checkbox<?= $val->id?>").prop('checked');
                                                               $.ajax({
                                                                    url: '<?php echo base_url(); ?>days/editchkrow',
                                                                    type: 'POST',
                                                                    data: {'id': '<?= $val->id;?>' ,'flag': chk},
                                                                    success: function(data) {
                                                                        console.log(data);
                                                                        if (data.result == 'true') {
                                                                            toastr.success(data.message);
                                                                        }else{
                                                                            toastr.danger(data.message);
                                                                        }
                                                                }
                                                            });
                                                       });
                                                       $("#delrow<?= $val->id;?>").on('click',function(){
                                                           const element = document.getElementById("rowtu<?=$val->id;?>");
                                                           element.remove();
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/delrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     
                                                                 }
                                                             });
                                                       });
                                                       
                                                   </script>
                                                    <?php } ?>
                                                <?php } ?>
                                                <div id="savetus"></div>
                                                    <div data-repeater-list="kt_docs_repeater_basic">
                                                        <div data-repeater-item>
                                                           <div class="form-group row position-relative mt-6">
                                                               <div class="col-md-3">
                                                                   <label class="form-label">เริ่ม:</label>
                                                                   <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestarttu" id="timestarttu" value=""/>
                                                               </div>
                                                               <div class="col-md-3">
                                                                   <label class="form-label">สิ้นสุด:</label>
                                                                   <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeendtu" id="tmeendtu" value=""/>
                                                               </div>
                                                               <div class="col-md-2">
                                                                  <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                      <input class="form-check-input" type="checkbox" value="" name="chkopen"  id="checkboxaddtu" />
                                                                      <label class="form-check-label" for="form_checkbox">
                                                                      เปิดใช้งาน
                                                                      </label>
                                                                  </div>
                                                              </div>
                                                              <input type="hidden" id="flag" name="flag" value="add">
                                                               <div class="col-md-4">
                                                               <a href="javascript:;" id="saverowtu" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                                 <div class=""> บันทึก </div>
                                                              </a>
                                                                   <!-- <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                       ลบแถว
                                                                   </a> -->
                                                               </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                       $("#saverowtu").on('click',function(){
                                                           
                                                           const dates = '<?=$dateParam;?>';
                                                           const time = $("#timestarttu").val();
                                                           const etime = $("#tmeendtu").val();
                                                           const form_checkbox = $("#checkboxaddtu").prop('checked');
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/addrow',
                                                                 type: 'POST',
                                                                 data: {'day': 'tu','time': time, 'etime': etime, 'chk': form_checkbox},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                     if (data.status == 'active') {
                                                                         var chk = `checked`;
                                                                     }
                                                                     $("#savetus").append(`
                                                                     <div class="form-group row position-relative mt-6">
                                                                             <div class="form-group row position-relative" id="rowtu${data.rowid}"> 
                                                                               <div class="col-md-3">
                                                                                  <label class="form-label">เริ่ม:</label>
                                                                                  <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="time${data.rowid}" value="${data.time}"/>
                                                                              </div>
                                                                              <div class="col-md-3">
                                                                                  <label class="form-label">สิ้นสุด:</label>
                                                                                  <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="etime${data.rowid}" value="${data.etime}"/>
                                                                              </div>
                                                                              <div class="col-md-2">
                                                                                 <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                                     <input class="form-check-input" type="checkbox" value="" name="chkopen" id="form_checkbox${data.rowid}" ${chk} />
                                                                                     <label class="form-check-label" for="form_checkbox">
                                                                                     เปิดใช้งาน
                                                                                     </label>
                                                                                 </div>
                                                                             </div>
                                                                                 <input type="hidden" id="flag" name="flag" value="edit">
                                                                                 <div class="col-md-4">
                                                                                  <!-- <a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                                        แก้ไข
                                                                                   </a> -->
                                                                                   <a href="javascript:;" id="delrow${data.rowid}"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                        ลบแถว
                                                                                   </a>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <script>
                                                                       $("#editrow${data.rowid}").on('click',function(){
                                                                           
                                                                           const time = $("#time${data.rowid}").val();
                                                                           const etime = $("#etime${data.rowid}").val();
                                                                           $.ajax({
                                                                                 url: '/days/editrow',
                                                                                 type: 'POST',
                                                                                 data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                                 success: function(data) {
                                                                                     console.log(data);
                                                                                 }
                                                                             });
                                                                       });
                                                                       $("#form_checkbox${data.rowid}").on('click',function(){
                                                                           const chk = $("#form_checkbox${data.rowid}").prop('checked');
                                                                              $.ajax({
                                                                                   url: '/days/editchkrow',
                                                                                   type: 'POST',
                                                                                   data: {'id': '${data.rowid}' ,'flag': chk},
                                                                                   success: function(data) {
                                                                                       console.log(data);
                                                                                       if (data.result == 'true') {
                                                                                           toastr.success(data.message);
                                                                                       }else{
                                                                                           toastr.danger(data.message);
                                                                                       }
                                                                               }
                                                                           });
                                                                      });
                                                                       $("#delrow${data.rowid}").on('click',function(){
                                                                           const element = document.getElementById("rowmo${data.rowid}");
                                                                           element.remove();
                                                                           const time = $("#time${data.rowid}").val();
                                                                           const etime = $("#etime${data.rowid}").val();
                                                                           $.ajax({
                                                                                 url: '/days/delrow',
                                                                                 type: 'POST',
                                                                                 data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                                 success: function(data) {
                                                                                     console.log(data);
                                                                                 }
                                                                             });
                                                                       });
                                                                       <\/script>
                                                                       `);
                                                                     $("#timestarttu").val("");
                                                                     $("#tmeendtu").val("");
                                                                 }
                                                             });
                                                       });
                                                   </script>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <!-- <div class="form-group mt-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    เพิ่มเวลา
                                                </a>
                                            </div> -->
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                                        <div class="d-flex flex-column">
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-inline-block position-relative ms-2 me-10">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-3 fw-bold">
                                                        ตั้งค่าช่วงเวลา
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Line-->
                                                    <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                    <!--end::Line-->
                                                </span>
                                                <?php foreach($days as $dval){?>
                                                <?php if($dval->day_code == "we"){ ?>
                                                <div hidden class="form-check form-switch form-check-custom form-check-success form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" <?php if($dval->status == "active"){?> checked <?php }else{} ?>  value="we" id="flexSwitchwe"/>
                                                    <label class="form-check-label" for="flexSwitch">
                                                        <?php if($dval->status == "active"){?> เปิดใช้งาน <?php }else{ echo "ปิดใช้งาน";} ?>  
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_basic_3">
                                            <!--begin::Form group-->
                                            <div class="form-group ms-2">
                                                <?php foreach($query as $val){?>
                                                    <?php if($val->days == 'we'){?>
                                                    <div class="form-group row position-relative mt-6" id="rowwe<?=$val->id;?>">
                                                           <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="time<?= $val->id;?>" placeholder="เวลา" value="<?php echo trim($val->time);?>"/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="etime<?= $val->id?>" placeholder="เวลา" value="<?php echo trim($val->etime);?>"/>
                                                           </div>
                                                           <div class="col-md-2">
                                                              <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                  <input class="form-check-input" type="checkbox" value="" <?php if($val->status == "active"){?> checked <?php }else{} ?> id="form_checkbox<?= $val->id?>" />
                                                                  <label class="form-check-label" for="form_checkbox">
                                                                  เปิดใช้งาน
                                                                  </label>
                                                              </div>
                                                          </div>
                                                           <div class="col-md-4">
                                                               <!-- <a href="javascript:;" id="editrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                   
                                                                   แก้ไข
                                                               </a> -->
                                                               <a href="javascript:;"  id="delrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   
                                                                   ลบแถว
                                                               </a>
                                                           </div>
                                                       </div>
                                                    <script>
                                                       $("#editrow<?= $val->id;?>").on('click',function(){
                                                           
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/editrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                 }
                                                             });
                                                       });
                                                       $("#form_checkbox<?= $val->id?>").on('click',function(){
                                                           const chk = $("#form_checkbox<?= $val->id?>").prop('checked');
                                                              $.ajax({
                                                                   url: '<?php echo base_url(); ?>days/editchkrow',
                                                                   type: 'POST',
                                                                   data: {'id': '<?= $val->id;?>' ,'flag': chk},
                                                                   success: function(data) {
                                                                       console.log(data);
                                                                       if (data.result == 'true') {
                                                                           toastr.success(data.message);
                                                                       }else{
                                                                           toastr.danger(data.message);
                                                                       }
                                                               }
                                                           });
                                                      });
                                                       $("#delrow<?= $val->id;?>").on('click',function(){
                                                           const element = document.getElementById("rowwe<?=$val->id;?>");
                                                            element.remove();
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/delrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                 }
                                                             });
                                                       });
                                                       
                                                   </script>
                                                    <?php } ?>
                                                <?php } ?>
                                                <div id="savewes"></div>
                                                <div data-repeater-list="kt_docs_repeater_basic">
                                                    <div data-repeater-item>
                                                       <div class="form-group row position-relative mt-6">
                                                           <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestartwe" id="timestartwe" value=""/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeendwe" id="tmeendwe" value=""/>
                                                           </div>
                                                           <div class="col-md-2">
                                                              <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                  <input class="form-check-input" type="checkbox" value="" name="chkopen"  id="checkboxaddwe" />
                                                                  <label class="form-check-label" for="form_checkbox">
                                                                  เปิดใช้งาน
                                                                  </label>
                                                              </div>
                                                          </div>
                                                          <input type="hidden" id="flag" name="flag" value="add">
                                                           <div class="col-md-4">
                                                           <a href="javascript:;" id="saverowwe" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                             <div class=""> บันทึก </div>
                                                          </a>
                                                               <!-- <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   ลบแถว
                                                               </a> -->
                                                           </div>
                                                       </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    $("#saverowwe").on('click',function(){
                                                       
                                                       const dates = '<?=$dateParam;?>';
                                                       const time = $("#timestartwe").val();
                                                       const etime = $("#tmeendwe").val();
                                                       const form_checkbox = $("#checkboxaddwe").prop('checked');
                                                       $.ajax({
                                                             url: '<?php echo base_url(); ?>days/addrow',
                                                             type: 'POST',
                                                             data: {'day': 'we','time': time, 'etime': etime, 'chk': form_checkbox},
                                                             success: function(data) {
                                                                 console.log(data);
                                                                 if (data.status == 'active') {
                                                                     var chk = `checked`;
                                                                 }
                                                                 $("#savewes").append(`
                                                                 <div class="form-group row position-relative mt-6">
                                                                         <div class="form-group row position-relative" id="rowwe${data.rowid}"> 
                                                                           <div class="col-md-3">
                                                                              <label class="form-label">เริ่ม:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="time${data.rowid}" value="${data.time}"/>
                                                                          </div>
                                                                          <div class="col-md-3">
                                                                              <label class="form-label">สิ้นสุด:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="etime${data.rowid}" value="${data.etime}"/>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                             <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                                 <input class="form-check-input" type="checkbox" value="" name="chkopen" id="form_checkbox${data.rowid}" ${chk} />
                                                                                 <label class="form-check-label" for="form_checkbox">
                                                                                 เปิดใช้งาน
                                                                                 </label>
                                                                             </div>
                                                                         </div>
                                                                             <input type="hidden" id="flag" name="flag" value="edit">
                                                                             <div class="col-md-4">
                                                                             <!--  <a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                                    แก้ไข
                                                                               </a> -->
                                                                               <a href="javascript:;" id="delrow${data.rowid}"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                    ลบแถว
                                                                               </a>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <script>
                                                                   $("#editrow${data.rowid}").on('click',function(){
                                                                       
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/editrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   $("#form_checkbox${data.rowid}").on('click',function(){
                                                                       const chk = $("#form_checkbox${data.rowid}").prop('checked');
                                                                          $.ajax({
                                                                               url: '/days/editchkrow',
                                                                               type: 'POST',
                                                                               data: {'id': '${data.rowid}' ,'flag': chk},
                                                                               success: function(data) {
                                                                                   console.log(data);
                                                                                   if (data.result == 'true') {
                                                                                       toastr.success(data.message);
                                                                                   }else{
                                                                                       toastr.danger(data.message);
                                                                                   }
                                                                           }
                                                                       });
                                                                  });
                                                                   $("#delrow${data.rowid}").on('click',function(){
                                                                       const element = document.getElementById("rowmo${data.rowid}");
                                                                       element.remove();
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/delrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   <\/script>
                                                                   `);
                                                                 $("#timestartwe").val("");
                                                                 $("#tmeendwe").val("");
                                                             }
                                                         });
                                                   });
                                                </script>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <!-- <div class="form-group mt-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    เพิ่มเวลา
                                                </a>
                                            </div> -->
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                                        <div class="d-flex flex-column">
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-inline-block position-relative ms-2 me-10">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-3 fw-bold">
                                                        ตั้งค่าช่วงเวลา
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Line-->
                                                    <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                    <!--end::Line-->
                                                </span>
                                                <?php foreach($days as $dval){?>
                                                <?php if($dval->day_code == "th"){ ?>
                                                <div hidden class="form-check form-switch form-check-custom form-check-success form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" <?php if($dval->status == "active"){?> checked <?php }else{} ?>  value="th" id="flexSwitchth"/>
                                                    <label class="form-check-label" for="flexSwitch">
                                                        <?php if($dval->status == "active"){?> เปิดใช้งาน <?php }else{ echo "ปิดใช้งาน";} ?>  
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_basic_4">
                                            <!--begin::Form group-->
                                            <div class="form-group ms-2">
                                                <?php foreach($query as $val){?>
                                                    <?php if($val->days == 'th'){?>
                                                    <div class="form-group row position-relative mt-6" id="rowth<?=$val->id;?>">
                                                       <div class="col-md-3">
                                                           <label class="form-label">เริ่ม:</label>
                                                           <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="time<?= $val->id;?>" placeholder="เวลา" value="<?php echo trim($val->time);?>"/>
                                                       </div>
                                                       <div class="col-md-3">
                                                           <label class="form-label">สิ้นสุด:</label>
                                                           <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="etime<?= $val->id?>" placeholder="เวลา" value="<?php echo trim($val->etime);?>"/>
                                                       </div>
                                                       <div class="col-md-2">
                                                           <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                               <input class="form-check-input" type="checkbox" value="" <?php if($val->status == "active"){?> checked <?php }else{} ?> id="form_checkbox<?= $val->id?>" />
                                                               <label class="form-check-label" for="form_checkbox">
                                                               เปิดใช้งาน
                                                               </label>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                           <!-- <a href="javascript:;" id="editrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                               
                                                               แก้ไข
                                                           </a> -->
                                                           <a href="javascript:;"  id="delrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                               
                                                               ลบแถว
                                                           </a>
                                                       </div>
                                                   </div>
                                                    <script>
                                                       $("#editrow<?= $val->id;?>").on('click',function(){
                                                           
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/editrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                 }
                                                             });
                                                       });
                                                       $("#form_checkbox<?= $val->id?>").on('click',function(){
                                                              const chk = $("#form_checkbox<?= $val->id?>").prop('checked');
                                                                 $.ajax({
                                                                      url: '<?php echo base_url(); ?>days/editchkrow',
                                                                      type: 'POST',
                                                                      data: {'id': '<?= $val->id;?>' ,'flag': chk},
                                                                      success: function(data) {
                                                                          console.log(data);
                                                                          if (data.result == 'true') {
                                                                              toastr.success(data.message);
                                                                          }else{
                                                                              toastr.danger(data.message);
                                                                          }
                                                                  }
                                                              });
                                                         });
                                                       $("#delrow<?= $val->id;?>").on('click',function(){
                                                           const element = document.getElementById("rowth<?=$val->id;?>");
                                                             element.remove();
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/delrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                 }
                                                             });
                                                       });
                                                       
                                               </script>
                                                    <?php } ?>
                                                <?php } ?>
                                                <div id="saveths"></div>
                                                <div data-repeater-list="kt_docs_repeater_basic">
                                                    <div data-repeater-item>
                                                       <div class="form-group row position-relative mt-6">
                                                           <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestartth" id="timestartth" value=""/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeendth" id="tmeendth" value=""/>
                                                           </div>
                                                           <div class="col-md-2">
                                                              <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                  <input class="form-check-input" type="checkbox" value="" name="chkopen"  id="checkboxaddth" />
                                                                  <label class="form-check-label" for="form_checkbox">
                                                                  เปิดใช้งาน
                                                                  </label>
                                                              </div>
                                                          </div>
                                                          <input type="hidden" id="flag" name="flag" value="add">
                                                           <div class="col-md-4">
                                                           <a href="javascript:;" id="saverowth" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                             <div class=""> บันทึก </div>
                                                          </a>
                                                               <!-- <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   ลบแถว
                                                               </a> -->
                                                           </div>
                                                       </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    $("#saverowth").on('click',function(){
                                                       
                                                       const dates = '<?=$dateParam;?>';
                                                       const time = $("#timestartth").val();
                                                       const etime = $("#tmeendth").val();
                                                       const form_checkbox = $("#checkboxaddth").prop('checked');
                                                       $.ajax({
                                                             url: '<?php echo base_url(); ?>days/addrow',
                                                             type: 'POST',
                                                             data: {'day': 'th','time': time, 'etime': etime, 'chk': form_checkbox},
                                                             success: function(data) {
                                                                 console.log(data);
                                                                 if (data.status == 'active') {
                                                                     var chk = `checked`;
                                                                 }
                                                                 $("#saveths").append(`
                                                                 <div class="form-group row position-relative mt-6">
                                                                         <div class="form-group row position-relative" id="rowwe${data.rowid}"> 
                                                                           <div class="col-md-3">
                                                                              <label class="form-label">เริ่ม:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="time${data.rowid}" value="${data.time}"/>
                                                                          </div>
                                                                          <div class="col-md-3">
                                                                              <label class="form-label">สิ้นสุด:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="etime${data.rowid}" value="${data.etime}"/>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                             <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                                 <input class="form-check-input" type="checkbox" value="" name="chkopen" id="form_checkbox${data.rowid}" ${chk} />
                                                                                 <label class="form-check-label" for="form_checkbox">
                                                                                 เปิดใช้งาน
                                                                                 </label>
                                                                             </div>
                                                                         </div>
                                                                             <input type="hidden" id="flag" name="flag" value="edit">
                                                                             <div class="col-md-4">
                                                                              <!-- <a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                                    แก้ไข
                                                                               </a> -->
                                                                               <a href="javascript:;" id="delrow${data.rowid}"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                    ลบแถว
                                                                               </a>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <script>
                                                                   $("#editrow${data.rowid}").on('click',function(){
                                                                       
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/editrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   $("#form_checkbox${data.rowid}").on('click',function(){
                                                                       const chk = $("#form_checkbox${data.rowid}").prop('checked');
                                                                          $.ajax({
                                                                               url: '/days/editchkrow',
                                                                               type: 'POST',
                                                                               data: {'id': '${data.rowid}' ,'flag': chk},
                                                                               success: function(data) {
                                                                                   console.log(data);
                                                                                   if (data.result == 'true') {
                                                                                       toastr.success(data.message);
                                                                                   }else{
                                                                                       toastr.danger(data.message);
                                                                                   }
                                                                           }
                                                                       });
                                                                  });
                                                                   $("#delrow${data.rowid}").on('click',function(){
                                                                       const element = document.getElementById("rowmo${data.rowid}");
                                                                       element.remove();
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/delrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   <\/script>
                                                                   `);
                                                                 $("#timestartth").val("");
                                                                 $("#tmeendth").val("");
                                                             }
                                                         });
                                                   });
                                                </script>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <!-- <div class="form-group mt-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    เพิ่มเวลา
                                                </a>
                                            </div> -->
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                                        <div class="d-flex flex-column">
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-inline-block position-relative ms-2 me-10">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-3 fw-bold">
                                                        ตั้งค่าช่วงเวลา
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Line-->
                                                    <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                    <!--end::Line-->
                                                </span>
                                                <?php foreach($days as $dval){?>
                                                <?php if($dval->day_code == "fr"){ ?>
                                                <div hidden class="form-check form-switch form-check-custom form-check-success form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" <?php if($dval->status == "active"){?> checked <?php }else{} ?>  value="fr" id="flexSwitchfr"/>
                                                    <label class="form-check-label" for="flexSwitch">
                                                        <?php if($dval->status == "active"){?> เปิดใช้งาน <?php }else{ echo "ปิดใช้งาน";} ?>  
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_basic_5">
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <?php foreach($query as $val){?>
                                                    <?php if($val->days == 'fr'){?>
                                                    <div class="form-group row position-relative mt-6" id="rowfr<?=$val->id;?>">
                                                       <div class="col-md-3">
                                                           <label class="form-label">เริ่ม:</label>
                                                           <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="time<?= $val->id;?>" placeholder="เวลา" value="<?php echo trim($val->time);?>"/>
                                                       </div>
                                                       <div class="col-md-3">
                                                           <label class="form-label">สิ้นสุด:</label>
                                                           <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="etime<?= $val->id?>" placeholder="เวลา" value="<?php echo trim($val->etime);?>"/>
                                                       </div>
                                                       <div class="col-md-2">
                                                           <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                               <input class="form-check-input" type="checkbox" value="" <?php if($val->status == "active"){?> checked <?php }else{} ?> id="form_checkbox<?= $val->id?>" />
                                                               <label class="form-check-label" for="form_checkbox">
                                                               เปิดใช้งาน
                                                               </label>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                           <!-- <a href="javascript:;" id="editrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                               
                                                               แก้ไข
                                                           </a> -->
                                                           <a href="javascript:;"  id="delrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                               
                                                               ลบแถว
                                                           </a>
                                                       </div>
                                                   </div>
                                                    <script>
                                                       $("#editrow<?= $val->id;?>").on('click',function(){
                                                           
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/editrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                 }
                                                             });
                                                       });
                                                       $("#form_checkbox<?= $val->id?>").on('click',function(){
                                                               const chk = $("#form_checkbox<?= $val->id?>").prop('checked');
                                                                  $.ajax({
                                                                       url: '<?php echo base_url(); ?>days/editchkrow',
                                                                       type: 'POST',
                                                                       data: {'id': '<?= $val->id;?>' ,'flag': chk},
                                                                       success: function(data) {
                                                                           console.log(data);
                                                                           if (data.result == 'true') {
                                                                               toastr.success(data.message);
                                                                           }else{
                                                                               toastr.danger(data.message);
                                                                           }
                                                                   }
                                                               });
                                                          });
                                                       $("#delrow<?= $val->id;?>").on('click',function(){
                                                           const element = document.getElementById("rowfr<?=$val->id;?>");
                                                              element.remove();
                                                           const time = $("#time<?= $val->id;?>").val();
                                                           const etime = $("#etime<?= $val->id;?>").val();
                                                           $.ajax({
                                                                 url: '<?php echo base_url(); ?>days/delrow',
                                                                 type: 'POST',
                                                                 data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                 success: function(data) {
                                                                     console.log(data);
                                                                 }
                                                             });
                                                       });
                                                       </script>
                                                    <?php } ?>
                                                <?php } ?>
                                                <div id="savefrs"></div>
                                                <div data-repeater-list="kt_docs_repeater_basic">
                                                    <div data-repeater-item>
                                                       <div class="form-group row position-relative mt-6">
                                                           <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestartfr" id="timestartfr" value=""/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeendfr" id="tmeendfr" value=""/>
                                                           </div>
                                                           <div class="col-md-2">
                                                              <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                  <input class="form-check-input" type="checkbox" value="" name="chkopen"  id="checkboxaddfr" />
                                                                  <label class="form-check-label" for="form_checkbox">
                                                                  เปิดใช้งาน
                                                                  </label>
                                                              </div>
                                                          </div>
                                                          <input type="hidden" id="flag" name="flag" value="add">
                                                           <div class="col-md-4">
                                                           <a href="javascript:;" id="saverowfr" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                             <div class=""> บันทึก </div>
                                                          </a>
                                                               <!-- <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   ลบแถว
                                                               </a> -->
                                                           </div>
                                                       </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    $("#saverowfr").on('click',function(){
                                                       
                                                       const dates = '<?=$dateParam;?>';
                                                       const time = $("#timestartfr").val();
                                                       const etime = $("#tmeendfr").val();
                                                       const form_checkbox = $("#checkboxaddfr").prop('checked');
                                                       $.ajax({
                                                             url: '<?php echo base_url(); ?>days/addrow',
                                                             type: 'POST',
                                                             data: {'day': 'fr','time': time, 'etime': etime, 'chk': form_checkbox},
                                                             success: function(data) {
                                                                 console.log(data);
                                                                 if (data.status == 'active') {
                                                                     var chk = `checked`;
                                                                 }
                                                                 $("#savefrs").append(`
                                                                 <div class="form-group row position-relative mt-6">
                                                                         <div class="form-group row position-relative" id="rowfr${data.rowid}"> 
                                                                           <div class="col-md-3">
                                                                              <label class="form-label">เริ่ม:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="time${data.rowid}" value="${data.time}"/>
                                                                          </div>
                                                                          <div class="col-md-3">
                                                                              <label class="form-label">สิ้นสุด:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="etime${data.rowid}" value="${data.etime}"/>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                             <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                                 <input class="form-check-input" type="checkbox" value="" name="chkopen" id="form_checkbox${data.rowid}" ${chk} />
                                                                                 <label class="form-check-label" for="form_checkbox">
                                                                                 เปิดใช้งาน
                                                                                 </label>
                                                                             </div>
                                                                         </div>
                                                                             <input type="hidden" id="flag" name="flag" value="edit">
                                                                             <div class="col-md-4">
                                                                             <!--  <a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                                    แก้ไข
                                                                               </a>  -->
                                                                               <a href="javascript:;" id="delrow${data.rowid}"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                    ลบแถว
                                                                               </a>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <script>
                                                                   $("#editrow${data.rowid}").on('click',function(){
                                                                       
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/editrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   $("#form_checkbox${data.rowid}").on('click',function(){
                                                                       const chk = $("#form_checkbox${data.rowid}").prop('checked');
                                                                          $.ajax({
                                                                               url: '/days/editchkrow',
                                                                               type: 'POST',
                                                                               data: {'id': '${data.rowid}' ,'flag': chk},
                                                                               success: function(data) {
                                                                                   console.log(data);
                                                                                   if (data.result == 'true') {
                                                                                       toastr.success(data.message);
                                                                                   }else{
                                                                                       toastr.danger(data.message);
                                                                                   }
                                                                           }
                                                                       });
                                                                  });
                                                                   $("#delrow${data.rowid}").on('click',function(){
                                                                       const element = document.getElementById("rowmo${data.rowid}");
                                                                       element.remove();
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/delrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   <\/script>
                                                                   `);
                                                                 $("#timestartfr").val("");
                                                                 $("#tmeendfr").val("");
                                                             }
                                                         });
                                                   });
                                                </script>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <!-- <div class="form-group mt-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    เพิ่มเวลา
                                                </a>
                                            </div> -->
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                                        <div class="d-flex flex-column">
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-inline-block position-relative ms-2 me-10">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-3 fw-bold">
                                                        ตั้งค่าช่วงเวลา
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Line-->
                                                    <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                    <!--end::Line-->
                                                </span>
                                                <?php foreach($days as $dval){?>
                                                <?php if($dval->day_code == "sa"){ ?>
                                                <div hidden class="form-check form-switch form-check-custom form-check-success form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" <?php if($dval->status == "active"){?> checked <?php }else{} ?>  value="sa" id="flexSwitchsa"/>
                                                    <label class="form-check-label" for="flexSwitch">
                                                        <?php if($dval->status == "active"){?> เปิดใช้งาน <?php }else{ echo "ปิดใช้งาน";} ?>  
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_basic_6">
                                            <!--begin::Form group-->
                                            <div class="form-group ms-2">
                                                <?php foreach($query as $val){?>
                                                    <?php if($val->days == 'sa'){?>
                                                        <div data-repeater-list="kt_docs_repeater_basic">
                                                        <div data-repeater-item>
                                                        <div class="form-group row position-relative mt-6" id="rowsa<?=$val->id;?>">
                                                           <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="time<?= $val->id;?>" placeholder="เวลา" value="<?php echo trim($val->time);?>"/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="etime<?= $val->id?>" placeholder="เวลา" value="<?php echo trim($val->etime);?>"/>
                                                           </div>
                                                           <div class="col-md-2">
                                                               <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                   <input class="form-check-input" type="checkbox" value="" <?php if($val->status == "active"){?> checked <?php }else{} ?> id="form_checkbox<?= $val->id?>" />
                                                                   <label class="form-check-label" for="form_checkbox">
                                                                   เปิดใช้งาน
                                                                   </label>
                                                               </div>
                                                           </div>
                                                           <div class="col-md-4">
                                                               <!-- <a href="javascript:;" id="editrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                   <i class="ki-duotone ki-edit fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                                   แก้ไข
                                                               </a> -->
                                                               <a href="javascript:;"  id="delrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                                   ลบแถว
                                                               </a>
                                                           </div>
                                                       </div>
                                                        </div>
                                                        </div>
                                                        <script>
                                                           $("#editrow<?= $val->id;?>").on('click',function(){
                                                               
                                                               const time = $("#time<?= $val->id;?>").val();
                                                               const etime = $("#etime<?= $val->id;?>").val();
                                                               $.ajax({
                                                                     url: '<?php echo base_url(); ?>days/editrow',
                                                                     type: 'POST',
                                                                     data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                     success: function(data) {
                                                                         console.log(data);
                                                                     }
                                                                 });
                                                           });
                                                           $("#form_checkbox<?= $val->id?>").on('click',function(){
                                                                 const chk = $("#form_checkbox<?= $val->id?>").prop('checked');
                                                                    $.ajax({
                                                                         url: '<?php echo base_url(); ?>days/editchkrow',
                                                                         type: 'POST',
                                                                         data: {'id': '<?= $val->id;?>' ,'flag': chk},
                                                                         success: function(data) {
                                                                             console.log(data);
                                                                             if (data.result == 'true') {
                                                                                 toastr.success(data.message);
                                                                             }else{
                                                                                 toastr.danger(data.message);
                                                                             }
                                                                     }
                                                                 });
                                                            });
                                                           $("#delrow<?= $val->id;?>").on('click',function(){
                                                               const element = document.getElementById("rowsa<?=$val->id;?>");
                                                               element.remove();
                                                               const time = $("#time<?= $val->id;?>").val();
                                                               const etime = $("#etime<?= $val->id;?>").val();
                                                               $.ajax({
                                                                     url: '<?php echo base_url(); ?>days/delrow',
                                                                     type: 'POST',
                                                                     data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                     success: function(data) {
                                                                         
                                                                       
                                                                     }
                                                                 });
                                                           });
                                                       </script>
                                                    <?php } ?>
                                                <?php } ?>
                                                <div id="savesa"></div>
                                                <div data-repeater-list="kt_docs_repeater_basic">
                                                    <div data-repeater-item>
                                                       <div class="form-group row position-relative mt-6">
                                                           <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestartsa" id="timestartsa" value=""/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeendsa" id="tmeendsa" value=""/>
                                                           </div>
                                                           <div class="col-md-2">
                                                              <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                  <input class="form-check-input" type="checkbox" value="" name="chkopen"  id="checkboxaddsa" />
                                                                  <label class="form-check-label" for="form_checkbox">
                                                                  เปิดใช้งาน
                                                                  </label>
                                                              </div>
                                                          </div>
                                                          <input type="hidden" id="flag" name="flag" value="add">
                                                           <div class="col-md-4">
                                                           <a href="javascript:;" id="saverowsa" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                             <div class=""> บันทึก </div>
                                                          </a>
                                                               <!-- <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   ลบแถว
                                                               </a> -->
                                                           </div>
                                                       </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    $("#saverowsa").on('click',function(){
                                                       
                                                       const dates = '<?=$dateParam;?>';
                                                       const time = $("#timestartsa").val();
                                                       const etime = $("#tmeendsa").val();
                                                       const form_checkbox = $("#checkboxaddsa").prop('checked');
                                                       $.ajax({
                                                             url: '<?php echo base_url(); ?>days/addrow',
                                                             type: 'POST',
                                                             data: {'day': 'sa','time': time, 'etime': etime, 'chk': form_checkbox},
                                                             success: function(data) {
                                                                 console.log(data);
                                                                 if (data.status == 'active') {
                                                                     var chk = `checked`;
                                                                 }
                                                                 $("#savesa").append(`
                                                                 <div class="form-group row position-relative mt-6">
                                                                         <div class="form-group row position-relative" id="rowsa${data.rowid}"> 
                                                                           <div class="col-md-3">
                                                                              <label class="form-label">เริ่ม:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="time${data.rowid}" value="${data.time}"/>
                                                                          </div>
                                                                          <div class="col-md-3">
                                                                              <label class="form-label">สิ้นสุด:</label>
                                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="etime${data.rowid}" value="${data.etime}"/>
                                                                          </div>
                                                                          <div class="col-md-2">
                                                                             <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                                 <input class="form-check-input" type="checkbox" value="" name="chkopen" id="form_checkbox${data.rowid}" ${chk} />
                                                                                 <label class="form-check-label" for="form_checkbox">
                                                                                 เปิดใช้งาน
                                                                                 </label>
                                                                             </div>
                                                                         </div>
                                                                             <input type="hidden" id="flag" name="flag" value="edit">
                                                                             <div class="col-md-4">
                                                                              <!-- <a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                                    แก้ไข
                                                                               </a> -->
                                                                               <a href="javascript:;" id="delrow${data.rowid}"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                    ลบแถว
                                                                               </a>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <script>
                                                                   $("#editrow${data.rowid}").on('click',function(){
                                                                       
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/editrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   $("#form_checkbox${data.rowid}").on('click',function(){
                                                                       const chk = $("#form_checkbox${data.rowid}").prop('checked');
                                                                          $.ajax({
                                                                               url: '/days/editchkrow',
                                                                               type: 'POST',
                                                                               data: {'id': '${data.rowid}' ,'flag': chk},
                                                                               success: function(data) {
                                                                                   console.log(data);
                                                                                   if (data.result == 'true') {
                                                                                       toastr.success(data.message);
                                                                                   }else{
                                                                                       toastr.danger(data.message);
                                                                                   }
                                                                           }
                                                                       });
                                                                  });
                                                                   $("#delrow${data.rowid}").on('click',function(){
                                                                       const element = document.getElementById("rowmo${data.rowid}");
                                                                       element.remove();
                                                                       const time = $("#time${data.rowid}").val();
                                                                       const etime = $("#etime${data.rowid}").val();
                                                                       $.ajax({
                                                                             url: '/days/delrow',
                                                                             type: 'POST',
                                                                             data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                             success: function(data) {
                                                                                 console.log(data);
                                                                             }
                                                                         });
                                                                   });
                                                                   <\/script>
                                                                   `);
                                                                 $("#timestartsa").val("");
                                                                 $("#tmeendsa").val("");
                                                             }
                                                         });
                                                   });
                                                </script>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <!-- <div class="form-group mt-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    เพิ่มเวลา
                                                </a>
                                            </div> -->
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                                        <div class="d-flex flex-column">
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-inline-block position-relative ms-2 me-10">
                                                    <!--begin::Label-->
                                                    <span class="d-inline-block mb-2 fs-3 fw-bold">
                                                        ตั้งค่าช่วงเวลา
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Line-->
                                                    <span class="d-inline-block position-absolute h-3px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                                                    <!--end::Line-->
                                                </span>
                                                <?php foreach($days as $dval){?>
                                                <?php if($dval->day_code == "su"){ ?>
                                                <div hidden class="form-check form-switch form-check-custom form-check-success form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" <?php if($dval->status == "active"){?> checked <?php }else{} ?>  value="su" id="flexSwitchsu"/>
                                                    <label class="form-check-label" for="flexSwitch">
                                                        <?php if($dval->status == "active"){?> เปิดใช้งาน <?php }else{ echo "ปิดใช้งาน";} ?>  
                                                    </label>
                                                </div>
                                                <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--begin::Repeater-->
                                        <div id="kt_docs_repeater_basic_7">
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <?php foreach($query as $val){?>
                                                    <?php if($val->days == 'su'){?>
                                                        <div class="form-group row position-relative mt-6" id="rowsu<?=$val->id;?>">
                                                            <div class="col-md-3">
                                                               <label class="form-label">เริ่ม:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="time<?= $val->id;?>" placeholder="เวลา" value="<?php echo trim($val->time);?>"/>
                                                           </div>
                                                           <div class="col-md-3">
                                                               <label class="form-label">สิ้นสุด:</label>
                                                               <input type="time" class="form-control form-control-sm mb-2 mb-md-0" id="etime<?= $val->id?>" placeholder="เวลา" value="<?php echo trim($val->etime);?>"/>
                                                           </div>
                                                           <div class="col-md-2">
                                                               <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                   <input class="form-check-input" type="checkbox" value="" <?php if($val->status == "active"){?> checked <?php }else{} ?> id="form_checkbox<?= $val->id?>" />
                                                                   <label class="form-check-label" for="form_checkbox">
                                                                   เปิดใช้งาน
                                                                   </label>
                                                               </div>
                                                           </div>
                                                           <div class="col-md-4">
                                                               <!-- <a href="javascript:;" id="editrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                   <i class="ki-duotone ki-edit fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                                   แก้ไข
                                                               </a> -->
                                                               <a href="javascript:;"  id="delrow<?=$val->id;?>" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                   <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                                   ลบแถว
                                                               </a>
                                                           </div>
                                                       </div>
                                                        <script>
                                                           $("#editrow<?= $val->id;?>").on('click',function(){
                                                               
                                                               const time = $("#time<?= $val->id;?>").val();
                                                               const etime = $("#etime<?= $val->id;?>").val();
                                                               $.ajax({
                                                                     url: '<?php echo base_url(); ?>days/editrow',
                                                                     type: 'POST',
                                                                     data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                     success: function(data) {
                                                                         console.log(data);
                                                                     }
                                                                 });
                                                           });
                                                           $("#form_checkbox<?= $val->id?>").on('click',function(){
                                                                const chk = $("#form_checkbox<?= $val->id?>").prop('checked');
                                                                   $.ajax({
                                                                        url: '<?php echo base_url(); ?>days/editchkrow',
                                                                        type: 'POST',
                                                                        data: {'id': '<?= $val->id;?>' ,'flag': chk},
                                                                        success: function(data) {
                                                                            console.log(data);
                                                                            if (data.result == 'true') {
                                                                                toastr.success(data.message);
                                                                            }else{
                                                                                toastr.danger(data.message);
                                                                            }
                                                                    }
                                                                });
                                                           });
                                                           $("#delrow<?= $val->id;?>").on('click',function(){
                                                               const element = document.getElementById("rowsu<?=$val->id;?>");
                                                                  element.remove();
                                                               const time = $("#time<?= $val->id;?>").val();
                                                               const etime = $("#etime<?= $val->id;?>").val();
                                                               $.ajax({
                                                                     url: '<?php echo base_url(); ?>days/delrow',
                                                                     type: 'POST',
                                                                     data: {'id': '<?= $val->id;?>' ,'time': time, 'etime': etime},
                                                                     success: function(data) {
                                                                         console.log(data);
                                                                     }
                                                                 });
                                                           });
                                                   </script>
                                                    <?php } ?>
                                                <?php } ?>
                                               <div id="savesu"></div>
                                               <div data-repeater-list="kt_docs_repeater_basic">
                                                   <div data-repeater-item>
                                                      <div class="form-group row position-relative mt-6">
                                                          <div class="col-md-3">
                                                              <label class="form-label">เริ่ม:</label>
                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestartsu" id="timestartsu" value=""/>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <label class="form-label">สิ้นสุด:</label>
                                                              <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeendsu" id="tmeendsu" value=""/>
                                                          </div>
                                                          <div class="col-md-2">
                                                             <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                 <input class="form-check-input" type="checkbox" value="" name="chkopen"  id="checkboxaddsu" />
                                                                 <label class="form-check-label" for="form_checkbox">
                                                                 เปิดใช้งาน
                                                                 </label>
                                                             </div>
                                                         </div>
                                                         <input type="hidden" id="flag" name="flag" value="add">
                                                          <div class="col-md-4">
                                                          <a href="javascript:;" id="saverowsu" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
                                                            <div class=""> บันทึก </div>
                                                         </a>
                                                              <!-- <a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                  ลบแถว
                                                              </a> -->
                                                          </div>
                                                      </div>
                                                   </div>
                                               </div>
                                               <script>
                                                   $("#saverowsu").on('click',function(){
                                                      
                                                      const dates = '<?=$dateParam;?>';
                                                      const time = $("#timestartsu").val();
                                                      const etime = $("#tmeendsu").val();
                                                      const form_checkbox = $("#checkboxaddsu").prop('checked');
                                                      $.ajax({
                                                            url: '<?php echo base_url(); ?>days/addrow',
                                                            type: 'POST',
                                                            data: {'day': 'su','time': time, 'etime': etime, 'chk': form_checkbox},
                                                            success: function(data) {
                                                                console.log(data);
                                                                if (data.status == 'active') {
                                                                    var chk = `checked`;
                                                                }
                                                                $("#savesu").append(`
                                                                <div class="form-group row position-relative mt-6">
                                                                        <div class="form-group row position-relative" id="rowsu${data.rowid}"> 
                                                                          <div class="col-md-3">
                                                                             <label class="form-label">เริ่ม:</label>
                                                                             <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="timestart" id="time${data.rowid}" value="${data.time}"/>
                                                                         </div>
                                                                         <div class="col-md-3">
                                                                             <label class="form-label">สิ้นสุด:</label>
                                                                             <input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" name="tmeend" id="etime${data.rowid}" value="${data.etime}"/>
                                                                         </div>
                                                                         <div class="col-md-2">
                                                                            <div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
                                                                                <input class="form-check-input" type="checkbox" value="" name="chkopen" id="form_checkbox${data.rowid}" ${chk} />
                                                                                <label class="form-check-label" for="form_checkbox">
                                                                                เปิดใช้งาน
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                            <input type="hidden" id="flag" name="flag" value="edit">
                                                                            <div class="col-md-4">
                                                                              <!-- <a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
                                                                                   แก้ไข
                                                                               </a> -->
                                                                              <a href="javascript:;" id="delrow${data.rowid}"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                   ลบแถว
                                                                              </a>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <script>
                                                                  $("#editrow${data.rowid}").on('click',function(){
                                                                      
                                                                      const time = $("#time${data.rowid}").val();
                                                                      const etime = $("#etime${data.rowid}").val();
                                                                      $.ajax({
                                                                            url: '/days/editrow',
                                                                            type: 'POST',
                                                                            data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                            success: function(data) {
                                                                                console.log(data);
                                                                            }
                                                                        });
                                                                  });
                                                                  $("#form_checkbox${data.rowid}").on('click',function(){
                                                                      const chk = $("#form_checkbox${data.rowid}").prop('checked');
                                                                         $.ajax({
                                                                              url: '/days/editchkrow',
                                                                              type: 'POST',
                                                                              data: {'id': '${data.rowid}' ,'flag': chk},
                                                                              success: function(data) {
                                                                                  console.log(data);
                                                                                  if (data.result == 'true') {
                                                                                      toastr.success(data.message);
                                                                                  }else{
                                                                                      toastr.danger(data.message);
                                                                                  }
                                                                          }
                                                                      });
                                                                 });
                                                                  $("#delrow${data.rowid}").on('click',function(){
                                                                      const element = document.getElementById("rowmo${data.rowid}");
                                                                      element.remove();
                                                                      const time = $("#time${data.rowid}").val();
                                                                      const etime = $("#etime${data.rowid}").val();
                                                                      $.ajax({
                                                                            url: '/days/delrow',
                                                                            type: 'POST',
                                                                            data: {'id': '${data.rowid}' ,'time': time, 'etime': etime},
                                                                            success: function(data) {
                                                                                console.log(data);
                                                                            }
                                                                        });
                                                                  });
                                                                  <\/script>
                                                                  `);
                                                                $("#timestartsu").val("");
                                                                $("#tmeendsu").val("");
                                                            }
                                                        });
                                                  });
                                               </script>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <!-- <div class="form-group mt-5">
                                                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-3"></i>
                                                    เพิ่มเวลา
                                                </a>
                                            </div> -->
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script>
    $("#flexSwitchmo").on('click',function(){
        $("#checkdays").val($("#flexSwitchmo").val());
        const chk = $("#flexSwitchmo").prop('checked');
        $.ajax({
            url: '<?php echo base_url(); ?>days/update',
            type: 'POST',
            data: {'data': chk ,'id': '1'},
            success: function(data) {
                var json = data;
                console.log(json);
                if (json.result == 'true') {
                    $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                }else{
                    $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                }
            }
        });
        
    });
    $("#flexSwitchtu").on('click',function(){
        $("#checkdays").val($("#flexSwitchtu").val());
       const chk = $("#flexSwitchtu").prop('checked');
       $.ajax({
           url: '<?php echo base_url(); ?>days/update',
           type: 'POST',
           data: {'data': chk ,'id': '2'},
           success: function(data) {
               var json = data;
               console.log(json);
               if (json.result == 'true') {
                   $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
               }else{
                   $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
               }
           }
       });
        
    });
    $("#flexSwitchwe").on('click',function(){
        $("#checkdays").val($("#flexSwitchwe").val());
        const chk = $("#flexSwitchwe").prop('checked');
           $.ajax({
               url: '<?php echo base_url(); ?>days/update',
               type: 'POST',
               data: {'data': chk ,'id': '3'},
               success: function(data) {
                   var json = data;
                   console.log(json);
                   if (json.result == 'true') {
                       $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                   }else{
                       $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                   }
               }
           });
        
    });
    $("#flexSwitchth").on('click',function(){
        $("#checkdays").val($("#flexSwitchth").val());
        const chk = $("#flexSwitchth").prop('checked');
        $.ajax({
              url: '<?php echo base_url(); ?>days/update',
              type: 'POST',
              data: {'data': chk ,'id': '4'},
              success: function(data) {
                  var json = data;
                  console.log(json);
                  if (json.result == 'true') {
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                  }else{
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                  }
              }
          });
        
    });
    $("#flexSwitchfr").on('click',function(){
        $("#checkdays").val($("#flexSwitchfr").val());
        const chk = $("#flexSwitchfr").prop('checked');
        $.ajax({
              url: '<?php echo base_url(); ?>days/update',
              type: 'POST',
              data: {'data': chk ,'id': '5'},
              success: function(data) {
                  var json = data;
                  console.log(json);
                  if (json.result == 'true') {
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                  }else{
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                  }
              }
          });
        
    });
    $("#flexSwitchsa").on('click',function(){
        $("#checkdays").val($("#flexSwitchsa").val());
        const chk = $("#flexSwitchsa").prop('checked');
        $.ajax({
              url: '<?php echo base_url(); ?>days/update',
              type: 'POST',
              data: {'data': chk ,'id': '6'},
              success: function(data) {
                  var json = data;
                  console.log(json);
                  if (json.result == 'true') {
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                  }else{
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                  }
              }
          });
        
    });
    $("#flexSwitchsu").on('click',function(){
        $("#checkdays").val($("#flexSwitchsu").val());
        const chk = $("#flexSwitchsu").prop('checked');
        $.ajax({
              url: '<?php echo base_url(); ?>days/update',
              type: 'POST',
              data: {'data': chk ,'id': '7'},
              success: function(data) {
                  var json = data;
                  console.log(json);
                  if (json.result == 'true') {
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-success">เปิดใช้งาน</span>');
                  }else{
                      $("."+$("#checkdays").val()+"").html('<span class="fs-7 text-danger">ปิดใช้งาน</span>');
                  }
              }
          });
        
    });
</script>

<script>
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
    $('#kt_docs_repeater_basic_2').repeater({
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
    $('#kt_docs_repeater_basic_3').repeater({
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
    $('#kt_docs_repeater_basic_4').repeater({
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
    $('#kt_docs_repeater_basic_5').repeater({
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
    $('#kt_docs_repeater_basic_6').repeater({
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
    $('#kt_docs_repeater_basic_7').repeater({
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

    // $("#tab_business").addClass('active');
    // $("#kt_app_sidebar_secondary_environment").addClass('show active');
    $("#tab_appoint").addClass('active');
    $("#kt_app_sidebar_secondary_collections").addClass('show active');
</script>