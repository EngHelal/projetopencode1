<?php
include 'header.php';
?>
<div id="fond">
<div class="container" id="indexContent">
  <!--<div class="container">-->
      <div id="slider">
        <img src="http://iwallpapers2.free.fr/images/Abstract/Circuit_imprime_-_fond_ecran_1920x1080.jpg" alt="Photodecode" title="Slider">
      </div>
      <div id="log">
          <form action="">
            <fieldset id="log-wrapper">
              <legend>Connexion</legend>
              <ul>
                <li><label for="nom"><span class="glyphicon glyphicon-user"></span></label><input type="text" name="nom" value="amadou"></li>
                <li><label for="pass"><span class="glyphicon glyphicon-lock"></span></label><input type="password" name="pass"></li>
                <li><label><input type="checkbox">Se souvenir de moi</label></li>
              </ul>
            </fieldset>
            <input type="submit" value="Se connecter" name="Se connecter">
          </form>
      </div>
    </div>
    <div class="container" id="messageAccueil ">
      <h1>Bienvenue sur Opencode !</h1>
      <p>Ce site propose de nombreuses ressources gratuites pour vous former à l'univers du web.
        Ainsi, vous pourrez notamment trouver des cours et dossiers complets sur différents langages de programmation comme
        le HTML, CSS, PHP, C, C++...</p>
        <h2>Les cours sont destinés au débutant.</h2>
        <p>
          Les cours comportent une difficulté progressive : nous commencerons toujours par créer de bonnes bases avant d'aller plus loin.
        </p>
        <p>Attention cependant : il vous faudra de l'implication et de la motivation afin de retirer le maximum de chaque cours.</p>
        <p>En effet, ne pensez pas que vous pourrez toujours pratiquer immédiatement et tout comprendre d'un coup.</p>
        <p>Parfois, la théorie va être essentielle et tout ne sera pas facile.</p>
        <p>Cependant, si vous êtes prêt à relever ce challenge, ce site devrait vous aider à vous former de manière efficace à la programmation
          informatique</p>
        </div>
      </div>
    <!--</div>-->
    <?php
    include 'footer.php';
    ?>
