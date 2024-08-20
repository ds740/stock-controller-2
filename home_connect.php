<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $supplier = $_POST['supplier'];
    $location = $_POST['location'];
    $cost = $_POST['cost'];
    $date = $_POST['date'];
    $assigned_by = $_POST['assigned_by'];

    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $dbname = 'StockFlow';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      

        if (!empty($id)) {
            // Update existing item
            $updateStmt = $conn->prepare("UPDATE inventory SET sku = :sku, name = :name, description = :description, supplier = :supplier, location = :location, cost = :cost, date= date, assigned_by = assigned_by WHERE id = :id");
            $updateStmt->bindParam(':id', $id);
            $updateStmt->bindParam(':sku', $sku);
            $updateStmt->bindParam(':name', $name);
            $updateStmt->bindParam(':description', $description);
            $updateStmt->bindParam(':supplier', $supplier);
            $updateStmt->bindParam(':location', $location);
            $updateStmt->bindParam(':cost', $cost);
            $updateStmt->bindParam(':date', $date);
            $updateStmt->bindParam(':assigned_by', $assigned_by);

            if ($updateStmt->execute()) {
                echo "Item updated successfully!";
            } else {
                echo "Failed to update item.";
            }
        } else {
         
            $insertStmt = $conn->prepare("INSERT INTO inventory (sku, name, description, supplier, location, cost, date, assigned_by) VALUES (:sku, :name, :description, :supplier, :location, :cost, :date, :assigned_by)");
            $insertStmt->bindParam(':sku', $sku);
            $insertStmt->bindParam(':name', $name);
            $insertStmt->bindParam(':description', $description);
            $insertStmt->bindParam(':supplier', $supplier);
            $insertStmt->bindParam(':location', $location);
            $insertStmt->bindParam(':cost', $cost);
            $insertStmt->bindParam(':date', $date);
            $insertStmt->bindParam(':assigned_by', $assigned_by);



    //updating the location tables based on the selected location in add new item form. 
        if (!empty($location)) {
            $updateLocationStmt = $conn->prepare("UPDATE location SET items_assigned = CONCAT(IFNULL(items_assigned,''), :sku) WHERE id = :location");
            $updateLocationStmt->bindParam(':sku', $sku);
            $updateLocationStmt->bindParam(':location', $location);
            $updateLocationStmt->execute();
        }

            if ($insertStmt->execute()) {
                echo "Data saved successfully!";

     
                header('Location: inventory.php?status=success');
                exit();
         
             } 
        }

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
}


try {
    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $dbname = 'StockFlow';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $supplierStmt = $conn->query("SELECT id, supplier_name FROM supplier");
    $suppliers = $supplierStmt->fetchAll(PDO::FETCH_ASSOC);


    $locationStmt = $conn->query("SELECT id, name FROM location");
    $locations = $locationStmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}