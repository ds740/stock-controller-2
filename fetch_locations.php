<?php
// database/home_connect.php should be included here to establish the connection
include('database/home_connect.php');

// Fetch locations from the database
$locationsQuery = "SELECT id, name FROM location";
$locationsResult = $con->query($locationsQuery);

// Check if the query was successful
if ($locationsResult === false) {
    die("Database query failed: " . $con->error);
}

// Generate options
$options = '';
while ($location = $locationsResult->fetch_assoc()) {
    $options .= '<option value="' . htmlspecialchars($location['id']) . '">' . htmlspecialchars($location['name']) . '</option>';
}

// Close the database connection
$con->close();

// Output options
echo $options;
?>
