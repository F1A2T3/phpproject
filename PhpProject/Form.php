<?php
  include_once 'Connexion.php';
  $requete = "SELECT * FROM pays";

  $resultat = $connexion->query($requete);
  if (isset($_POST['subm'])) {
     $capitale = htmlspecialchars($_POST['Capit']);
     $population = htmlspecialchars($_POST['Popul']);
     $paysId = htmlspecialchars($_POST['pays']);
            $requete = "INSERT INTO pays (Id, Capitale, Population) VALUES (?, ?, ?)";
            $statement = $connexion->prepare($requete);

            $statement->execute([$paysId, $capitale, $population]);

            if ($statement->rowCount() > 0) {
                header("Location: Affiche.php");
            } 
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Countries</title>
	<link rel="stylesheet" type="text/css" href="Styles/StyleF.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Ajouter une capitale et une population</h2>
              <form action="" method="post">
                <select name="pays" class="field">
                    <?php
                       while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nom_fr_fr'] . "</option>";
                    }            
                    ?>
                </select>
				<input type="text" class="field" placeholder="Capitale" name="Capit" id="capitale">
				<input type="number" class="field" placeholder="Population" name="Popul" id="population">
				<button class="btn" type="submit" name="subm">Ajouter</button>
              </form>
			</div>
		</div>
	</div>
</body>
<script>
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();

    var capitale = document.getElementById('capitale').value;
    var population = document.getElementById('population').value;

    if (capitale === '' || population === '') {
        alert('Veuillez remplir tous les champs.');
        return;
    }

    var lettrePattern = /^[A-Za-z\s]+$/;
    if (!lettrePattern.test(capitale)) {
        alert('Le champ "Capitale" ne doit contenir que des lettres.');
        return;
    }

    if (isNaN(population) || population <= 0) {
        alert('Le champ "Population" doit être un nombre positif.');
        return;
    }

    document.querySelector('form').submit();
});

</script>
</html>