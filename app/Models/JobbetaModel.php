<?php namespace App\Models;

use CodeIgniter\Model;

class JobbetaModel extends Model{
    protected $table = 'tagsbeta';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','jobid','tagsid'];

    public function upserta(array $data, string $uniqueField)
    {
        // Check if a record with the same unique field and jobid already exists
        $existingRecord = $this->where($uniqueField, $data[$uniqueField])
                               ->where('jobid', $data['jobid'])
                               ->first();
        if ($existingRecord) {
            // If the record exists, update it
            
            $this->update($existingRecord['id'], $data);
        } else {
            // If the record does not exist, insert a new one
            
            $this->insert($data);
        }
    }

    public function tagsBeta($seg1){
        $builder = $this->table('tagsbeta');
        $builder->select('tags.id,tags.tag_name,tags.text_color,tags.background_color');
        $builder->join('tags', 'tagsbeta.tagsid = tags.id','left');
        $builder->where('tagsbeta.jobid',$seg1);
        $builder->orderBy('tagsbeta.id', 'ASC');
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function adelete($sag1){
        $this->where('jobid',$sag1)->delete();
    }
}