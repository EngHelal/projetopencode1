<?php include 'header.php' ?>
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
<?php include 'footer.php' ?>
