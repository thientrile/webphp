<div id="Graphics" class="carousel slide" data-bs-ride="carousel">

  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/body/creative/<?php echo $new['img'] ?>"  class="d-block w-100">
    </div>
    <?php
    while ($set = $gallery->fetch()) {
    ?>
     <div class="carousel-item">
      <img src="assets/gallery/<?php echo $set['thumnali']; ?>"  class="d-block w-100">
    </div>
        
    <?php
    }
    ?>
   
    
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#Graphics" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#Graphics" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>