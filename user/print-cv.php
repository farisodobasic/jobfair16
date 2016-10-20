<?php
  require_once('../brains/global.php');
	require_once('../brains/global_student.php');
  require_once('brains/cv_data_render.php');
	//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CV | JobFAIR.ba</title>
		<meta name="description" content="JobFAIR.ba - Ostavite svoj životopis u našu bazu!">
		<meta name="viewport" content="width=device-width, initial-scale=1">

				<meta property="og:type" content="website">
				<meta property="og:title" content="CV | JobFAIR.ba" />
				<meta property="og:description" content="JobFAIR.ba - Ostavite svoj životopis u našu bazu" />
				<meta property="og:image" content="http://www.jobfair.ba/media/naslovna/jfmedia.v_35.jpg" />
				<meta property="og:url" content="<?=$url_home;?>user" />
				<link rel="shortcut icon" href="<?=$url_home;?>favicon.ico?v=3">
       
    <?php require_once('inc/html_head.php'); ?>
  </head>
  
    <!--
    <pre>
    <?php
     // var_dump($cv);
    ?>
</pre>
-->


<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->


<body>
   <link type="text/css" rel="stylesheet" href="../css/red.css" />
<link type="text/css" rel="stylesheet" href="../css/print.css" media="print"/>

<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">

        <div class="entry">
          
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name"><?php echo $cv->get_ime(); ?><br /><br />
              </h1>
               <h1 class="surname"><?php echo $cv->get_prezime(); ?><br /><br />
              </h1>
            <ul>
              <li class="ad"><?php echo $cv->get_adresa() . ' - ' . $cv->get_grad()['naziv']; ?></li>
              <li class="mail"><?php echo $cv->get_mail(); ?></li>
              <li class="tel"><?php echo $cv->get_telefon(); ?></li>
            </br>
              <li><b>Datum rođenja:</b> <?php echo $cv->get_datum_rodj(); ?></li>
              <li><b>Spol:</b>
               <?php 
              if($cv->get_spol() == 1)
                echo 'Muški';
              else
                echo 'Ženski';
                ?>
              </li>
              <?php
              $ft = $cv->get_fulltime();
              $pt = $cv->get_parttime();
              $pr = $cv->get_praksa();

              $ima = true;
              if($ft==0 && $pt==0 && $pr==0) $ima = false;

              if($ima)
              {
                echo  '<li><b>Radno vrijeme: </b>';
                if($ft == 1) echo "Full time";
                if($pt == 1 && $ft == 1) echo "/Part time";
                else if ($pt == 1) echo "Part time";

                if($pr == 1 && $ft == 1 || $pr==1 && $pt==1) echo "/Praksa";
                else if($pr == 1) echo "Praksa";
                 echo '</li>';
              }

              ?>
             
            </ul>
          </div>
          <!-- End Personal Information -->
          
        </div>
        
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>EDUKACIJA</h2>

          <!-- fakulteti -->
          <?php
            foreach ($cv->get_fakultet() as $fakultet)
            {
                echo ' <div class="content">' .
            '<h3>' . $fakultet['pocetak'] . ' - ';
            if($fakultet['godina_studija'] == 8) echo $fakultet['kraj'];
            else echo 'Danas'; 
            echo '</h3>' .
            '<p>' . $fakultet['faks'] . '<br />' .
              '<em>' . $fakultet['smjer'] . ' - ';
              if($fakultet['godina_studija'] == 8)
                  echo "Diplomac";
              else
                  echo "Student";

              echo '</em>';
              if($fakultet['prosjek'] != 0)
                echo '<em>Prosjek: ' . $fakultet['prosjek'] . '</em>';
          echo '</p></div>';


            }

            // srednja skola

            echo '<div class="content">' .
            '<h3>Godina završetka: ' . $cv->get_srednja_skola()[0]['zavrsetak'] . '</h3>'.
            '<p>' . $cv->get_srednja_skola()[0]['naziv_srednje'] . ' - ' .
            $cv->get_srednja_skola()[0]['grad_srednje'] .  '<br />' .
              '<em>Smjer: ' . $cv->get_srednja_skola()[0]['smjer'] . '</em></p>';
          
          echo '</div>';


          ?>
         
          
        </div>
        <!-- End 2nd Row -->



        <div class="entry">
          <h2>JEZICI</h2>
          <div class="content">
            <h3>Maternji jezik</h3>
            <?php
                echo '<p>' . $cv->get_maternji()['naziv'] . '</p><br />';
            ?>  
          </div>

          <?php
            // strani jezici

            foreach ($cv->get_jezici() as $jezik) {
              echo '<div class="content">'.
              '<h3>Strani jezik</h3>' . 
              '<p>' . $jezik['naziv'] . '<br />' .
              '<em>Razumijevanje: ' . $jezik['razumijevanje'] . '</em>' .
              '<em>Govor: ' . $jezik['govor'] . '</em>' .
              '<em>Pisanje: ' . $jezik['pisanje'] . '</em></p></div>';

            }

          ?>
          
  
        </div>


        <!-- Begin 3rd Row -->
        <?php
        if(count($cv->get_radno_iskustvo()) > 0)
            echo '<div class="entry"><h2>RADNO ISKUSTVO</h2></br></br>';
          

          foreach ($cv->get_radno_iskustvo() as $r) {
              echo '<div class="content"><h3>' .
              $r['pocetak'] . ' - ';
              if($r['aktivno'] == 1) echo 'Danas';
              else echo $r['kraj'];
              echo '</h3>';
              echo '<p>'. $r['poslodavac'] . '<br />' .
              '<em>' . $r['pozicija'] . ' - ' . $r['vrsta_posla'] . 
              '</em></p>';
              echo '<br>';
              echo '<ul class="info"><li>'. $r['aktivnosti'] . '</li></ul></div>';
          }

          if(count($cv->get_radno_iskustvo()) > 0)
            echo '</div>';

          ?>
          
        
        <!-- End 3rd Row -->

        

        <!-- Begin 4th Row -->
        <?php
        $v = $cv->get_vozacka();

        if(count($cv->get_kategorije()) > 0 || $v != 0)
          echo ' <div class="entry"><h2>VJEŠTINE</h2>';
       
          
          foreach ($cv->get_kategorije() as $kat) {
            echo '<div class="content">' .
            '<h3>' . $kat['naziv'] . '</h3>' .
            '<ul class="skills">';

            foreach ($cv->get_vjestine()[$kat['id']]['naziv'] as $vjestina) {
              echo '<li>' . $vjestina .'</li>';
              
            }


          echo '<li><a class="north" href="javascript:window.print()" title="Print"><img src="../img/test-cv/icn-print.jpg" alt="" /></a></li>';

            echo '</ul></div>';

          }

          if($v != 0)
          {
            echo '<div class="content"><ul class="info"><li>Vozačka dozvola: ' .
            '<b>';
            if($v == 1) echo 'A';
            else if($v == 2) echo 'B';
            else if($v == 3) echo 'C';
            else echo 'D';

            echo '</b></li></ul></div>';

          }

          if(count($cv->get_kategorije()) > 0 || $v != 0)
              echo '</div>';

        ?>

        


        <?php

        if(count($cv->get_additional_edu()) > 0)
          echo '<div class="entry"><h2>DODATNA EDUKACIJA</h2></br></br>';

        foreach ($cv->get_additional_edu() as $a) {
          echo '<div class="content">' .
          '<h3>' .
          $a['pocetak'] . ' - ';
              if($a['aktivno'] == 1) echo 'Danas';
              else echo $a['kraj'];
          echo '</h3>' .
          '<p>' . $a['vrsta'] . '<br /></p>' .
          ' <ul class="info">' .
          '<li>' . $a['opis'] . '</li></ul></div>';

          if(count($cv->get_additional_edu()) > 0)
              echo '</div>';


        }
          

        ?>
        <!-- End 4th Row -->
         
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->


  </body>
  <?php
  	require_once('inc/html_foot.php');
  ?>
 </html>
