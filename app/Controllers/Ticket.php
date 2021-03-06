<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Ticket_model;
 
class Ticket extends Controller
{
    public function index()
    {
        $model = new Ticket_model();
        $data['ticket'] = $model->getTicket();
        echo view('ticket_view',$data);
    }
 
    public function add_new()
    {
        echo view('add_ticket_view');
    }
 
    public function save()
    {
        $model = new Ticket_model();
        $data = array(
            'ticket_nom'  => $this->request->getPost('ticket_nom'),
            'ticket_tache' => $this->request->getPost('ticket_tache'),
            'ticket_avancement' => $this->request->getPost('ticket_avancement'),
            'ticket_date' => $this->request->getPost('ticket_date'),
            'ticket_niveau' => $this->request->getPost('ticket_niveau'),
            'ticket_technicien' => $this->request->getPost('ticket_technicien'),
            'ticket_solution' => $this->request->getPost('ticket_solution'),
            'ticket_duree' => $this->request->getPost('ticket_duree'),

        );
        
        $model = $model->saveTicket($data);
        return redirect()->to('/ticket');
    }
 
    public function edit($id)
    {
        $model = new Ticket_model();
        $data['ticket'] = $model->getTicket($id)->getRow();
        echo view('edit_ticket_view', $data);
    }
 
    public function update()
    {
        $model = new Ticket_model();
        $id = $this->request->getPost('ticket_id');
        $data = array(
            'ticket_nom'  => $this->request->getPost('ticket_nom'),
            'ticket_tache' => $this->request->getPost('ticket_tache'),
            'ticket_avancement' => $this->request->getPost('ticket_avancement'),
            'ticket_date' => $this->request->getPost('ticket_date'),
            'ticket_niveau' => $this->request->getPost('ticket_niveau'),
            'ticket_technicien' => $this->request->getPost('ticket_technicien'),
            'ticket_solution' => $this->request->getPost('ticket_solution'),
            'ticket_duree' => $this->request->getPost('ticket_duree'),
            
        );
        $model->updateTicket($data, $id);
        return redirect()->to('/ticket');
    }

    public function delete($id)
    {
        $model = new Ticket_model();
        $model->deleteTicket($id);
        return redirect()->to('/ticket');
    }

    


}