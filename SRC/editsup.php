
<?php
include "connect.php";
$ID = $_GET["ID"];

if (isset($_POST["submit"])){
 
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $VehicleNo = $_POST['VehicleNo'];
    $Inquiry = $_POST['Inquiry'];
    $Date = $_POST['Date'];


$sql = "UPDATE `support` SET `Name`='$Name',`Email`='$Email',`Mobile`='$Mobile',`VehicleNo`='$VehicleNoender',`Inquiry`='$Inquiry',`Date`='$Date' 
WHERE ID = $ID";



     $result = mysqli_query($conn,$sql);

     if($result){
        header("Location:index.php?msg=Data updated succefully.");
     }
     else{
        echo"Failed:".mysqli_error($conn);
     }

}

?>









<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
        <link rel="stylesheet" href="css/background.css">
        <link rel="stylesheet" href="css/support.css">
        <link rel="stylesheet" href="css/footer.css">
        <script src="js/sup.js"></script>
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

            <?php

    $sql = "SELECT * FROM `support` WHERE ID = $ID LIMIT 1";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    ?>



             <div class="sform">
              <form action="addsupport.php" method="post">
                <h2>Do You need Support?</h2>
                        <label>Name:</label>
                        <input type="text" name="Name" placeholder="Enter Name"value ="<?php  echo $row['Name'] ?>">
                        <br><br>

                        <label>Email:</label>
                        <input type="text" name="Email" placeholder="Enter Email "  value ="<?php  echo $row['Email'] ?>">
                        <br><br>
                       

                        <label>Contact No:</label>
                        <input type="text" name="Mobile"  id="mobile"placeholder="Enter ContactNo" value ="<?php  echo $row['ContactNo'] ?>">
                        <br><br>
                       

                        <label>Vehicle No:</label>
                        <input type="text" name="VehicleNo" placeholder="Vehicle No" value ="<?php  echo $row['VehicleNo'] ?>"><br><br>
                       

                        <label>Inquiry:</label>
                        <input type="text" name="Inquiry" placeholder="Enter Your Problem" value ="<?php  echo $row['Inquiry'] ?>"><br><br>
                       

                        <label>Date:</label>
                        <input type="date" name="Date"value ="<?php  echo $row['Date'] ?>"><br><br>
                        

                        <button  type="submit"  class="btn"  name="submit" onclick="validate()">Submit</button>
                        <br><br>

                     <a href ="indexsup.php" class="btn btn-primary">View details</a>

              </form>
           </div>
            </div>          
           </div>
          
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