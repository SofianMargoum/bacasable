<?php

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

$res =  $bdd->query('SELECT * FROM news');

foreach  ($res as $row) {
    echo  $row['titre'] . '<br />';
    echo $row['contenu'] . '<br />';
}



echo '<br />';

$res = $bdd->query('SELECT titre,contenu FROM news');

while ($row = $res->fetch()) 
{
    echo $row['titre'].'<br />'.$row['contenu'].'<br />';
}

?>