<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Connexion_model;
 
class Connexion extends Controller
{
    public function index()
    {
        $model = new Connexion_model();
        $data['utilisateur'] = $model->getUtilisateur();
        echo view('connexion_view',$data);
    }
 

}
