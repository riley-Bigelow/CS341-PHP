<?php
 try
 {
	 $dbUrl = getenv('DATABASE_URL');       
	 $dbOpts = parse_url($dbUrl);         
	 $dbHost = $dbOpts["host"];
	 $dbPort = $dbOpts["port"];
	 $dbUser = $dbOpts["user"];
	 $dbPassword = $dbOpts["pass"];
	 $dbName = ltrim($dbOpts["path"],'/');
	 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch (PDOException $ex)
 {
	 echo 'Error!: ' . $ex->getMessage();
	 die();
 }

// get the data from the POST
$recipeName = htmlspecialchars($_POST['recipeName']);
$servings = htmlspecialchars($_POST['servings']);
$ingredients = htmlspecialchars($_POST['ingred']);
$quant = htmlspecialchars($_POST['quant']);
$measure = htmlspecialchars($_POST['meas']);
$date = date('Y-m-d H:i:s');
$planned = "False";
if(isset($_POST['plan'])){
	$planned = "True";
};
				
for ($x = 0; $x < count($ingredients); $x+=1) {
	echo "The number is: $ingredients[$x]. <br>";
	echo "The number is: $quant[$x]. <br>";
	echo "The number is: $measure[$x]. <br>";
  };



echo $_POST['recipeName']."</br>";
echo $_POST['servings']."</br>";
foreach($_POST['ingred'] as $selected){
    echo $selected."</br>";
    };
foreach($_POST['quant'] as $selected){
    echo $selected."</br>";
	};
foreach($_POST['meas'] as $selected){
	echo $selected."</br>";
};
echo $_POST['intrsuct']."</br>";

echo $date."</br>";
echo $planned."</br>";







/*try
{
	

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO recipes (recipeName,servings,createdAt,createdBy,isplanned)  VALUES(:recipeName,:servings,:createdAt,:createdBy,:isplanned)';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':recipeName', $_POST['recipeName']);
	$statement->bindValue(':servings', $_POST['servings']);
	$statement->bindValue(':createdAt', $date );
	$statement->bindValue(':createdBy', 1);
	$statement->bindValue(':isplanned',$planned );

	$statement->execute();

	// get the new id
	$recipeId = $db->lastInsertId("recipeid");

	// Now go through each topic id in the list from the user's checkboxes
	foreach ($topicIds as $topicId)
	{
		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO  ingredients (recipeId,ingredientName,amount,measurement,createdAt,createdBy) VALUES(:recipeId,:ingredientName,:amount,:measurement,:createdAt,:createdBy)');

		// Then, bind the values
		$statement->bindValue(':recipeId', $recipeId);
		$statement->bindValue(':topicId', $topicId);

		$statement->execute();
	}
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: cookBook.php");

die(); */

?>

