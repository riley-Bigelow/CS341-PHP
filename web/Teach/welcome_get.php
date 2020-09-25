<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"];?><br> 
You major is: <?php echo $_GET["major"];?><br>
Comments: <?php echo $_GET["comments"];?> <br>
<?php
if(!empty($_GET['continents'])){
    // Loop to store and display values of individual checked checkbox.
    foreach($_GET['continents'] as $selected){
    echo $selected."</br>";
}
?>

</body>
</html>