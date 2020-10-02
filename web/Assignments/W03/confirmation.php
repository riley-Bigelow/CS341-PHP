<?php 
            var_dump($_POST);
            $items = $_POST['item'];
            $price = $_POST['price'];
            $quant = $_POST['quant'];
            $tp = $_POST['tp'];
            var_dump($items);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kwik-E-Mart Confirmation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="w3stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="week3js.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-light navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#about"><i class="fa fa-user"></i>ASSIGNMENTS</a>
                </li>
              </ul>
            </div>  
        </nav>
      <div class="container-fluid" id="header">
        <div class="header">
          <img src="kwik-e-mart.png" alt="logo">
        </div>
      </div>
          <nav class="navbar navbar-expand-md bg-success navbar-light " id="sbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="W03Assign.html"><i class="fas fa-store" id="cart"></i></a>
                </li>
              </ul>
          </nav> 
        <div class="shop">
            <h1 id="cartMsg">Confirmation</h1>
        </div>
        <div class="confirmation">
            <h3>Thank you for your purchase, You Purchased the following items:</h3>
            <ul>
            <?php
    
                 for ($i=0; $i < count($items) ; $i++) { 
                    echo "<li> Item: $items[$i]<br> Price per Unit: $price[$i]<br> Quantity: $quant[$i]<br> Item: $tp[$i]<br></li>";
                    }
            ?>
            </ul>
        </div>
            <div class="container-fluid" id="footer">
        </div>
    </body>
</html>