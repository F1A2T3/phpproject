<?php 
        session_start();
    if(isset($_POST['next'])){
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['CIN'] = $_POST['CIN'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['tel'] = $_POST['tel'];
        $_SESSION['password'] = $_POST['password'];
        header("location: next.php");
        exit();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/avocado-svgrepo-com.svg">
    <title>SpoClub</title>
    <link rel="stylesheet" href="../Css/styleLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="../Images/avocado-svgrepo-com.svg" style="width: 38px; height: px;" >
               <h2 class="logo">  SpoClub </h2>
                  <nav>
                   <ul id="menuList">
                   <li><a href="">Accueil</a></li>
                     <li><a href="">Aide</a></li>
                     <li><a href="">À propos de nous</a></li>
                     <li><a href="">CAP</a></li>
                     <li><a href="">UMP</a></li>
                   </ul>
                  </nav>
                <img src="../Images/burger-checklist-list-menu-navigation-svgrepo-com.svg" class="menu-icon" style="background-color: azure;" onclick="togglemenu()">
        </div>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form name="formSin" action="connexion.php" method="post">
               <h2 class="signh2">Se connecter</h2><br>
                   <?php
                        if (isset($_SESSION['error_msg_refusC'])) {
                            echo '<br>  <span style="color:red;display:block ruby;">'.$_SESSION                           ['error_msg_refusC'].'</span>';
                            unset($_SESSION['error_msg_refusC']);
                        }

                        if (isset($_SESSION['error_msg_refusR'])) {
                            echo '<br>  <span style="color:red;display:block ruby;">'.$_SESSION                           ['error_msg_refusR'].'</span>';
                            unset($_SESSION['error_msg_refusR']);
                        }

                        if (isset($_SESSION['error_msg_inscription'])) {
                            echo '<br>  <span style="color:red;display:block ruby;">'.$_SESSION                           ['error_msg_inscription'].'</span>';
                            unset($_SESSION['error_msg_inscription']);
                        }
                    ?><br>
               <div class="input-group">
                 <input name="CIN" class="usernamef" type="text" required>
                  <label for="username">CIN</label>
               </div>
               <div class="input-group">
                 <input name="password" class="passf" type="password" required>
                   <label for="password">Mot de passe</label>
               </div>
               <button class="btnConex" type="submit" name="ok">Se connecter</button>
               <p style="display:none;" id="error">
                 Verifier vos infos!!</p>
               <div class="signup-link">
                 <p>Vous n'avez pas de compte ?<a href="#" class="signUpBtn-link">S'inscrire</a></p>
               </div>
            </form>
        </div>
        <div class="form-wrapper sign-up">
            <form name="formSup" method="post" action="">
               <h2 class="signh2">S'inscrire</h2>
               <div class="input-group">
                <input  type="text" name="nom" id="nom" required>
                 <label >Nom</label>
              </div>
              <div class="input-group">
                <input type="text" name="prenom" required>
                 <label >Prenom</label>
              </div>
              <div class="input-group">
                <input type="text" name="CIN" required>
                 <label >CIN</label>
              </div>
              <div class="input-group">
                <input type="email" name="email" required>
                 <label>Email</label>
              </div>
              <div class="input-group">
                <input name="tel" type="Tel" required>
                 <label >Numéro de téléphone</label>
              </div>
              <div class="input-group">
                 <input type="password" name="password" required>
                   <label>Mot de passe</label>
              </div>           
               <button type="submit" name="next" onclick="return validerChamps()">Suivant</button>
               <div class="signup-link">
                 <p>Vous avez déjà un compte ?<a href="#" class="signInBtn-link">Se connecter</a></p>
               </div>
              </div>
            </form>
        </div>
    </div>
    </div> 
     <script>
        function validerChamps(){
          var nom = document.getElementById('nom').value;
          var email = document.getElementById('email').value;

          if (nom === '' || email === '') {
             alert('Veuillez remplir tous les champs de la page 1');
        return false;
      }
        }
        const signUpBtnLink = document.querySelector('.signUpBtn-link');
        const signInBtnLink = document.querySelector('.signInBtn-link');
        const wrapper =  document.querySelector('.wrapper');
        signUpBtnLink.addEventListener('click', () => {wrapper.classList.toggle('active')});
        signInBtnLink.addEventListener('click', () => {wrapper.classList.toggle('active')});
        var menuList=document.getElementById("menuList");
        menuList.style.maxHeight="0px";
        function togglemenu(){
            if(menuList.style.maxHeight== "0px") 
               menuList.style.maxHeight="130px";
            else 
               menuList.style.maxHeight="0px"
        }
    </script>
</body>
</html>