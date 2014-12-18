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
<p/>

<div class="main" >
<table cols=2 width=100%>
<tr>
<td width=40% class="form" >

	<p style="text-align:center;font-size:14pt"><u>Demande d'information</u></p>
<div style="text-align:left;margin:0 33px;">
<form action="mailok.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return validate();" >
	<input type="hidden" name="page_instance_id" value="<?php echo $_SESSION['page_instance_id']; ?>" />
	<P/>
<div class="form" >
<div class="error" id="err_name" >le nom doit avoir au <br>moins 3 caractères</div>
	Nom *<br>
     <input class="textbox" id="name" name="name" type="text" value="" onclick="raz(this)" />
</div>	 

<div class="form" >
<div class="error" id="err_mail" >l'adresse doit &ecirc;tre du type<br> monadresse@domain.fr</div>
     E-mail *<br> 
     <input class="textbox" id="email" name="email" type="text" value="" onclick="raz(this)" />
</div>
  
<div class="form" >
     Message (et tél. pour vous rappeler)<br> 
     <textarea name="comments" cols="30" rows="5" ></textarea> 
<br />(* champs obligatoires )
</div> 
  <p style="text-align:center">
    <input name="submit" id="submit" type="submit" value="Envoyer" />
  </p>  
</form>
</div>
</td>
<td valign=top style="text-align:left;border-left:1px dotted #404040;">
<p align=center style="font-size:14pt">
<u>Accès au centre</u>
</p>
<p align=center style="font-size:12pt">
<a href="http://goo.gl/S51OTl" target="_blank"><img style="border:1px solid #404040" width="70%" src="images/acces_vannerie.jpg" /></a>
<br>
<a href="http://goo.gl/S51OTl" style="color:#404040;text-align:left;" target="_blank"><small>Ouvrir le plan dans Google Maps</small></a>
<br>
<br>
Centre de Loisirs
LA VANNERIE
<br>
SEXEY-aux-FORGES<BR>(sortie Maron)
<br>
<br>
<img src="images/contact2.jpg" />
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
  