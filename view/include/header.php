<div id="header">
	<nav id="nav-menu" class="navbar navbar-expand-sm navbar-dark fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php?action=home"><img src="./assets/img/heading/logo/dgw-logo-grey.png" alt="" /></a>

			<div class="offcanvas offcanvas-end text-bg-white" id="right">
				<div class="offcanvas-header">
					<div class="offcanvas-title">
						<div class="row">
							<div class="col-6">
								<div class="img-border">
									<img src="./assets/img/heading/user/none.png" alt="" />
								</div>
							</div>
							<div class="col-6">
								<h3>Login</h3>
								<a href="#"><i class="fa-solid fa-cart-shopping me-2"></i>Card</a>
							</div>
						</div>
					</div>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
				</div>
				<div class="offcanvas-body">
					<div class="collapse navbar-collapse show" id="mynavbar">
						<ul class="navbar-nav me-auto">
							<li class="nav-item ">
								<a class="nav-link <?php if ($ctrl == "home") {
														echo "active";
													} ?>" href="index.php?action=home">
									HOME
								</a>


							</li>
							<li class="nav-item ">
								<a class="nav-link <?php if ($ctrl == "shop") {
														echo "active";
													} ?>" href="index.php?action=shop">
									SHOP
								</a>

							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">Pricing</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)"> ABOUT </a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="javascript:void(0)">
									Blog
								</a>

							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">Contact</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="d-flex">
				<a href="index.php?action=login" id="user-login" class="heading-icon me-4"><i class="fa-solid fa-user"></i></a>
				<a href="index.php?action=cart" class="heading-icon me-4"><i class="fa-solid fa-cart-shopping"></i>
					<span><?php echo $cart; ?></span>
				</a>
				<button style="background: transparent; border: none" class="heading-icon me-4">
					<i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#Modal-search"></i>
				</button>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#right">
					<i class="fa-solid fa-bars"></i>
				</button>
			</div>
		</div>
	</nav>
</div>