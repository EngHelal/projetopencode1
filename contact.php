<!DOCTYPE html>
<html>
<link rel="stylesheet" href="assets/css/style.css">
<!--ancien code du formulaire de contact
<head>
<meta charset="utf-8">
<title>Contact</title>
</head>
<body>
<div id="formcontact">
<form method="post" action="fichier.php">
<legend>Formulaire de contact</legend>
<p><label for="name">Nom</label> :  <input type="text" name="name" id="name" placeholder="Nom" /></p>
<p><label for="firstname">Prénom</label> :  <input type="text" name="firstname" id="firstname" placeholder="Prénom" /></p>
<p><label for="email">Adresse mail</label> : <input type="email" name="email" id="email" placeholder="Adresse mail" /></p>
<p><select name="Sujet"><option>Proposition<option>Suggestion<option>Autre</select></p>
<p><label for="message">Message</label> : <textarea type="text" name="message" id="message" style="width: 450px; height: 120px"></textarea></p>
<input type="reset" value="Annuler">
<input type="submit" value="Envoyer">
</form>
</div>
-->
<div id="wrapper">
  <div id="formcontact">
    <fieldset>
    <form name="Formulaire contact" id="formulaire de contact" method="post" action="envoyer.php">
      <h1>Formulaire de contact</h1>
      <label><span>Nom*: </span><input type="text" placeholder="Entrez votre nom" name="nom" id="name" required autofocus></label><br/><br/>
      <label><span>Ville*: </span><input type="text" placeholder="Entrez votre ville" name="ville" id="city" required></label><br/><br/>
      <label><span>Tel: </span><input type="tel" placeholder="Votre numero de telephone" name="téléphone" id="phone"></label><br/><br/>
      <label><span>Email*: </span><input type="email" size="38" placeholder="Votre-email@gmail.com" name="email" id="email" required></label><br/><br/>
      <select name="sujet" id="subject"><option>Proposition<option>Suggestion<option>Autre</select><br/><br/>
        <label><span>Message: </span><textarea name="monmessage" id="message" rows="4" cols="50"></textarea></label>
        <input class="sendButton" type="submit" name="Submit" value="Envoyer">
      </form>
    </fieldset>
    </div>
  </div>
</body>
</html>
