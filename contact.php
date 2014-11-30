<?php
/* ============== HEAD PAGE SECTION ============== */
include("headpage.php");
headpage("contact")
?>
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

<div style="margin-left:0.5cm;">
<form action="mailok.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate();" >
	<input type="hidden" name="page_instance_id" value="<?php echo $_SESSION['page_instance_id']; ?>" />
	<div align=center style="font-size:14pt"><u>Formulaire demande d'information</u></div>
	<P/>
<div class="form" >
<div class="error" id="err_name" >le nom doit avoir au <br>moins 3 caract&egrave;res</div>
	Nom *<br />
     <input class="textbox" id="name" name="name" type="text" value="" onclick="raz(this)" />
</div>	 
<p />
<div class="form" >
<div class="error" id="err_mail" >l'adresse doit &ecirc;tre du type :<br> monadresse@domain.fr</div>
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
  