<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=ma_petite_equipe;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (Exception $e)
{
echo'Erreur: '.$e->getMessage().'<br>';
echo'N° : '.$e->getCode();
die('Fin du script');
}
