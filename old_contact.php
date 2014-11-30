<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php include("get_post_mail.php"); ?>

<html>
<head>
<?php if ($MAIL_SENT)
	echo '<meta http-equiv="refresh" content="2;url=contact.php">';
?>
<title>Nous rejoindre - loisirs-vannerie</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Centre de Loisirs de La Vannerie</title>
<meta name="keywords" content="canoë, canoe, kayak, tennis, piscine, mini golf, minigolf, escalade, terrasse, Meurthe et Moselle, (54), toul, nancy" />
<meta name="description" content="canoë, canoe, kayak, tennis, piscine, mini golf, minigolf, escalade, terrasse, Meurthe et Moselle, (54), toul, nancy" />
<meta name="robots" content="index, follow" />
<meta http-equiv="content-language" content="fr" />
<meta name="Revisit-After" content="2 days" />

<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<script type="text/javascript" src="scripts/form.valid.js"></script>
<style> 

</style>
</head>
<body>

<table width="100%" style="height: 100%;" cellpadding="10" cellspacing="0" border="0">

<!-- ============ HEADER SECTION ============== -->
<?php include("header.php"); ?>

<!-- ============ LEFT SIDE SECTION ============== -->
  <?php include("sidebar.php"); ?>

  <!-- ============ MIDDLE COLUMN (CONTENT) ============== -->
<td id="main" align=center>
<!-- ============ DEBUT SECTION ============== -->

<p/><h1>&nbsp; Contact - Accès &nbsp;</h1>
<p/><br>

<div class="main" >
<table cols=3 width=100%>
<tr>
<td width=35% class="form" >

<?php

if ($MAIL_SENT)
	echo('
<div align=center style="font-size:14pt">Votre demande a bien &eacute;t&eacute; envoy&eacute;e, merci !<br /><br /> 
<input name="Submit" id="submit" type="button" onclick="self.location.replace(\'contact.php\')" value="OK" />
</div>

');

else
	echo ('
<div style="margin-left:0.5cm;">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate();" >
	<input type="hidden" name="page_instance_id" value="') . $_SESSION['page_instance_id'] . ('" />
	<div align=center style="font-size:14pt"><u>Formulaire demande d\'information</u></div>
	<P/>
<div class="form" >
<div class="error" id="err_name" >le nom doit avoir au <br>moins 3 caract&egrave;res</div>
	Nom *<br />
     <input class="textbox" id="name" name="name" type="text" value="" onclick="raz(this)" />
</div>	 
<p />
<div class="form" >
<div class="error" id="err_mail" >l\'adresse doit &ecirc;tre du type :<br> monadresse@domain.fr</div>
     Email *<br /> 
     <input class="textbox" id="email" name="email" type="text" value="" onclick="raz(this)" />
</div>
     <p />  
<div class="form" >
     Message (et tél. pour vous rappeler)<br /> 
     <textarea name="comments" cols="30" rows="5" ></textarea> 
<br />(* champs obligatoires )
</div> 
     <p />  
     <input name="submit" id="submit" type="submit" value="Envoi" onClick="" /> 
</form>
</div>
');

?>

</td>
<td valign=top style="text-align:left;border:1px dotted #404040;border-top:0;border-bottom:0;padding-left:0.5cm">
<p align=center style="font-size:14pt">
<u>Accès au centre</u>
<p  />
Centre de Loisirs<br />
LA VANNERIE
<p/>
SEXEY-aux-FORGES<BR>(sortie Maron)
<p/>
<img src="images/contact2.jpg" />
</td>
<td align=center><a href="http://goo.gl/S51OTl" target="_blank"><img style="border:1px solid #404040" width="348" height="250" src="images/acces_vannerie.jpg" /></a>
<br>
<a href="http://goo.gl/S51OTl" style="color:#404040;text-align:left;" target="_blank"><small>Ouvrir le plan dans Google Maps</small></a>
</td>
</tr>
</table>
<p>
</div>

<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
<td id="rightbar">&nbsp;</td>
  
<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  