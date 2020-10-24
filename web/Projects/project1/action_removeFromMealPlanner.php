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

 $id = $_GET['id'];
 $planned = 'F';
 
 
echo $planned.'<br>';
echo $id;
try
{
	

	// We do this by preparing the query with placeholder values
	$query = 'UPDATE recipes SET isPlanned = :planned  WHERE recipeId = :recipeId ';
	$statement = $db->prepare($query);
		$statement->bindValue(':planned', $planned);
		$statement->bindValue(':recipeId', $id);

		$statement->execute();


}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: cookBook.php");

die();

?>


