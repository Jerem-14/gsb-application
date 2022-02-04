<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/add_ticket.css">

    <title>Modifier Ticket</title>
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
      <a class="nav-item nav-link" href="#">Parc</a>
      <a class="nav-item nav-link" href="#">Gestion</a>
    </div>
  </div>
</nav><br>  

<div class="col-md-12">

    <form action="/ticket/update" method="post">
      <label> Demandeur </label> <input type="text" name="ticket_nom" value="<?= $ticket->ticket_nom;?>"><br><br>
      <label id="equipement" value="<?= $ticket->ticket_equipement;?>"> Equipement </label> 
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
        </div><br><br>
      <label> Objet </label> <textarea type="text" id="ticket_tache" name="ticket_tache" value="<?= $ticket->ticket_tache;?>"> <?php if(isset($ticket_tache)) echo $ticket_tache; ?><?= filter_input(INPUT_POST, 'ticket_tache') ?></textarea><br><br>
        
        <label> Niveau </label> <select name="ticket_avancement" value="<?= $ticket->ticket_avancement;?>">
        <option valeur="1">1</option>
        <option valeur="2">2</option>
        <option valeur="3">3</option>
        <option valeur="4">4</option>

        </select><br><br>
      <label> Technicien </label> <input type="text" name="ticket_technicien" value="<?= $ticket->ticket_technicien;?>"><br><br>
      <label> Date intervention </label> <input type="date" name="ticket_date" value="<?= $ticket->ticket_date;?>"><br><br>
      <label> Solution </label> <textarea type="text" name="ticket_solution" value="<?= $ticket->ticket_solution;?>"></textarea><br><br>
      <label> Durée </label> <input type="time" name="ticket_duree" value="<?= $ticket->ticket_duree;?>">
      <label> Avancement </label> <select type="text" name="ticket_avancement" value="<?= $ticket->ticket_avancement;?>"><br><br> 
        <option valeur="remis">Remis</option>
        <option valeur="en_cours">En cours</option>
        <option valeur="termine">Termine</option>

        </select><br><br>
      <br><br>


        <input type="hidden" name="ticket_id" value="<?= $ticket->ticket_id;?>">
        <button type="submit">Confirmer</button>
        <button type="submit"><a href="/ticket/<?= $row['ticket_id'];?>">Annuler</a></button>
    </form>
</div>
</body>
</html>