
<?php
include 'header.php';
?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<body id="body">
  <img id="imgprofile" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt3eNCBWfOik6RKLA4D2zi1335pk-lz0bZ5h4VUlnRV-Pq5ruX"/>
  <h1 id="titreprofile">Vous êtes sur votre profil</h1><br><br><br><br><br>
  <div id="contener">
    <p><?php  $date = date("d-m-Y");
    $heure = date("H:i");
    Print("Dernière connection le: $date et il est $heure");
    ?></p>
    <p>Votre pseudo: Gégé</p>
    <p>Nom: Leroux</p>
    <p>Prénom: Gérard</p>
    <p>Lieu: Noyon</p>
    <p>Numéro de téléphone: 01-02-03-08-05 <a href="nothing">modifier votre numéro de téléphone</a></p>
    <p>Adresse mail: Gerardleroux@live.fr <a href="nothing">modifier votre adresse mail</a></p>
    <p>Votre mot de passe: ****** <a href="nothing">modifier votre mot de passe</a></p>
  </div>
  <br><br><br>
  <div id="contener2">
    <div>
      <h2><strong>Vos apprentissages en cours: </strong></h2> <ol><li>PHP pour débutant</li>
        <li>Javascript pour débutant</li>
        <li>Utiliser Unity</li></ol>
      </div>
      <div>
        <h2><strong>Les exercices éffectués: </strong></h2><ol>
          <li>HTML/CSS pour débutant</li>
          <li>PHP pour débutant (POO)</li>
          <li>Javascript pour débutant</li></ol>
        </div>
        <div>
          <h2><strong>Vos certificats obtenus: </strong></h2> <ol><li>B.A.B.A du HTML/CSS</li>
            <li>Comprendre le web</li>
            <li>Comprendre la blockchaine</li></ol>
          </div>
        </div>
        <?php
        include 'footer.php';
        ?>
      </body>
