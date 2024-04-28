<?php
include_once "../model/db.php";
session_start();
$query = "SELECT * FROM property";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>

<body>
    <?php include_once "./header.php";
    if (isset($_SESSION['message'])) {
        echo "<div class='alert alert-warning'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);

    }



    ?>

    <main class="hero">

        <div>
            <h1>Find Your Dream Home</h1>
            <p>Search for your dream home from our listings</p>
        </div>
        <div class="hero-search">
            <form action="" method="GET">
                <input type="text" required value="<?php if (isset($_GET['search']))
                    echo $_GET['search']; ?>" name="search" <?php

                      ?>" placeholder="Search for your dream home and land">
                <button class="btn btn-success">Search</button>
            </form>
        </div>
        <div class="container table-responsive py-5">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Property Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET['search'])) {
                        $filter_values = $_GET['search'];
                        $query = "SELECT * FROM property WHERE CONCAT(property_name, property_type, property_price, property_location) LIKE '%$filter_values%'";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {


                            foreach ($result as $items) { ?>

                                <tr>

                                    <td><?= $items['property_name']; ?></td>
                                    <td><?= $items['property_type']; ?></td>
                                    <td><?= $items['property_price']; ?></td>
                                    <td><?= $items['property_location']; ?></td>
                                    <td>
                                        <a href="./view_property.php?property_id=<?= $items['id']; ?> " class="btn btn-success">View
                                            Property</a>
                                    </td>
                                </tr>



                                <?php

                            }

                        }

                    } else {
                        ?>
                        <tr>
                            <td aria-colspan="4">No record Found</td>
                        </tr>
                        <?php
                    }




                    ?>


                </tbody>
            </table>
        </div>

        <section class="feature">
            <div class="fe-box">
                <img src="../public/images/f1.png" alt="Explore">
                <h6>Explore</h6>
            </div>
            <div class="fe-box">
                <img src="../public/images/savetime.png" alt="Explore">
                <h6>Save Time</h6>
            </div>
            <div class="fe-box">
                <img src="../public/images/appoint.png" alt="Explore">
                <h6>Appoint Meeting</h6>
            </div>
            <div class="fe-box">
                <img src="../public/images/property.jpg" alt="Explore">
                <h6>View Property</h6>
            </div>
            <div class="fe-box">
                <img src="../public/images/contact.png" alt="Explore">
                <h6>Contact Us</h6>
            </div>
        </section>
        <?php include_once "./footer.php"; ?>