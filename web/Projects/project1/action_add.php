<?php
/**********************************************************
* File: insertTopic.php
* Author: Br. Burton
* 
* Description: Takes input posted from topicEntry.php
*   This file enters a new scripture into the database
*   along with its associated topics.
*
*   This file does NOT do any rendering at all,
*   instead it redirects the user to showTopics.php to see
*   the resulting list.
***********************************************************/

// get the data from the POST
$recipeName = $_POST['txtBook'];
$servings = $_POST['servings'];
$ingredients = $_POST['ingred'];
$quant = $_POST['quant'];
$measure = $_POST['meas'];



 echo "book=$recipeName\n";
 echo "chapter=$ingredients\n";
echo "verse=$quant\n";
echo "content=$measure\n";

// we could (and should!) put additional checks here to verify that all this data is actually provided


/*require("dbConnect.php");
$db = get_db();

try
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

