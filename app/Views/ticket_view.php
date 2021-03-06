<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GSB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <!-- <a class="nav-item nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a> -->
      <li class="nav-item active"><a class="nav-link" href="<?=site_url('ticket')?>">Accueil</a></li>
      <li class="nav-item"><a class="nav-link" href="<?=site_url('parc')?>">Parc</a></li>
      <a class="nav-item nav-link" href="#">Gestion</a>
    </div>
  </div>
</nav><br>  


<div class="col-md-12">

    <a href="/ticket/add_new">Ajouter nouveau ticket</a> <br><br>
</div>

<div class="col-md-12">

    <table class="col-md-12">
        <thead>
            <tr>
                <th>Date et heure</th>
                <th>Demandeur</th>
                <th>Equipement</th>
                <th>Objet</th>
                <th>Niveau</th>
                <!-- <th>Technicien</th>
                <th>Date intervention</th>
                <th>Solution</th>
                <th>Durée</th> -->
                <th>Avancement</th>

                <?php echo "
                <th>Action</th>";

                ?>



            </tr>
        </thead>
        <tbody>
        <?php foreach($ticket as $row):?>
            <tr>
                <td><?= $row['ticket_date_heure'];?></td>
                <td><?= $row['ticket_nom'];?></td>
                <td><?= $row['ticket_equipement'];?></td>
                <td><?= $row['ticket_tache'];?></td>
                <td><?= $row['ticket_niveau'];?></td>
               <!-- <td><?= $row['ticket_technicien'];?></td>
                <td><?= $row['ticket_date'];?></td>
                <td><?= $row['ticket_solution'];?></td>
                <td><?= $row['ticket_duree'];?></td>-->
                <td><?= $row['ticket_avancement'];?></td> 



                <td id="action" >
                    <a href="/ticket/edit/<?= $row['ticket_id'];?>">Modifer</a>
                    <a href="/ticket/delete/<?= $row['ticket_id'];?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

</body>
</html>