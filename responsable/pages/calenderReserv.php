<?php 
    include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/style.css">
  <<link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">title>Document</title>
    <link rel="stylesheet" href="../css/tble.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/match.css">

        <style>
        table {
            border-collapse: collapse;
            width: 75%;
            height: 75%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        th:first-child, td:first-child {
            text-align: left;
        }

        tbody th {
            background-color: #f2f2f2;
        }

        tbody td {
            background-color: #fff;
        }
    </style> 
</head>
<body>
	<section id="content">
    	<main>
            <div  class="table-data">
                <div class="order ">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Lundi<br><?php echo date('d/m/Y', strtotime('monday this week')); ?></th>
                                    <th>Mardi<br><?php echo date('d/m/Y', strtotime('tuesday this week')); ?></th>
                                    <th>Mercredi<br><?php echo date('d/m/Y', strtotime('wednesday this week')); ?></th>
                                    <th>Jeudi<br><?php echo date('d/m/Y', strtotime('thursday this week')); ?></th>
                                    <th>Vendredi<br><?php echo date('d/m/Y', strtotime('friday this week')); ?></th>
                                    <th>Samedi<br><?php echo date ('d/m/Y', strtotime('saturday this week')); ?></th>
                                    <th>Dimanche<br><?php echo date('d/m/Y', strtotime('sunday this week')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="align-middle">8h - 9h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">9h - 10h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">10h - 11h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">11h - 12h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">12h - 13h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">13h - 14h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">14h - 15h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">15h - 16h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">16h - 17h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">17h - 18h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>      
                                <style>
                                    @import url("https://fonts.googleapis.com/css?family=Lato:400,700&display=swap");
                                    table {
                                    border-collapse: collapse;
                                    border-spacing: 0;
                                    width: 100%;
                                    border: 1px solid #ddd;
                                    }

                                    th, td {
                                    text-align: left;
                                    padding: 16px;
                                    }

                                    tr:nth-child(even) {
                                    background-color: #f2f2f2;
                                    }
                                    .icons-table{
                                    display: flex;
                                    justify-content: space-around;
                                    }
                                    .btn-icons i {
                                    font-size: 1.5em;
                                    }
                                    .plus i{
                                    color: powderblue;
                                    }
                                    .trash i{
                                    color: tomato;
                                    }
                                    .pen i{
                                    color: forestgreen;
                                    }

                                    .Tablebtns {
                                        display: flex;
                                    }
                                    .Tablentn {
                                        padding: 1em;
                                        background-color: rgb(157 151 151 / 73%);
                                        margin: 12px;
                                        border-radius: 12px;
                                        cursor: pointer;
                                        font-family: sans-serif;
                                        font-size: 0,8em;
                                        font-weight: 700;
                                    }


                                    body.dark {
                                    --light: #2f2f36;
                                    --grey: #273048;
                                    --dark: #cdcd90fc;
                                }

                                </style>
			</div>
				<div class="order">
					<div class="head">
						<h3></h3>
						<i class='' ></i>
						<i class='' ></i>
					</div>
                        <div id="container">
                        <h1>&bull; Reserver un match &bull;</h1>
                        <div class="underline">
                        </div>
                        <div class="icon_wrapper">
                            <path d="M70.865,101.78c0,4.774,3.886,8.657,8.66,8.657c4.774,0,8.657-3.883,8.657-8.657c0-4.773-3.883-8.656-8.657-8.656    C74.751,93.124,70.865,97.006,70.865,101.78z"></path>
                        </svg>
                    </div>
                    <form action="RespoReservation.php" method="POST" id="contact_form">
                    <div id="formulaires">
                                <div class="name">
                                    <label for="equipe1">EQUIPE 1 :</label>
                                    <select name="equipe1[]" required>
                                    <?php 
                                        $sql = "SELECT Nom_equipe FROM equipe";
                                        $stmt = $bdd->prepare($sql);
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<option value=\"$row[Nom_equipe]\">";
                                            echo  $row['Nom_equipe'] . "<br>";
                                            echo "</option>";
                                    } ?>
                                    </select>
                                </div>
                                <div class="email">
                                    <label for="equipe2">EQUIPE 2 :</label>
                                    <select name="equipe2[]">
                                    <Option disabled hidden selected></Option>
                                    <?php 
                                        $sql = "SELECT Nom_equipe FROM equipe";
                                        $stmt = $bdd->prepare($sql);
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<option value=\"$row[Nom_equipe]\">";
                                            echo  $row['Nom_equipe'] . "<br>";
                                            echo "</option>";
                                    } ?>
                                    </select>
                                </div>
                                <div class="date">
                                    <p style="padding-top: 20px; padding-left: 30px;"><em>Soutaitez-vous que ce match soit fixe tout au long de l'année :</em></p>
                                    <div class="EquipeChoice " style="padding-top: 20px; padding-left: 30px;">
                                        <label class="input-group" for="oldEquipe">
                                            <input type="radio" name="type_0" id="oldEquipe" value="Oui">
                                            Oui :
                                        </label>  
                                        <label class="input-group" for="newEquipe">
                                            <input type="radio" name="type_0" id="newEquipe"  value="Non">
                                            Non :
                                        </label>
                                    </div>
                                    <div id="content">
                                        <select id="chEq" name="day[]" style="display:none;">
                                            <option value="Lundi">Lundi</option>
                                            <option value="Mardi">Mardi</option>
                                            <option value="Mercredi">Mercredi</option>
                                            <option value="Jeudi">Jeudi</option>
                                            <option value="Vendredi">Vendredi</option>
                                            <option value="Samedi">Samedi</option>
                                            <option value="Dimanche">Dimanche</option>
                                        </select>
                                        <div class="input-group">
                                            <input class="datepicker-input" type="date" name="date[]" placeholder="date :" id="crEq" style="display:none;" >
                                        </div>
                                        </div>
                                    <label for="date_debut"> Heure début :</label>
                                    <input type="time" name="heure_debut[]" id="date_debut_input" required>
                                </div>
                                <div class="date">
                                    <label for="date_fin"> Heure fin :</label>
                                    <input type="time" name="heure_fin[]" id="date_fin_input" required>
                                </div>
                      </div>
                        <button class="submit" type="button" onclick="ajouterFormulaire()" id="form_button">Ajouter un formulaire</button>
                        <button class="submit" type="submit"  id="form_button">Reserver</button>
                    </div>
                    </form>
                </div>
            </div>                
        </main>
    </section>
    <!-- SCRIPTE  POUR AJOUTER UN FORMULAIRE -->
    <script>
var formCounter = 0;
function ajouterFormulaire() {
  formCounter++;
  var formHtml = '<div class="name"><label for="equipe1"></label><p><em> EQUIPE 1 :</em></p><select name="equipe1[]">\<?php $sql = "SELECT Nom_equipe FROM equipe";$stmt = $bdd->prepare($sql);$stmt->execute();while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {echo "<option value=\"$row[Nom_equipe]\">";echo  $row['Nom_equipe'] . "<br>";echo "</option>";} ?></select></div><div class="email"><label for="equipe2"></label><p><em> EQUIPE 2 :</em></p><select name="equipe2[]"><Option disabled hidden selected></Option>\<?php $sql = "SELECT Nom_equipe FROM equipe";$stmt = $bdd->prepare($sql);$stmt->execute();while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  echo "<option value=\"$row[Nom_equipe]\">";echo  $row['Nom_equipe'] . "<br>";echo "</option>";} ?></select></div><div class="date"><p style="padding-top: 20px; padding-left: 30px;"><em>Soutaitez-vous que ce match soit fixe tout au long de l\'année></p><div class="EquipeChoice " style="padding-top: 20px; padding-left: 30px;">' ;
  formHtml += '<label class="input-group" for="oldEquipe_'+ formCounter +'">';
  formHtml += '<input type="radio" name="type_'+ formCounter +'" id="oldEquipe_'+ formCounter +'" value="Oui">Oui :</label>';
  formHtml += '<label class="input-group" for="newEquipe_'+ formCounter +'">';
  formHtml += '<input type="radio" name="type_'+ formCounter +'" id="newEquipe_'+ formCounter +'" value="Non">Non :</label></div>';
  formHtml += '<div id="content_'+ formCounter +'">';
  formHtml += '<select id="chEq_'+ formCounter +'" name="day[]" style="display:none;">';
  formHtml += '<option value="Lundi">Lundi</option><option value="Mardi">Mardi</option><option value="Mercredi">Mercredi</option>';
  formHtml += '<option value="jeudi">Jeudi</option><option value="Vendredi">Vendredi</option><option value="Samedi">Samedi</option>';
  formHtml += '<option value="Dimanche">Dimanche</option></select>';
  formHtml += '<input class="datepicker-input" type="date" name="date[]" placeholder="date :" id="crEq_'+ formCounter +'" style="display:none;" ></div>';
  formHtml += '<label for="date_debut"> Heure début :</label><input type="time" name="heure_debut[]" id="date_debut_input" required></div><div class="date"><label for="date_fin">  Heure fin :</label><input type="time" name="heure_fin[]" id="date_fin_input" required></div>';
  var newForm = document.createElement('div');
  newForm.innerHTML = formHtml;
  document.getElementById('formulaires').appendChild(newForm);
  var btn1 = document.getElementById("newEquipe_" + formCounter);
  var btn2 = document.getElementById("oldEquipe_" + formCounter);
  var content = document.getElementById("content_" + formCounter);
    btn1.addEventListener('click', function() {
  createElement3(formCounter);});
    btn2.addEventListener('click', function() {
  createElement4(formCounter);});
}
   function createElement3(formCounter){
        document.getElementById("chEq_" + formCounter).style.display="none";
        document.getElementById("crEq_" + formCounter).style.display="block";
    }
    function createElement4(formCounter){
        document.getElementById("crEq_" + formCounter).style.display="none";
        document.getElementById("chEq_" + formCounter).style.display="block";
    }
    var btn1=document.getElementById("newEquipe");
    var btn2=document.getElementById("oldEquipe");
    var content=document.getElementById("content");
    function createElement1(){
        document.getElementById("chEq").style.display="none";
        document.getElementById("crEq").style.display="block";
    }
    function createElement2(){
        document.getElementById("crEq").style.display="none";
        document.getElementById("chEq").style.display="block";
    }
    btn1.addEventListener("click",createElement1);
    btn2.addEventListener("click",createElement2);
         
    var menuList=document.getElementById("menuList");
    menuList.style.maxHeight="0px";
    function togglemenu(){
        if(menuList.style.maxHeight== "0px") 
            menuList.style.maxHeight="130px";
        else 
            menuList.style.maxHeight="0px"
        }
    $(function () {
      $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
});
</script>
</body>

</html>