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

?>
        

<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
<head>
  <meta charset="UTF-8">
  <title>My Cookbook</title>
  <link rel="stylesheet" href="styles.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
	<body>
		<div class="grid-container">
			<div class= "middle">
				<div class ="content">
					<div class="header" id = "home"> 
						<div class= "title">
							<h4>My Cookbook</h4>
						</div>
					</div>
					<div class="topnav">
						<a href="cookBook.php"  id="cookbook"  class="button"><img src="cookbook.png" style="width:42px;height:42px;"><br>CookBook</a>
						<a href="mealPlan.php" id ="mealplan"  class="button"><img src="mealplan.png" style="width:42px;height:42px;"><br>Meal Planner</a>
						<a href="groceryList.php" id="glist"     class="button"><img src="grocerylist.png" style="width:42px;height:42px;"><br>Grocery List</a>
						<a href="addRecipe.php" class="button" id='add'><img src="addrecipe.png" style="width:42px;height:42px;"><br>Add Recipe</a>
					</div>
					<div class="display">
						<ul id="recipeList" class = "results">
							<li>
								<?php 
										$statement = $db->prepare('SELECT recipename, servings FROM recipes Where deletedat IS NULL AND recipeid = :id');
										$statement->execute(array(':id' => $id));
										while ($row = $statement->fetch(PDO::FETCH_ASSOC))
										{
											echo '<h2>'. $row['recipename'] . '</h2>'.
												 '<div>
													 <h3> Servings:</h3>'.' '. $row['servings']. 
												  '</div>';
										}
								?>
								
								<div>
									<h3>Instructions:</h3>
									<?php
										$statement = $db->prepare('SELECT instructions FROM instructions Where deletedat IS NULL AND recipeid = :id');
										$statement->execute(array(':id' => $id));
										while ($row = $statement->fetch(PDO::FETCH_ASSOC))
										{
											echo '<p>'. $row['instructions'] . '</p>';
										}
									?>
								</div>
								<div>
									<h3>Ingreidents:</h3>
									<ul>
									<?php
										$statement = $db->prepare('SELECT amount, measurement, ingredientname FROM ingredients Where deletedat IS NULL AND recipeid = :id');
										$statement->execute(array(':id' => $id));
                               			 while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                                		{
											echo '<li>' .
									   				'<p>'. $row['amount'].' '.$row['measurement'].' '.$row['ingredientname'] . '</p>'.
												 '</li>';
                                		}
                           			 ?>
									</ul>
								</div>
							</li>
						</ul>
					</div>			
				</div>
			</div>
		</div>
	</body>
</html>