<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Lumpsum ERP </title>
		<meta charset="utf-8" />
		<meta name="description" content="Lumpsum ERP" />
		<meta name="keywords" content="Lumpsum ERP" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Lumpsum ERP" />
		<meta property="og:url" content="https://appreview.co.th" />
		<meta property="og:site_name" content="Appointment" />
		<link rel="canonical" href="https://appreview.co.th" />
		<link rel="shortcut icon" href="<?php echo base_url();?>theme/dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url();?>theme/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>theme/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>
            var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
        </script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('<?php echo base_url();?>theme/dist/assets/media/auth/bg9-dark.jpg'); } [data-bs-theme="dark"] body { background-image: url('<?php echo base_url();?>theme/dist/assets/media/auth/bg5-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="#" class="mb-7">
							<img alt="Logo" src="<?php echo base_url();?>theme/dist/assets/media/logos/logo-lumpsum.png" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">Software designed for your business</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::Card body-->
						<div class="card-body d-flex flex-column p-10 p-lg-20 pb-lg-10">
							<!--begin::Wrapper-->
							<div class="d-flex flex-center flex-column-fluid pb-15 pb-lg-20">
								<!--begin::Form-->
								<form class="form w-100"  id="kt_sign_in_form" action="/login" method="post">
									<!--begin::Heading-->
									<div class="text-center mb-11">
										<!--begin::Title-->
										<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
										<!--end::Title-->
										<!--begin::Subtitle-->
										<div hidden class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
										<!--end::Subtitle=-->
									</div>
									<!--begin::Heading-->
									<!--begin::Login options-->
									<div class="row g-3 mb-9" hidden>
										<!--begin::Col-->
										<div class="col-md-6">
											<!--begin::Google link=-->
											<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
											<img alt="Logo" src="<?php echo base_url();?>theme/dist/assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
											<!--end::Google link=-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6">
											<!--begin::Google link=-->
											<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
											<img alt="Logo" src="<?php echo base_url();?>theme/dist/assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
											<img alt="Logo" src="<?php echo base_url();?>theme/dist/assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
											<!--end::Google link=-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Login options-->
									<!--begin::Separator-->
									<div class="separator separator-content my-14" hidden>
										<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
									</div>
									<!--end::Separator-->
									<?php if (session()->getFlashdata('msg')) : ?>
										<div class="alert alert-danger"><?= session()->getFlashdata('msg');?></div>
									<?php endif; ?>
									<!--begin::Input group=-->
									<div class="fv-row mb-8">
										<!--begin::Email-->
										<input type="text" placeholder="Username" name="username" autocomplete="off" class="form-control bg-transparent" value=""/>
										<!--end::Email-->
									</div>
									<!--end::Input group=-->
									<div class="fv-row mb-3">
										<!--begin::Password-->
										<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value=""/>
										<!--end::Password-->
									</div>
									<!--end::Input group=-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
										<div></div>
										<!--begin::Link-->
										<a href="#" class="link-primary">Forgot Password ?</a>
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Submit button-->
									<div class="d-grid mb-10">
										<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
											<!--begin::Indicator label-->
											<span class="indicator-label">Sign In</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											<!--end::Indicator progress-->
										</button>
									</div>
									<!--end::Submit button-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Wrapper-->
							
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo base_url();?>theme/dist/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo base_url();?>theme/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url();?>theme/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<!-- <script src="<?php echo base_url();?>theme/dist/assets/js/custom/authentication/sign-in/general.js"></script> -->
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>