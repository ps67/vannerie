<?php
// session_start();

// set page instance id: formulaire mail
$_SESSION['page_instance_id'] = uniqid('', true);

$browser = "other";//global $browser;
if(preg_match('/(?i)msie [1-6]/',$_SERVER['HTTP_USER_AGENT']))
  $browser = "msie6";

$current=array('index'=>"",
  'activites'=>"",
  'sejours'=>"",
  'minicamps'=>"",
  'groupes'=>"",
  'seminaires'=>"",
  'locations'=>"",
  'tarifs'=>"",
  'photos'=>"",
  'contact'=>"",
  'agenda'=>""
);

$activites=array("tennis","escalade","vtt","volley","kayak","piscine","minigolf","terrasse");

$titles=array("index"=>"Bienvenue au Centre de Loisirs de La Vannerie",
  "activites"=>"Centre de la Vannerie - Activités",
  "sejours"=>"Centre de la Vannerie - Séjours",
  "minicamps"=>"Centre de la Vannerie - Mini Camps",
  "groupes"=>"Centre de la Vannerie - Journée Groupe",
  "seminaires"=>"Centre de la Vannerie - Séminaires",
  "locations"=>"Centre de la Vannerie - Locations",
  "tarifs"=>"Centre de la Vannerie - Tarifs",
  "photos"=>"Centre de la Vannerie - Galerie Photos",
  "contact"=>"Centre de la Vannerie - Accès, Nous contacter",
  "agenda"=>"Centre de la Vannerie - Agenda",
  "tennis"=>"Centre de la Vannerie - Tennis",
  "escalade"=>"Centre de la Vannerie - Escalade",
  "vtt"=>"Centre de la Vannerie - VTT",
  "volley"=>"Centre de la Vannerie - Beach-Volley,-Soccer",
  "kayak"=>"Centre de la Vannerie - Kayak",
  "piscine"=>"Centre de la Vannerie - Piscine",
  "minigolf"=>"Centre de la Vannerie - Minigolf",
  "terrasse"=>"Centre de la Vannerie - Terrasse",
);

$images=array(
  "tennis"=>"tennis",
  "escalade"=>"escalade",
  "vtt"=>"vtt",
  "volley"=>"volley",
  "kayak"=>"kayak",
  "piscine"=>"piscine",
  "minigolf"=>"minigolf",
  "terrasse"=>"terrasse",
);

function headpage($page)
{
global $browser,$activites,$current,$images,$titles;

$current[$page]="active";
if ( in_array($page,$activites) )
  $current['activites']="active";


if (array_key_exists($page,$titles))
  $title = $titles[$page];
$style = ($browser == "msie6") ? "style-IE6.css" : "style.css";
$relocation = ($page == "mailok") ? "<meta http-equiv=\"refresh\" content=\"2;url=contact.php\" />" : "";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title><?php echo $title ?></title>
<meta name="keywords" content="canoë, canoe, kayak, tennis, piscine, mini golf, minigolf, escalade, terrasse, Meurthe et Moselle, (54), toul, nancy" />
<meta name="description" content="canoë, canoe, kayak, tennis, piscine, mini golf, minigolf, escalade, terrasse, Meurthe et Moselle, (54), toul, nancy" />
<meta name="robots" content="index, follow" />
<meta http-equiv="content-language" content="fr" />
<meta name="Revisit-After" content="2 days" />
<?php

echo $relocation;
echo ('
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
');

if ($browser == "msie6")
echo ('
<style>
/* --------- style pour menu flottant sidebar avec fix IE6 --------- */
#menu {
  position: absolute;
  left: 0;
  bottom: 20px;
  width: ;
  margin-left: 10px;
  border:1px dotted;
}
</style>
');

if ($page=="locations")
echo ('
<style>
table.tarif tr td {
width:80%;
color:#369;
}
td.title {
background: #369;
color: #fff;
}
td.cat {
padding-left:2cm;
text-align:left;
}
tr.cat {
background: #999f8e;
color: rgb(35,35,35);
text-align:center;
}
</style>
');


if (array_key_exists($page,$images))
echo "
<style>
/* --------- style pour swap images --------- */
a.swap {
display: block;
width:400;
height:300;
background-position:0px 0px;
background-image:url(pics/". $images[$page] . "_0.jpg);
}
a.swap:hover {
background-position:0px 0px;
background-image:url(pics/". $images[$page] . "_1.jpg);
}
</style>
";

if ($page=="index")
echo "
<style>
/* --------- style pour swap images --------- */
a.swap1 {
display: block;
width:400;
height:350;
background-position:0px 0px;
background-image:url(pics/team_0.jpg);
}
a.swap1:hover {
background-position:0px 0px;
background-image:url(pics/team_1.jpg);
}
a.swap2 {
display: block;
width:400;
height:350;
background-position:0px 0px;
background-image:url(pics/index_0.jpg);
}
a.swap2:hover {
background-position:0px 0px;
background-image:url(pics/index_1.jpg);
}
marquee {
font-family:trebuchet ms;
font-size:24pt;
font-weight:bold;
vertical-align:middle;
font-style:italic;
color:#FFFF00;
background:#990099;
}
</style>
";

if ($page=="contact")
echo ('
<script type="text/javascript" src="scripts/form.valid.js"></script>
');
}
?>

