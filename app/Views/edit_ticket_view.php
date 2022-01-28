<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
    </div>
  </div>
</nav><br>  

<div class="col-md-12">

    <form action="/ticket/update" method="post">
    <label> Nom </label><input type="text" name="ticket_nom" value="<?= $ticket->ticket_nom;?>">
        <label> Tache </label><input type="text" name="ticket_tache" value="<?= $ticket->ticket_tache;?>">
        <label> Échéance </label> <input type="date" name="ticket_date" value="<?= $ticket->ticket_date;?>">
        
        <label> Avancement </label> <select name="ticket_avancement" value="<?= $ticket->ticket_avancement;?>">
        <option valeur="a_faire">À faire</option>
        <option valeur="en_cours">En cours</option>
        <option valeur="terminé">Terminé</option>
        </select>

        <input type="hidden" name="ticket_id" value="<?= $ticket->ticket_id;?>">
        <button type="submit">Confirmer</button>
        <button type="submit"><a href="/ticket/<?= $row['ticket_id'];?>">Annuler</a></button>
    </form>
</div>
</body>
</html>