"use strict";
var KTCreateAccount = (function () {
  var e,t,i,o,a,r,p,acc,pss,q,qs,per,s = [];
  return {
	init: function () {
	  (e = document.querySelector("#kt_modal_create_account")) &&
		new bootstrap.Modal(e),
		(t = document.querySelector("#kt_create_account_stepper")) &&
		  ((i = t.querySelector("#kt_create_account_form")),
		  (o = t.querySelector('[data-kt-stepper-action="submit"]')),
		  (p = t.querySelector('[data-kt-stepper-action="previous"]')),
		  (a = t.querySelector('[data-kt-stepper-action="next"]')),
		  (q = t.querySelector('[data-kt-stepper-action="acctypeposonal"]')),
		  (qs = t.querySelector('[data-kt-stepper-action="acctypecoperate"]')),
		  (per = t.querySelector('#kt_create_account_form_account_type_personal')),
		  
		  (r = new KTStepper(t)).on("kt.stepper.changed", function (e) {
		   
			
			  var dss = $("#kt_create_account_form_account_type_personal").val();
			  // console.log(dss);
			  // 1 === r.getCurrentStepIndex()
			  // (o.classList.remove("d-none"),
			  // o.classList.add("d-inline-block"),
			  // )
		  }),
		  r.on("kt.stepper.next", function (e) {
			// console.log("stepper.next");
			var t = s[e.getCurrentStepIndex() - 1];
			t
			  ? t.validate().then(function (t) {
				  // console.log("validated!"),
					"Valid" == t
					  ? (e.goNext(), KTUtil.scrollTop())
					  : Swal.fire({
						  text: "Sorry, looks like there are some errors detected, please try again.",
						  icon: "error",
						  buttonsStyling: !1,
						  confirmButtonText: "Ok, got it!",
						  customClass: { confirmButton: "btn btn-light" },
						}).then(function () {
						  KTUtil.scrollTop();
						});
				})
			  : (e.goNext(), KTUtil.scrollTop());
		  }),
		  r.on("kt.stepper.previous", function (e) {
			  const apps = $("#kt_create_account_form_account_type_personal").val();
			  // console.log("back : pesonal");
			  q.classList.remove('d-none')
			  qs.classList.remove('d-none')
			
			console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop();
		  }),
		  s.push(
			FormValidation.formValidation(i, {
			  fields: {
				account_type: {
				  validators: {
					notEmpty: { message: "Account type is required" },
				  },
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
			})
		  ),
		  s.push(
			FormValidation.formValidation(i, {
			  fields: {
				account_name: {
				  validators: {
					notEmpty: { message: "Account name is required" },
				  },
				},
				password: {
				  validators: {
					notEmpty: { message: "Password plan is required" },
				  },
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
			})
		  ),
		  o.addEventListener("click", function (e) {
			s[1].validate().then(function (t) {

			  acc = document.getElementById('account_name').value;
			  pss = document.getElementById('password').value;
			 
				// console.log("validated!"),
				"Valid" == t
				  ? (e.preventDefault(),
					(o.disabled = !0),
					o.setAttribute("data-kt-indicator", "on"),
					setTimeout(function () {
					  o.removeAttribute("data-kt-indicator"),
						(o.disabled = !1)
						$.ajax({
						  url: '/login',
						  type: 'POST',
						  data: {'account_name': acc,'password': pss},
						  success: function(data) {
							console.log(data.data);
							if(data.data == 'success'){
							  r.goNext();
							  setTimeout(function () {
								window.location.href = "/home/member";
							  },2000);
							}else{
							  document.getElementById('account_name').value = "";
							  document.getElementById('password').value = "";
							}
						  }
						});
					}, 2e3))
				  : Swal.fire({
					  text: "Sorry, looks like there are some errors detected, please try again.",
					  icon: "error",
					  buttonsStyling: !1,
					  confirmButtonText: "Ok, got it!",
					  customClass: { confirmButton: "btn btn-light" },
					}).then(function () {
					  KTUtil.scrollTop();
					});
				const apps = $("#kt_create_account_form_account_type_personal").val();
				// console.log("post : pesonal");
				var frm = $('#kt_create_account_form');
			  
			
			});
		  })
		  );
	},
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTCreateAccount.init();
});
