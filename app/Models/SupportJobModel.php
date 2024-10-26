<?php namespace App\Models;

use CodeIgniter\Model;

class SupportJobModel extends Model
{
    protected $table = 'supportjob';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','transactionCode','ticketcode','trackingNo','ref_tracking','contactType','contactName','actionType','comment','createUser','createDate','updateUser','updateDate','deleteUser','deleteDate','rejectUser','rejectDate','rejectRemark','status'];

    public function getSupportJobs($ticketID = false)

    {
        if ($ticketID === false) {
            return $this->findAll();
        }

        return $this->where(['ticketcode' => $ticketID])->findAll();
    }

    public function insertSupportJob($data)
    {
        return $this->insert($data);
    }

    public function updateSupportJob($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteSupportJob($id)
    {
        return $this->delete($id);
    }
}
