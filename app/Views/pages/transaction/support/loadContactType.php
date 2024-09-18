<input type="hidden" id="contactType<?=$ticketID;?>" name="contactType" value=""/>

<div class="d-flex flex-column gap-3">
    <div class="d-flex justify-content-center gap-3">
        <?php foreach ($contact as $key => $value): ?>
            <?php if($key < 3): ?> <!-- แถวแรก -->
                <button type="button" id="chkcont<?=$value['id'];?><?=$ticketID;?>" 
                        onclick="handleChkContact('<?=$ticketID;?>','<?=$value['id'];?>')"  
                        class="btn small-btn btn-outline btn-outline-dashed btn-active-primary">
                    <?=$value['contactName']?>
                </button>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="d-grid gap-3">
        <?php foreach ($contact as $key => $value): ?>
            <?php if($key >= 3): ?> <!-- แถวที่สองและสาม -->
                <button type="button" id="chkcont<?=$value['id'];?><?=$ticketID;?>" 
                        onclick="handleChkContact('<?=$ticketID;?>','<?=$value['id'];?>')"  
                        class="btn large-btn btn-outline btn-outline-dashed btn-active-primary">
                    <?=$value['contactName']?>
                </button>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<script>
    function handleChkContact(ticketCode, action) {
        // Remove 'btn-primary' class from all buttons related to this ticket
        $('[id^=chkcont][id$='+ticketCode+']').removeClass('btn-primary')
            .addClass('btn-outline btn-outline-dashed btn-active-primary');

        // Add 'btn-primary' class to the selected button
        $('#chkcont' + action + ticketCode).addClass('btn-primary')
            .removeClass('btn-outline btn-outline-dashed btn-active-primary');

        // Update the hidden input field with the selected action
        $('#contactType' + ticketCode).val(action);

        // Log or perform further actions (such as making AJAX calls) based on the selected action
        console.log('Ticket:', ticketCode, 'Action:', action);
    }
</script>
