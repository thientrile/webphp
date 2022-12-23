<div class="img-top" style="background: url('./assets/img/pro/seamless-gold-rhombus-grid-pattern-black-background_53876-97589.jpg')">
	<div class="container">
		<h1 class="ps-5 heading-title animate__animated animate__fadeInUp text-white text-center"><?php echo $new['title'] ?></h1>
		<p class="heading-sub animate__animated animate__fadeInUp text-start ps-5 text-center" style="font-size: 1em;"><?php echo $new['sDescription'] ?></p>
	</div>
</div>
<div class="creative ">
	<div class="container translate-top shadow-lg" style="background: white;">
		<div class="row p-3">
			<div class="col-md-8">
				<?php
				include "view/detail/" . $new['category_id'] . ".php";

				?>
			</div>
			<div class="col-md-4">
				<div class="card mt-4 border border-3" style="width:100%;">
					<div class="card-header text-center">Item Details</div>
					<div class="card-body d-flex justify-content-center align-items-center flex-column">
						<h3 class="">
							<?php
							if ($new['discount'] > 0) {

								echo currency_format($new['discount']);
								echo '<span style="text-decoration:line-through">' . currency_format($new['price']) . '</span>';
							} else {
								if ($new['price'] == 0) {
									echo "Free";
								} else {

									echo currency_format($new['price']);
								}
							}
							?>
						</h3>
						<form action="index.php?action=shop&act=detail&id=<?php echo $new['id']; ?>" method="post">
							<input type="hidden" name="id" value="<?php echo $new['id']; ?>">
						
							
							<?php

							if ($new['discount'] > 0) {

								echo '<button type="submit" name="buy" class="btn btn-success p-3">Buy</button><button type="submit" name="addcart" class="btn btn-outline-warning p-3 ms-2">Add To Cart</button>';
							} else {
								if ($new['price'] == 0) {
									echo '<a href="assets/src/' . $new['source'] . '" class="btn btn-success p-3">Dowload</a>';
								} else {

									echo '<button type="submit" name="buy" class="btn btn-success p-3">Buy</button><button type="submit" name="addcart" class="btn btn-outline-warning p-3 ms-2">Add To Cart</button>';
								}
							}
							?>
						</form>
					</div>
				</div>
				<div class="card mt-4 border border-3" style="width:100%;">
					<div class="card-header text-center">DETAILS</div>
					<div class="card-body d-flex justify-content-start align-items-center flex-column">
						<ul class="list-group" style="width:100%">
							<li class="list-group-item">Category:<a href="index.php?action=shop&cate=<?php echo $set['category_id']; ?>" style="font-size:1em;text-decoration: none;" class="text-success">
									<?php $cate = $cc->getonce("select * from category where id=" . $new['category_id']);
									echo $cate['name']; ?>
								</a></li>
							<li class="list-group-item">Released Date:<?php echo $new['created_at'] ?></li>
							<li class="list-group-item">Last Updated:<?php echo $new['updated_at'] ?></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8 mt-5">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#description">Description</a>
					</li>

				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane container active" id="description">

						<?php
						echo $new['description'];

						?>
					</div>

				</div>
			</div>





		</div>
	</div>

</div>