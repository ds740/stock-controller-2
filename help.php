<?php
include('database/home_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="js/main.js"></script>
    <link rel="stylesheet" href="style(help).css">



<link rel="stylesheet" href="style(chatbot).css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="home.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="inventory.php">
                    <i class='bx bxs-component'></i>
                    <span class="text">Inventory</span>
                </a>
            </li>
            <li>
                <a href="location.php">
                    <i class='bx bxs-location-plus'></i>
                    <span class="text">Location</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-report'></i>
                    <span class="text">Report</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-conversation'></i>
                    <span class="text">Chatbot</span>
                </a>
            </li>
            <li class="help">
                <a href="#">
                    <i class='bx bxs-help-circle'></i>
                    <span class="text">Help & Privacy</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Log out</span>
                </a>
            </li>
        </ul>
    </div>







    <div class="main--content">
        <div class="header-section">
            <div class="header--title">
                <h1>How can we help you?</h1>
            </div>
            <div class="search--box">
                <i class='bx bx-search-alt-2'></i>
                <input type="text" placeholder="Search"/>
            </div>

            <p class="no-results-message" style="display: none; color: red; text-align: center;">No results found.</p>

        </div>

        <div class="card--container">
            
    <h3 class="items-title"> Common  HELPs</h3>
     
    <div class="card--wrapper">
       
        <a href="items_page.php" class="card--header card-1">
            <img src="path/to/items_image.jpg" alt=" Get Started" class="card-image"/>
            <div class="amount">
                <span class="title">How to get Started </span>
            </div>
        </a>

      
        <a href="locations_page.php" class="card--header card-2">
            <img src="path/to/locations_image.jpg" alt="help" class="card-image"/>
            <div class="amount">
                <span class="title">Exampl 2</span>
            </div>
        </a>

         <a href="locations_page.php" class="card--header card-3">
            <img src="path/to/locations_image.jpg" alt="help 2" class="card-image"/>
            <div class="amount">
                <span class="title">example 3</span>
            </div>
        </a>

         <a href="locations_page.php" class="card--header card-4">
            <img src="" alt="help 4" class="card-image"/>
            <div class="amount">
                <span class="title">example 4</span>
            </div>
        </a>
        </div>




        <?php include 'chatbot.php'; ?>






<br><br><br>
 <div class="main--content">
        <div class="header-section-2">
            <div class="header--title">
                <h2>Help & Information</h1>
            </div>
        </div>

        <div class="content">
            <section class="getting-started">
                <h2>Getting Started with Stock-flow</h2>
                <ol>
                    <li><strong>Visit the Stock-flow login page:</strong> Navigate to our web application by entering the URL provided during your onboarding session.</li>
                    <li><strong>Enter your username and password:</strong> Use the credentials you received via email or during your initial setup meeting. Ensure that you keep these credentials secure.</li>
                    <li><strong>Click on the 'Login' button:</strong> Once you've entered your credentials, click 'Login' to access your personalized dashboard where you can manage and view all your inventory and supplier details.</li>
                </ol>
<br><br>
                <h3>Initial Setup:</h3>
                <ol>
                    <li><strong>Configure your personal and warehouse settings:</strong>
                        <ul>
                            <li><strong>Warehouse Settings:</strong> Storage parameters, and safety thresholds. This setup helps tailor the system to the specific needs and operations of your warehouse, especially critical for environments storing sensitive computer components.</li>
                        </ul>
                    </li>
                    <li><strong>Add initial inventory items using the 'Add New Item' option:</strong>
                        <ul>
                            <li><strong>Item Entry:</strong> Input details such as item name, SKU, quantity, and location. You can also include specific characteristics like size, weight, and any special storage requirements pertinent to computer components.</li>
                        </ul>
                    </li>
                    <li><strong>Set up supplier information and integrate logistics details:</strong>
                        <ul>
                            <li><strong>Supplier Profiles:</strong> Enter supplier names, contact information, delivery schedules, and contract terms. Having a centralized database of this information simplifies reordering and inventory forecasting.</li>
                        </ul>
                    </li>
                </ol>


                <br><br>
 <h3>Additional Tips for Success:</h3>
                <ul>
                    <li><strong>Training Sessions:</strong> Participate in training sessions offered during the initial setup to familiarize yourself and your team with Stock-flow’s features and capabilities.</li>
                    <li><strong>Data Backup:</strong> Regularly back up your data to prevent any loss of critical inventory or supplier information, which is especially important in a system managing numerous computer components.</li>
                    <li><strong>Security Measures:</strong> Implement strong cybersecurity measures to protect sensitive data, particularly when handling supplier contracts and inventory details of high-value items.</li>
                </ul>
            </section>



<br><br>
            <section class="faqs">
                <h2>Frequently Asked Questions (FAQs)</h2>
                <dl>
                    <dt>Q1: How do I add new inventory items?</dt>
                    <dd>A: Go to the 'Inventory' section, click 'Add Item', fill in the details such as SKU, description, quantity, and location, and then submit.</dd>

                    <dt>Q2: What to do if I forget my password?</dt>
                    <dd>A: Click the 'Forgot Password?' link on the login page and follow the instructions to reset your password. You will need to provide your email address associated with the account to receive a reset link.</dd>

                    <dt>Q3: How do I update existing inventory items?</dt>
                    <dd>A: Navigate to the 'Inventory' section, find the item you wish to update, click 'Edit', make the necessary changes, and then save your updates.</dd>

                    <dt>Q4: How can I delete an inventory item?</dt>
                    <dd>A: In the 'Inventory' section, select the item you want to remove, click 'Delete', and confirm your action. Be cautious, as this action cannot be undone.</dd>

                    <dt>Q5: How do I register as a new user?</dt>
                    <dd>A: On the login page, click 'Register' or 'Sign Up', fill in the required fields such as name, email, and password, and follow the prompts to complete your registration.</dd>

                    <dt>Q6: How do I use the chatbot to find products?</dt>
                    <dd>A: Activate the chatbot via its icon on the screen, then enter the SKU number or the name of the item. The chatbot will provide you with the location, stock status, and even images if available.</dd>

                    <dt>Q7: What are the delivery terms for suppliers?</dt>
                    <dd>A: Delivery terms vary by supplier but generally include details like expected delivery times, shipping methods, and whether the terms are CIF (Cost, Insurance, and Freight) or FOB (Free On Board). You can view specific terms under each supplier’s profile in the 'Suppliers' section.</dd>

                    <dt>Q8: How do I find the location of the warehouse?</dt>
                    <dd>A: In the 'Locations' section of the application, you can view a map and list of all warehouse locations. Each location will have an address and additional details such as space capacity and management contacts.</dd>

                    <dt>Q9: How do I generate reports?</dt>
                    <dd>A: Go to the 'Reports' section, select the type of report you need (e.g., inventory turnover, supplier performance), set the date range and other parameters, and then generate the report.</dd>

                    <dt>Q10: How do I contact customer support?</dt>
                    <dd>A: You can contact customer support by navigating to the 'Support' section of the application where you'll find contact details including email, phone number, and an option for live chat during business hours.</dd>
                </dl>
            </section>


<br><br>
            <section class="troubleshooting">
                <h2>Troubleshooting</h2>
                <h3>Common Issue 1: Error message when trying to update stock.</h3>
                <p><strong>Solution:</strong> Ensure you have the necessary permissions and that all required fields are correctly filled out. If the problem persists, please contact technical support.</p>

                <h3>Common Issue 2: Difficulty accessing the system.</h3>
                <p><strong>Solution:</strong> Check your internet connection, clear your browser cache, and try logging in again. If issues continue, consult our technical support team.</p>
            </section>


<br><br>
            <section class="support-contact">
                <h2>Support and Contact</h2>
                <h3>Technical Support:</h3>
                <ul>
                    <li><strong>Phone:</strong> 0333 200 7506</li>
                    <li><strong>Email:</strong> support@stockflow.com</li>
                </ul>
                
                <h3>Customer Service:</h3>
                <ul>
                    <li><strong>Hours of Operation:</strong> Monday to Friday, 9:00 AM - 5:00 PM</li>
                    <li><strong>Contact:</strong> For non-technical assistance, please reach out via our customer service email or call during business hours.</li>
                </ul>
            </section>
        </div>



        
    </div>
    <script src="js/main.js"></script>
</body>
</html>


>
