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
<p/>

<div align=center style="font-size:14pt">
<?php
global $MAIL_SENT;

if ($MAIL_SENT)
  echo "Votre demande a bien été envoyée, merci !";
else
  echo "Votre demande n'a pas pu être envoyée.<br>Veuillez réessayer plus tard, merci !";
?>
<p />
<input name="Submit" id="submit" type="button" onclick="self.location.replace(\'contact.php\')" value="OK" />
</div>


</div>

<!-- ============ FIN SECTION ============== -->
</td>
<!-- ============ RIGHT COLUMN (MENU) ============== -->
<td id="rightbar">&nbsp;</td>
  
<!-- ============ FOOTER SECTION ============== -->
  <?php include("footer.php"); ?>
  