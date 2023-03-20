<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="info.php" method="post">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="user_name" required>
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email" required>
    </div>
    <div>
      <label for="numeroTelephone">Format: 123-456-7890 :</label>
      <input type="tel" id="numeroTelephone" name="user_phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
    </div>
    <div>
      <label for="sujet">Nom :</label>
      <select type="text" id="sujet" name="user_sujet">
        <option value="bla">bla</option>
        <option value="blabla">blabla</option>
        <option value="blablabla">blablabla</option>
        <option value="blablablabla">blablablabla</option>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>

</html>