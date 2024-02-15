<!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php"; ?>

<body>

    <?php include_once "./header.php"; ?>
    <div class="form_container">
        <form action="" method="post" class="form">
            <h1>Add Property</h1>
            <div class="form-group">
                <label for="property_name">Property Name</label>
                <input type="text" class="form-control" id="property_name" name="property_name" required>
            </div>
            <div class="form-group">
                <label for="property_type">Property Type</label>
                <select class="form-control" id="property_type" name="property_type" required>
                    <option value="house">House</option>
                    <option value="land">Land</option>
                </select>
            </div>
            <div class="form-group">
                <label for="property_price">Property Price</label>
                <input type="number" class="form-control" id="property_price" name="property_price" required>
            </div>
            <div class="form-group">
                <label for="property_location">Property Location</label>
                <input type="text" class="form-control" id="property_location" name="property_location" required>
            </div>

            <div class="form-group">
                <label for="property_description">Property Description</label>
                <textarea class="form-control" id="property_description" name="property_description" rows="3"
                    required></textarea>
            </div>
            <div class="form-group">
                <label for="property_image">Property Image</label>
                <input type="file" class="form-control" id="property_image" name="property_image" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Property</button>
        </form>







    </div>



    <?php include_once "./footer.php"; ?>