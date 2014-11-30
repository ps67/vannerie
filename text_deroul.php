<?php
# affiche un texte déroulant sur la page d'accueil, sous le titre
# Exemple: *** NOUVEAU *** &nbsp;&nbsp;&nbsp; Accueil à la journée pour les 3-5 ans: les Minimoy's
$myfile = "admin/marque.txt";
if (file_exists($myfile) ) {
  $fh = fopen($myfile, "r");
  $text=fgets($fh);
  fclose($fh);
  if ( strlen($text) )
  {
    echo '<marquee bgcolor="#000080" style="font-size: 20" behavior="scroll" >';
    echo $text;
    echo '</marquee>';
  }
}
?>