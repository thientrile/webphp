<div class="img-top" style="background: url('./assets/img/pro/seamless-gold-rhombus-grid-pattern-black-background_53876-97589.jpg')">

    <div class="container">
        <h1 class="ps-5 heading-title animate__animated animate__fadeInUp text-white text-start">Check out</h1>

    </div>
</div>
<div class="creative">
    <div class="container translate-top shadow-lg" style="background: white;">
        <?php
        if (isset($_SESSION['cart'])) {
        ?>
            <div class="row">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($_SESSION['cart'] as $key => $item) {
                            $count++;
                        ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $item['title']; ?></td>
                                <td></td>
                                <td><a href="" class="btn btn-danger">Remove</a></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        <?php } else {


        ?>

        <div class="p-5 bg-white" style="height: 300px; width:100%;text-align:center;line-height:300px"><h3>Empty</h3></div>

        <?php } ?>
    </div>

</div>