<?php
  /* Connecting to endpoint */
  $items = json_decode(file_get_contents('http://api.jobfair.ba/api/posts'));
?>

<div class="mainWrapper novosti-cont">
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
          <img class="img-novost" src="http://api.jobfair.ba/static/news/t_<?=$item->id;?>.jpg" alt="">
        </div>
        <div style="clear:both;"></div>
        <div class="novost-tekst col-sm-12" style="padding:0;">
          <div class="novost-naslov"><?=$item->naslov;?></div>
          <p>
            <?=$item->opis;?>
          </p>
          <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
        <div class="col-sm-12" style="padding:0;">
          <div class="pull-left"><?php echo date('d.m.Y', strtotime($item->created_at)); ?></div>
          <div class="pull-right"><a href="<?=$url_home;?>novost/<?=$item->id;?>">Opširnije...</a></div>
          <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
      </div>
    <?php } ?>
  </div>

</div>
