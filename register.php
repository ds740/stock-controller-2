<?php
include('connect.php');
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style(reg).css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="app-header">
        <h1>Stock Flow</h1>
    </header>

    <div class="wrapper">
        <form action="connect.php" method="post">

        <br> 
        <br> 
        <br>
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="fullname" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>



            <div>
                    <label for="Department">Department</label>
                    <select name="department" id="department" required>
                        <option value="" disabled selected>Selet Department</option>
                        <option value="Delivery">Delivery </option>
                        <option value="Supplier">Supplier </option>
                        <option value="Reports">Reports </option>
                        <option value="Order">Order </option>
                        <option value="Management">Management </option>
                        <option value="Operational">Operational </option>
                    </select>
                </div>


                <div>
                    <label for="jobrole">Job Role</label>
                    <select name="jobrole" id="jobrole" required>
                        <option value="" disabled selected>Selet Department</option>
                        <option value="jobrole1">Admin </option>
                        <option value="jobrole2">Picker/Packer </option>
                        <option value="jobrole3">Manager </option>
                        
                    </select>
                </div>




        

            <button type="submit" class="btn">Register Now</button>

            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>

</body>
</html>
