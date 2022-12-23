<img class="mt-4" src="assets/img/body/creative/<?php echo $new['img'] ?>" style="width:100%">
<audio controls style="width:100%">
	<?php
	while ($set = $gallery->fetch()) {
	?>
		<source src="assets/gallery/<?php echo $set['thumnali']; ?>" type="audio/mpeg">
	<?php
	}
	?>

</audio>