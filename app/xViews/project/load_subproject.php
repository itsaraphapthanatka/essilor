
<table class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="fw-bold fs-6 text-gray-800">
        <th class="min-w-120px">Project Code</th>
        <th class="min-w-125px">Project Name</th>
        <th class="min-w-100px">Set Approve</th>
        <th class="text-center min-w-100px" data-priority="2">Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($res as $value) {
            if (!$value['project_code']) {?>
            <tr>
                <td colspan="4">No Data</td>
            </tr>
            <?php }else{ ?>
            <tr>
                <td><?=$value['project_code'];?></td>
                <td><?=$value['project_name'];?></td>
                <td><a href="#" class="btn btn-light-info btn-sm hover-scale">Setupdddd</a></td>
                <td class="min-w-80px text-center">
                    <!--begin::Star-->
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Star" data-bs-original-title="Star" data-kt-initialized="1">
                        <i class="ki-duotone ki-notepad-edit fs-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>                   
                    </a>
                    <!--end::Star-->

                    <!--begin::Important-->
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Mark as important" data-bs-original-title="Mark as important" data-kt-initialized="1">
                        <!-- <i class="ki-duotone ki-trash fs-4 mt-1"><span class="path1"></span><span class="path2"></span></i>                    </a> -->
                        <i class="ki-duotone ki-trash fs-4 mt-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </a>
                    <!--end::Important-->
                </td>
            </tr>
            <?php } ?>
            
        <?php } ?>
        
    </tbody>
</table>

