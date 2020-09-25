<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"];?><br> 
You major is: <?php echo $_GET["major"];?><br>
Comments: <?php echo $_GET["comments"];?> <br>
<?php

if(empty($_POST['day'])){
    echo "You live in the Ocean";
}else{
    $N = count($_POST['day']);
    echo("You have visited $N Continent(s): ");
    for($i=0; $i < $N; $i++){
        echo($_POST['continents'][$i] . " ");
    }
}
?>

</body>
</html>