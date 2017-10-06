<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Acceuil</title>
    <?php include 'header.php' ?>
  </head>
  <body><br><br><br><br>
    <div id="imghomepage">
    <h1 id="home">Bienvenue sur Opencode !</h1><br>
    <div>
      <p class="img"><div class="container">
          <div class="row">
              <div class="col-md-offset-5 col-md-3">
                  <div class="form-login">
                  <h4 id="welcome">Bienvenue !</h4>
                  <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Nom d'utilisateur" />
                  <br>
                  <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Mot de passe" />
                  <br>
                  <div class="wrapper">
                  <span class="group-btn">
                      <input id="btn" type="button" name="login" value="connexion" class="btn btn-primary btn-md"><i class="fa fa-sign-in"></i>
                  </span>
                  <script>
                      $("#btn").click(function(){
                        var user = $('#userName').val();
                        var password = $('#userPassword').val();
                        if (user !== '' && password) !== '' {
                        }
                      })
                  </script>
                  </div>
                  </div>
    </div>
<br><br><br><br><br><br><br><br><br><br>
      <p id="text">Ce site propose de nombreuses ressources gratuites pour vous former à l'univers du web.
      Ainsi, vous pourrez notamment trouver des cours et dossiers complets sur différents langages de programmation comme
      le HTML, CSS, PHP, C, C++...
      Les cours sont destinés au débutant.
      Les cours comportent une difficulté progressive : nous commencerons toujours par créer de bonnes bases avant d'aller plus loin.
      Attention cependant : il vous faudra de l'implication et de la motivation afin de retirer le maximum de chaque cours.
      En effet, ne pensez pas que vous pourrez toujours pratiquer immédiatement et tout comprendre d'un coup.
      Parfois, la théorie va être essentielle et tout ne sera pas facile.
      Cependant, si vous êtes prêt à relever ce challenge, ce site devrait vous aider à vous former de manière efficace à la programmation
      informatique.</p><br>
      <p id="goodluck">Pour commencer et choisir vos exercices veuillez appuyer sur catalogue en haut du site => Bonne chance !</p>
    </div><br><br><br><br><br><br><br>
  </body>
</html>
<?php include 'footer.php' ?>
