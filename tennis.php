<?php
/* ============== HEAD PAGE SECTION ============== */
include("headpage.php");
headpage("tennis");
?>

<body>

<table width="100%" style="height: 100%;" cellpadding="10" cellspacing="0" border="0">

<!-- ============ HEADER SECTION ============== -->
<?php include("header.php"); ?>

<!-- ============ LEFT SIDE SECTION ============== -->
  <?php include("sidebar.php"); ?>

  <!-- ============ MIDDLE COLUMN (CONTENT) ============== -->
<td id="main" align=center>
<!-- ============ DEBUT SECTION ============== -->
<p/>
<h1>&nbsp; Tennis &nbsp;</h1>
<p/>
<p align="center"><img src="images/tennis.gif" width="200" height="45" ></p>
<table style="font-size:18pt">
    <tr>
        <td width="480">
Vous disposez de 6 courts de tennis avec différents revêtements:
<ul>
<li>3 courts en schiste</li>
<li>2 courts en béton poreux.</li>
<li>1 court en pavés autobloquants.</li>
</ul>
       </td>
        <td width="480" align=center>
            <a href="#" class="swap" > <!-- ==== Images SWAP ==== -->
        </td>
    </tr>
    <tr>
        <td width="480">
Il y a différents modes d'accès soit:
<ul>
<li>Par adhésion</li>
<li>Par location horaire<BR>
<b>Avec prêt de raquette</b></li>
</ul>
       </td>
        <td width="480" align=center style="color:blue;vertical-align:middle">
<b>Tous les joueurs adhérents ou non peuvent venir profiter du service de remise en état de leur cordage</b>
       </td>
    </tr>
</table>

<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
  <?php include("rightbar.php"); ?>

<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  