
					<div id="details"></div>
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							
							<!--end::Copyright-->
							<!--begin::Menu-->
							
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->

<script>
	$("#details").load('<?php echo base_url()?>load_list_keyin_view');
	$("#list_keyin_view").on('click',function(){
		$("#details").load('<?php echo base_url()?>load_list_keyin_view');
	});
</script>