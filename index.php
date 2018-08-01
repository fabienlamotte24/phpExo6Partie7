<?php
$lastNameErr = $firstNameErr = '';
$lastName = $firstName = '';

if(empty($_POST['lastName'])){
  $lastNameErr = 'Ce champs est vide';
} elseif (preg_match('/^[a-zA-Z\- éèêç]*$/', $lastName)){
  $lastNameErr = 'Votre saisie possède des caractères incorrects';
}

if(empty($_POST['firstName'])){
  $firstNameErr =  'Ce champs est vide';
} elseif (preg_match('/^[a-zA-Z\- éèêç]*$/', $firstName)){
  $firstNameErr = 'Votre saisie possède des caractères incorrects';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.Css" />
    <title>Exercice 6</title>
  </head>
  <body><!--Formulaire de qualité-->
    <form class="form" action="#" method="post"><!--Création formulaire-->
      <label for="lastName">Votre nom: </label><input type="text" name="lastName" placeholder="nom" /><span class="error">* <?php echo $lastNameErr;?></span><br><br>
      <label for="firstName">Votre prénom: </label><input type="text" name="firstName" placeholder="prénom" /><span class="error">* <?php echo $firstNameErr;?></span><br><br>
      <select class="choice" name="choice">
        <option value="monsieur">Monsieur</option>
        <option value="madame">Madame</option>
        <option value="non_binaire">Non-Binaire</option>
      </select><br><br>
      <input type="submit" name="submit" />
    </form>
    <?php
    if((isset($_POST['lastName']) && !empty($_POST['lastName']) && preg_match('/^[a-zA-Z\- éèêç]*$/', $_POST['lastName'])) && (isset($_POST['firstName']) && !empty($_POST['firstName']) && preg_match('/^[a-zA-Z\- éèêç]*$/',
    $_POST['firstName'])) && (isset($_POST['choice']) && !empty($_POST['choice']))){
      echo 'Nom: ' . $_POST['lastName'];
      ?>
      <br />
      <?php
      echo 'Prénom: ' . $_POST['firstName'];
      ?>
      <br />
      <?php
      echo 'Genre: ' . $_POST['choice'];
    }
    ?>
  </body>
</html>
