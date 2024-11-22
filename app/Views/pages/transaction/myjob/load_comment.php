<div class="modal fade stacked-modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" id="add_comment<?=$sag1;?>">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light-primary border border-primary">
            <div class="modal-header">
                <h3 class="modal-title">Select Issue</h3>

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
                        <input type="hidden" class="form-control" id="taskID<?=$sag1;?>" name="<?=$sag1;?>" value="<?=$sag1;?>">
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Comment" name="addcomment" id="addcomment<?=$sag1;?>" title="Select a comment type">
                            <option value="">Select ...</option>
                            <option value="1">Claim</option>
                            <option value="2">COD</option>
                            <option value="3">Credit Limit</option>
                            <option value="4">ECP</option>
                            <option value="5">Reject in Provider</option>
                            <option value="6">VC/CP</option>
                            <option value="7">Price Setup</option>
                            <option value="8">Missing Detail</option>
                        </select>
                    </div>
                    <div class="mb-3 text-start" id="tracking<?=$sag1;?>">
                            <label  class="fs-6 fw-semibold mb-2">TrackingID</label>
                            <input type="text" class="form-control form-control-solid" placeholder="TrackingID" name="trackingID" id="trackingID<?=$sag1;?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="comment<?=$sag1;?>" class="fs-6 fw-semibold mb-2">Comment</label>
                        <textarea class="form-control form-control-solid" id="comment<?=$sag1;?>" name="comment" rows="4" placeholder="Enter your comment here"></textarea>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" id="saveComment<?=$sag1;?>" class="btn btn-primary">Complete</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
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
    
        $("#tracking<?=$sag1;?>").hide();
        
        $('#addcomment<?=$sag1;?>').on('change', function() {
            const selectedValue = $('#addcomment<?=$sag1;?>').val();
                const trackingElement = document.getElementById('tracking<?=$sag1;?>');
                const commentElement = document.getElementById('comment<?=$sag1;?>');
                if (selectedValue !== '8' && trackingElement) {
                    trackingElement.removeAttribute('hidden');
                    commentElement.setAttribute('hidden', true);
                } else if (selectedValue === '8' && trackingElement) {
                    trackingElement.setAttribute('hidden', true);
                    commentElement.removeAttribute('hidden');
                }




        
        });

        $('#saveComment<?=$sag1;?>').on('click', function(){
            const trackingID = $('#trackingID<?=$sag1;?>').val();
            const selectedComment = $('#addcomment<?=$sag1;?>').val();
            const taskID = $('#taskID<?=$sag1;?>').val();
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>SaveCommentByTrackingID',
                data: { trackingID: trackingID, comment: selectedComment, taskID: taskID },
                success: function(response) {
                    console.log(response);
                    window.location.href = "<?php echo base_url();?>myjobvip";
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', status, error);
                }
            });
        });
    });	

</script>