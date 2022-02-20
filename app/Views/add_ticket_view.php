<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/add_ticket.css">
    <title>Ajouter nouveau ticket</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GSB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
    </div>
  </div>
</nav><br>  

<div class="col-md-12">
    <legend> Nouveau ticket</legend><br>
    <form action="/ticket/save" method="post">
      <!-- <label> Date et heure </label> <input type="datetime-local" name="ticket_date_heure"><br><br> -->
      <label> Demandeur </label> <input type="text" name="ticket_nom"><br><br>
      
        <label id="equipement"> Equipement </label> 
         <a class="more" href="#equipement">Réduire</a>  <a class="more" href="#afficher">Développer</a> 
        <div class="show" id="afficher">
        <div> 
        <input type="checkbox" id="parc_CPU" name="parc_CPU"><label for="parc_CPU">Processeur</label>
        </div>
        <div> 
        <input type="checkbox" id="parc_memoire" name="parc_memoire"><label for="parc_memoire">Memoire</label>
        </div>
        <div> 
        <input type="checkbox" id="parc_disque" name="parc_disque"><label for="parc_disque">Disque durs</label>
        </div>
        <div> 
        <input type="checkbox" id="parc_logiciels" name="parc_logiciels"><label for="parc_logiciels">Logiciels</label>
        </div>
        </div>

      <br><br>
      <label> Objet </label> <input type="text" name="ticket_tache" width="400" ><br><br>
        <div class="info-niveau">
        <label> Niveau </label> <select type="text" name="ticket_niveau"><br><br> 
        <option class="niveau1" valeur="1">1</option>
        <option class="niveau2" valeur="2">2</option>
        <option class="niveau3" valeur="3">3</option>
        <option class="niveau4" valeur="4">4</option>

        </select><br><br> <img src="/asset/point-interogation.png" ><br><br>
        </div>
      <!-- <label> Technicien </label> <input type="text" name="ticket_technicien"><br><br> -->
      <!-- <label> Date intervention </label> <input type="date" name="ticket_date"><br><br> -->
      <!-- <label> Solution </label> <textarea type="text" name="ticket_solution"></textarea><br><br> -->
      <!-- <label> Durée </label> <input type="time" name="ticket_duree"><br><br> -->
      <label> Avancement </label> <select type="text" name="ticket_avancement"><br><br> 
        <option valeur="remis">Remis</option>

        </select><br><br>


        <?php
           /* $option = $_POST['avancement'] ? true : false; //toujours basé sur l'attribut name du select
            if($option) {
               $value = htmlentities([$_POST'avancement'], ENT_QUOTES, "UTF-8"); //permet de protéger tout les caractères spéciaux
               //ensuite requête pour ajouter en base ...
            } else {
              echo "Task option is required";
              exit; 
            }
        */
        ?>

        <button type="submit">Ajouter</button>
    </form><br>
    <button type="submit"><a href="/ticket/<?= $row['ticket_id'];?>">Annuler</a></button>
</div>
</body>
</html>