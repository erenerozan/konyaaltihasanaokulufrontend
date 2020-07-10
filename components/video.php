<?php
echo'<section id="video">
<div class="baslik">Videolar</div>
<div class="baslik2">Okulumuzdan görüntüler...</div>
<div class="gallery cf">';?>
  <?php
  $dene2 = new sinif();
  $dene2->setCumle("SELECT * FROM videolar ");
  $dene2 -> listeleClientVideo(); ?>
  
  <?php
'</div>
</section>';
?>