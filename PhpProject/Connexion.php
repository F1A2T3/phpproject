<?php
    $serveur = 'localhost';
    $utilisateur = 'root'; 
    $motdepasse = '';
    $basededonnees = 'test1';
    
    $connexion = new PDO("mysql:host=$serveur;dbname=$basededonnees", $utilisateur, $motdepasse);