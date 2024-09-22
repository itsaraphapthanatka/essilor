<input type="hidden" id="actionType<?=$ticketID;?>" name="actionType" value=""/>
<input type="text" id="actionTypeFlag<?=$ticketID;?>" name="actionTypeFlag" value=""/>

<?=$issueID;?>
<div class="d-flex flex-column flex-md-row gap-5">
    <div class="fv-row flex-row-fluid">
        <?php foreach ($action as $key => $value):?>
            <div class="d-grid gap-2">
                <button id="chk<?=$value['id'];?><?=$ticketID;?>" onclick="handleChkAction('<?=$ticketID;?>','<?=$value['id'];?>','<?=$value['completeFlag'];?>')"  class="btn btn-outline btn-outline-dashed btn-active-primary mb-2"><?=$value['actionName']?></button>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    function handleChkAction(ticketCode, action, completeFlag) {
       // // Remove 'btn-primary' class from all buttons for the current ticket
         $('#chk'+ action + ticketCode)
             .removeClass('btn-primary')
             .addClass('btn-outline btn-outline-dashed btn-active-primary');

    // //   Add 'btn-primary' class to the selected button
        if (action === '1') {
            $('#chk'+ action + ticketCode).addClass('btn-primary').removeClass('btn-outline btn-outline-dashed btn-active-primary');
        } else if (action === '2') {
            $('#chkPendingLen' + ticketCode).addClass('btn-primary').removeClass('btn-outline btn-outline-dashed btn-active-primary');
        } else if (action === 'creditOut') {
            $('#chkcreditOut' + ticketCode).addClass('btn-primary').removeClass('btn-outline btn-outline-dashed btn-active-primary');
        } else if (action === 'creditCancal') {
            $('#chkcreditCancal' + ticketCode).addClass('btn-primary').removeClass('btn-outline btn-outline-dashed btn-active-primary');
        }

        // Update the hidden input field with the selected action
        $('#actionType' + ticketCode).val(action);
        $('#actionTypeFlag' + ticketCode).val(completeFlag);

        // Log or perform further actions (such as making AJAX calls) based on the selected action
        console.log('Ticket:', ticketCode, 'Action:', action);
    }
</script>