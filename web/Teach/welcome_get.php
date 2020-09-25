<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"];?><br> 
You major is: <?php echo $_POST["major"];?><br>
Comments: <?php echo $_POST["comments"];?> <br>
<?php
if(!empty($_POST['continents'])){
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['continents'] as $selected){
    echo $selected."</br>";
    }
}
?>

</body>
</html>