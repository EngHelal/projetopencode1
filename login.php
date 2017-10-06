<?php include 'header.php'?>
<title>Formulaire de connexion</title>
<style>
<div class="container">
<div class="row">
<div class="col-md-offset-5 col-md-3">
<div class="form-login">
<h4>Bienvenue !</h4>
<input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Nom d'utilisateur" />
</br>
<input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Mot de passe" />
</br>
<div class="wrapper">
<span class="group-btn">
<input id="btn" type="button" name="login" value="connexion" class="btn btn-primary btn-md"><i class="fa fa-sign-in"></i>
</span>
  </div>
  </div>
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
    <?php include 'footer.php'?>
