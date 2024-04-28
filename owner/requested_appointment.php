<?php
require_once "../model/db.php";
session_start();

$owner_id = $_SESSION['user_id'];
$sql = "SELECT * FROM requested_appointment WHERE owner_id = '$owner_id' AND status=0 ";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>
</head>

<body>
    <?php include_once "./header.php"; ?>
    <div class="container table-responsive py-5">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone no</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $appointment_sql = "SELECT * FROM user WHERE id = '{$row['tenant_id']}'";
                    $appointment_result = mysqli_query($conn, $appointment_sql);
                    $appointment_row = mysqli_fetch_array($appointment_result, MYSQLI_ASSOC);

                    ?>
                    <tr>

                        <td><?= $appointment_row['full_name']; ?></td>
                        <td><?= $appointment_row['email']; ?></td>
                        <td><?= $appointment_row['address']; ?></td>
                        <td><?= $appointment_row['phone_no']; ?></td>
                        <td>
                            <a href="#" class="btn btn-success">Approved</a>
                            <a href="#" class="btn btn-danger">Declined</a>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include_once ("./footer.php"); ?>