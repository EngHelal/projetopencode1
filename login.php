<?php
  header('header.php');
 ?>
 <?php
   header('header.php');
  ?>
  <!--Pulling Awesome Font -->

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
      </div>
  </div>
