<?php
include_once "../model/db.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $property_name = mysqli_real_escape_string($conn, $_POST['property_name']);
    $property_type = mysqli_real_escape_string($conn, $_POST['property_type']);
    $property_price = mysqli_real_escape_string($conn, $_POST['property_price']);
    $property_location = mysqli_real_escape_string($conn, $_POST['property_location']);
    $property_description = mysqli_real_escape_string($conn, $_POST['property_description']);
    if (isset($_FILES['property_image'])) {
        $imageFileName = $_FILES['property_image']['name'];
        $imageTmpName = $_FILES['property_image']['tmp_name'];
        $imageFileType = strtolower(pathinfo($imageFileName, PATHINFO_EXTENSION));

        // Check if the uploaded file is an image (you can add more checks if needed)
        if (getimagesize($imageTmpName)) {
            // Generate a unique name for the uploaded image (you can use a different method)
            $uniqueImageName = uniqid() . '.' . $imageFileType;

            // Move the uploaded file to a directory (you need to specify the directory path)
            $uploadDirectory = "../public/images/property/"; // Change to your desired directory
            move_uploaded_file($imageTmpName, $uploadDirectory . $uniqueImageName);

            // Store the image file name in the database
            $property_image = $uniqueImageName;
        } else {
            $errorMessage = "Invalid image file. Please upload a valid image.";
        }
    }
    $sql = "INSERT INTO property (property_name, property_type, property_price, property_location, property_description, property_image) VALUES ('$property_name', '$property_type', '$property_price', '$property_location', '$property_description', '$property_image')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ./property.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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