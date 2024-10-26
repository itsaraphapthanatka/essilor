<div class="table-responsive">
    <table class="table align-middle table-row-dashed fs-6 gy-5">
        <thead>
            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                <th class="min-w-125px">Transaction ID</th>
                <th class="min-w-125px">Ticket ID</th>
                <th class="min-w-125px">Contact Type</th>
                <th class="min-w-125px">Action Type</th>
                <th class="min-w-100px">Result</th>
                <th class="min-w-125px">Ref. Tracking No.</th>
                <th class="min-w-100px">Follow Up</th>
                <th class="min-w-100px">Issue Type</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            <?php if (empty($transactions)): ?>
                <tr>
                    <td colspan="8" class="text-center mt-5">
                        <span class="fs-6 fw-bold text-gray-600">No data available in table</span>
                    </td>
                </tr>

            <?php else: ?>
                <?php foreach ($transactions as $transaction): ?>
                    <tr>
                        <td><?= $transaction['transactionCode'] ?></td>
                        <td><?= $transaction['ticketcode'] ?></td>
                        <td><?= $transaction['contactName'] ?></td>
                        <td><?= $transaction['actionName'] ?></td>
                        <td>follow Up</td>
                        <td><?= $transaction['ref_tracking'] ?></td>
                        <td><?= date('d/m/Y', $transaction['createDate']) ?></td>
                        <td><?= $transaction['commentName'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>