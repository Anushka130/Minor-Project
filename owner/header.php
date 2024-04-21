<section id="header">
    <div class="logo">
        <a href="#">
            <!-- <img src="#" alt="GharJagga" class="logo"> -->
            <i class="fa fa-home"></i> GharJagga
        </a>

    </div>
    <div>
        <ul id="navbar" class="style_navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="./property.php">Property</a></li>
            <li><a href="index.php">About Us</a></li>

        </ul>

    </div>
    <div>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">

                    <!-- You can also use icon as follows: -->
                    <!--  <i class="fas fa-user"></i> -->
                    <span>
                        <i class="fa fa-user fa-lg"></i>
                        <?= $_SESSION["full_name"]; ?>
                    </span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 200px;">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../controller/logout.php"><i
                                class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>


</section>