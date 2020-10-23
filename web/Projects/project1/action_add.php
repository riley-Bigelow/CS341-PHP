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
$instructions = htmlspecialchars($_POST['intrsuct']);
$date = date('Y-m-d H:i:s');
$planned = "False";
if(isset($_POST['plan'])){
	$planned = "True";
}
$userId = 1;
for ($x = 0; $x < count($ingredients); $x+=1) {
	if($ingredients[$x] !=''){
		echo $ingredients[$x];
	}
}

/*try
{
	

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO recipes (recipeName,servings,createdAt,createdBy,isPlanned)  VALUES(:recipeName,:servings,:createdAt,:createdBy,:isPlanned)';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':recipeName', $recipeName);
	$statement->bindValue(':servings', $servings);
	$statement->bindValue(':createdAt', $date );
	$statement->bindValue(':createdBy', $userId);
	$statement->bindValue(':isPlanned',$planned );

	$statement->execute();

	// get the new id
	$recipeId = $db->lastInsertId("recipes_recipeid_seq");

	for ($x = 0; $x < count($ingredients); $x+=1) {
		if($ingredients[$x] !=''){
		$ingredient = $ingredients[$x];
		$quantity = $quant[$x];
		$measurement = $meas[$x];

		$statement = $db->prepare('INSERT INTO  ingredients (recipeId,ingredientName,amount,measurement,createdAt,createdBy) VALUES(:recipeId,:ingredientName,:amount,:measurement,:createdAt,:createdBy)');
		
		// Then, bind the values
		$statement->bindValue(':recipeId', $recipeId);
		$statement->bindValue(':ingredientName',  $ingredient);
		$statement->bindValue(':amount',  $quantity);
		$statement->bindValue(':measurement',  $measurement);
		$statement->bindValue(':createdAt',  $date);
		$statement->bindValue(':createdBy',  $userId);

		$statement->execute();
		}
	}

	$statement = $db->prepare('INSERT INTO  instructions (recipeId,instructions,createdAt,createdBy) VALUES(:recipeId,:instructions,:createdAt,:createdBy)');
	// Then, bind the values
	$statement->bindValue(':recipeId', $recipeId);
	$statement->bindValue(':instructions',  $instructions);
	$statement->bindValue(':createdAt',  $date);
	$statement->bindValue(':createdBy',  $userId);

	$statement->execute();

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

