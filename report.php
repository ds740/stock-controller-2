<?php
include('database/inv_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style(report).css">
    <link rel="stylesheet" href="style(loc).css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Reports </title>
    <style>
        .filter-btn {
            margin: 10px 0;
            position: relative;
            display: inline-block;
        }
        .filter-dropdown {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .filter-dropdown a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .filter-dropdown a:hover {
            background-color: #f1f1f1;
        }
        .filter-btn:hover .filter-dropdown {
            display: block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
                <a href="#" class="">
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
                <a href="#" class="">
                    <i class='bx bxs-help-circle'></i>
                    <span class="text">Help & Privacy</span>
                </a>
            </li>
            <li class="logout">
                <a href="#" class="">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Stock Flow</span>
                <h2>Report</h2>
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

                    <span class="figure"> <?php echo number_format($last_week_items); ?></span>
                

                    
                </div>

                
                <div class="card--header card-2">
                    <div class="amount">
                        <span class="title">This Month's inventory</span>
                        <span class="Empty">.</span>
                    </div>
                    <span class="numbers"></span>
                    <span class="figure"></span>
                </div>
                


                <div class="card--header card-3">
                    <div class="amount">
                        <span class="title"></span>
                        <span class="Empty"></span>
                    </div>
                    <span class="numbers"></span>
                    <span class="figure">Locations Report</span>
                </div>

                <div class="card--header card-4">
                    <div class="amount">
                        <span class="title">Supplier Report </span>
                        <span class="Empty">.</span>
                    </div>
                    <span class="numbers"></span>
                    <span class="figure"></span>
                </div>

</div> 
</div>



<div class="container-2">
    <div class="overview">
        <div class="title-report">
            <h2>Overview Reports</h2>
            <button class="report-btn">View Reports</button>



        </div>
        
    <table> 
        <tr> 
            <th>Date </th> 
             <th>Time Period?  </th> 
              <th>type </th> 
               <th>export </th> 
</tr> 
</table> 
        
    </div>
    <div class="today-report">
        <div class="title-report">
            <h2>Today's Report</h2>
        </div>
    </div>
</div>


    
<?php include 'chatbot.php'; ?>
        

    </body>
    </html>