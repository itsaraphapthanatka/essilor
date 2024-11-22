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
							<!-- <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" action="/loginLevel" method="post" enctype="multipart/form-data"> -->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
								<!--begin::Step 1-->
								
								<!--begin::Step 2-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div data-kt-stepper-action="acctypeposonal">
										<div class="w-100">
											<!--begin::Heading-->
											<div class="pb-10 pb-lg-15">
												<!--begin::Title-->
												<h2 class="fw-bold text-dark">Input Your Manager Username</h2>
												<!--end::Title-->
												<!--begin::Notice-->
												<div class="text-muted fw-semibold fs-6">If you need more info, please check out
												<a href="https://www.essilor.com/th-th/" target="_blank" class="link-primary fw-bold">FAQ Page</a>.</div>
												<!--end::Notice-->
											</div>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">Username</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" id="account_name" name="account_name" placeholder="" value="" data-kt-stepper-action="acc"/>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">Password</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="password" class="form-control form-control-lg form-control-solid" id="password" name="password" placeholder="" value="" data-kt-stepper-action="pss"/>
												<!--end::Input-->
											</div>
											<div class="d-flex flex-stack pt-15">
												<div class="mr-2">
													
												</div>
												<div>
													<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
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
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<!-- <script src="<?php echo base_url();?>script/js/login.js"></script> -->
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
	<script>
		"use strict";
		var KTSigninGeneral = (function () {
		var t, e, r;
			return {
				init: function () {
				(t = document.querySelector("#kt_sign_in_form")),
					(e = document.querySelector("#kt_sign_in_submit")),
					(r = FormValidation.formValidation(t, {
					fields: {
						account_name: {
							validators: { notEmpty: { message: "The Username is required" } },
						},
						password: {
							validators: { notEmpty: { message: "The password is required" } },
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: "",
						}),
					},
					})),
					!(function (t) {
					try {
						return new URL(t), !0;
					} catch (t) {
						return !1;
					}
					})(e.closest("form").getAttribute("action"))
					e.addEventListener("click", function (i) {
						console.log("bb");
						i.preventDefault(),
							r.validate().then(function (r) {

			
							"Valid" == r
								? (e.setAttribute("data-kt-indicator", "on"),
								(e.disabled = !0),
								$.ajax({
								url: '<?php echo base_url();?>login',
								type: 'POST',
								data: {'account_name': document.getElementById('account_name').value,'password': document.getElementById('password').value},
								success: function(data) {
									console.log(data.data);
									if(data.data == 'success'){
										Swal.fire({
											text: "You have successfully logged in!",
											icon: "success",
											buttonsStyling: !1,
											confirmButtonText: "Ok, got it!",
											customClass: {
											confirmButton: "btn btn-primary",
											},
										}).then((result) => {
											if (result.isConfirmed) {
												if (data.type === "member") {
													window.location.href = "<?php echo base_url();?>login_success?member="+data.user;
												} else {
													window.location.href = "<?php echo base_url();?>guest";
												}
											} 
										});
									}else{
										Swal.fire({
											text: "You have Login fail!",
											icon: "error",
											buttonsStyling: !1,
											confirmButtonText: "Ok, got it!",
											customClass: {
											confirmButton: "btn btn-danger",
											},
										}).then((result) => {
											if (result.isConfirmed) {
												document.getElementById('account_name').value = "";
												document.getElementById('password').value = "";
												document.getElementById('account_name').focus();
											} 
										});
									// document.getElementById('account_name').value = "";
									// document.getElementById('password').value = "";
									}
								}
								})
									.then(() => {
									e.removeAttribute("data-kt-indicator"),
										(e.disabled = !1);
									}))
								: Swal.fire({
									text: "Sorry, looks like there are some errors detected, please try again.",
									icon: "error",
									buttonsStyling: !1,
									confirmButtonText: "Ok, got it!",
									customClass: { confirmButton: "btn btn-primary" },
								});
							});
						});
				},
			};
		})();
		KTUtil.onDOMContentLoaded(function () {
		KTSigninGeneral.init();
		});
		console.log('<?php echo base_url();?>');
	</script>
</html>