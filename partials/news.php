<?php
  /* Connecting to endpoint */
  $items = json_decode(file_get_contents('http://www.jobfair.ba/jfapi.php?stream=naslovna&strana=1'));
?>

<div class="mainWrapper">
  <div id="title" class="col-xs-12">
        <div id="parent"  >
            <div id="rectangle" >
                Novosti
            </div>
            <div id="triangle-bottomleft">
            </div>
            <div id = "parallelogram"></div>
        </div>
    </div>

  <div class="row">
    <?php foreach($items as $item){ ?>
      <div class="col-md-4 col-sm-12 novost-item">
        <div class="img-block col-sm-12" style="padding:0;">
          <img class="img-novost" src="<?=$item->naslovna_slika;?>" alt="">
        </div>
        <div class="novost-tekst col-sm-12" style="padding:0;">
          <div class="novost-naslov"><?=$item->naslov;?></div>
          <p>
            <?=$item->opis;?>
          </p>
        </div>
        <div class="col-sm-12" style="padding:0;">
          <div class="pull-left">12.08.1955.</div>
          <div class="pull-right"><a href="<?=$url_home;?>novost/<?=$item->id;?>">Opširnije...</a></div>
        </div>
      </div>
    <?php } ?>
  </div>

</div>
