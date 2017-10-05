<!DOCTYPE html>
<html>
<link rel="stylesheet" href="assets/css/style.css">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
</head>
<body>
  <div id="formcontact">
    <a href="index.php">Acceuil</a>
    <a href="catalog.php">Catalogue</a><br/><br/>
    <form method="post" action="fichier.php">
      <legend>Formulaire de contact</legend>
      <p><label for="name">Nom</label> :  <input type="text" name="name" id="name" placeholder="Nom" /></p>
      <p><label for="firstname">Prénom</label> :  <input type="text" name="firstname" id="firstname" placeholder="Prénom" /></p>
      <p><label for="email">Adresse mail</label> : <input type="email" name="email" id="email" placeholder="Adresse mail" /></p>
      <p><label for="message">Message</label> : <textarea type="text" name="message" id="message" style="width: 450px; height: 120px"></textarea></p>
      <input type="reset" value="Annuler">
      <input type="submit" value="Envoyer">
    </form>
</div>
</body>
</html>
