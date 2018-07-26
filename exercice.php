<?php
    //exercice1
    $mounths = ["jenvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
?>

<?php
    //exercice2
    echo $mounths[2];
?>

<?php
    //exercice3
    echo $mounths[5];
?>

<?php
    //exercice4
    $mounths[7] = "août";
?>

<?php
    //exercice5
    $departement = ["02" => "Aisne", 59 => "Nord", 60 => "Oise", 62 => "Pas-de Calais", 80 => "Somme"];
?>

<?php
    //exercice6
    echo $departement[59];
?>

<?php
    //exercice7
    $departement[51] = "Marne";
?>

<?php
    //exercice8
    foreach($mounths as $element){
        echo "<p>" . $element . "</p>";
    }
?>

<?php
    //exercice9
    foreach($departement as $element){
        echo "<p>" . $element . "</p>";
    }
?>

<?php
    //exercice10
    foreach($departement as $cle => $element){
        echo "<p>Le département " . $element . " a le numéro: " . $cle . "</p>";
    }
?>

