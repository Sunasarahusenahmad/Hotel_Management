<?php include 'includes/header.php' ?>

<?php

include 'includes/connection.php';

?>

<style>
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

        $select_query = mysqli_query($con, "SELECT * FROM `hotel_servieces` ");

        while ($data = mysqli_fetch_array($select_query)) {
        ?>


            <div class="col-md-4 mb-5 mt-5">
                <div class="card" style="width: 300px; height:220px;">
                    <div class="card-body" style="box-shadow: 2px 2px 20px 5px lightgray;">
                        <div class="card-img-actions">

                            <h5 class="card-title mt-3 text-center multicolortext" style="font-family: 'Josefin Sans', sans-serif; font-size: 1.7rem;"><?php echo $data['servieces_id']; ?>. Hotel <?php echo $data['hotel_name']; ?> </h5>

                            <p class="card-text text-success" style="font-weight: bold;"> Provided Services :--- <i class="text-info"> <?php echo $data['servieces_name'];
                                                                                                                                        if ($data['status'] == 0) {
                                                                                                                                        ?>
                                        <i class="fa fa-check text-success" style="margin-left: 1rem;"></i>
                                    <?php
                                                                                                                                        }
                                                                                                                                        if ($data['status'] == 1) {
                                    ?>
                                        <i class="fa-sharp fa-solid fa-xmark text-danger" style="margin-left: 1rem;"></i>
                                    <?php
                                                                                                                                        } ?></i> </p>


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