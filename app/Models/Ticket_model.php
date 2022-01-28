<?php namespace App\Models;
use CodeIgniter\Model;
 
class Ticket_model extends Model
{
    protected $table = 'ticket';
     
    public function getTicket($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['ticket_id' => $id]);
        }   
    }
 
    public function saveTicket($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
 
    public function updateTicket($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('ticket_id' => $id));
        return $query;
    }

    public function deleteTicket($id)
    {
        $query = $this->db->table($this->table)->delete(array('ticket_id' => $id));
        return $query;
    } 
}