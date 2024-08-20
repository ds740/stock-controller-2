<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $supplier_number = $_POST['supplier_number'];
    $supplier_name = $_POST['supplier_name'];
    $company = $_POST['company'];
    $city = $_POST['city'];
    $delivery_terms = $_POST['delivery_terms'];
    $contact = $_POST['contact'];
    $phone_no = $_POST['phone_no'];

    // Database credentials
    $servername = 'localhost';
    $username = 'root';
    $password = ''; 
    $dbname = 'StockFlow';

    try {
        // Create a new PDO instance
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO supplier (supplier_number, supplier_name, company, city, delivery_terms, contact, phone_no) 
                                 VALUES (:supplier_number, :supplier_name, :company, :city, :delivery_terms, :contact, :phone_no)");

        // Bind parameters
        $stmt->bindParam(':supplier_number', $supplier_number);
        $stmt->bindParam(':supplier_name', $supplier_name);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':delivery_terms', $delivery_terms);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':phone_no', $phone_no);

        // Execute the statement
        $stmt->execute();

        echo "Supplier added successfully!";
        
        // Redirect to another page (optional)
        header('Location: supplier.php?status=success');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
