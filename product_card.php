<div class="hr_line" id="property_id"></div>
<div class="property_head">
    <h2>Property</h2>
</div>
<div class="container m-4 product_container">
    <?php while ($row = mysqli_fetch_array($result)) { ?>
        <div class="card border-0 rounded-0 shadow property" style="width: 23rem;height:27rem;">
            <img src="./public/images/property/<?= $row['property_image']; ?>" class="card-img-top rounded-0" alt="...">
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
                <div class="col-7">
                    <a href="#" class="btn btn-success w-100 p-3 rounded-0 ">View Property</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>