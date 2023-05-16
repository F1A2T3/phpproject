<?php
    include "sidebar.php";
    include_once "connection.php";
     $terrain = trim($_GET['id']);
     $_SESSION['id_terrain'] = $terrain; 
     //Reservation erreur
    if(isset($_SESSION['err_existe']) && isset($_SESSION['nb_jeu']) && !empty($_SESSION['err_existe']) && !empty($_SESSION['nb_jeu'])) {
    $message = '   Erreur de réservation :  ';
    foreach($_SESSION['err_existe'] as $key => $value) {
        $message .= '-->'. $value . '\n';
    }
    foreach($_SESSION['nb_jeu'] as $key => $value) {
        $message .= '-->'. $value . '\n';
    }
    echo '<script>alert("'.$message.'");</script>';
    unset($_SESSION['err_existe']);
    unset($_SESSION['nb_jeu']);
    }

     $sql = "SELECT * FROM matchclub WHERE WEEK(temp_debut,1) = WEEK(NOW(),1) AND WEEK(temp_fin,1) = WEEK(NOW(),1) AND id_terrain = $terrain And (statut = 'accept' OR statut = 'fixe')";
     $result = $bdd->query($sql);
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
   
     $equipe1 = $row['equipe1'];
     if(empty($row['equipe2'])) {
        $equipe2 = ' - ';
      } else {
        $equipe2 = $row['equipe2'];
      }
     $id = $row['id_match'];
     $date_debut = date('H:i', strtotime($row['temp_debut']));
     $date_fin = date('H:i', strtotime($row['temp_fin']));
     $dayOfWeek = date('N', strtotime($row['temp_debut']));
     $hour = date('H', strtotime($row['temp_debut']));
     $index = $hour - 8;
     if ($index < 0 || $index > 9) {
         continue;
     }
     $matches[] = array(
        'row' => $index + 1,
        'col' => $dayOfWeek + 1,
        'html' => '<b>' . $equipe1 . '</b> vs <b>' . $equipe2 . '</b>' ,
        'id' => $id,
     );
  }
?>
<script>window.onload = loadTableData;</script>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste of user</title>
    <link rel="stylesheet" href="../css/tble.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/style.css">
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
            color:green;
        }
    </style> 
</head>

<body>  
  <section id="content">
        <main>
        <ul class="box-info">
                <li>
                    <i class='fc-icon fc-icon-right-single-arrow' ></i>
                    <span class="text fc-icon fc-icon-right-single-arrow">
                        <button class="btn col-md-6"><a href="calenderNext.php">Précédente</a></button>
                    </span>
                    
                </li>
                <li>
                    <i class='' ></i>
                    <span class="text">
                        <?php
                            $aujourdhui = getdate();
                            echo $aujourdhui['mday'] . " " . $aujourdhui['month'] . " " . $aujourdhui['year'];
                        ?>
                    </span>
                    <button class="button-7 bx" role="button" style="width:80px;height:28px;background-color: rgb(255,253,44);color: #16774a; border-color :rgb(255,253,44); font-size: 16px;" onclick="window.location.href='calenderReserv.php'">Ajouter</button>
                </li>
                <li>
                    <i class='fc-next-button fc-button fc-state-default fc-corner-right' ></i>
                    <span class="text fc-next-button fc-button fc-state-default fc-corner-right">
                        <div class="btn col-md-3"><a href="calenderPreview.php">Suivante</a></div> 
                    </span>
                </li>
            </ul> <br>
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
                        <script>
                          var matches = <?php echo json_encode($matches); ?>;
                            for (var i = 0; i < matches.length; i++) {
                              var row = matches[i].row;
                              var col = matches[i].col;
                              var html = matches[i].html;
                              var id = matches[i].id;
                              var td = document.querySelector('table tbody tr:nth-child(' + row + ') td:nth-child(' + col + ')');
                              td.innerHTML = html;
                              td.setAttribute('data-id', id);
                            }
                            var casesMatch = $('[data-id]');
                            casesMatch.click(function() {
                                var matchID = $(this).data('id');
                                window.open('updateMatch.php?match=' + matchID, 'Formulaire', 'width=500,height=500');
                            });
                        </script>
                </div>
            </div>
        </main>
    </section>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-+JZJzvJZJzvJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJz"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../responsable/scripte/script.js"></script> -->
</body>
</html>