<?php
include_once "../model/db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bookappointment_id'])) {
    $bookappointment_id = $_POST['bookappointment_id'];
    $bookappointment_fulln_name = $_POST['bookappointment_full_name'];
    $bookappointment_address = $_POST['bookappointment_address'];
    $bookappointment_email = $_POST['bookappointment_email'];
    $bookappointment_phone_num = $_POST['bookappointment_phone_num'];
    $sql = "INSERT INTO bookappointment (bookappointment_full_name, bookappointment_address, bookappointment_email, bookappointment_phone_num) VALUES ('$bookappointment_full_name', '$bookappointment_address', '$bookappointment_email', '$bookappointment_phone_num')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ./property.php : You have submitted your appointment successfully. We will contact you soon.");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    if (isset($_GET['property_id'])) {
        $property_id = $_GET['property_id'];
        $query = "SELECT * FROM property WHERE id = $bookappointment_id";
        $result = mysqli_query($conn, $query);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>

<body>

    <?php include_once "./header.php"; ?>
    <div class="form_contain">
        <form action="" method="post" class="form" enctype="multipart/form-data">
            <h1>BOOK APPOINTMRNT</h1>
            <div class="form-group">
                <label for="property_name">Full Name</label>
                <input type="text" class="form-control" id="bookappointment_full_name" name="bookappointment_full_name"
                    required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="bookappointment_address" name="bookappointment_address"
                    required>

                </select>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" id="bookappointment_email" name="bookappointment_email"
                    required>
            </div>
            <div class="form-group">
                <label for="phone-num">Phone no.</label>
                <input type="text" class="form-control" id="bookappointment_phone-num" name="bookappointment_phone-num"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">BOOK APPOINTMENT</button>
        </form>
    </div>
</body>

</html>