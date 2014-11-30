<html>
<body>


<?php
function DoHTMLEntities ($string) {
    $trans_tbl[chr(32)] = '&nbsp;';
    $trans_tbl[chr(224)] = '&agrave;';
    $trans_tbl[chr(232)] = '&egrave;';
    $trans_tbl[chr(233)] = '&eacute;';
    $trans_tbl[chr(234)] = '&ecirc;';
    return strtr ($string, $trans_tbl);
}
$PASS="admin";

$text=$_POST["textarea"];
$pass=$_POST["pass"];

if ($pass != $PASS) header('Location: ' . $_SERVER['HTTP_REFERER']);

/***** get textarea contents *****/
if ($text)
{
 $text = preg_replace ("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n",  $text );
 $text = trim(preg_replace ("/[;,]/", "\n",  $text ));
 $text = trim(preg_replace ("/[;,]/", "\n",  $text ));
 $text = DoHTMLEntities($text);
}

$myfile = fopen("marque.txt", "w") or die("Unable to open file!");
fputs($myfile,$text);
fclose($myfile);

//insert your string variable here

?>

<center>
<p/>
<form action="marque.html" method="post" enctype="multipart/form-data">
Nouveau bandeau bien enregistr&eacute; ! <p/>
<input type="submit" name="submit" value="retour">
</form>
<BR>
(Rafraichir la page d'accueil pour v&eacute;rifier les modifications)
<br>
<a href="../index.php">page accueil</a>


</body>
</html> 