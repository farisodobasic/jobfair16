<!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <?php
      $godina = $_GET['godina'];
      $coolGodina = substr($godina, 2);
    ?>
    <div class="header-galerija">
      <div class = "shadow"></div>
        <div class="text">JobFAIR '<?php echo $coolGodina; ?></div>
    </div>

    <div id="links">
      <?php
      $folder_path = 'img/galerija/'.$godina;

      $num_files = glob($folder_path . "*.{JPG,jpg,png}", GLOB_BRACE);

      $folder = opendir($folder_path);

      if($num_files > 0)
      {
        while(false !== ($file = readdir($folder)))
        {
          $file_path = $folder_path.'/'.$file;
          $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
          if($extension=='jpg' || $extension =='png')
          {
            ?>
              <a href="<?php echo $file_path; ?>" data-gallery>
                <img src="<?php echo $file_path; ?>">
              </a>
              <?php
            }
          }
        } else
        {
          echo "<script> alert('the folder was empty !')</script>";
        }
        closedir($folder);
        ?>
    </div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/galerija/blueimp-gallery.min.js"></script>
<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
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
