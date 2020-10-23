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





/*try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
//	$query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
//	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':book', $book);
	$statement->bindValue(':chapter', $chapter);
	$statement->bindValue(':verse', $verse);
	$statement->bindValue(':content', $content);

	$statement->execute();

	// get the new id
	$scriptureId = $db->lastInsertId("scripture_id_seq");

	// Now go through each topic id in the list from the user's checkboxes
	foreach ($topicIds as $topicId)
	{
		echo "ScriptureId: $scriptureId, topicId: $topicId";

		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');

		// Then, bind the values
		$statement->bindValue(':scriptureId', $scriptureId);
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

