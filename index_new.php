<?php
/* ============== HEAD PAGE SECTION ============== */
include ("compteur.php");
include("headpage.php");
headpage("index");
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

<h1>&nbsp;Bienvenue sur le site de La Vannerie&nbsp;</h1>
<br><br>
<!-- ============ texte marqué ============== -->
<?php include ("text_deroul.php") ?>
<!-- ============ texte marqué ============== -->
<BR>
<div align=left style="padding:10px;font-size:14pt">
Le Centre de la Vannerie situé à 10 minutes de Nancy et de Toul, dans un cadre idyllique, entouré de forêts et d'eau propose pendant les vacances de printemps et été des séjours pour les enfants de 3 à 18 ans à la semaine, en demi-pension ou pension complète.
<p/>
En famille, avec des collègues ou entre amis, le centre est aussi heureux de vous accueillir pour des journées et week-ends détente.</div>
<div align=center><span style="font-size:14pt;color:blue;text-decoration:underline">Un très large choix d'activités vous y attendent:</u></span><p/>escalade, kayak, tir à l'arc, tennis, vélo, beach-volley,<br>beach-soccer, mini golf, natation (piscine chauffée)
</div>
<p/>
<div align=center>
<table>
<tr>
	<td><a href="#" class="swap1" ></a></td>
	<td width=50>&nbsp;</td>
	<td><a href="#" class="swap2"></a>
</tr>
</table>
<p/>
<a href="sejours.php"><img src="images/rappel-inscription.gif" style="border:thick groove silver" ></a>
<p/>
<marquee width="100%" height=40 vspace=5 style="display:none">
***** &nbsp;  le 13 avril : journée Portes Ouvertes &nbsp; *****  &nbsp;  Activités gratuites pour tous &nbsp; *****
</marquee>
</div>
<p/>

<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
<td id="rightbar">&nbsp;</td>
  
<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  