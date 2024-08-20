<?php
include('connect.php');

function getInventory($item_name) {
    global $conn;
    $item_name = mysqli_real_escape_string($conn, $item_name);
    $query = "SELECT quantity FROM inventory WHERE item_name = '$item_name'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return "The current stock of " . $item_name . " is " . $row['quantity'] . " units.";
    } else {
        return "Item " . $item_name . " not found in the inventory.";
    }
}

function addItem($item_name, $quantity) {
    global $conn;
    $item_name = mysqli_real_escape_string($conn, $item_name);
    $quantity = intval($quantity);

    $query = "INSERT INTO inventory (item_name, quantity) VALUES ('$item_name', '$quantity') ON DUPLICATE KEY UPDATE quantity = quantity + $quantity";
    if (mysqli_query($conn, $query)) {
        return "Successfully added $quantity units of $item_name to the inventory.";
    } else {
        return "Error adding item: " . mysqli_error($conn);
    }
}

function removeItem($item_name, $quantity) {
    global $conn;
    $item_name = mysqli_real_escape_string($conn, $item_name);
    $quantity = intval($quantity);

    $query = "UPDATE inventory SET quantity = quantity - $quantity WHERE item_name = '$item_name'";
    if (mysqli_query($conn, $query) && mysqli_affected_rows($conn) > 0) {
        return "Successfully removed $quantity units of $item_name from the inventory.";
    } else {
        return "Error removing item or insufficient stock.";
    }
}

?>