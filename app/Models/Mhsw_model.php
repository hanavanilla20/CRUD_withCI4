<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Mhsw_model extends Model
{
    protected $table = 'mhsw';
     
    public function getMhsw($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['no' => $id]);
        }   
    }

    public function saveMhsw($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editMhsw($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('no', $id);
        return $builder->update($data);
    }


    public function hapusMhsw($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['no' => $id]);
    }
 
}