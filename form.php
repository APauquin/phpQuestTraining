<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // nettoyage et validation des données soumises via le formulaire 
  if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
    $errors[] = "Le prénom est obligatoire";
  if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
    $errors[] = "Le nom est obligatoire";
  if (!isset($_POST['user_dateOfBirth']) || trim($_POST['user_dateOfBirth']) === '')
    $errors[] = "La date de naissance est obligatoire";

  if (empty($errors)) {
    // traitement du formulaire
    // puis redirection
    header('Location: info.php');
  }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>Document</title>
</head>

<body>


  <?php // Affichage des éventuelles erreurs 
  if (count($errors) > 0) : ?>
    <div>
      <ul>
        <?php foreach ($errors as $error) : ?>
          <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form action="/info.php"  method="post">

    <div>
      <label for="lastname">Lastname :</label>
      <input type="text" id="lastname" name="user_lastname" required>
    </div>

    <div>
      <label for="firstname">Firstname :</label>
      <input type="text" id="firstname" name="user_firstname" required>
    </div>

    <div>
      <label for="dateOfBirth">Date of birth: (dd-mm-yyyy)</label>
      <input type="date" id="dateOfBirth" name="user_dateOfBirth" required>
    </div>

    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email" required>
    </div>

    <div>
      <label for="numeroTelephone">Telephpne format: 123-456-7890 :</label>
      <input type="tel" id="numeroTelephone" name="user_phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
    </div>

    <div>
      <label for="sujet">Sujet :</label>
      <select type="text" id="sujet" name="user_sujet" required>
        <option value="bla">bla</option>
        <option value="blabla">blabla</option>
        <option value="blablabla">blablabla</option>
        <option value="blablablabla">blablablabla</option>
      </select>
    </div>

    <div>
      <label for="message">Message :</label>
      <textarea type="text" id="message" name="user_message" required></textarea>
    </div>

    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>

  </form>


  <?= var_dump($_POST)?>
</body>

</html>