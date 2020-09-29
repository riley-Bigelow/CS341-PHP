<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
?>

<html>
<body>
Welcome <?=$name ?><br>
Your email address is: <a href="mailto:<?=$email ?>"><?=$email ?></a><br> 
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
    echo "You live in the Ocean";
}
?>

</body>
</html>