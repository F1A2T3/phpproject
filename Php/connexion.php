<?php 
    session_start(); 
    require_once 'config.php';
    if(isset($_POST['ok'])) 
    {
        $_SESSION['Login']=strtoupper($_POST['CIN']);
        $_SESSION['mdp']=sha1($_POST['password']);
        $CIN = strtoupper(htmlspecialchars($_POST['CIN'])); 
        $passwordCrypt = htmlspecialchars($_POST['password']);
        $password = sha1($passwordCrypt);
        $reponse=$bdd->prepare('SELECT * FROM responsable WHERE CIN = :CIN AND mot_de_passe = :password');
        $reponse->execute(array(':CIN'=>$CIN,':password'=>$password));
        if($reponse->rowCount()>0){
            header("Location: ../responsable/pages/main.php");
        }
        else{
            $reponse=$bdd->prepare('SELECT * FROM user WHERE CIN = :CIN AND password = :password');
            $reponse->execute(array(':CIN'=>$CIN,':password'=>$password));
            $data = $reponse->fetch();
           if($reponse->rowCount()>0){
                if($data[6]=='Attente_Respo'||$data[6]=='Attente_Capit')
                    header("Location: animate.php");
                else{
                    if($data[6]=='Refus_Capit'){
                        $error_msg_refusC = "Votre demande est refusée par le capitaine !!!";
                        $_SESSION['error_msg_refusC']=$error_msg_refusC;
                        header("Location: Login.php");
                    }   
                    else{
                        if($data[6]=='Refus_Respo'){
                          $error_msg_refusR = "Votre demande est refusée par le responsable!!!";
                          $_SESSION['error_msg_refusR']=$error_msg_refusR;
                          header("Location: Login.php");}
                        else{
                            $reponse=$bdd->prepare('SELECT Capitaine FROM equipe WHERE Nom_equipe = :nom');
                            $reponse->execute(array(':nom'=>$data[8]));
                            $data1 = $reponse->fetch();
                            if($data1[0] == $data[0]){
                             if($data[5]=='EtudiantFso')
                              header("Location: ../responsable/capitaine/main.php");
                             else 
                              header("Location: ../responsable/capitaine/main.php");}
                            else{
                                    echo "normal user";
                                }
                        }
                    }
                }
        }
        else {
           $error_msg_inscription = "Mot de passe ou CIN est incorrect !!!";
           $_SESSION['error_msg_inscription']=$error_msg_inscription;
           header("Location: Login.php");}
    }
    $reponse->closeCursor();}
       