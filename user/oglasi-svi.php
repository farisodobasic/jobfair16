<?php
	require_once('../brains/global.php');
	require_once('../brains/config.php');   
   
	require_once('../brains/global_student.php');
	//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Oglasi</title>
    <?php require_once('inc/html_head.php'); ?>
    
  </head>
  <body>
    <div class="sidebar">
      <?php require_once('partials/sidebar.php'); ?>
    </div>

   	<nav class="header">
      <div class="header-centar">
        <img src="<?=$url_home;?>img/jflogo.jpg"  height="56"/>
      </div>
    </nav>

    <section class="main-holder">
			<div class="left-col">
          <div class="section" style="padding:0;width:350px;border-bottom:0;">

            <div style="clear:both;"></div>
          </div>
					

		        <input type="hidden" class="koliko-value" />
			</div>
			<div class="right-col">
				<div class="section">

        <?php
					/* Postavljanje statusa oglasa na neaktivan */
        	provjeri_oglase();

          /* ID komapnije */
          $kompanija = $_SESSION['id_kompanije'];

          /* Kveri koji vadi sve oglase kompanije */
          $oglasi = $db->query("SELECT * FROM jf_oglasi") or die(mysqli_error($db));

          
          /* Renderuj oglase */
        ?>
        <div class="long-scroller">
          <div class="section-holder">
            <?php
              oglasiUser($oglasi, "Nema aktivnih oglasa.");
            ?>
          </div>
        
        </div>
				</div>
			</div>
    </section>
  </body>
  <?php
  	require_once('inc/html_foot.php');
  ?>
  <script>$(document).ready(function(){ update_pretraga_oglasi(); });</script>
 </html>


