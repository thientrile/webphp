<video  controls style="width:100%">
    <?php
    while ($set = $gallery->fetch()) {
    ?>
        <source src="assets/gallery/<?php echo $set['thumnali']; ?>" type="video/mp4">
    <?php
    }
    ?>

</video>