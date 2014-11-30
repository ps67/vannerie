<?php
/* ============== HEAD PAGE SECTION ============== */
include("headpage.php");
headpage("tarifs")
?>

</head>
<body>

<table width="100%" style="height: 100%;" cellpadding="10" cellspacing="0" border="0">

<!-- ============ HEADER SECTION ============== -->
<?php include("header.php"); ?>

<!-- ============ LEFT SIDE SECTION ============== -->
  <?php include("sidebar.php"); ?>

  <!-- ============ MIDDLE COLUMN (CONTENT) ============== -->
<td id="main">
<!-- ============ DEBUT SECTION ============== -->

<center><h1>&nbsp; Tarifs &nbsp;</h1></center>
<br>
<p/>
<table align=center style="font-size:16pt;">
<tr style="height:70px">
<td align=right >Tarifs Séjours Jeunes:
</td>
<td align=left>
<a href="docs/tarif-sejours.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
<label>~~~~~~~~~~</label>
<a href="docs/inscription.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
</td>
<td align=left>
&lt;- le coupon d'inscription<br>(à nous retourner, merci !)
</td>
</tr>
<tr style="height:70px">
<td align=right>Tarifs Mini Camps:
</td>
<td align=left>
<a href="docs/tarif-camps.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
<label>~~~~~~~~~~</label>
<a href="docs/carte-loisirs.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
</td>
<td align=left>
&lt;- Carte de loisirs</td>
</tr>
<tr style="height:70px">
<td align=right>Tarifs Journée Groupe :
</td>
<td align=left>
<a href="docs/tarif-groupe.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
<label>~~~~~~~~~~</label>
<a href="docs/tarif-locations.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
</td>
<td align=left>
&lt;- Tarifs Locations</td>
</tr>
<tr style="height:70px">
<td colspan=3 align=center>
<span style="color:blue">Pour les autres activités, merci de nous contacter
<BR>(anniversaires, mini séjours, journée détente, ...)
</span>
</td>
</tr>
</table>
<p/>
<center><h1>&nbsp;Informations&nbsp;</h1></center>
<br>
<p/>
<table align=center style="font-size:16pt;">
<tr style="height:70px">
<td align=right > info Activités :
</td>
<td align=left>
<a href="docs/info-activites.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
<label>~~~~~~~~~~</label>
<a href="docs/info-sejours.pdf" target="_self"><img src="images/doc.gif" style="vertical-align:middle"></a>
</td>
<td align=left>
&lt;- info Séjours Jeunes
</td>
</tr>

</table>
<p/>
<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
<td id="rightbar">&nbsp;</td>
  
<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  