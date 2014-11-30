<?php
/* ============== HEAD PAGE SECTION ============== */
include("headpage.php");
headpage("photos")
?>
<style>
table.diapo  {
  width:600;
}
.diapo td {
  width:200;
}
.diapo div{cursor:pointer}
.diapo img {border:1px solid}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>

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

<p>(cliquer sur une vignette pour lancer le diaporama)</p>

<table class="diapo"  style="text-align:center">
<tr>
<td><div title="Activités" onclick="album('5986625981442125969')"><img src="images/play1.png" /></td>
<td><div title="Anniversaire" onclick="album('5986628108757427937')"><img src="images/play2.png" /></td>
<td><div title="Après-midi récréatif" onclick="album('5986630127264579393')"><img src="images/play3.png" /></td>
</tr><tr>
<td>Activités</td>
<td>Anniversaire</td>
<td>Après-midi récréatif</td>
</tr>
</table>

<p><embed id="diaporama" /></p>

<script type="text/javascript">
<!--
function album($albumid) {

  $flashvars = "host=picasaweb.google.com&amp;captions=1&amp;hl=en_US&amp;feat=flashalbum&amp;RGB=0x000000&amp;feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F108660016008972313194%2Falbumid%2F"
  + $albumid
  + "%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCN_u2oPRhoznZA%26hl%3Den_US";

  $( "#diaporama" ).attr( "flashvars", $flashvars );

  var parent = $('embed#diaporama').parent();
  var newElement = '<embed id="diaporama" type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" flashvars="'
  + $flashvars
  + '" pluginspage="http://www.macromedia.com/go/getflashplayer" height="400" width="600" />';

  $('embed#diaporama').remove();
  parent.append(newElement);

}
-->
</script>

<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
<td id="rightbar">&nbsp;</td>
  
<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  