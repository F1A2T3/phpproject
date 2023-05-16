<?php session_start();
  require_once 'config.php';
  $cin = $_SESSION['Login'];
  $password = $_SESSION['mdp']; 
  $check = $bdd->prepare('SELECT * FROM user WHERE CIN = :CIN AND password = :password');
        $check->execute(array('CIN' => $cin, 'password' => $password));
        $data = $check->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/styleLogin.css">
    <link rel="icon" href="../Images/avocado-svgrepo-com.svg">
    <title>SpoClub</title>
</head>
<?php require_once 'config.php'; ?>
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
                <img src="../Images/burger-checklist-list-menu-navigation-svgrepo-com.svg" class="menu-icon" style="background-color:azure;" onclick="togglemenu()">
        </div>
         <div class="wrapper" style="height: 470px; width: 500px; left:180px;padding-left: 40PX;margin-left: 111px;">
            <marquee direction="right"><img src="../Images/fball.gif" width="88" height="70" alt="Tutorials " border="0"></marquee><br><br><br>
            <div>
                <p class="msg"><?php
                     if($data[6]=='Attente_Respo'&&$data[5]=='EtudiantFso') {
                        echo "   Salut ".$data[1]." ".$data[2]."<br> Nous avons bien reçu votre demande et celle-ci est en attente de validation de la part du responsable. Veuillez noter que pour poursuivre le traitement de votre demande, nous aurons besoin d'une attestation d'inscription de la scolarité. Une fois que vous avez obtenu votre attestation, veuillez transmettre cette attestation au responsable pour qu'il puisse procéder à la validation finale.<br> Nous vous remercions de votre collaboration et votre patience. ";  
                     } 
                     else{
                        if($data[6]=='Attente_Respo'&&$data[5]!='EtudiantFso'){
                            echo "   Salut ".$data[1]." ".$data[2]."<br> Nous avons bien reçu votre demande et celle-ci est en attente de validation de la part du responsable. Veuillez noter que pour poursuivre le traitement de votre demande, nous vous invitons à importer une demande au Secrétaire Général pour qu'il puisse la valider. Une fois que vous avez obtenu la validation du Secrétaire Général, veuillez transmettre cette demande au responsable afin qu'il puisse procéder à la validation finale de votre demande.<br> Nous vous remercions pour votre collaboration et votre patience.";
                        }
                        else{
                            echo "   Salut ".$data[1]." ".$data[2]."<br>Nous avons bien reçu votre demande et celle-ci est en attente de validation de la part du capitaine de l'équipe ".$data[8].".<br> Nous vous remercions pour votre collaboration et votre patience.";
                        }
                     }
                    ?>
                </p>
            </div>
         </div>
    </div>
         <script>
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