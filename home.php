<?php
include('home_connect.php');
?>


<?php

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $stmt = $conn->prepare("SELECT id, name FROM location ORDER BY name");
    $stmt->execute();
    $locations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>



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

    
    $stmt = $conn->prepare("SELECT COUNT(*) as total_items FROM inventory");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_items = $result['total_items'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}





$conn = null;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script defer src= "js/main.js"></script> 
    <link rel="stylesheet" href="styles/style(home).css">
    <link rel="stylesheet" href="style(chatbot).css">



    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>





</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="home.php" class="">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="inv-dash.php" class="">
                    <i class='bx bxs-component'></i>
                    <span class="text">Inventory</span>
                </a>
            </li>
            <li>
                <a href="location.php" class="">
                    <i class='bx bxs-location-plus'></i>
                    <span class="text">Location</span>
                </a>
            </li>
            <li>
                <a href="report.php" class="">
                    <i class='bx bxs-report'></i>
                    <span class="text">Report</span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <i class='bx bxs-conversation'></i>
                    <span class="text">Chatbot</span>
                </a>
            </li>
            <li class="help">
                <a href="help.php" class="">
                    <i class='bx bxs-help-circle'></i>
                    <span class="text">Help & Privacy</span>
                </a>
            </li>
            <li class="logout">
                <a href="login.php" class="">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search-alt-2'></i>
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>




     
     


    



        <div class="card--container">


            <h3 class="items-title">New Items</h3>
            <div class="card--wrapper">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">This Week's items</span>
                        
                    </div>


                    <span class="numbers"><?php echo number_format($total_items); ?> <i class='bx bx-candles'></i></span>
                    <span class="numbers">
                

                    
                </div>

                
                <div class="card--header card-2">
                    <div class="amount">
                        <span class="title">Deliveries</span>
                        <span class="Empty">.</span>
                    </div>
                    <span class="numbers">3900</span>
                    <span class="figure">Last Week: 4456</span>
                </div>
                


                <div class="card--header card-3">
                    <div class="amount">
                        <span class="title">Locations</span>
                        <span class="Empty"></span>
                    </div>
                    <span class="numbers">3900</span>
                    <span class="figure">Last Week: 4456</span>
                </div>

                <div class="card--header card-4">
                    <div class="amount">
                        <span class="title">Deliveries</span>
                        <span class="Empty">.</span>
                    </div>
                    <span class="numbers">3900</span>
                    <span class="figure">Last Week: 4456</span>
                </div>

</div> 
</div>





       <?php include 'chatbot.php'; ?>


<button class="newitem_button">Add new Item</button> 

    <section>
        <div class="register-box" id="register-box">

        <form action="home_connect.php" method="post">


            <div class="close" id="close-button">&times;</div> 
            <div class="circle">
                <span class="newitem-head"></span>
                <span class="newitem-body"></span> 
            </div>
            <div>
                <label for="sku">SKU Number</label>
                <input type="text" placeholder="sku" name="sku" required value="SKU-">
            </div>
            <div> 
                <label for="name">Item Name</label>
                <input type="text" placeholder="name" name="name" required>
            </div>
            <div> 
                <label for="description">Description</label>
                <input type="text" placeholder="description" name="description" required>
            </div>


            <div>
                        <label for="supplier">Supplier</label>
                        <select name="supplier" id="supplier" required>
                            <option value="" disabled selected>Select supplier</option>
                            <?php
                            foreach ($suppliers as $supplier) {
                                echo "<option value='" . $supplier['supplier_name']. "'>" . htmlspecialchars($supplier['supplier_name']) . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    


                    <label for="location">Location:</label>
<select name="location" id="location" required>
    <option value="" disabled selected>Select location</option>
    <?php foreach ($locations as $location): ?>
        <option value="<?php echo htmlspecialchars($location['id']); ?>">
            <?php echo htmlspecialchars($location['name']); ?>
        </option>
    <?php endforeach; ?>
</select>



           




            <div> 
                <label for="cost">Cost</label>
                <input type="text" placeholder="cost" name="cost" required value="£ ">
            </div>

            
            <div style="display: flex; justify-content: space-between;">
                <div style="flex: 1; margin-right: 10px;">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" required value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div style="flex: 1; margin-left: 10px;">
                    <label for="assigned_by">Assigned By</label>
                    <input type="text" id="assigned_by" name="assigned_by" placeholder="Assigned by" required>
                </div>
            </div>


            <button class="btnSubmit">Submit</button>
        </div>
    </section>




        


        </div>      
</section> 


    <script src="main.js"></script>
</body>
</html>




               

