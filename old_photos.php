<?php
/* ============== HEAD PAGE SECTION ============== */
include("headpage.php");
headpage("photos")
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

<h1>&nbsp; La Galerie photos &nbsp;</h1>

<h3>(cliquer sur un album pour lancer le diaporama)</h3>
<P><BR>
<table width=600 style="text-align:center">
<tr>
<td width=200><a href="diapo1.php" title="diapo 1" ><img src="images/play1.png" border="1"/></a></td>
<td width=200><a href="diapo2.php" title="diapo 2" ><img src="images/play2.png" border="1"/></a></td>
<td width=200><a href="diapo3.php" title="diapo 3" ><img src="images/play3.png" border="1"/></a></td>
</tr><tr>
<td>Activités</td>
<td>Anniversaire</td>
<td>Après-midi récréatif</td>
</tr>
</table>

<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
<td id="rightbar">&nbsp;</td>
  
<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  