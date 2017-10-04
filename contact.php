<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <style>fieldset{
    display:inline-block;
    text-align:right;
  }
  legend{
    text-align:center;
    font-weight:bold;
  }
  </style>
</head>
<body>
  <fieldset>
    <form method="post" action="fichier.php">
      <legend>Formulaire de contact</legend>
      <p><label for="name">Nom</label> :  <input type="text" name="name" id="name" placeholder="Nom" /></p>
      <p><label for="firstname">Prénom</label> :  <input type="text" name="firstname" id="firstname" placeholder="Prénom" /></p>
      <p><label for="email">Adresse mail</label> : <input type="email" name="email" id="email" placeholder="Adresse mail" /></p>
      <p><label for="message">Message</label> : <textarea type="text" name="message" id="message"></textarea></p>
      <input type="reset" value="Annuler">
      <input type="submit" value="Envoyer">
    </form>
  </fieldset>
</body>
</html>
