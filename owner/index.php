<?php
include_once "../model/db.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>
</head>

<body>
    <?php include_once "./header.php"; ?>


    <main class="hero">


        <div>
            <h1>Hi
                <?= $_SESSION["full_name"]; ?>
            </h1>
            <p>Want to add some property here?</p>
        </div>
        <div class="">
            <a href="./add_property.php" class="btn btn-success">Add Property</a>
            <a href="./property.php" class="btn btn-success">View Property</a>



        </div>



    </main>




    <?php include_once "./footer.php"; ?>