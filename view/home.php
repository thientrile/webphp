<div id="top-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#top-carousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#top-carousel" data-bs-slide-to="1"></button>
    </div>
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div>
                <img src="./assets/img/heading/slides/dgwork-digital-slider-1.jpg" alt="" class="d-block" />
                <img src="./assets/img/heading/slides/header_pen.png" alt="" />
            </div>
            <div class="carousel-caption">
                <div class="title">
                    <div class="text" style="--i: 0">D</div>
                    <div class="text" style="--i: 0.1s">I</div>
                    <div class="text" style="--i: 0.2s">G</div>
                    <div class="text" style="--i: 0.3s">I</div>
                    <div class="text" style="--i: 0.4s">T</div>
                    <div class="text" style="--i: 0.5s">A</div>
                    <div class="text" style="--i: 0.6s">L</div>
                    <div class="text" style="--i: 0.7s"></div>
                    <div class="text" style="--i: 0.8s"></div>
                    <div class="text" style="--i: 0.9s">S</div>
                    <div class="text" style="--i: 1s">H</div>
                    <div class="text" style="--i: 1.1s">O</div>
                    <div class="text" style="--i: 1.2s">P</div>
                </div>

                <p class="note animate animate__backInUp">
                    Sell Your Digital Creative Products By DGWork
                </p>
                <button type="button" class="btn btn-info animate animate__bounceInUp">
                    Browser Products
                </button>
            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="./assets/img/heading/slides/dgwork-digital-slider.jpg" alt="" class="d-block" />
                <img src="./assets/img/heading/slides/header_pen.png" alt="" />
            </div>
            <div class="carousel-caption">
                <div class="title">
                    <div class="text" style="--i: 0s">B</div>
                    <div class="text" style="--i: 0.1s">U</div>
                    <div class="text" style="--i: 0.2s">S</div>
                    <div class="text" style="--i: 0.3s">I</div>
                    <div class="text" style="--i: 0.4s">N</div>
                    <div class="text" style="--i: 0.5s">E</div>
                    <div class="text" style="--i: 0.6s">S</div>
                    <div class="text" style="--i: 0.7s">S</div>
                </div>
                <p class="note animate animate__backInUp">
                    Start your business based on subscription payment
                </p>
                <button type="button" class="btn btn-info animate animate__bounceInUp">
                    Browser Products
                </button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#top-carousel" data-bs-slide="prev"></button>
    <button class="carousel-control-next" type="button" data-bs-target="#top-carousel" data-bs-slide="next"></button>
</div>
<div class="follow-point pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <span class="point animate__fadeIn" data-duration="2000" data-val="5000">0</span>
                <p class="point-note">Happy Users</p>
            </div>
            <div class="col-md-3 text-center">
                <span class="point animate__fadeIn" data-duration="1" data-val="40">0</span>
                <p class="point-note">Products</p>
            </div>
            <div class="col-md-3 text-center">
                <span class="point animate__fadeIn" data-duration="2000" data-val="9500">0</span>
                <p class="point-note">Subscribers</p>
            </div>
            <div class="col-md-3 text-center">
                <span class="point animate__fadeIn" data-duration="1" data-val="678">0</span>
                <p class="point-note">Tutorials</p>
            </div>
        </div>
    </div>
</div>
<div class="creative mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <h2 class="heading-title reveal animate__fadeInUpBig">CREATIVE PRODUCTS</h2>
        <h3 class="heading-sub reveal animate__fadeInUpBig">Create Amazing Digital Works</h3>
        <nav class="nav-filters">
            <ul>
                <li><a href="index.php?action=shop&cate=1">audio</a></li>
                <li><a href="index.php?action=shop&cate=2">graphics</a></li>
                <li><a href="index.php?action=shop&cate=3">themes</a></li>
                <li><a href="index.php?action=shop&cate=4">video</a></li>
            </ul>
        </nav>
        <div class="row">
            <?php
            $select = "select * from product  limit 6";
            $new = $cc->getlist($select);
            while ($set = $new->fetch()) {

            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="creative-img-cover">
                            <img class="card-img-top" src="assets/img/body/creative/<?php echo $set['img'] ?>" alt="Card image" style="width: 100%" />
                            <div class="creative-icon">
                                <span class="plus" style="--bg: #fff; --color: #34b7ae">
                                    <a href="index.php?action=shop&act=detail&id=<?php echo $set['id']; ?>">


                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </span>
                                <span class="cart" style="--bg: #34b7ae; --color: #fff"><a href="index.php?action=cart"><i class="fa-solid fa-cart-shopping"></i></a>
                                </span>
                            </div>
                        </div>

                        <div class="card-body">
                            <a href="index.php?action=shop&cate=<?php echo $set['category_id']; ?>" class="heading-note"><?php

                                                                                                                            $cate = $cc->getonce("select * from category where id=" . $set['category_id']);
                                                                                                                            echo $cate['name'];


                                                                                                                            ?></a>
                            <br>
                            <a href="index.php?action=shop&act=detail&id=<?php echo $set['id']; ?>" class="card-title h5 text-dark" style="text-decoration: none;"><?php echo $set['title'] ?></a>
                            <p class="card-text card-price">
                                <span><?php
                                        if ($set['discount'] > 0) {

                                            echo currency_format($set['discount']);
                                            echo '         <span style="text-decoration:line-through">' . currency_format($set['price']) . '</span>';
                                        } else {
                                            echo currency_format($set['price']);
                                        }
                                        ?>



                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="products mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 p-5 reveal">
                <h2>We Delivery You</h2>
                <div class="heading-title">AMAZING PRODUCTS</div>
                <p class="mt-3">
                    Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu.
                    Aenean tortor enim, cursus eget euismod vel, euismod in eros.
                </p>
                <button class="btn mt-5">All Products</button>
            </div>
            <div class="col-lg-6 col-md-6">
                <img class="products-img" src="./assets/img/body/products/dgworks-browers.png" alt="" />
            </div>
        </div>
    </div>
</div>
<div class="choose mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <h2 class="heading-title reveal animate__fadeInUp text-white">WHY CHOOSE US</h2>
        <h3 class="heading-sub reveal animate__fadeInUp text-white fst-italic">
            We keep to create value for you
        </h3>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4">
                <div class="card text-center">
                    <div class="card-img-top"><i aria-hidden="true" class="fas fa-desktop"></i></div>
                    <div class="card-body text-white">
                        <h4 class="card-title">Unique Design</h4>
                        <p class="card-text">
                            Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor
                            enim, cursus eget euismod vel, euismod in eros.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card text-center">
                    <div class="card-img-top"><i aria-hidden="true" class="fas fa-code"></i></div>
                    <div class="card-body text-white">
                        <h4 class="card-title">Solid Framework</h4>
                        <p class="card-text">
                            Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor
                            enim, cursus eget euismod vel, euismod in eros.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card text-center">
                    <div class="card-img-top"><i aria-hidden="true" class="far fa-comments"></i></div>
                    <div class="card-body text-white">
                        <h4 class="card-title">Community</h4>
                        <p class="card-text">
                            Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor
                            enim, cursus eget euismod vel, euismod in eros.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="one-stop mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5">
                <h2>One-stop Solution</h2>
                <h1 chalss="writting">
                    <a href="" class="typewrite" data-period="2000" data-type='["Sell The Digital Products", "Show Your Portfolios", "Write Blog"]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
                <p>
                    Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu.
                    Aenean tortor enim, cursus eget euismod vel, euismod in eros.
                </p>
            </div>
            <div class="col-lg-6 col-md-6" style="position: relative; height: 200px">
                <img src="./assets/img/body/one-stop/dgwork-mac-themevan.png" alt="" />
            </div>
        </div>
    </div>
</div>
<div class="author mt-5 mb-5 pt-5 pb-5">
    <div id="carousel-author" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-author" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carousel-author" data-bs-slide-to="1"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <p class="h4">A famous programmer in the field of website programming</p>
                    <div class="img-border">
                        <img src="./assets/img/body/author/270141640_1573461353052253_9203673224239524808_n.jpg" alt="Thientrile" class="d-block" style="width: 100%" />
                    </div>
                    <h3>Thientrile</h3>
                    <span class="text-muted h6">Coder</span>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p class="h4">World famous website designer</p>
                    <div class="img-border">
                        <img src="./assets/img/body/author/267982759_1566779733720415_7473001930688737894_n.jpg" alt="MR-J" class="d-block" style="width: 100%" />
                    </div>
                    <h3>MR-J</h3>
                    <span class="text-muted">Designer</span>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-author" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-author" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
<div class="follow-us mt-5 pt-5 pb-5">
    <h2 class="heading-title reveal animate__fadeInUp text-white pt-5">READY TO JOIN OUR COMMUNITY?</h2>
    <h3 class="heading-sub reveal animate__fadeInUp">More than 5000 users are in our community</h3>
    <button class="btn mt-5">Join Folow</button>
</div>