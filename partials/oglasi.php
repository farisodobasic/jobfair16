
<?php
	require_once('../brains/global.php');
	//session_destroy();
?>
<?php 
$oglasi = $db->query("SELECT jf_oglasi.*, jf_kompanije.naziv as naziv_kompanije, jf_kompanije.id as id_kompanije, 
jf_djelatnost.naziv as kat, jf_kompanije.profil as profil_kompanije FROM jf_oglasi; ")
?>
         <div class="long-scroller">
          <div class="section-holder">
            <?php
              render_oglasi($oglasi, "Nema aktivnih oglasa.");
            ?>
          </div>
</div>