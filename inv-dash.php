<?php
include('database/home_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style(invdash).css">
    <link rel="stylesheet" href="style(chatbot).css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
    <script defer src="js/main.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
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
                <a href="inventory.php" class="">
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
                <span>Inventory</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="card--container">
                    <h3 class="items-title">Dashboard Overview</h3>
                    <br>
                    <div class="card--wrapper">

                    
                        <a href="inventory.php" class="card--header card-1">
                        
                        
                            <div class="amount">
                                <span class="title"></span>
                            </div>
                        </a>


                        <a href="location.php" class="card--header card-2">
                        
                            <div class="amount">
                                <span class="title"></span>
                            </div>
                        </a>
                        <a href="supplier.php" class="card--header card-3">
                            
                            <div class="amount">
                                <span class="title"></span>
                            </div>
                        </a>
                        <a href="report.php" class="card--header card-4">
                            
                            <div class="amount">
                                <span class="title"></span>
                            </div>
                        </a>
                    </div>
              

                    <br><br><br>









                <div class="chart-container">
                    <h3>Weekly Inventory</h3>
                    <div id="curve_chart" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        
    </div>




    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Week', 'Added Items', 'Deleted Items'],
                ['Week 1',  400,       150],
                ['Week 2',  460,       300],
                ['Week 3',  1120,      200],
                ['Week 4',  540,       350]
            ]);

            var options = {
                title: 'Weekly Inventory Comparison',
                curveType: 'function',
                legend: { position: 'bottom' },
                hAxis: { title: 'Week' },
                vAxis: { title: 'Number of Items' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
            chart.draw(data, options);
        }
    </script>

  


<?php include 'chatbot.php'; ?>


</body>
</html>
