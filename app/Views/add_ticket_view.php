<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
        <label> Demandeur </label> <input type="text" name="ticket_nom"><br><br>
        <lable> Objet </lable><textarea type="text" name="ticket_tache"></textarea><br><br>
        <label> Date intervention </label> <input type="date" name="ticket_date"><br><br>
                
        
        <label> Niveau </label> <select name="ticket_avancement">
        <option valeur="1">1</option>
        <option valeur="2">2</option>
        <option valeur="3">3</option>
        <option valeur="4">4</option>

        </select>

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