<?php
include_once "../model/db.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>

<body>
    <?php include_once "./header.php"; ?>
    <main class="hero">

        <div>
            <h1>Find Your Dream Home</h1>
            <p>Search for your dream home from our listings</p>
        </div>
        <div class="hero-search">
            <input type="text" placeholder="Search for your dream home and land">
            <button class="btn btn-success">Search</button>
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