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
 $date = date('Y-m-d H:i:s');
 $userId = 1;

try
{
	// We do this by preparing the query with placeholder values
	$query = 'UPDATE recipes SET deletedAt = :updateDate, deletedBy = :userId WHERE recipeId = :recipeId ';
	$statement = $db->prepare($query);
		$statement->bindValue(':updateDate', $date);
		$statement->bindValue(':userId',  $userId);
		$statement->bindValue(':recipeId',  $id);

		$statement->execute();


		$statement = $db->prepare('UPDATE ingredients SET deletedAt = :updateDate, deletedBy = :userId WHERE recipeId = :recipeId');
			
		// Then, bind the values
		$statement->bindValue(':updateDate', $date);
		$statement->bindValue(':userId',  $userId);
		$statement->bindValue(':recipeId',  $id);

		$statement->execute();

	$statement = $db->prepare('UPDATE intstructions SET deletedAt = :updateDate, deletedBy = :userId WHERE recipeId = :recipeId');
	// Then, bind the values
	$statement->bindValue(':updateDate', $date);
		$statement->bindValue(':userId',  $userId);
		$statement->bindValue(':recipeId',  $id);

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

