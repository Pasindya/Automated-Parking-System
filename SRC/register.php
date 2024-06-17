//register
<?php
include "connect.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
        <link rel="stylesheet" href="css/background.css">
        <link rel="stylesheet" href="css/payment.css">
        <link rel="stylesheet" href="css/footer.css">
        <script src="js/pay.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">Arrow Automated Parking System</h2>
                </div>
            
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="payment.php">Payment</a></li>
                        <li><a href="addsupport.php">Support</a></li>
                        <li><a href="">AboutUs</a></li>
                    </ul>
                </div>
                <div class="search">
                    <input type="srch" name="" placeholder="Type To text">
                    <a href="#"><button class="btn">Search</button></a>
                </div>
            </div>
            <br><br><br><br><br><br>
           
            <div class="pcontainer">
                <form action="">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">Customer Details</h3>

                            <div class="inputbox">
                                <label>Full Name:</label>
                                <input type="text" placeholder="Enter full name"/><br><br>

                                <label>NIC Number:</label>
                                <input type="text" placeholder="Enter NIC number"/><br><br>

                                <label>Phone Number:</label>
                                <input type="text" id="mobile" placeholder="Enter Phone mnumber"/><br><br>
                            </div>

                    </div>

                    <div class="col">
                        <h3 class="title">Payment</h3>

                        <div class="inputbox">
                            <label>Cards accepted:</label>
                           <img src="/pic/pay.jpg" alt="" width="90" ><br><br>

                            <label> Credit card Number:</label>
                            <input type="text" placeholder="1111-1111-1111-1111"/><br><br>

                            <label>exp year</label>
                            <input type="numbert" placeholder="2022"/><br><br>

                            <label>CVV:</label>
                            <input type="numbert" placeholder="2022"/><br><br>

                            <label>exp year</label>
                            <input type="numbert" placeholder="2022"/><br><br>
                        </div>

                </div>
                </div>
                
                <button class="btn" onclick="checkpay()" ><a href="#">Do payment</a></button>
                </form>
          
            </div>
            
        </div>

        <footer>
            <div class="footer-content">
                <h3>Automated parking system</h3>
                <ul class="details">
                    <li>N0,09,Amar street,Colombo</li>
                    <li>Arrow Parking,Kandy Road,Malabe</li>
                    <li>arrowparkingsystem@gmail.com</li>
                    <li>011-56789901</li>
                    <li>0117-5674564</li>

                </ul>
            </div>
            <br><br><br>
            
            <div class="footer-bottom">

                <p>copyright &copy;2024 Automated parking system.designed by <span>Pasindya Chavindee</span></p>
            </div>

        </footer>
    </body>
</html>