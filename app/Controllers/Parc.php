<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Parc_model;
class Parc extends Controller
{
    public function index()
    {
        $model = new Parc_model();
        $data['parc'] = $model->getParc();
        echo view('Parc_view',$data);
    }
}