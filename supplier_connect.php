<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'StockFlow';

try {
  
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
        $delete_id = $_POST['delete_id'];

        // Prepare the DELETE statement
        $sql = "DELETE FROM supplier WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $delete_id, PDO::PARAM_INT);

        // Execute the statement and return a JSON response
        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
        exit();
    }

    function getAllSuppliers($conn) {
        $stmt = $conn->prepare("SELECT * FROM supplier");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }







 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $supplier_number = $_POST['supplier_number'];
        $supplier_name = $_POST['supplier_name'];
        $company = $_POST['company'];
        $city = $_POST['city'];
        $delivery_terms = $_POST['delivery_terms'];
        $contact = $_POST['contact'];
        $phone_no = $_POST['phone_no'];

        if (isset($_POST['id']) && !empty($_POST['id'])) {
            
            $id = $_POST['id'];
            $stmt = $conn->prepare("UPDATE supplier SET supplier_number = :supplier_number, supplier_name = :supplier_name, company = :company, city = :city, delivery_terms = :delivery_terms, contact = :contact, phone_no = :phone_no WHERE id = :id");
            $stmt->bindParam(':id', $id);
        } else {
      
            $stmt = $conn->prepare("INSERT INTO supplier (supplier_number, supplier_name, company, city, delivery_terms, contact, phone_no) 
                                     VALUES (:supplier_number, :supplier_name, :company, :city, :delivery_terms, :contact, :phone_no)");
        }

      
        $stmt->bindParam(':supplier_number', $supplier_number);
        $stmt->bindParam(':supplier_name', $supplier_name);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':delivery_terms', $delivery_terms);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':phone_no', $phone_no);

    
        $stmt->execute();

      
        header('Location: supplier.php?status=success');
        exit();
    }


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
