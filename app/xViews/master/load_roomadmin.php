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
				<span class="fs-6 text-gray-700 fw-bold">ผู้ดูแลห้อง</span>   
				<div id="kt_docs_repeater_basic<?=$dateParam;?>">
					<!--begin::Form group-->
					<div class="form-group ms-2">
						<?php $n=1; foreach($query as $value){?>
						<div class="form-group row position-relative mt-6" id="rowmo<?=$value->id;?>">
							<div class="col-md-3">
  							<label class="form-label">ห้อง:</label>
  							<!-- <input type="text" class="form-control form-control-sm mb-2 mb-md-0" placeholder="ห้อง" id="room<?= $value->id;?>" name="room[]" value="<?=$value->room;?>"/> -->
							  <select class="form-select form-control-sm mb-2 mb-md-0"  name="room[]" id="room<?= $value->id;?>">
								  <option value="<?=$value->room;?>" selected="selected"><?=$value->room;?></option>
									 <?php foreach($room as $rval){?>
									 <option value="<?php echo $rval['id'];?>"><?php echo $rval['room_name']?></option>
									 <?php } ?>
								 </select>
							</div>
							<div class="col-md-3">
  							<label class="form-label">ผู้ดูแล:</label>
  							<!-- <input type="text" class="form-control form-control-sm mb-2 mb-md-0" placeholder="ผู้ดูแล" id="admin<?= $value->id;?>" name="admin[]" value="<?=$value->user_control;?>"/> -->
							  <select class="form-select form-control-sm mb-2 mb-md-0"  name="admin[]" id="admin<?= $value->id;?>">
								  <option value="<?=$value->user_control;?>" selected="selected"><?=$value->user_control;?></option>
									<?php foreach($user as $rval){?>
									<option value="<?php echo $rval['user_name'];?>"><?php echo $rval['user_name']?></option>
									<?php } ?>
								</select>
							</div>
							<input type="hidden" id="flag<?=$value->id;?>" name="flag[]" value="edit">
							<div class="col-md-4">
								<?php if ($n==1) {?>
								<a href="javascript:;" id="editrow<?=$value->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8" hidden>
								แก้ไข
								<?php }else{?>
									<a href="javascript:;" id="editrow<?=$value->id;?>" data-repeater-delete class="btn btn-sm btn-light-warning mt-3 mt-md-8" hidden>
									แก้ไข
								<?php } ?>
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
									  url: '<?php echo base_url(); ?>room/editchkrow',
									  type: 'POST',
									  data: {'id': '<?= $value->id;?>', 'flag': chk},
									  success: function(data) {
										  console.log(data);
									  }
								  });
							});
							$("#editrow<?= $value->id;?>").on('click',function(){
								
								const room = $("#room<?= $value->id;?>").val();
								const admin = $("#admin<?= $value->id;?>").val();
								$.ajax({
									  url: '<?php echo base_url(); ?>room/editrow',
									  type: 'POST',
									  data: {'id': '<?= $value->id;?>' ,'room': room, 'admin': admin},
									  success: function(data) {
										  console.log(data);
									  }
								  });
							});
							$("#delrow<?= $value->id;?>").on('click',function(){
								const element = document.getElementById("rowmo<?=$value->id;?>");
								element.remove();
								const room = $("#room<?= $value->id;?>").val();
								const admin = $("#admin<?= $value->id;?>").val();
								$.ajax({
									  url: '<?php echo base_url(); ?>room/delrow',
									  type: 'POST',
									  data: {'id': '<?= $value->id;?>' ,'room': room, 'admin': admin},
									  success: function(data) {
										  console.log(data);
									  }
								  });
							});
							
						</script>
						<?php $n++; } ?>
						<div id="savemos"></div>
						<div data-repeater-list="kt_docs_repeater_basic">
							<div data-repeater-item>
						   	<div class="form-group row position-relative mt-6">
							   	<div class="col-md-3">
								   	<label class="form-label">ห้อง:</label>
								   	<!-- <input type="text" class="form-control form-control-sm mb-2 mb-md-0" placeholder="ห้อง" name="roomadd" id="roomadd" value=""/> -->
									   <select class="form-select form-control-sm mb-2 mb-md-0"  name="roomadd" id="roomadd">
										   <?php foreach($room as $rval){?>
										   <option value="<?php echo $rval['id'];?>"><?php echo $rval['room_name']?></option>
										   <?php } ?>
									   </select>
							   	</div>
							   	<div class="col-md-3">
								   	<label class="form-label">ผู้ดูแล:</label>
								   	<!-- <input type="text" class="form-control form-control-sm mb-2 mb-md-0" placeholder="ผู้ดูแล" name="adminadd" id="adminadd" value=""/> -->
									   <select class="form-select form-control-sm mb-2 mb-md-0"  name="adminadd" id="adminadd">
											  <?php foreach($user as $rval){?>
											  <option value="<?php echo $rval['user_name'];?>"><?php echo $rval['user_name']?></option>
											  <?php } ?>
										  </select>
							   	</div>
							  	<input type="hidden" id="flag" name="flag" value="add">
							   	<div class="col-md-4">
								   <a href="javascript:;" id="saverowmo" class="btn btn-sm btn-light-primary mt-3 mt-md-8">
									 <div class=""> บันทึก </div>
								  </a>
								   	<a href="javascript:;"  data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8" hidden>
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
							// const time = $("#timestart").val();
							// const etime = $("#tmeend").val();
							var room = $("#roomadd").val();
							var admin = $("#adminadd").val();
							const form_checkbox = $("#checkboxadd").prop('checked');
							$.ajax({
								  url: '<?php echo base_url(); ?>room/addrow',
								  type: 'POST',
								  data: {'day': dates,'room': room, 'admin': admin, 'chk': form_checkbox},
								  success: function(data) {
									  console.log(data);
									  if (data.status == 'active') {
										  var chk = `checked`;
									  }
									  $("#savemos").append(`
									  <div class="form-group row position-relative mt-6">
									  		<div class="form-group row position-relative" id="rowmo${data.rowid}"> 
												<div class="col-md-3">
											   	<label class="form-label">ห้อง:</label>
											   
												   <select class="form-select form-control-sm mb-2 mb-md-0"  name="room" id="room${data.rowid}">
												   <option value="${data.room}" selected="selected">${data.room}</option>
														  <?php foreach($room as $rval){?>
														  <option value="<?php echo $rval['id'];?>" ><?php echo $rval['room_name']?></option>
														  <?php } ?>
													  </select>
										   	</div>
										   	<div class="col-md-3">
											   	<label class="form-label">ผู้ดูแล:</label>
												   <select class="form-select form-control-sm mb-2 mb-md-0"  name="admin" id="admin${data.rowid}">
												   <option value="${data.user_control}" selected="selected">${data.user_control}</option>
														 <?php foreach($user as $rval){?>
														 <option value="<?php echo $rval['user_name'];?>" ><?php echo $rval['user_name']?></option>
														 <?php } ?>
													 </select>
										   	</div>
										  		<input type="hidden" id="flag" name="flag" value="edit">
										  		<div class="col-md-4">
													<a href="javascript:;" id="editrow${data.rowid}" class="btn btn-sm btn-light-warning mt-3 mt-md-8" hidden>
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
											
											const room = $("#room${data.rowid}").val();
											const admin = $("#admin${data.rowid}").val();
											$.ajax({
												  url: '/room/editrow',
												  type: 'POST',
												  data: {'id': '${data.rowid}' ,'room': room, 'admin': admin},
												  success: function(data) {
													  console.log(data);
												  }
											  });
										});
										$("#delrow${data.rowid}").on('click',function(){
											const element = document.getElementById("rowmo${data.rowid}");
											element.remove();
											const room = $("#room${data.rowid}").val();
											const admin = $("#admin${data.rowid}").val();
											$.ajax({
												  url: '/room/delrow',
												  type: 'POST',
												  data: {'id': '${data.rowid}' ,'room': room, 'admin': admin},
												  success: function(data) {
													  console.log(data);
												  }
											  });
										});
										<\/script>
										`);
									  $("#roomadd").val("");
									  $("#adminadd").val("");
								  }
							  });
						});
					</script>
					<!--end::Form group-->
					<!--begin::Form group-->
					<!-- <div class="form-group mt-5">
						<a href="javascript:;" data-repeater-create class="btn btn-light-primary">
   						<i class="ki-duotone ki-plus fs-3"></i>
   						เพิ่มผู้ดูแลห้อง
						</a>
					</div> -->
					<!--end::Form group-->
				</div>
			</div>
		</div>
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