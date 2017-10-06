<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Forum</title>
</head>
<body class="background">
  <?php
  include 'header.php';
  ?>
  <div id="flex">
    <div id="titleforum">
      <p>
        Réinstallation de linux
      </p>
    </div>
    <br />
    <div class="post">
      <div class="profilforum">
        <img src="assets/img/personnes.png" alt="Profil" /><br />
        <p>
          Yamadou
        </p>
      </div>
      <div class="messageforum">
        <p>
          Salut tout le monde!<br /><br />
          Je viens de flinguer mon OS.<br />Et je voudrais savoir comment faire pour réinstaller GNU/Linux.
        </p>
      </div>
    </div>
    <div class="post">
      <div class="profilforum">
        <img src="assets/img/personnes.png" alt="Profil" />
        <p>Victorien 17.04</p>
      </div>
      <div class="messageforum">
        <p>
          Salut Yamadou<br /><br />
          Il te faut une clé bootable.
        </p>
      </div>
    </div>
    <div class="post">
      <div class="profilforum">
        <img src="assets/img/personnes.png" alt="Profil" />
        <p>Anthony 3.0</p>
      </div>
      <div class="messageforum">
        <p>
          Note bien ton mot de passe quelque part.
        </p>
      </div>
    </div>
  </div>
  <?php
  include 'footer.php';
  ?>
</body>
</html>
