<?php
  include_once 'Connexion.php';
  $requete = "SELECT COUNT(*) AS total FROM pays";

  $resultat = $connexion->query($requete);

  $nombrePays = $resultat->fetch()['total'];

  $requete = "SELECT * FROM pays";

  $resultat = $connexion->query($requete);
?>
 <!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries</title>
    <link rel="stylesheet" href="Styles/StyleAff.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>Liste de Pays</h1>
            <div class="input-group">
                <h3>Le nombre de pays est : <strong><?= $nombrePays ?></strong></h3>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Code Chiffre</th>
                        <th> Code 2</th>
                        <th> Code 3 </th>
                        <th> Nom du pays en Anglais </th>
                        <th> Nom du pays en Francais </th>
                        <th> Capitale </th>
                        <th> Population</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td> <?=$row['id']?> </td>
                        <td> <?=$row['code']?> </td>
                        <td> <?=$row['alpha2']?> </td>
                        <td> <?=$row['alpha3']?> </td>
                        <td> <?=$row['nom_en_gb']?> </td>
                        <td> <?=$row['nom_fr_fr']?> </td>
                        <td> <?=$row['capitale']?> </td>
                        <td> <?=$row['population']?> </td>
                    </tr>
                    <?php  }  ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>