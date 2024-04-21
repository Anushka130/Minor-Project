<?php
include_once "../model/db.php";
session_start();
$query = "SELECT * FROM property";
$result = mysqli_query($conn, $query);
if (isset($_GET['property_id'])) {
    $id = $_GET['property_id'];
    $query = "SELECT * FROM property WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        // Property found, perform deletion
        $deleteQuery = "DELETE FROM property WHERE id = $id";
        if ($conn->query($deleteQuery)) {
            header("Location: ./property.php?delete=You have successfully deleted the property.");
            exit; // Important: Stop execution after redirection
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Property not found.";
    }

    $conn->close();
}
?>
<?php
if (isset($_GET['delete'])) {
    echo "<div class='col-7'>" . $_GET['delete'] . "</div>";
}


?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>
</head>

<body>
    <?php include_once "./header.php"; ?>

    <div class="container m-4 product_container">
        <?php while ($row = mysqli_fetch_array($result)) { ?>

            <div class="card border-0 rounded-0 shadow property" style="width: 23rem;height:27rem;">
                <img src="../public/images/property/<?= $row['property_image']; ?>" class="card-img-top rounded-0"
                    alt="...">
                <div class="card-body mt-3 mb-3">
                    <div class="row">
                        <div class="col-10">
                            <h4 class="card-title">
                                <i class="fa fa-home"></i>
                                <?= $row['property_name']; ?>
                            </h4>
                            <p class="card-text">

                                <i class="fa fa-location-arrow"></i>
                                <?= $row['property_location']; ?>
                            </p>

                        </div>

                    </div>
                </div>
                <div class="row align-items-center text-center g-0">
                    <div class="col-5">
                        <h5>Rs
                            <?= $row['property_price'] ?>
                        </h5>
                    </div>
                    <d class="col-7">
                        <a href="property.php?property_id=<?= $row['id']; ?>"
                            class='btn btn-danger w-4 p-2 rounded-1 btn-sm'>Delete</a>
                        <a href="./view_property.php?property_id=<?= $row['id']; ?>  " target="_blank"
                            class="btn btn-success w-100 p-3 rounded-0 ">View Property</a>
                    </d>
                </div>
            </div>
        <?php } ?>
    </div>






    <?php include_once "./footer.php"; ?>