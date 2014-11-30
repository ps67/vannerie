<html>
<body>


<?php

define("MAXLINES", 200);
$result=false;

/*** Upload a file ****/
/***********************
if (false)
{
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  
  if (file_exists("./" . $_FILES["file"]["name"]))
    {
    echo $_FILES["file"]["name"] . " already exists. ";
    }
  else
    {
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "./" . $_FILES["file"]["name"]);
    echo "Stored in: ./" . $_FILES["file"]["name"];
    }
  }
}
*************************/

/***** get textarea contents *****/
if ($_POST["textarea"])
{
 // $text = htmlspecialchars_decode ( $_POST["textarea"] );
 $text = preg_replace ("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n",  $_POST["textarea"] );
 $text = trim(preg_replace ("/[;,]/", "\n",  $text ));
 $lines = explode("\n",$text); // format new lines in textarea: \x0D\x0A
//$file_string = nl2br($file_string);
//$file_string = trim ($file_string,"<br />");

 $lines=array_filter($lines, "trim");
 $lines=array_unique($lines,SORT_STRING);

$total_lines=count($lines);

$nblist=ceil($total_lines/MAXLINES);

$zip = new ZipArchive();
$filename = "list.zip";

if ($zip->open($filename, ZipArchive::OVERWRITE)!==TRUE) {
    die("Impossible d'ouvrir le fichier <$filename>\n");
}

for ($i=0;$i<$nblist;$i++)
{
	$slice=array_slice($lines,$i*MAXLINES,MAXLINES);
	$values=implode("\n",$slice);
	$zip->addFromString("list".$i.".txt",$values);
}

//$zip->addFromString("list0.txt" . time(), "#1 Ceci est une chaîne texte, ajoutée comme testfilephp.txt.\n");
//$zip->addFile("list0.txt");
//echo "Nombre de fichiers : " . $zip->numFiles . "\n";
//echo "Statut :" . $zip->status . "\n";
$zip->close();

if ($nblist) $result=true;
}
if ($result)
	echo '
<div  style="position:relative;left:3cm;top:2cm;font-size:large" >
Telecharger le zip des listes :
<a href="list.zip"><img src="zip.gif" width="40" height="40" /></a>
';
else
	echo ('
<div  style="position:relative;left:3cm;top:2cm;font-size:large" >liste vide !
');
?>

<p/>
<form action="form.html" method="post" enctype="multipart/form-data">
Executer une autre liste: <BR>
<input type="submit" name="submit" value="Envoi">
</form>
</div>

</body>
</html> 