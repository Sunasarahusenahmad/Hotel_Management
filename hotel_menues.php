<?php include 'includes/header.php' ?>

<?php

include 'includes/connection.php';

$select_query = mysqli_query($con, "SELECT * FROM `hotel_dish`");

?>

<style>
    .multicolortext {
        background-image: linear-gradient(to left, violet, indigo, green, blue, yellow, red, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .card-title:hover {
        color: red;
    }

    .card:hover {
        z-index: 10;
        box-shadow: 0 8px 50px #F4F4F4;
        transform: scale(1.07);
        border: 1px solid #36B9CC;
    }
</style>

<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="row">
        <?php

        while ($data = mysqli_fetch_array($select_query)) {
        ?>


            <div class="col-md-4 mb-5 mt-5">
                <div class="card" style="width: 300px; height:420px;">
                    <div class="card-body" style="box-shadow: 2px 2px 20px 5px lightgray;">
                        <div class="card-img-actions">

                            <h5 class="card-title mt-3 text-center multicolortext" style="font-family: 'Josefin Sans', sans-serif; font-size: 1.7rem;">Hotel <?php echo $data['hotel_name']; ?> </h5>

                            <img class="card-img img-fluid" style="width: 260px; height: 210px;" src="img/veg-non_veg/vagetable.png">


                            <p class="card-text text-success" style="font-weight: bold;"> Dish Name :--- <i class="text-info"> <?php echo $data['dish_name'] ?></i> </p>


                            <p class="card-text text-success" style="font-weight: bold;"> Dish Price :--- <i class="text-info"> <?php echo $data['dish_price'] ?></i> </p>

                            <p class="card-text text-success" style="font-weight: bold;"> Dish Category :--- <i class="text-info"> <?php echo $data['dish_category'];

                                                                                                                                    if ($data['dish_category'] == 'Veg') {
                                                                                                                                    ?>
                                        <img src="img/veg-non_veg/veg-icon.jpg" width="25" height="25" style="margin-left: 1rem;">
                                    <?php
                                                                                                                                    }
                                                                                                                                    if ($data['dish_category'] == 'Non-Vage') {
                                    ?>
                                        <img src="img/veg-non_veg/non-veg-icon.png" width="25" height="25" style="margin-left: 1rem;">
                                    <?php
                                                                                                                                    }

                                    ?></i> </p>

                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>