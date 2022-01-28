<?php namespace App\Models;
use CodeIgniter\Model;
 
class Connexion_model extends Model
{
    protected $table = 'utilisateur';
     
    public function getUtilisateur($pseudo, $mdp)
    {
        if($pseudo == true and $mdp == true){
            echo"Bienvenue " . $this->getWhere(['pseudo' => $pseudo]);
        }else{
            echo "Le pseudo ou le mot de passe sont incorrect ";
        }   
    }

 
}