<?php include_once "../model/db.php";
session_start();
$id = $_GET['property_id'];
$query = "SELECT * FROM property WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php" ?>

<body>
    <?php include_once "./header.php" ?>
    <div class="container mt-4 ">
        <div class="row property_container">
            <div class="col-6">
                <img src="../public/images/property/<?= $row['property_image']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-6 property_content">
                <h4 class="card-title">

                    <i class="fa fa-home"></i>
                    <?= $row['property_name']; ?>
                </h4>
                <h5 class="card-title">
                    <i class="fa fa-location-arrow"></i>
                    <?= $row['property_location']; ?>
                </h5>

                <div class="property_description">
                    <h6>Property Description</h6>
                    <p>
                        <?= $row['property_description']; ?>
                    </p>


                </div>
                <h5 class="card-text">
                    <i class="fa fa-money"></i>
                    Rs
                    <?= $row['property_price']; ?>
                </h5>
                <div id="group_button">
                    <a href="edit_property.php?property_id=<?= $row['id']; ?>" class="btn btn-success ">Edit
                        Appointment</a>
                    <a href="delete_property.php?property_id=<?= $row['id']; ?>" class='btn btn-danger'>Delete</a>

                </div>
            </div>

        </div>
    </div>



    <?php include_once "./footer.php" ?>