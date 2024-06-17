

<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/background.css">
        <link rel="stylesheet" href="css/support.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/index.css">
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
                    <a href="#"><button class="btnn">Search</button></a>
                </div>
            </div>
            <br><br><br><br><br><br>
             
            <div class="showsup">
         
           <table class="table">
            <a href="addsupport.php"><button type="button" class="btn btn-success">Add Inquiry</button></a>
  <thead >
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">VehicleNo</th>
      <th scope="col">Inquiry</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
 include "connect.php";

  $sql = "SELECT * FROM `support`";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
?>

<tr>
      <td><?php echo $row['ID']?></td>
      <td><?php echo $row['Name']?></td>
      <td><?php echo $row['Email']?></td>
      <td><?php echo $row['Mobile']?></td>
      <td><?php echo $row['VehicleNo']?></td>
      <td><?php echo $row['Inquiry']?></td>
      <td><?php echo $row['Date']?></td>
      
      <td>
        <a href="editsup.php? id=<?php echo $row['ID'] ?>"
         class="btn btn-info">Edit</a>
  </td>

  <td>
        <a href="deletesup.php? id=<?php echo $row['ID'] ?>" 
        class="btn btn-danger">Delete</a>
  </td>
    <?php
    

  }

  ?>
  <tbody>
   
        <a href="" class="link-dark"><i class ="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
      </td>
    </tr>
    
  </tbody>
</table>



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