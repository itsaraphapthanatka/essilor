<?php foreach ($res as $key => $value) {?>
<div class="form-group">
    <div data-repeater-list="systemtype" class="d-flex flex-column gap-3">
        <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
            <div class="w-100 w-md-300px">
                <select class="form-select" data-kt-repeater="select2" name="system_type_name" data-placeholder="Please Select System Type" data-kt-add-project="project_option">
                    <option></option>
                    
                        <option selected value="<?=$value['bdd_jobno']?>"><?=$value['bdd_jobname'];?></option>
                   
                </select>
            </div>
            <div class="w-100 w-md-200px">
                <input type="text" class="form-control amount" id="systemtypevalue" name="systemtypevalue" aria-label=""/>
            </div>
            <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                <i class="ki-duotone ki-cross fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </button>
        </div>
    </div>
</div>
<?php } ?>
<div class="form-group mt-5">
    <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
    <i class="ki-duotone ki-plus fs-2"></i>Add Systems Type</button>
</div>

<script>
     var loadsystem = function () {
        const initEmployeeAdd = () => {
			$('#systemtype').repeater({
				initEmpty: false,
		
				defaultValues: {
					'text-input': 'foo'
				},
		
				show: function () {
					$(this).slideDown();
					$(this).find('[data-kt-repeater="select2"]').select2();
					// Init select2 on new repeated items
					initConditionsSelect2();
				},
		
				hide: function (deleteElement) {
					$(this).slideUp(deleteElement);
				}
			});
		}
        const initConditionsSelect2 = () => {
			// Tnit new repeating condition types
			const allConditionTypes = document.querySelectorAll('[data-kt-add-project="project_option"]');
			allConditionTypes.forEach(type => {
				if ($(type).hasClass("select2-hidden-accessible")) {
					return;
				} else {
					$(type).select2({
						minimumResultsForSearch: -1
					});
				}
			});
		}
        return {
	 		init: function () {
				initEmployeeAdd();
				initConditionsSelect2();
				$('[data-kt-repeater="select2"]').select2();
	 		}
	 	};
     }();
	 // On document ready
	 KTUtil.onDOMContentLoaded(function () {
		 loadsystem.init();
	 });
     Inputmask("decimal", {
    	"rightAlignNumerics": false
	}).mask("#contractAmount,#systemtypevalue");
</script>