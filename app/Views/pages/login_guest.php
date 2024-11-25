<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../"/>
		<title>Essilor</title>
		<meta charset="utf-8" />
		<meta name="description" content="Essilor" />
		<meta name="keywords" content="essilor" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://essilor.com/" />
		<meta property="og:site_name" content="essilor" />
		<link rel="canonical" href="https://essilor.com" />
		<link rel="shortcut icon" href="#" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url();?>theme/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>theme/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>
			var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
		</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center bg-gray-700">
						<!--begin::Header-->
						<div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
							
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="d-flex flex-row-fluid justify-content-center p-10">
							<!--begin::Nav-->
							<div class="stepper-nav">
								<!--begin::Step 2-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Account Detail</h3>
											<div class="stepper-desc fw-normal">Select your account Details</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Completed</h3>
											<div class="stepper-desc fw-normal">Setup Your Account Details</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
					</div>
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="my-auto pb-5"  id="form" action="<?php echo base_url();?>loginLevel" method="post" enctype="multipart/form-data">
								<!--begin::Step 1-->
								
								<!--begin::Step 2-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div data-kt-stepper-action="acctypecoperate">
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-10 pb-lg-15">
												<!--begin::Title-->
												<h2 class="fw-bold text-dark">Input Your Manager Username</h2>
												<!--end::Title-->
												<!--begin::Notice-->
												<div class="text-muted fw-semibold fs-6">If you need more info, please check out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Notice-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<h3>Duty</h3>
												<!--begin::Radio group-->
												<div data-kt-buttons="true">
													<!--begin::Radio button-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
														<!--end::Description-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid form-check-primary me-6">
																<input class="form-check-input" type="radio" name="level" checked="checked" value="task_creator"/>
															</div>
															<!--end::Radio-->

															<!--begin::Info-->
															<div class="flex-grow-1">
																<h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
																	Task Creator
																</h2>
															</div>
															<!--end::Info-->
														</div>
														<!--end::Description-->
													</label>
													<!--end::Radio button-->

													<!--begin::Radio button-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
														<!--end::Description-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid form-check-primary me-6">
																<input class="form-check-input" type="radio" name="level" value="keyin"/>
															</div>
															<!--end::Radio-->

															<!--begin::Info-->
															<div class="flex-grow-1">
																<h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
																	Keyin
																</h2>
															</div>
															<!--end::Info-->
														</div>
														<!--end::Description-->
													</label>
													<!--end::Radio button-->

													<!--begin::Radio button-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
														<!--end::Description-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid form-check-primary me-6">
																<input class="form-check-input" type="radio" name="level" value="support"/>
															</div>
															<!--end::Radio-->

															<!--begin::Info-->
															<div class="flex-grow-1">
																<h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
																	Support
																</h2>
															</div>
															<!--end::Info-->
														</div>
														<!--end::Description-->
													</label>
													<!--end::Radio button-->

													<!--begin::Radio button-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
														<!--end::Description-->
														<div class="d-flex align-items-center me-2">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid form-check-primary me-6">
																<input class="form-check-input" type="radio" name="level" value="feedback"/>
															</div>
															<!--end::Radio-->

															<!--begin::Info-->
															<div class="flex-grow-1">
																<h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
																	To-QC/Answer
																</h2>
															</div>
															<!--end::Info-->
														</div>
														<!--end::Description-->
													</label>
													<!--end::Radio button-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<div class="d-flex flex-stack pt-15">
												<div class="mr-2">
												</div>
												<div>
													<button type="button" name="submit" id="submit" class="btn btn-lg btn-primary">
														<span class="indicator-label">Complete
														<i class="ki-duotone ki-arrow-right fs-4 ms-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i></span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 5-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-8 pb-lg-10">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Your Are Done!</h2>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="mb-0">
											<!--begin::Alert-->
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-success rounded border-success border border-dashed p-6">
												<!--begin::Icon-->
												<i class="ki-duotone ki-check-circle fs-2tx text-success me-4">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-semibold">
														<h4 class="text-gray-900 fw-bold">Thank You.</h4>
														<div class="fs-6 text-gray-700">You are Login to Your Personal Account User Level</div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--end::Alert-->
											<!-- <div class="pt-15 text-center">
												<a href="#" type="button" class="btn btn-lg btn-primary me-3">GO</a>
											</div> -->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo base_url();?>theme/dist/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo base_url();?>theme/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/scripts.bundle.js"></script>
		<script>
				$('#submit').click(function(){
					const level = $('input[name="level"]:checked').val();
					const submit = document.getElementById('submit');
					var form = document.getElementById('form');
					submit.setAttribute("data-kt-indicator", "on");
					submit.disabled = true;
					$.ajax({
						url: form.action,
						type: form.method,
						data: {'level': level},
						success: function(data) {
							console.log(data);
							if(data.data == 'success'){
								window.location.href = '<?php echo base_url();?>main';
							}else{
								
								submit.setAttribute("data-kt-indicator", "off");
								submit.disabled = false;
							}
						}
					});
				});
		</script>

	</body>
	<!--end::Body-->
</html>