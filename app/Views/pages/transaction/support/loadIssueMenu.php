<div class="d-flex flex-column gap-5">
    <?php foreach ($commentType as $row):?>
    <!--begin::Contact group-->
    <?php if($type == 'pending'):?>
    <div class="d-flex flex-stack">
        <a style="cursor: pointer;" onclick="handleIssue('<?=$row->id;?>','<?=$type;?>')" id="issuepending<?=$row->id;?>" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary"><?= $row->commentName; ?></a>
        <div id="badgeCountPending<?=$row->id;?>" class="badge badge-light-primary"><?= $row->comment_count; ?></div>
    </div>
    <?php else:?>
    <div class="d-flex flex-stack">
        <a style="cursor: pointer;" onclick="handleIssue('<?=$row->id;?>','<?=$type;?>')" id="issueinprogress<?=$row->id;?>" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary"><?= $row->commentName; ?></a>
        <div id="badgeCountInprogress<?=$row->id;?>" class="badge badge-light-primary"><?= $row->comment_count; ?></div>
    </div>
    <?php endif;?>  
    <?php endforeach;?>
    <script>
        // โหลดตารางเริ่มต้นเมื่อโหลดหน้า
        $(document).ready(function() {
            // ดึง ID ของ issue แรก
            var firstIssueId = $('a[id^="issuepending"]').first().attr('id').replace('issuepending', '');
            
            // ดึงค่าเดือนและปีปัจจุบัน
            var currentMonth = new Date().getMonth() + 1; // เดือนเริ่มจาก 0
            var currentYear = new Date().getFullYear();
            
            // โหลดตารางด้วย ID ของ issue แรก, เดือนและปีปัจจุบัน
            $('#loadtable').load('<?= base_url(); ?>loadtable/' + firstIssueId + '/pending/' + currentMonth + '/' + currentYear);
            $('#loadtableInprogress').load('<?= base_url(); ?>loadtable/' + firstIssueId + '/inprogress/' + currentMonth + '/' + currentYear);
            
            // เพิ่มคลาส active ให้กับ issue แรก
            $('#issuepending' + firstIssueId).addClass('text-primary').removeClass('text-gray-800');
            $('#issueinprogress' + firstIssueId).addClass('text-primary').removeClass('text-gray-800');
            
            // อัพเดทตารางเมื่อมีการเปลี่ยนแปลงเดือนหรือปี
            $('#month, #year').change(function() {
                var selectedMonth = $('#month').val();
                var selectedYear = $('#year').val();
                var activeIssueId = $('a[id^="issuepending"].text-primary').attr('id').replace('issuepending', '');
                $('#loadtable').load('<?= base_url(); ?>loadtable/' + activeIssueId + '/pending/' + selectedMonth + '/' + selectedYear);
            });
            addTextPrimaryClassAfterSave(activeIssueId);
            addTextPrimaryClassAfterSaveInprogress(activeIssueId);
        });
        // เพิ่มฟังก์ชันสำหรับการเพิ่มคลาส text-primary หลังจากบันทึกธุรกรรม
        function addTextPrimaryClassAfterSave(issueId) {
            // ลบคลาส text-primary จากทุก issue
            $('a[id^="issuepending"]').removeClass('text-primary').addClass('text-gray-800');
            // เพิ่มคลาส text-primary ให้กับ issue ที่ระบุ
            $('#issuepending' + issueId).addClass('text-primary').removeClass('text-gray-800');
        }
        function addTextPrimaryClassAfterSaveInprogress(issueId) {
            // ลบคลาส text-primary จากทุก issue
            $('a[id^="issueinprogress"]').removeClass('text-primary').addClass('text-gray-800');
            // เพิ่มคลาส text-primary ให้กับ issue ที่ระบุ
            $('#issueinprogress' + issueId).addClass('text-primary').removeClass('text-gray-800');
        }

        // ตัวอย่างการเรียกใช้ฟังก์ชัน (คุณอาจต้องเรียกใช้ฟังก์ชันนี้หลังจากบันทึกธุรกรรมสำเร็จ)
        // addTextPrimaryClassAfterSave(issueId);
        function handleIssue(rowid,type) {
            console.log(rowid);
            console.log(type);  
            var selectedMonth = $('#month').val();
            var selectedYear = $('#year').val();
            if(type == 'pending'){
                $('#loadtable').load('<?= base_url(); ?>loadtable/' + rowid + '/pending/' + selectedMonth + '/' + selectedYear);
                addTextPrimaryClassAfterSave(rowid);
                // console.log('pending');
                console.log(rowid);
                console.log(selectedMonth);
                console.log(selectedYear);
            }else{
                $('#loadtableInprogress').load('<?= base_url(); ?>loadtable/' + rowid + '/inprogress/' + selectedMonth + '/' + selectedYear);
                addTextPrimaryClassAfterSaveInprogress(rowid);
                // console.log('inprogress');
                console.log(rowid);
                console.log(selectedMonth);
                console.log(selectedYear);
            }
            
           
        }
    </script>
</div>