<?php
/* ============== HEAD PAGE SECTION ============== */
include("sendmail.php");
include("headpage.php");
headpage("mailok")
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
<div align=center style="font-size:14pt">
<?php
global $MAIL_SENT;

if ($MAIL_SENT)
  echo "Votre demande a bien été envoyée, merci !";
else
  echo "Votre demande n'a pas pu être envoyée.<br>Veuillez réessayer plus tard, merci !";
?>
<br /><br /> 
<input name="Submit" id="submit" type="button" onclick="self.location.replace(\'contact.php\')" value="OK" />
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
  