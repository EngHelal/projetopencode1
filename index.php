<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire d'inscription</title>
    <style>
    fieldset{
      display: inline-block;
      text-align: right;
    }
    legend{
      text-align: center;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
    <fieldset>
      <form method="post" action="quelquepart.php">
      <legend>Formulaire d'inscription</legend>
      <p><label for="login">Entrer un pseudo: </label><input type="text" name="login" id="login" maxlength="250"></p>
      <p><label for="name">Entrer votre nom: </label><input type="text" name="name" id="name"></p>
      <p><label for="firstname">Entrer votre prénom: </label><input type="text" name="firstname" id="firstname"></p>
      <p><label for="city">Entrer le nom de votre ville: </label><input type="text" name="city" id="city"></p>
      <p><label for="number">Entrer votre numéro de téléphone: </label><input type="text" name="number" id="number"></p>
      <p><label for="mail">Entrer votre adresse mail: </label><input type="email" name="email" id="mail"></p>
      <p><label for="password">Entrer un mot de passe: <input type="password" name="password" id="password" maxlength="15"></p>
      <p><label for="confirm">Confirmer le mot de passe: <input  type="password" name="conf_pass" id="confirm" /></p>
      <p><input type="reset" name="reset" value="Annuler" /> <input name="Créer" type="submit" value="Créer mon compte" /></p>
      <p>By signing up you agree to our <a href="">terms of service.</a></p>
    </form>
    </fieldset>
  </body>
</html>
