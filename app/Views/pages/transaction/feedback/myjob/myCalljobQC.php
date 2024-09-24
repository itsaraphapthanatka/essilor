<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <div class="row">
                    <!--begin::Heading-->
                    <div class="col-md-3">
                        <div class="card card-flush h-lg-unset">
                                    <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900 mb-3">My QC Job</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-8">YOUR JOB</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body card-scroll h-500px pt-5">
                                <?php foreach ($res as $key => $value) {?>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <a href="#" class="text-primary fw-semibold fs-6 me-2" data-bs-toggle="modal" data-bs-target="#task<?=$value->id;?>"><?=$value->ecpcode;?>: <?=$value->trackingId;?></a>
                                    <!--end::Section-->
                                    <!--begin::Action-->
                                    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end" data-bs-toggle="modal" data-bs-target="#task<?=$value->id;?>">
                                        <i class="ki-duotone ki-exit-right-corner fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Action-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->

                                <div class="modal fade" tabindex="-1" id="task<?=$value->id;?>">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Tracking ID: <?=$value->trackingId;?>
                                                <button data-action="copy" data-tracking-id="<?=$value->trackingId;?>" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                                    <i class="ki-duotone ki-copy fs-1"></i>
                                                </button>
                                            </h3>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body">
                                                <div class="col-xl-12 text-start">
                                                    <div class="card card-flush card-dashed border-primary mb-5">
                                                        <div class="card-header">
                                                            <h1 class="card-title align-items-start flex-column">
                                                                <span class="card-label fw-bold text-gray-900 mb-3">My QC Job</span>
                                                                <span class="text-gray-500 mt-1 fw-semibold fs-8">YOUR JOB</span>
                                                            </h1>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row gx-10 mb-5">
                                                                <div class="col-lg-6">
                                                                    <label class="form-label fs-4 fw-bold text-gray-500 mb-3">Customer Name :  <span class="text-gray-500 mt-1 fw-semibold fs-4"><?=$value->customer_name;?></span> </label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="form-label fs-4 fw-bold text-gray-700 mb-3">Create Date : <span class="text-primary mt-1 fw-semibold fs-4"><?=$value->createdate;?></span></label>
                                                                </div>
                                                            </div>
                                                            <div class="row gx-10 mb-5">
                                                                <div class="col-lg-6">
                                                                    <label class="form-label fs-4 fw-bold text-gray-500 mb-3">Tracking No :  <span class="text-gray-500 mt-1 fw-semibold fs-4" data-bs-target="trackingId"><?=$value->trackingId;?></span> 
                                                                    <button data-action="copy" data-tracking-id="<?=$value->trackingId;?>" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                                                        <i class="ki-duotone ki-copy fs-1"></i>
                                                                    </button>
                                                                </label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="form-label fs-4 fw-bold text-gray-700 mb-3">Request Date : <span class="text-danger mt-1 fw-semibold fs-4"><?=$value->createdate;?></span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-flush card-dashed border-primary mb-5">
                                                        <div class="card-header">
                                                            <h1 class="card-title">Order From Line OA</h1>
                                                        </div>
                                                        <div class="card-body card-scroll h-550px">
                                                            <?=$value->capture;?>
                                                        </div>
                                                    </div>
                                                    <div class="card card-flush card-dashed border-primary mb-5">
                                                        <div class="card-body">
                                                            <div class="row gx-10 mb-5">
                                                                <?php
                                                                    if (!empty($value->image)) {
                                                                        $images = explode(',', $value->image); // Split the concatenated images string into an array
                                                                        foreach ($images as $image) {
                                                                            $image = trim($image); // Trim any whitespace
                                                                            ?>
                                                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                                                <div class="card card-flush shadow-sm h-100">
                                                                                    <div class="card-body d-flex justify-content-center text-center flex-column p-1">
                                                                                        <div>
                                                                                            <a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?=base_url();?>uploads/taskImage/<?=$image;?>">
                                                                                                <!--begin::Image-->
                                                                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-300px"
                                                                                                    style="background-image:url('<?=base_url();?>uploads/taskImage/<?=$image;?>')">
                                                                                                </div>
                                                                                                <!--end::Image-->
                                                                                                <!--begin::Action-->
                                                                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                                                                    <i class="bi bi-eye-fill text-white fs-3x"></i>
                                                                                                </div>
                                                                                                <!--end::Action-->
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php } ?>
                                                                    <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-light-danger" data-bs-stacked-modal="#kt_modal_stacked_task<?=$value->id;?>">Reject</button>
                                                <button type="button" class="btn btn-primary" id="closejob<?=$value->id;?>" onclick="closejobevent('<?=$value->id;?>')">Close Job</button>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade stacked-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" id="kt_modal_stacked_task<?=$value->id;?>">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Select Reject Reason</h3>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            <div class="modal-body">
                                                <span>
                                                    Please Select Your Customer Issue and Click Send to Support Teams. 
												</span>
												<div class="mb-3">
													<input type="hidden" class="form-control" id="taskID<?=$value->id;?>" name="<?=$value->id;?>" value="<?=$value->id;?>">
												</div>
												<div class="mb-3">
													<select class="form-select form-select-solid" name="addcomment" id="selectedComment<?=$value->id;?>">
														<option value="">Select ...</option>
                                                        <?php foreach ($commentType as $key => $comment) {?>
                                                            <option value="<?=$comment['id'];?>"><?=$comment['commentName'];?></option>
                                                        <?php } ?>
													</select>
												</div>
												<div class="mb-3 text-start">
													<label class="fs-6 fw-semibold mb-2">Note</label>
													<textarea type="text" rows="5" class="form-control form-control-solid" placeholder="Note" 
														name="note" id="rejectNote<?=$value->id;?>"></textarea>
												</div>  
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" id="saveReject<?=$value->id;?>" onclick="showSelectedComment('<?=$value->id;?>')">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                    <div class="col-md-9 pt-15 pb-10">
                        <!--begin::Illustration-->
                        <div class="text-center pt-40 pb-20 px-5">
                            <h2 class="fs-2x fw-bold mb-0">Select Your Job</h2>
                            <img src="<?=base_url()?>theme/demo20/assets/media/illustrations/sketchy-1/8.png" alt="" class="mw-100 h-200px h-sm-325px" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Post-->
</div>

<script>
	$("#tab_Myjobqc").addClass('active');
	$("#tab_Myjobqc1").addClass('active show');
	$("#myjobqc").addClass('btn-light-primary');

    function showSelectedComment(rowid) {
        const selectedComment = document.getElementById('selectedComment' + rowid).value;
        if (selectedComment) {
            const taskID = document.getElementById('taskID' + rowid).value;
            const rejectNote = document.getElementById('rejectNote' + rowid).value;
            // Swal.fire({
            //     html: "Under Construction!!<br/>Selected Comment Value: " + selectedComment + "<br/>TaskID: " + taskID + "<br/>Note: " + rejectNote,
            //     icon: "warning",
            //     buttonsStyling: false,
            //     confirmButtonText: "Ok, got it!",
            //     customClass: {
            //         confirmButton: "btn btn-warning"
            //     }
            // });

            // Ensure the URL is correctly parsed by PHP
            $.ajax({
                type: 'POST',
                url: '<?= base_url("SaveRejectQC") ?>',  // This will correctly generate the base URL
                data: {
                    commentQC: selectedComment,
                    note: rejectNote,
                    taskID: taskID
                },
                success: function(response) {
                    // console.log(response);
                    window.location.href = "<?= base_url('main') ?>";  // Use PHP to dynamically generate the URL
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', status, error);
                }
            });
        } else {
            alert("Please select a comment.");
        }
    }

    function closejobevent(rowid) {
        Swal.fire({
            title: "Do You Want to Save it ?"+rowid,
            html: "If you need to save it Click <span class='text-primary'>Confirm</span> button.but if not Click <span class='text-danger'>Close</span>. ",
            buttonsStyling: false,
            confirmButtonText: "Confirm",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        }).then((result) => {
            $.ajax({
                type: 'POST',
                url:'<?= base_url(); ?>SaveQC',
                data: {
                    id: rowid
                },
                success: function(response) {
                console.log('Success:', response);
                if (response.status == 'success') {
                    toastr.success(response.message);
                    window.location.href = '<?=base_url();?>myCalljobqc';
                }else{
                    toastr.error(response.message);
                }
            },
            });
        });
    }

    var elements = Array.prototype.slice.call(document.querySelectorAll("[data-bs-stacked-modal]"));
    if (elements && elements.length > 0) {
        elements.forEach((element) => {
            if (element.getAttribute("data-kt-initialized") === "1") {
                return;
            }

            element.setAttribute("data-kt-initialized", "1");

            element.addEventListener("click", function(e) {
                e.preventDefault();

                const modalEl = document.querySelector(this.getAttribute("data-bs-stacked-modal"));

                if (modalEl) {
                    const modalBackdrop = document.createElement('div');
                    modalBackdrop.className = 'modal-backdrop fade show stacked-backdrop'; // เพิ่ม backdrop แบบ stacked
                    document.body.appendChild(modalBackdrop);

                    const modal = new bootstrap.Modal(modalEl);
                    modal.show();

                    modalEl.addEventListener('hidden.bs.modal', function() {
                        document.body.removeChild(modalBackdrop); // ลบ backdrop เมื่อ modal ถูกปิด
                    });
                }
            });
        });
    }

    document.querySelectorAll('button[data-action="copy"]').forEach((button) => {
        button.addEventListener('click', function () {
            const trackingId = this.getAttribute('data-tracking-id');
            const icon = this.querySelector('i');

            navigator.clipboard.writeText(trackingId).then(() => {
                icon.classList.remove('ki-copy');
                icon.classList.add('ki-check');
                icon.classList.add('text-success');
                toastr.success("Copy "+trackingId);


                // Optional: Revert the icon back to ki-copy after 2 seconds
                setTimeout(() => {
                    icon.classList.remove('ki-check');
                    icon.classList.add('ki-copy');
                    icon.classList.remove('text-success');
                }, 2000);
            }).catch((err) => {
                console.error('Failed to copy: ', err);
            });
        });
    });

    "use strict";
</script>
