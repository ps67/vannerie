<?php
/* ============== HEAD PAGE SECTION ============== */
include("headpage.php");
headpage("agenda")
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

<h1>&nbsp; Agenda &nbsp;</h1>
<br>

<?php
global $browser;
if ($browser=="msie6") // browser=IExplorer6
  include("calendrier.html");
else
  echo ('

<p><iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=7&amp;bgcolor=%23ffcc00&amp;src=centredelavannerie%40gmail.com&amp;color=%23060D5E&amp;src=fr.french%23holiday%40group.v.calendar.google.com&amp;color=%23853104&amp;ctz=Europe%2FParis" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe></p>

');
?>

<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
<td id="rightbar">&nbsp;</td>
  
<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  