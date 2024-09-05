<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
	   <!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<!-- <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ช่อง </h1> -->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Setup Running</h1>
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								<a href="/home/<?=session()->get('compcode');?>" class="text-muted text-hover-primary">Home</a>
							</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<!--end::Item-->		
						<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								<a href="/setupRunningNo/<?=$seq1;?>/<?=$seq2;?>/<?=$seq3;?>" class="text-muted text-hover-primary">Setup Running</a>
							</li>
						<!--end::Item-->	
					</ul>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-fluid">
				<div class="card">
					<div class="card-body py-4">
						<div class="table-responsive">
						<!--begin::Datatable-->
						<table id="kt_datatable_horizontal_scroll" class="table align-middle table-row-dashed fs-6 gy-5" >
							<thead>
								<tr class="text-center text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="min-w-100px">No.</th>
									<th class="min-w-125px">Module</th>
									<th class="min-w-100px">Prefix</th>
									<th class="min-w-100px">Type</th>
									<th class="min-w-100px">Running</th>
									<th class="min-w-100px" data-priority="2">Actions</th>
								</tr>
							</thead>
							<tbody class="text-gray-600 fw-semibold">
								<tr>
									<td class="text-center">1.</td>
									<td class="text-center">Tender<input type="hidden" class="form-control" name="id[]" value="<?php if(isset($res[0]['id'])){echo $res[0]['id'];}else{echo "";}?>"></td>
									<td><input type="text" class="form-control" name="prefix[]" value="<?php if(isset($res[0]['prefix'])){echo $res[0]['prefix'];}else{echo "";}?>"></td>
									<td>
										<select class="form-select" name="type[]">
											<?php if($res[0]['type'] == '1'){ ?><option value="1" selected>YYMM</option><?php } else { ?><option value="1">YYMM</option><?php }?>
											<?php if($res[0]['type'] == '2'){ ?><option value="2" selected>MMYY</option><?php } else { ?><option value="2">MMYY</option><?php }?>
											<?php if($res[0]['type'] == '3'){ ?><option value="3" selected>YYYYMM</option><?php } else { ?><option value="3">YYYYMM</option><?php }?>
											<?php if($res[0]['type'] == '4'){ ?><option value="4" selected>MMYYYY</option><?php } else { ?><option value="4">MMYYYY</option><?php }?>
											<?php if($res[0]['type'] == '5'){ ?><option value="5" selected>YYYYMMDD</option><?php } else { ?><option value="5">YYYYMMDD</option><?php }?>
											<?php if($res[0]['type'] == '6'){ ?><option value="6" selected>DDMMYYYY</option><?php } else { ?><option value="6">DDMMYYYY</option><?php }?>
											<!-- <?php if($res[0]['type'] == '7'){ ?><option value="7" selected>PJCODE-YYMM</option><?php } else { ?><option value="7">PJCODE-YYMM</option><?php }?>
											<?php if($res[0]['type'] == '8'){ ?><option value="8" selected>PJCODE-MMYY</option><?php } else { ?><option value="8">PJCODE-MMYY</option><?php }?>
											<?php if($res[0]['type'] == '9'){ ?><option value="9" selected>PJCODE-YYYYMM</option><?php } else { ?><option value="9">PJCODE-YYYYMM</option><?php }?>
											<?php if($res[0]['type'] == '10'){ ?><option value="10" selected>PJCODE-MMYYYY</option><?php } else { ?><option value="10">PJCODE-MMYYYY</option><?php }?>
											<?php if($res[0]['type'] == '11'){ ?><option value="11" selected>PJCODE-YYYYMMDD</option><?php } else { ?><option value="11">PJCODE-YYYYMMDD</option><?php }?>
											<?php if($res[0]['type'] == '12'){ ?><option value="12" selected>PJCODE-DDMMYYYY</option><?php } else { ?><option value="12">PJCODE-DDMMYYYY</option><?php }?> -->
										</select>
									</td>
									<td><input type="text" class="form-control" placeholder="0000" maxlength="4" name="running[]" value="<?=$res[0]['running']?>"></td>
									<td>
										<select class="form-select" name="status[]" id="">
											<?php if($res[0]['status'] == '1'){ ?><option value="1" selected>Active</option><?php } else { ?><option value="1">Active</option><?php }?>
											<?php if($res[0]['status'] == '2'){ ?><option value="1" selected>Inactive</option><?php } else { ?><option value="2">Inactive</option><?php }?>
											<!-- <option value="1">Active</option>
											<option value="2">Inactive</option> -->
										</select>
									</td>
								</tr>
								<tr>
									<td class="text-center">2.</td>
									<td class="text-center">PR<input type="hidden" class="form-control" name="id[]" value="<?php if(isset($res[1]['id'])){echo $res[1]['id'];}else{echo "";}?>"></td>
									<td><input type="text" class="form-control" name="prefix[]" value="<?php if(isset($res[1]['prefix'])){echo $res[1]['prefix'];}else{echo "";}?>"></td>
									<td>
										<select class="form-select" name="type[]">
											<?php if($res[1]['type'] == '1'){ ?><option value="1" selected>YYMM</option><?php } else { ?><option value="1">YYMM</option><?php }?>
											<?php if($res[1]['type'] == '2'){ ?><option value="2" selected>MMYY</option><?php } else { ?><option value="2">MMYY</option><?php }?>
											<?php if($res[1]['type'] == '3'){ ?><option value="3" selected>YYYYMM</option><?php } else { ?><option value="3">YYYYMM</option><?php }?>
											<?php if($res[1]['type'] == '4'){ ?><option value="4" selected>MMYYYY</option><?php } else { ?><option value="4">MMYYYY</option><?php }?>
											<?php if($res[1]['type'] == '5'){ ?><option value="5" selected>YYYYMMDD</option><?php } else { ?><option value="5">YYYYMMDD</option><?php }?>
											<?php if($res[1]['type'] == '6'){ ?><option value="6" selected>DDMMYYYY</option><?php } else { ?><option value="6">DDMMYYYY</option><?php }?>
											<?php if($res[1]['type'] == '7'){ ?><option value="7" selected>PJCODE-YYMM</option><?php } else { ?><option value="7">PJCODE-YYMM</option><?php }?>
											<?php if($res[1]['type'] == '8'){ ?><option value="8" selected>PJCODE-MMYY</option><?php } else { ?><option value="8">PJCODE-MMYY</option><?php }?>
											<?php if($res[1]['type'] == '9'){ ?><option value="9" selected>PJCODE-YYYYMM</option><?php } else { ?><option value="9">PJCODE-YYYYMM</option><?php }?>
											<?php if($res[1]['type'] == '10'){ ?><option value="10" selected>PJCODE-MMYYYY</option><?php } else { ?><option value="10">PJCODE-MMYYYY</option><?php }?>
											<?php if($res[1]['type'] == '11'){ ?><option value="11" selected>PJCODE-YYYYMMDD</option><?php } else { ?><option value="11">PJCODE-YYYYMMDD</option><?php }?>
											<?php if($res[1]['type'] == '12'){ ?><option value="12" selected>PJCODE-DDMMYYYY</option><?php } else { ?><option value="12">PJCODE-DDMMYYYY</option><?php }?>
										</select>
									</td>
									<td><input type="text" class="form-control" placeholder="0000" maxlength="4" name="running[]" value="<?=$res[1]['running']?>"></td>
									<td>
										<select class="form-select" name="status[]" id="">
											<?php if($res[1]['status'] == '1'){ ?><option value="1" selected>Active</option><?php } else { ?><option value="1">Active</option><?php }?>
											<?php if($res[1]['status'] == '2'){ ?><option value="1" selected>Inactive</option><?php } else { ?><option value="2">Inactive</option><?php }?>
											<!-- <option value="1">Active</option>
											<option value="2">Inactive</option> -->
										</select>
									</td>
								</tr>
								<tr>
									<td class="text-center">3.</td>
									<td class="text-center">PO<input type="hidden" class="form-control" name="id[]" value="<?php if(isset($res[2]['id'])){echo $res[2]['id'];}else{echo "";}?>"></td>
									<td><input type="text" class="form-control" name="prefix[]" value="<?php if(isset($res[2]['prefix'])){echo $res[2]['prefix'];}else{echo "";}?>"></td>
									<td>
										<select class="form-select" name="type[]">
											<?php if($res[2]['type'] == '1'){ ?><option value="1" selected>YYMM</option><?php } else { ?><option value="1">YYMM</option><?php }?>
											<?php if($res[2]['type'] == '2'){ ?><option value="2" selected>MMYY</option><?php } else { ?><option value="2">MMYY</option><?php }?>
											<?php if($res[2]['type'] == '3'){ ?><option value="3" selected>YYYYMM</option><?php } else { ?><option value="3">YYYYMM</option><?php }?>
											<?php if($res[2]['type'] == '4'){ ?><option value="4" selected>MMYYYY</option><?php } else { ?><option value="4">MMYYYY</option><?php }?>
											<?php if($res[2]['type'] == '5'){ ?><option value="5" selected>YYYYMMDD</option><?php } else { ?><option value="5">YYYYMMDD</option><?php }?>
											<?php if($res[2]['type'] == '6'){ ?><option value="6" selected>DDMMYYYY</option><?php } else { ?><option value="6">DDMMYYYY</option><?php }?>
											<?php if($res[2]['type'] == '7'){ ?><option value="7" selected>PJCODE-YYMM</option><?php } else { ?><option value="7">PJCODE-YYMM</option><?php }?>
											<?php if($res[2]['type'] == '8'){ ?><option value="8" selected>PJCODE-MMYY</option><?php } else { ?><option value="8">PJCODE-MMYY</option><?php }?>
											<?php if($res[2]['type'] == '9'){ ?><option value="9" selected>PJCODE-YYYYMM</option><?php } else { ?><option value="9">PJCODE-YYYYMM</option><?php }?>
											<?php if($res[2]['type'] == '10'){ ?><option value="10" selected>PJCODE-MMYYYY</option><?php } else { ?><option value="10">PJCODE-MMYYYY</option><?php }?>
											<?php if($res[2]['type'] == '11'){ ?><option value="11" selected>PJCODE-YYYYMMDD</option><?php } else { ?><option value="11">PJCODE-YYYYMMDD</option><?php }?>
											<?php if($res[2]['type'] == '12'){ ?><option value="12" selected>PJCODE-DDMMYYYY</option><?php } else { ?><option value="12">PJCODE-DDMMYYYY</option><?php }?>
										</select>
									</td>
									<td><input type="text" class="form-control" placeholder="0000" maxlength="4" name="running[]" value="<?=$res[2]['running']?>"></td>
									<td>
										<select class="form-select" name="status[]" id="">
											<?php if($res[2]['status'] == '1'){ ?><option value="1" selected>Active</option><?php } else { ?><option value="1">Active</option><?php }?>
											<?php if($res[2]['status'] == '2'){ ?><option value="1" selected>Inactive</option><?php } else { ?><option value="2">Inactive</option><?php }?>
											<!-- <option value="1">Active</option>
											<option value="2">Inactive</option> -->
										</select>
									</td>
								</tr>
								<tr>
									<td class="text-center">4.</td>
									<td class="text-center">WO<input type="hidden" class="form-control" name="id[]" value="<?php if(isset($res[3]['id'])){echo $res[3]['id'];}else{echo "";}?>"></td>
									<td><input type="text" class="form-control" name="prefix[]" value="<?php if(isset($res[3]['prefix'])){echo $res[3]['prefix'];}else{echo "";}?>"></td>
									<td>
										<select class="form-select" name="type[]">
											<?php if($res[3]['type'] == '1'){ ?><option value="1" selected>YYMM</option><?php } else { ?><option value="1">YYMM</option><?php }?>
											<?php if($res[3]['type'] == '2'){ ?><option value="2" selected>MMYY</option><?php } else { ?><option value="2">MMYY</option><?php }?>
											<?php if($res[3]['type'] == '3'){ ?><option value="3" selected>YYYYMM</option><?php } else { ?><option value="3">YYYYMM</option><?php }?>
											<?php if($res[3]['type'] == '4'){ ?><option value="4" selected>MMYYYY</option><?php } else { ?><option value="4">MMYYYY</option><?php }?>
											<?php if($res[3]['type'] == '5'){ ?><option value="5" selected>YYYYMMDD</option><?php } else { ?><option value="5">YYYYMMDD</option><?php }?>
											<?php if($res[3]['type'] == '6'){ ?><option value="6" selected>DDMMYYYY</option><?php } else { ?><option value="6">DDMMYYYY</option><?php }?>
											<?php if($res[3]['type'] == '7'){ ?><option value="7" selected>PJCODE-YYMM</option><?php } else { ?><option value="7">PJCODE-YYMM</option><?php }?>
											<?php if($res[3]['type'] == '8'){ ?><option value="8" selected>PJCODE-MMYY</option><?php } else { ?><option value="8">PJCODE-MMYY</option><?php }?>
											<?php if($res[3]['type'] == '9'){ ?><option value="9" selected>PJCODE-YYYYMM</option><?php } else { ?><option value="9">PJCODE-YYYYMM</option><?php }?>
											<?php if($res[3]['type'] == '10'){ ?><option value="10" selected>PJCODE-MMYYYY</option><?php } else { ?><option value="10">PJCODE-MMYYYY</option><?php }?>
											<?php if($res[3]['type'] == '11'){ ?><option value="11" selected>PJCODE-YYYYMMDD</option><?php } else { ?><option value="11">PJCODE-YYYYMMDD</option><?php }?>
											<?php if($res[3]['type'] == '12'){ ?><option value="12" selected>PJCODE-DDMMYYYY</option><?php } else { ?><option value="12">PJCODE-DDMMYYYY</option><?php }?>
										</select>
									</td>
									<td><input type="text" class="form-control" placeholder="0000" maxlength="4" name="running[]" value="<?=$res[3]['running']?>"></td>
									<td>
										<select class="form-select" name="status[]" id="">
											<?php if($res[3]['status'] == '1'){ ?><option value="1" selected>Active</option><?php } else { ?><option value="1">Active</option><?php }?>
											<?php if($res[3]['status'] == '2'){ ?><option value="1" selected>Inactive</option><?php } else { ?><option value="2">Inactive</option><?php }?>
											<!-- <option value="1">Active</option>
											<option value="2">Inactive</option> -->
										</select>
									</td>
								</tr>
								<tr>
									<td class="text-center">5.</td>
									<td class="text-center">Pettycash<input type="hidden" class="form-control" name="id[]" value="<?php if(isset($res[4]['id'])){echo $res[4]['id'];}else{echo "";}?>"></td>
									<td><input type="text" class="form-control" name="prefix[]" value="<?php if(isset($res[4]['prefix'])){echo $res[4]['prefix'];}else{echo "";}?>"></td>
									<td>
										<select class="form-select" name="type[]">
											<?php if($res[4]['type'] == '1'){ ?><option value="1" selected>YYMM</option><?php } else { ?><option value="1">YYMM</option><?php }?>
											<?php if($res[4]['type'] == '2'){ ?><option value="2" selected>MMYY</option><?php } else { ?><option value="2">MMYY</option><?php }?>
											<?php if($res[4]['type'] == '3'){ ?><option value="3" selected>YYYYMM</option><?php } else { ?><option value="3">YYYYMM</option><?php }?>
											<?php if($res[4]['type'] == '4'){ ?><option value="4" selected>MMYYYY</option><?php } else { ?><option value="4">MMYYYY</option><?php }?>
											<?php if($res[4]['type'] == '5'){ ?><option value="5" selected>YYYYMMDD</option><?php } else { ?><option value="5">YYYYMMDD</option><?php }?>
											<?php if($res[4]['type'] == '6'){ ?><option value="6" selected>DDMMYYYY</option><?php } else { ?><option value="6">DDMMYYYY</option><?php }?>
											<?php if($res[4]['type'] == '7'){ ?><option value="7" selected>PJCODE-YYMM</option><?php } else { ?><option value="7">PJCODE-YYMM</option><?php }?>
											<?php if($res[4]['type'] == '8'){ ?><option value="8" selected>PJCODE-MMYY</option><?php } else { ?><option value="8">PJCODE-MMYY</option><?php }?>
											<?php if($res[4]['type'] == '9'){ ?><option value="9" selected>PJCODE-YYYYMM</option><?php } else { ?><option value="9">PJCODE-YYYYMM</option><?php }?>
											<?php if($res[4]['type'] == '10'){ ?><option value="10" selected>PJCODE-MMYYYY</option><?php } else { ?><option value="10">PJCODE-MMYYYY</option><?php }?>
											<?php if($res[4]['type'] == '11'){ ?><option value="11" selected>PJCODE-YYYYMMDD</option><?php } else { ?><option value="11">PJCODE-YYYYMMDD</option><?php }?>
											<?php if($res[4]['type'] == '12'){ ?><option value="12" selected>PJCODE-DDMMYYYY</option><?php } else { ?><option value="12">PJCODE-DDMMYYYY</option><?php }?>
										</select>
									</td>
									<td><input type="text" class="form-control" placeholder="0000" maxlength="4" name="running[]" value="<?=$res[4]['running']?>"></td>
									<td>
										<select class="form-select" name="status[]" id="">
											<?php if($res[4]['status'] == '1'){ ?><option value="1" selected>Active</option><?php } else { ?><option value="1">Active</option><?php }?>
											<?php if($res[4]['status'] == '2'){ ?><option value="1" selected>Inactive</option><?php } else { ?><option value="2">Inactive</option><?php }?>
											<!-- <option value="1">Active</option>
											<option value="2">Inactive</option> -->
										</select>
									</td>
								</tr>
							</tbody>
						</table>
						<!--end::Datatable-->
						</div>
					</div>
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Content wrapper-->
	</div>
</div>

<script>
   	$("#tab_<?= $seq1; ?>").addClass('show');
	$("#tab_group_<?= $seq2; ?>").addClass('show');
	$("#tab_sub_<?= $seq3; ?>").addClass('active');
</script>