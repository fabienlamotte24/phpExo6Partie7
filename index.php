
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body><!--Condition pour afficher les informations dans une phrase complète si toutes les informations sont renseignées-->
    <?php
      if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['civility'])){
        echo 'Je m\'appelle ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' et je suis ' . $_POST['civility'];
      } else {
        ?>
        <form action="#" method="POST"><!--Création formulaire qui ne s'affiche qu'au début et lorsque toutes les informations ne sont pas remplies-->
          <label for="lastName">Votre nom: </label><input type="text" name="lastName" id="lastName" placeholder="nom" /><!--Champs nom de famille-->
          <label for="firstName">Votre prénom: </label><input type="text" name="firstName" id="firstName" placeholder="prénom" /><!--Champs prénom-->
          <select name="civility" id="civility"><!--Champs de sélection du sexe-->
            <option selected disabled>Sélectionner votre sexe</option>
            <option value="un homme">Masculin</option><!--Selection masculin-->
            <option value="une femme">Féminin</option><!--Selection féminin-->
            <option value="non_binaire">Non Binaire</option><!--Selection non-binaire-->
          </select>
          <input type="submit" name="submit" value="Soumettre" />
        </form>
        <?php
      }
    ?>
  </body>
</html>
