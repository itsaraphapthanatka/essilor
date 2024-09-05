<!-- <form class="form" id="editpost" action="<?php echo base_url();?>editsettime" method="post" enctype="multipart/form-data"> -->
	<div class="modal-body py-10 px-lg-17">
  		<h1><?=$dateParam;?></h1>
  		<!--begin::Input group-->
  		<div class="row row-cols-lg-3 g-10">
   			<div class="col">
					<div class="fv-row mb-9">
						<select class="form-select" name="ecalendartype" onChange="echktype();" id="ecalendartype<?=$dateParam;?>">
							<option value="3">วัน</option>
							<!-- <option value="2">สัปดาห์</option>
							<option value="1">เดือน</option> -->
						</select>
					</div>
  			</div>
   			<div class="col" id="emonthdiv<?=$dateParam;?>">
					<div class="fv-row mb-9" >
						<select class="form-select" data-control="select2" data-placeholder="Select an option" name="calendarmonth" id="calendarmonth">
							<?php foreach($month as $month){?>
							<option value="<?=$month['month_code'];?>"><?=$month['month_name_th'];?></option>
							<?php } ?>
						</select>
					</div>
  			</div>
  			<div class="col" id="edatebetweendiv<?=$dateParam;?>">
	   			<div class="fv-row">
		   			<!--begin::Input-->
		   			<input class="form-control form-control-solid" name="calendar_event_between_date" placeholder="Pick a start date" id="ekt_calendar_datepicker_between_date<?=$dateParam;?>" />
		   			<!--end::Input-->
	   			</div>
   			</div>
  			<div class="col" id="edatedaydiv<?=$dateParam;?>">
	   			<div class="fv-row">
		   			<!--begin::Input-->
		   			<input class="form-control form-control-solid" name="calendar_event_start_date" value="<?=$dateParam;?>" placeholder="Pick a start date" readonly="readonly" id="kt_calendar_datepicker_start_date<?=$dateParam;?>" />
		   			<!--end::Input-->
	   			</div>
   			</div>
   			<div class="col" id="emonthdivyear<?=$dateParam;?>">
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
		<div id="edateactive<?=$dateParam;?>">
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
				<div id="kt_docs_repeater_basic<?=$dateParam;?>">
					<!--begin::Form group-->
					<div class="form-group ms-2">
						<?php foreach($query as $value){?>
						<div class="form-group row position-relative mt-6" id="rowmo<?=$value->id;?>">
							<div class="col-md-3">
  							<label class="form-label">เริ่ม:</label>
  							<input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" id="time<?= $value->id;?>" name="timestart[]" value="<?=date('H:i',strtotime($value->time));?>"/>
							</div>
							<div class="col-md-3">
  							<label class="form-label">สิ้นสุด:</label>
  							<input type="time" class="form-control form-control-sm mb-2 mb-md-0" placeholder="เวลา" id="etime<?= $value->id;?>" name="tmeend[]" value="<?=date('H:i',strtotime($value->etime));?>"/>
							</div>
							<div class="col-md-2">
  							<div class="form-check form-check-custom form-check-solid mt-2 mt-md-11">
	  							<input class="form-check-input" type="checkbox" id="form_checkbox<?= $value->id;?>" name="chkopen[]" <?php if($value->status == "active"){ echo 'checked'; }else{} ?> />
	  							<label class="form-check-label" for="form_checkbox">
	  							เปิดใช้งาน
	  							</label>
  							</div>
							</div>
							<input type="hidden" id="flag<?=$value->id;?>" name="flag[]" value="edit">
							<div class="col-md-4">
								<a href="javascript:;" id="editrow<?=$value->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8">
								แก้ไข
  							<a href="javascript:;" id="delrow<?=$value->id;?>"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
	  							ลบแถว
  							</a>
							</div>
						</div>
						<script>
							$("#form_checkbox<?= $value->id;?>").on('click',function(){
								const chk = $("#form_checkbox<?= $value->id;?>").prop('checked');
								console.log(chk);
								$.ajax({
									  url: '<?php echo base_url(); ?>days/editchkrow',
									  type: 'POST',
									  data: {'id': '<?= $value->id;?>', 'flag': chk},
									  success: function(data) {
										  console.log(data);
									  }
								  });
							});
							$("#editrow<?= $value->id;?>").on('click',function(){
								
								const time = $("#time<?= $value->id;?>").val();
								const etime = $("#etime<?= $value->id;?>").val();
								$.ajax({
									  url: '<?php echo base_url(); ?>days/editrow',
									  type: 'POST',
									  data: {'id': '<?= $value->id;?>' ,'time': time, 'etime': etime},
									  success: function(data) {
										  console.log(data);
									  }
								  });
							});
							$("#delrow<?= $value->id;?>").on('click',function(){
								const element = document.getElementById("rowmo<?=$value->id;?>");
								element.remove();
								const time = $("#time<?= $value->id;?>").val();
								const etime = $("#etime<?= $value->id;?>").val();
								$.ajax({
									  url: '<?php echo base_url(); ?>days/delrow',
									  type: 'POST',
									  data: {'id': '<?= $value->id;?>' ,'time': time, 'etime': etime},
									  success: function(data) {
										  console.log(data);
									  }
								  });
							});
							
						</script>
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
								   	<a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
									   	ลบแถว
								   	</a>
							   	</div>
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
								  data: {'day': dates,'time': time, 'etime': etime, 'chk': form_checkbox},
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
													<a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8">
										 				แก้ไข
													</a>
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
					   <input type="text" id="limitdate<?=$dateParam;?>" class="form-control text-center" placeholder="3" aria-label="จำกัดเวลาทำการ" name="limitdate" aria-describedby="basic-addon2" value="<?=$limitdate['limitdate'];?>"/>
					<!--end::Col-->
					</div>
					<label class="col-lg-3 col-form-label fw-semibold fs-6">ครั้งต่อวัน</label>
				</div> 
			</div>
			<!--end::Stat-->
			</div>
		</div>
		<script>
			$("#limitdate<?=$dateParam;?>").on('change',function(){
				var limit = $("#limitdate<?=$dateParam;?>").val();
				$.ajax({
					  url: '<?php echo base_url(); ?>updatelimit',
					  type: 'POST',
					  data: {'date': '<?=$dateParam;?>' ,'limit': limit},
					  success: function(data) {
						  console.log(data);
						  
						  toastr.success(data.message);
					  }
				  });
			});
		</script>
		<!--end::Input group-->
<!-- </form> -->

   
   
   <script>
	var emonthdiv = document.getElementById("emonthdiv<?=$dateParam;?>");
	 var emonthdivyear = document.getElementById("emonthdivyear<?=$dateParam;?>");
	 var ecalendartype = document.getElementById("ecalendartype<?=$dateParam;?>").value;
	 var edatebetweendiv = document.getElementById("edatebetweendiv<?=$dateParam;?>");
	 var edatedaydiv = document.getElementById("edatedaydiv<?=$dateParam;?>");
	 var edateactive = document.getElementById("edateactive<?=$dateParam;?>");
	 edatedaydiv.style.display = "block";
	 edatebetweendiv.style.display = "none";
	 emonthdiv.style.display = "none";
	 emonthdivyear.style.display = "none";
	 edateactive.style.display = "none";
	 function echktype(){
	 var select = document.getElementById('ecalendartype<?=$dateParam;?>');
	 var value = select.options[select.selectedIndex].value;
	 console.log(value);
		 if(value == '1'){
			 emonthdiv.style.display = "block";
			 emonthdivyear.style.display = "block";
			 edatebetweendiv.style.display = "none";
			 edatedaydiv.style.display = "none";
			 edateactive.style.display = "block";
			 edateactive.style.display = "block";
		 }else if(value == '2'){
			 emonthdiv.style.display = "none";
			 emonthdivyear.style.display = "none";
			 edatebetweendiv.style.display = "block";
			 edatedaydiv.style.display = "none";
			 edateactive.style.display = "none";
		 }else if(value == '3'){
			emonthdiv.style.display = "none";
			emonthdivyear.style.display = "none";
			edatebetweendiv.style.display = "none";
			edatedaydiv.style.display = "block";
			edateactive.style.display = "none";
		 }
		 
	 
	 }
	   
	   
	   $('#kt_docs_repeater_basic<?=$dateParam;?>').repeater({
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
	   $("#ekt_calendar_datepicker_between_date<?=$dateParam;?>").flatpickr({
		  enableTime: false,
		  dateFormat: "Y-m-d",
		  mode: "range",
		  minDate: "today",
		  weekNumbers: true,
		  defaultDate: ['<?=$dateParam;?>'],
	  });
	  //  $("#kt_calendar_datepicker_start_date<?=$dateParam;?>").flatpickr({
		//   enableTime: false,
		//   dateFormat: "Y-m-d",
		//   minDate: "today",
		//   defaultDate: ['<?=$dateParam;?>'],
	  // });
	  $("#kt_modal_add_event_ecancel").on('click',function(){
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
				  $('#kt_modal_view_event').modal('hide');		
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
   </script>