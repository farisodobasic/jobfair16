<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <div class="heading-footer">Jobfair.ba sitemap</div>

        <a href="#">Landing page</a>
        <a href="#">Partneri</a>
        <a href="#">Ostavi CV</a>
        <a href="#">Kontakt</a>

      </div>
      <div class="col-md-3 col-sm-12">
        <div class="heading-footer">JobFAIR #socialmedia</div>

        <a href="#">Facebook page</a>
        <a href="#">Twitter</a>
        <a href="#">Linked In</a>
        <a href="#">EESTEC LC Sarajevo Facebook page</a>
        <a href="#">EESTEC LC Sarajevo Linked In</a>
        <a href="#">EESTEC LC Sarajevo Instagram</a>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="heading-footer">Posljednje novosti</div>
        <?php
          /* Connecting to endpoint */
          $items = json_decode(file_get_contents('http://api.jobfair.ba/api/posts'));
        ?>
        <?php foreach($items as $item){ ?>
          <a href="<?=$url_home;?>novost/<?=$item->id;?>"><?=$item->naslov;?></a>
        <?php } ?>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="heading-footer">Kontakt</div>

        <div class="item-footer">Jasmina Bajramović</div>
        <div class="item-footer">jasmina.bajramovic@jobfair.ba</div>
        <div class="item-footer smmm">Koordinatorica tima za odnose sa javnošću</div>
        <div class="item-footer">Danijel Čuturić</div>
        <div class="item-footer">danijel.cuturic@jobfair.ba</div>
        <div class="item-footer smmm">Glavni organizator</div>
      </div>
    </div>
  </div>
</div>
<div class="pod-footer">
  <div class="container">
    <div class="row">
      Copyright (C) EESTEC LC Sarajevo 2016
    </div>
  </div>
</div>
