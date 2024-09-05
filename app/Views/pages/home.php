
<div id="details"></div>
<script>
	$("#tab_2").addClass('active');
	$("#kt_header_navs_tab_2").addClass('active show');
	$("#view_ecp").addClass('btn-light-primary');

	$("#details").load('<?php echo base_url()?>load_list_ecp_view');
	$("#list_ecp_view").on('click',function(){
		$("#details").load('<?php echo base_url()?>load_list_ecp_view');
	});
</script>