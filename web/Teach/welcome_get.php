<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo "<a href='mailto:{$email}>$_POST["email"]</a>";?><br> 
You major is: <?php echo $_POST["major"];?><br>
Comments: <?php echo $_POST["comments"];?> <br>
<?php
if(!empty($_POST['continents'])){
    echo"You've visited:<br>";
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['continents'] as $selected){
    echo $selected."</br>";
    }
}
else{
    echo "None of the boxes were checked";
}
?>

</body>
</html>