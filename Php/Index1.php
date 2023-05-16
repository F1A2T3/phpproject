<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/styleIndex1.css">
    <link rel="icon" href="../Images/avocado-svgrepo-com.svg">
    <title>SpoClub</title>
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
        <div class="row">
            <div class="col-1">
                <h2>Sir sir siiiiir</h2>
                <h3>Club sportif</h3>
                <p>Notre club est créé au sein du CAP Fso .</p>
                <button type="button" class="btn1" onclick="window.location.href='../Php/Login.php'">Connexion<img src="../Images/right-arrow-svgrepo-com.svg"></button>
            </div>
            <div class="col-2">
                <div class="color-box"></div>
                <img src="../Images/Raguraghui et ses fils.jpeg" class="controller">
                <div class="color-box"></div>
                <div class="add-btn">
                </div>
            </div>
        </div>
        <footer class="footer-distributed">

            <div class="footer-left">
                <h3>Sport<span>Club</span></h3>
                <p class="footer-company-name">Copyright © 2021 <strong>Sport Club</strong> Tous droits réservés</p>
            </div>
    
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>UMP</span>
                        Oujda</p>
                </div>
    
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+21234568230</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">CAP2023@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>À propos de CAP</span>
                    <strong>Sport club</strong> Rejoignez-nous et vivez une expérience sportive inoubliable au sein du club sportif de notre faculté, où l'esprit d'équipe, la passion et la victoire se rencontrent pour façonner des champions.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
       </footer>
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