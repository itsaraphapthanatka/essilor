


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
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		
		<!--begin::Custom Javascript(used for this page only)-->
		<!-- <script src="<?php echo base_url();?>theme/demo20/assets/js/custom/apps/user-management/users/list/table.js"></script> -->
		<script src="<?php echo base_url();?>theme/demo20/assets/js/widgets.bundle.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/widgets.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/create-app.js"></script>
		<!-- <script src="<?php echo base_url();?>theme/demo20/assets/js/custom/utilities/modals/users-search.js"></script> -->
		<script src="<?php echo base_url();?>theme/demo20/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<!--CKEditor Build Bundles:: Only include the relevant bundles accordingly-->
		<script>
			$("#trancate").on('click', function(){
				Swal.fire({
					text: "Are you sure you want to truncate the data? This action cannot be undone.",
					icon: "warning",
					showCancelButton: true,
					confirmButtonText: "Yes, truncate it!",
					cancelButtonText: "No, cancel",
					customClass: {
						confirmButton: "btn btn-danger",
						cancelButton: "btn btn-secondary"
					}
				}).then(function(result) {
					if (result.isConfirmed) {
						$.ajax({
							type: 'GET',
							url: '<?=base_url();?>controlData/trancateData',
							success: function(response) {
								Swal.fire({
									text: response.message,
									icon: response.status,
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn btn-success"
									}
								}).then(function(result) {
									if (result.isConfirmed) {
										console.log('Truncate operation completed.');
										location.reload();
									}
								});
							},
							error: function(xhr, status, error) {
								console.error('AJAX error:', status, error);
								Swal.fire({
									text: "An error occurred during the truncation process.",
									icon: "error",
									confirmButtonText: "Ok",
									customClass: {
										confirmButton: "btn btn-danger"
									}
								});
							}
						});
					}
				});
			});
			$("#backup").on('click', function(){
				Swal.fire({
					text: "Are you sure you want to backup the data? This action cannot be undone.",
					icon: "info",
					backdrop: true,
					allowOutsideClick: false,
					allowEscapeKey: false,
					showCancelButton: true,
					confirmButtonText: "Yes, backup it!",
					cancelButtonText: "No, cancel",
					customClass: {
						confirmButton: "btn btn-primary",
						cancelButton: "btn btn-secondary"
					}
				}).then(function(result) {
					if (result.isConfirmed) {
						$.ajax({
							type: 'GET',
							url: '<?=base_url();?>controlData/backup',
							xhrFields: {
								responseType: 'blob'  // This is crucial for binary data (e.g., files)
							},
							success: function(response, status, xhr) {
								var filename = ""; // Default filename
								var disposition = xhr.getResponseHeader('Content-Disposition');
								if (disposition && disposition.indexOf('attachment') !== -1) {
									var matches = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/.exec(disposition);
									if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
								}
								const path =  '<?=base_url();?>uploads/bk/database/';
								// Create a new Blob object using the response data of the file
								var blob = new Blob([response], { type: xhr.getResponseHeader('Content-Type') });
								var link = document.createElement('a');
								var url = window.URL.createObjectURL(blob);
								link.href = url;
								link.download = filename || 'backup.sql.gz'; // Fallback filename
								document.body.appendChild(link);

								// Auto-click the link to trigger download (optional)
								// link.click();

								// Display SweetAlert with a download link
								Swal.fire({
									text: "Backup successfully created.",
									html: `You can download the file <a href="${path}${filename}" download="${filename}" class="btn btn-primary">${filename}</a>`,
									icon: "success",
									backdrop: true,
									allowOutsideClick: false,
									allowEscapeKey: false,
									confirmButtonText: "Close",
									customClass: {
										confirmButton: "btn btn-success"
									}
								}).then(function(result) {
									if (result.isConfirmed) {
										console.log('Backup operation completed.');
										location.reload();
									}
								});

								// Cleanup
								document.body.removeChild(link);
								window.URL.revokeObjectURL(url);
							},
							error: function(xhr, status, error) {
								console.error('AJAX error:', status, error);
								Swal.fire({
									text: "An error occurred during the backup process.",
									icon: "error",
									backdrop: true,
									allowOutsideClick: false,
									allowEscapeKey: false,
									confirmButtonText: "Ok",
									customClass: {
										confirmButton: "btn btn-danger"
									}
								});
							}
						});


					}
				});
			});


		</script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>