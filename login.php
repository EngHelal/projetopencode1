<?php include 'header.php'?>

</head>
<body>
  <fieldset id="formulairelogin">
    <form method="post" action="quelquepart.php">
      <legend>Formulaire de connexion</legend>
      <p><label for="mail">Entrer votre adresse mail: </label><input type="email" name="email" id="mail"></p>
      <p><label for="password">Entrer votre mot de passe: <input type="password" name="password" id="password" maxlength="15"></p>
      </form>
      <p><input type="submit" value="Connexion" /></p>
      <p><a href="">Mot de passe perdu</a> <a href="">Adresse mail perdu</a></p>
    </fieldset>
    <?php include 'footer.php'?>
