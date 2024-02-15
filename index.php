<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>

<body class="home">
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
                <img src="./public/images/f1.png" alt="Explore">
                <h6>Explore</h6>
            </div>
            <div class="fe-box">
                <img src="./public/images/savetime.png" alt="Explore">
                <h6>Save Time</h6>
            </div>
            <div class="fe-box">
                <img src="./public/images/appoint.png" alt="Explore">
                <h6>Appoint Meeting</h6>
            </div>
            <div class="fe-box">
                <img src="./public/images/property.jpg" alt="Explore">
                <h6>View Property</h6>
            </div>
            <div class="fe-box">
                <img src="./public/images/contact.png" alt="Explore">
                <h6>Contact Us</h6>
            </div>
        </section>


        <?php include_once "./product_card.php"; ?>

    </main>
    <div>
        <?php include_once "./register_login.php"; ?>
    </div>

    <script src="./public/assests/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- </div> -->
</body>

</html>