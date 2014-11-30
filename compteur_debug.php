<?php
session_start();

if(file_exists('compteur_visites.txt'))
{
$compteur_f = fopen('compteur_visites.txt', 'r+');
$compte = fgets($compteur_f);
print "file exists";
}
else
{
$compteur_f = fopen('compteur_visites.txt', 'a+');
$compte = 0;
print "file not exists";
}
if(!isset($_SESSION['compteur_de_visite']))
{
$_SESSION['compteur_de_visite'] = 'visite';
$compte++;
fseek($compteur_f, 0);
fputs($compteur_f, $compte);
print "not isset SESSION"
}
print $_SESSION['compteur_de_visite'];
fclose($compteur_f);
?>