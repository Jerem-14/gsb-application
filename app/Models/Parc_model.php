<?php namespace App\Models;
use CodeIgniter\Model;

class Parc_model extends Model
{
    protected $table = 'Parc';
     
    public function getParc($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['Parc_id' => $id]);
        }   
    }
    public function getContra($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['Contra_id' => $id]);
        }   
    }
    

}
