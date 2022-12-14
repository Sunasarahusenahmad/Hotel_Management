<?php

include 'includes/connection.php';
session_start();

if (isset($_POST['submit'])) {
    $servieces_name = $_POST['servieces_name'];
    $hotel_name = $_POST['hotel_name'];
    $email = $_POST['email'];

    $insert_query = "INSERT INTO `hotel_servieces` (servieces_name, hotel_name, email) VALUES ('$servieces_name', '$hotel_name', '$email') ";
    $result = mysqli_query($con, $insert_query);

    if ($result) {
?>
        <div class="alert alert-success text-center" role="alert">
            Servieces is Added Successfully !...
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            Servieces is Not Added !...
        </div>
<?php
    }
}




?>

<?php include 'all file/header.php' ?>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">


<div class="container">
    <div class="row">

        <div class="col-lg-6">
            <!-- <a href="category_master.php"><button class="btn btn-light rounded-0 card border-left-primary">Add Category</button></a> -->
            <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">All Servieces</h3>

            <table class="table mt-5 border border-info">
                <thead>
                    <tr>
                        <th scope="col">Servieces ID</th>
                        <th scope="col">Servieces</th>
                        <th scope="col">Yes / No</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php

                    $email = $_SESSION['email'];

                    $select_query = "SELECT * FROM `hotel_servieces` WHERE email ='$email' ";
                    $query = mysqli_query($con, $select_query);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th scope="row"><?= $data['servieces_id'] ?></th>
                            <td><?= $data['servieces_name'] ?></td>
                            <td>

                                <?php

                                if ($data['status'] == 0) {
                                ?>
                                    <a href="servieces_active_deactive.php?servieces_id=<?php echo $data['servieces_id'] ?>&status=1 "><button><i class="fa fa-check text-success"></i></button> </a>
                                <?php
                                } else {
                                ?>
                                    <a href="servieces_active_deactive.php?servieces_id=<?php echo $data['servieces_id'] ?>&status=0 "><button><i class="fa-sharp fa-solid fa-xmark text-danger"></i></button> </a>
                                <?php
                                }

                                ?>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>

                </tbody>
            </table>
        </div>

        <div class="col-lg-6">
            <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">Add Servieces</h3>

            <form method="POST">

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

                    <label class="form-label">Hotel Email</label>
                    <select class="form-control rounded-0" name="email">

                        <?php
                        $select_query = mysqli_query($con, "SELECT * FROM `published_hotel` ");

                        if (mysqli_num_rows($select_query) > 0) {
                            foreach ($select_query as $row) {
                        ?>
                                <option value="<?= $row['email']; ?>" name="email"><?= $row['email']; ?></option>
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
                    <label class="form-label">??? Add Servieces</label>
                    <input type="text" name="servieces_name" class="form-control rounded-0" required>
                </div>

                <div class="mx-auto w-50 mt-3 mb-3">
                    <button class="btn btn-info rounded-0 w-100" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

<?php include 'all file/footer.php' ?>