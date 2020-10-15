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
	$ingredient = $_GET['search'];

?>
        

<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
<head>
  <meta charset="UTF-8">
  <title>Search Results</title>
  <link rel="stylesheet" href="styles.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
	<body>
		<div class="grid-container">
			<div class= "middle">
				<div class ="content">
					<div class="header" id = "home"> 
						<div class= "title">
							<h4>Search Results</h4>
						</div>
					</div>
					<div class="topnav">
						<a href="cookBook.php"  id="cookbook"  class="button"><img src="cookbook.png" style="width:42px;height:42px;"><br>CookBook</a>
						<a href="mealPlan.php" id ="mealplan"  class="button"><img src="mealplan.png" style="width:42px;height:42px;"><br>Meal Planner</a>
						<a href="groceryList.php" id="glist"     class="button"><img src="grocerylist.png" style="width:42px;height:42px;"><br>Grocery List</a>
						<!--<a href="addRecipe.php" class="button" id='add'><img src="addrecipe.png" style="width:42px;height:42px;"><br>Add Recipe</a>-->
						<div class="search-container">
							<form action="search.php" method="POST">
								 <input type="text" id='search' placeholder="Search for a recipe.." name="search" required>
								  <button id="searchBtn">Search</button>
							</form>
						</div>	
					</div>
					<div class="display">
						<ul id="recipeList" class = "results">
							<?php
								$statement = $db->prepare('SELECT DISTINCT recipename FROM ingredients INNER JOIN recipes ON ingredients.recipeid = recipes.recipeid WHERE  recipes.deletedat IS NULL and ingredients.deletedat IS NULL AND ingredient = :ingredient');
								$statement->execute(array(':ingredient' => $ingredient));
                               	 while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                                {
									echo '<li class="item"'. 'id="'. $row[recipeid].'">' .
											'<a href="details.php?id='.$row[recipeid].'">'.
									   			'<p>'. $row['recipename'] . '</p>'.
											'</a>'.
										'</li>';
                                }
                           	?>
						</ul>
					</div>			
				</div>
			</div>
		</div>
	</body>
</html>