<?php
include_once "../model/db.php";
session_start();

// Check if form is submitted for updating property
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['property_id'])) {
    $property_id = $_POST['property_id'];
    $property_name = $_POST['property_name'];
    $property_type = $_POST['property_type'];
    $property_price = $_POST['property_price'];
    $property_location = $_POST['property_location'];
    $property_description = $_POST['property_description'];

    // Check if a new image is uploaded
    $property_image = ''; // Initialize empty variable for image
    if (!empty($_FILES['property_image']['name'])) {
        $property_image = $_FILES['property_image']['name'];
        $target = "../public/images/property/" . basename($property_image);
        move_uploaded_file($_FILES['property_image']['tmp_name'], $target);
    }

    // Prepare SQL query for updating property
    $sql = "UPDATE property SET 
            property_name = '$property_name', 
            property_type = '$property_type', 
            property_price = '$property_price', 
            property_location = '$property_location', 
            property_description = '$property_description'";

    // Append property_image to the update query if a new image is uploaded
    if (!empty($property_image)) {
        $sql .= ", property_image = '$property_image'";
    }

    $sql .= " WHERE id = $property_id";

    // Execute SQL query
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ./property.php");
        exit(); // Stop further execution after redirection
    } else {
        echo "Error updating property: " . mysqli_error($conn);
    }
}

// Fetch property details for editing if property_id is provided via GET
if (isset($_GET['property_id'])) {
    $property_id = $_GET['property_id'];
    $query = "SELECT * FROM property WHERE id = $property_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $property_name = $row['property_name'];
        $property_type = $row['property_type'];
        $property_price = $row['property_price'];
        $property_location = $row['property_location'];
        $property_description = $row['property_description'];
        $property_image = $row['property_image'];
    } else {
        echo "Property not found.";
        // Handle this case (e.g., redirect to an error page)
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<?php include_once "./head.php" ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Property</title>
</head>

<body>
    <?php include_once "./header.php"; ?>
    <div class="form_contain">
        <form action="" method="post" class="form" enctype="multipart/form-data">
            <h1>Edit Property</h1>
            <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
            <div class="form-group">
                <label for="property_name">Property Name</label>
                <input type="text" class="form-control" id="property_name" name="property_name" required
                    value="<?php echo $property_name; ?>">
            </div>
            <div class="form-group">
                <label for="property_type">Property Type</label>
                <select class="form-control" id="property_type" name="property_type" required>
                    <option value="house" <?php echo ($property_type == 'house') ? 'selected' : ''; ?>>House</option>
                    <option value="land" <?php echo ($property_type == 'land') ? 'selected' : ''; ?>>Land</option>
                </select>
            </div>
            <div class="form-group">
                <label for="property_price">Property Price</label>
                <input type="number" class="form-control" id="property_price" name="property_price" required
                    value="<?php echo $property_price; ?>">
            </div>
            <div class="form-group">
                <label for="property_location">Property Location</label>
                <input type="text" class="form-control" id="property_location" name="property_location" required
                    value="<?php echo $property_location; ?>">
            </div>
            <div class="form-group">
                <label for="property_description">Property Description</label>
                <textarea class="form-control" id="property_description" name="property_description" rows="3"
                    required><?php echo $property_description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="property_image">Property Image</label>
                <input type="file" class="form-control" id="property_image" name="property_image">
            </div>
            <?php if (!empty($property_image)): ?>
                <img src="../public/images/property/<?php echo $property_image; ?>" alt="Property Image"
                    style="max-width: 200px; margin-bottom: 10px;">
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Update Property</button>
        </form>
    </div>
    <?php include_once "./footer.php"; ?>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Property</title>
</head>

<body>
    <?php include_once "./header.php"; ?>
    <div class="form_contain">
        <form action="" method="post" class="form" enctype="multipart/form-data">
            <h1>Edit Property</h1>
            <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
            <div class="form-group">
                <label for="property_name">Property Name</label>
                <input type="text" class="form-control" id="property_name" name="property_name" required
                    value="<?php echo $property_name; ?>">
            </div>
            <!-- Other form fields... -->

            <div class="form-group">
                <label for="property_image">Property Image</label>
                <input type="file" class="form-control" id="property_image" name="property_image">
            </div>
            <?php if (!empty($property_image)): ?>
                <img src="../public/images/property/<?php echo $property_image; ?>" alt="Property Image"
                    style="max-width: 200px; margin-bottom: 10px;">
            <?php endif; ?>

            <!-- Add your CSS rules here to move the "Edit" button to the left -->
            <style>
                /* Example CSS rule to move the button to the left */
                .btn-primary {
                    float: right 20%;
                    /* Add other styling as needed */
                }
            </style>

            <button type="submit" class="btn btn-primary">Update Property</button>
        </form>
    </div>
    <?php include_once "./footer.php"; ?>
</body>

</html>

<?php include_once "./footer.php" ?>