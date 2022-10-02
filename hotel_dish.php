<?php

include 'includes/connection.php';
session_start();

?>


<?php include 'all file/header.php' ?>

<div class="container">

    <div class="col-lg-6 mx-auto">
        <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">Eid / Diwali Menu</h3>

        <?php

        if (isset($_POST['menu'])) {

            $menu_id = $_POST['menu_id'];
            $hotel_name = $_POST['hotel_name'];
            $dish_name = $_POST['dish_name'];
            $dish_price = $_POST['dish_price'];
            $dish_category = $_POST['dish_category'];

            $insert_query = "INSERT INTO `hotel_dish` (menu_id, hotel_name, dish_name, dish_price, dish_category) VALUES ('$menu_id', '$hotel_name', '$dish_name', '$dish_price', '$dish_category') ";
            $query = mysqli_query($con, $insert_query);

            if ($query) {
        ?>
                <div class="alert alert-success text-center" role="alert">
                    Item is Successfully Inserted !...
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger text-center" role="alert">
                    Item is Not Inserted !...
                </div>
        <?php
            }
        }

        ?>

        <form method="POST">
            <div class="mt-3">

                <label class="form-label">Menu Name</label>
                <select class="form-control rounded-0" name="menu_id">

                    <?php
                    $select_query = mysqli_query($con, "SELECT * FROM `hotel_menu` ");

                    if (mysqli_num_rows($select_query) > 0) {
                        foreach ($select_query as $row) {
                    ?>
                            <option value="<?= $row['menu_id']; ?>" name="menu_id"><?= $row['menu_name']; ?></option>
                        <?php
                        }
                    } else {
                        ?>
                        <option value="">No Record Found</option>
                    <?php
                    }

                    ?>
                </select>
            </div>

            <div class="mt-3">

                <label class="form-label">Hotel Name</label>
                <select class="form-control rounded-0" name="hotel_name">

                    <?php
                    $select_query = mysqli_query($con, "SELECT * FROM `published_hotel` ");

                    if (mysqli_num_rows($select_query) > 0) {
                        foreach ($select_query as $row) {
                    ?>
                            <option value="<?= $row['hotel_name']; ?>" name="hotel_name"><?= $row['hotel_name']; ?></option>
                        <?php
                        }
                    } else {
                        ?>
                        <option value="">No Record Found</option>
                    <?php
                    }

                    ?>
                </select>
            </div>

            <div class="mt-3">
                <label class="form-label">Dish Name</label>
                <input type="text" name="dish_name" class="form-control rounded-0" required>
            </div>

            <div class="mt-3">
                <label class="form-label">Dish Price</label>
                <input type="number" name="dish_price" class="form-control rounded-0" required>
            </div>

            <div class="mt-3">
                <label for="inputState" class="form-label">Dish Category</label>
                <select id="inputState" name="dish_category" class="form-select form-control rounded-0" required>
                    <option disabled selected>Select Dish Category</option>
                    <option>Veg</option>
                    <option>Non-Vage</option>
                </select>
            </div>

            <div class="mx-auto w-50 mt-3 mb-3">
                <button class="btn btn-info rounded-0 w-100" type="submit" name="menu">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php include 'all file/footer.php' ?>