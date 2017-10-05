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
<?php include 'header.php' ?>

<!--<div id="wrapper" class="container">
<div id="formcontact">-->
<div id="formulairecontact">
  <form method="post" action="envoyer.php">
    <fieldset id="wrapper">
      <legend>Formulaire de contact</legend>
      <ol>
        <li>
          <label for="nom">Nom*: <input type="text" placeholder="Entrez votre nom" name="nom" id="name" required autofocus></label>
        </li>
      </ol>
      <ol>
        <li>
            <label for="ville">Ville*: <input type="text" placeholder="Entrez votre ville" name="ville" id="city" required></label>
        </li>
      </ol>
      <ol>
        <li>
          <label for="telephone">Tel: <input type="tel" placeholder="Votre numero de telephone" name="telephone" id="phone"></label>
        </li>
      </ol>
      <ol>
        <li>
          <label for="email">Email*: <input type="email" size="38" placeholder="Votre-email@gmail.com" name="email" id="email" required></label>
        </li>
      </ol>
      <ol>
        <li>
          <select name="sujet" id="subject"><option>Proposition<option>Suggestion<option>Autre</select>
        </li>
      </ol>
      <ol>
        <li>
          <label for="message">Message: <textarea name="message" id="message" rows="4" cols="50"></textarea></label>
        </li>
      </ol>
    </fieldset><br /><br />
    <input class="sendButton" type="submit" name="Submit" value="Envoyer">
    </form>
</div>

  <!--  </div>
</div> -->
<?php include 'footer.php' ?>
