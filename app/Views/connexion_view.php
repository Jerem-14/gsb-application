<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion :</title>
</head>
<body>
    
<form>
      <fieldset>
          <legend>Connexion</legend>

          <table>
          <thead>
            <tr>
                <th>Pseudo</th>
                <th>Mot de passe</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($utilisateur as $row):?>
            <tr>
                <td><input <?= $row['pseudo'];?> ></td>
                <td><input <?= $row['mdp'];?> ></td>

            </tr>
        <?php endforeach;?>
        </tbody>
</tr>
          <tr>
            <td ALIGN="right" COLSPAN="2"><INPUT TYPE="submit" name="Envoyer" VALUE="envoyer">
</tr>
</table>

      </fieldset>
</form>

</body>
</html>