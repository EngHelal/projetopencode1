<?php include 'header.php'?>
    <div class="formulairecenter">
    <fieldset class="fieldset">
      <form method="post" action="quelquepart.php">
      <legend class="legend">Formulaire d'inscription</legend>
      <p><label for="login">Entrer un pseudo: </label><input class="zonetext0"  type="text" name="login" id="login" size="30" maxlength="250" autofocus="true"  required></p>
      <p><label for="name">Entrer votre nom: </label><input class="zonetext1" type="text" name="name" id="name" size="31" required></p>
      <p><label for="firstname">Entrer votre prénom: </label><input class="zonetext2" type="text" name="firstname" id="firstname" size="28" required></p>
      <p><label for="city">Entrer le nom de votre ville: </label><input class="zonetext3" type="text" name="city" id="city" size="22" required ></p>
      <p><label for="number">Entrer votre numéro de téléphone: </label><input class="zonetext4" type="text" name="number" id="number" size="16" required></p>
      <p><label for="mail">Entrer votre adresse mail: </label><input class="zonetext5" type="email" name="email" id="mail" size="23" required></p>
      <p><label for="password">Entrer un mot de passe: <input class="zonetext6" type="password" name="password" id="password" maxlength="15" size="24" required></p>
      <p><label for="confirm">Confirmer le mot de passe: <input  class="zonetext7" type="password" name="conf_pass" id="confirm" size="21" required></p>
      <p><input type="reset" name="reset" value="Annuler" /> <input class="zonetext8" name="Créer" type="submit" value="Créer mon compte" required></p>
      <p>By signing up you agree to our <a href="">terms of service.</a></p>
    </form>
    </fieldset>
  </div>
  <?php include 'footer.php'?>
