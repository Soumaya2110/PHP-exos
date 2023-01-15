<?php 
ini_set('display_errors', 'on');
$user = 'root'; 
$pass = 'root';

try {
    $db = new PDO ('mysql:host=localhost;dbname=BDD_FR', $user, $pass);
    
    $db->exec("SET NAMES utf8");
  

} catch (PDOException $e) 
{
  print "Erreur :" . $e->getMessage() . "<br/>";
  die;

}

$sql = "SELECT * FROM `client`";

$requete = $db->query($sql);


