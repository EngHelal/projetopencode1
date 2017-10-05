<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire de connexion</title>
    <style>

    body{
      text-align: center;
    }
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
        <legend>Formulaire de connexion</legend>
        <p><label for="mail">Entrer votre adresse mail: </label><input type="email" name="email" id="mail"></p>
        <p><label for="password">Entrer votre mot de passe: <input type="password" name="password" id="password" maxlength="15"></p>
      </form>
    		<p><input type="submit" value="Connexion" /></p>
        <p><a href="">Mot de passe perdu</a> <a href="">Adresse mail perdu</a></p>

    </fieldset>
  </body>
</html>
