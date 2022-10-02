<?php

include 'includes/connection.php';
session_start();

?>


<?php include 'all file/header.php' ?>

<div class="container">

        <div class="col-lg-6 mx-auto">
            <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">Add Menu</h3>

            <?php

            if (isset($_POST['submit'])) {
                $add_menu = $_POST['add_menu'];
                $menu_name = $_POST['menu_name'];

                $query = mysqli_query($con, "SELECT * FROM `hotel_menu` WHERE menu_name = '$menu_name' ");
                if (mysqli_num_rows($query) > 0) {

            ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?php print " <span style='font-weight: bold; font-size: 1.3rem;'> $menu_name  </span> Category is Already Exist, Please Another Try !... " ?>
                    </div>
                    <?php

                } else {
                    $insert_query = "INSERT INTO `hotel_menu` (add_menu, menu_name) VALUES ('$add_menu', '$menu_name') ";
                    $result = mysqli_query($con, $insert_query);

                    if ($result) {
                    ?>
                        <div class="alert alert-success text-center" role="alert">
                            Data is Inserted !...
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Data Dose't Inserted !...
                        </div>
            <?php
                    }
                }
            }

            ?>

            <form method="POST">

                <div class="mt-3">
                    <label for="inputState" class="form-label">Add Category</label>
                    <select id="inputState" name="add_menu" class="form-select form-control rounded-0" required>
                        <option disabled selected>Select Menu</option>
                        <option>Eid</option>
                        <option>Diwali</option>
                    </select>
                </div>

                <div class="mt-3">
                    <label class="form-label">Menu Name</label>
                    <input type="text" name="menu_name" class="form-control rounded-0" required>
                </div>

                <div class="mx-auto w-50 mt-3 mb-3">
                    <button class="btn btn-info rounded-0 w-100" type="submit" name="submit">Submit</button>
                </div>

            </form>
        </div>

    </div>
</div>

<?php include 'all file/footer.php' ?>