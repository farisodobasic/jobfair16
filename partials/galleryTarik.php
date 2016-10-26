<!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



    <div class="header-galerija">
      <div class = "shadow"></div>
        <div class="text">Galerija</div>
    </div>


      <?php
    $godine = array();
    $path = "./img/galerija";
    $dir = new DirectoryIterator($path);
    $counter = 0;
    foreach ($dir as $fileinfo) {
        if ($fileinfo->isDir() && !$fileinfo->isDot()) {
            $fileName = $fileinfo->getFilename();
            if($fileName != "img"){
              $godine[$counter] = $fileinfo->getFilename();
              $counter++;
            }

        }
    }
    ?>
    <div id="album-container">
        <?php for($i = 0; $i < $counter; $i++) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 col-centered">
                <div class="album-preview center-block"   >

                    <div class="ih-item square effect6 from_top_and_bottom center-block">

                        <?php  echo " <a href= album.php?godina=$godine[$i] > "; ?>

                            <div class="img">

                              <?php
                                //if(count(glob('img/galerija/'.$godine[$i] . '/'. "*.{JPG,jpg,png,PNG}", GLOB_BRACE)) > 0) {
                                $fi = new FilesystemIterator('img/galerija/'.$godine[$i].'/', FilesystemIterator::SKIP_DOTS);
                                $pictureCount = iterator_count($fi);
                                if($pictureCount > 0){ ?>

                                  <img src= "./img/galerija/<?php echo "$godine[$i]"?>/cover.jpg" />
                                <!-- Dakle u folder albuma se stavlja slika koja ce predstavljati album na galerije.php
                                      naziv slike je logicno "cover.jpg" -->
                                <?php } else if($pictureCount == 0) { ?>
                                      <img src="./img/galerija/albumempty1.png" />
                                <?php } ?>

                            </div>
                            <div class="info">
                                <h3> JobFAIR '<?php echo substr($godine[$i], 2); ?>  </h3>
                            </div>


                      </a>
                    </div>
                  </div>
            </div>
        <?php } ?>
      </div>

      <script>
      function albumEmpty(){
        alert('Album je trenutno prazan.');
      }

<!--
    <div class="gallery-all" >
         <?php
            $dirname = "../img/gallery";
            $files = scandir($dirname);
            $out = array_shift($files);
            $out = array_shift($files);
            $imenagalerija= array($files[0] => "Day 1",$files[1] => "neki tekst",$files[2] => "neki malo duzi tekst",$files[3] => "nei malo duziiiii tekstinjovic maliii ali duzi tekst",$files[4] => "zzZZzzzz pcelica",$files[5] => "zomg");

        ?>
       <?php $i = 0; foreach($files as $directoryname):?>
        <div class="gallery-part">
            <div onclick="opengallery(<?php echo $i; ?>)" onmouseover="galleryhover(<?php echo $i;?>)"  onmouseout="gallerynohover(<?php echo $i;?>)" id="gallery-pic" class="<?php echo 'gallery-pic'.$i; ?>">
                <div  class="<?php echo 'overlay'.$i; ?>">
                   <div class="gallery-text"><?php echo $imenagalerija[$directoryname]; ?></div>
                   <div class="gallery-text-line"></div>
                </div>
                <a href="javascript:;">
                <img src="<?php echo 'img/gallery/'.$files[$i]."/tab.JPG"; ?>" class="<?php echo "gallery".$i;?>"  alt="">
                </a>
                <div>&nbsp;&nbsp;&nbsp;</div>
            </div>
        </div>
        <div style="height:180px; width:20px; float:left;" >
            &nbsp;&nbsp;
        </div>
    <?php $i = $i+1; endforeach;?>

  </div> -->
