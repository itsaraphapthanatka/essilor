<input type="hidden" id="actionType<?=$ticketID;?>" name="actionType" value=""/>
<input type="hidden" id="actionTypeFlag<?=$ticketID;?>" name="actionTypeFlag" value=""/>
<div class="d-flex flex-column gap-3">
    <div class="d-flex justify-content-center gap-3">
        <?php foreach ($action as $key => $value): ?>
            <?php if($key < 3): ?> <!-- แถวแรก -->
                <button type="button" id="chkact<?=$value['id'];?><?=$ticketID;?>" 
                        onclick="handleChkAction('<?=$ticketID;?>','<?=$value['id'];?>','<?=$value['completeFlag'];?>')"  
                        class="btn small-btn btn-outline btn-outline-dashed btn-active-primary">
                    <?=$value['actionName']?>
                </button>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="d-grid gap-3">
        <?php foreach ($action as $key => $value): ?>
            <?php if($key >= 3): ?> <!-- แถวที่สองและสาม -->
                <button type="button" id="chkact<?=$value['id'];?><?=$ticketID;?>" 
                        onclick="handleChkAction('<?=$ticketID;?>','<?=$value['id'];?>','<?=$value['completeFlag'];?>')"  
                        class="btn large-btn btn-outline btn-outline-dashed btn-active-primary">
                    <?=$value['actionName']?>
                </button>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<script>
    function handleChkAction(ticketCode, action, completeFlag) {
        // Remove 'btn-primary' class from all buttons related to this ticket
        $('[id^=chkact][id$='+ticketCode+']').removeClass('btn-primary')
            .addClass('btn-outline btn-outline-dashed btn-active-primary');

        // Add 'btn-primary' class to the selected button
        $('#chkact' + action + ticketCode).addClass('btn-primary')
            .removeClass('btn-outline btn-outline-dashed btn-active-primary');

        // Update the hidden input field with the selected action
        $('#actionType' + ticketCode).val(action);
        $('#actionTypeFlag' + ticketCode).val(completeFlag);
        // Log or perform further actions (such as making AJAX calls) based on the selected action
        console.log('Ticket:', ticketCode, 'Action:', action, 'Complete Flag:', completeFlag);
    }
</script>
