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
					<div class="mheader" id = "home"> 
						<div class= "title">
							<h4>Add Recipe</h4>
						</div>
					</div>
					<div class="topnav">
						<a href="cookBook.php"  id="cookbook"  class="button"><img src="cookbook.png" style="width:42px;height:42px;"><br>CookBook</a>
						<a href="mealPlan.php" id ="mealplan"  class="button"><img src="mealplan.png" style="width:42px;height:42px;"><br>Meal Planner</a>
						<a href="groceryList.php" id="glist"     class="button"><img src="grocerylist.png" style="width:42px;height:42px;"><br>Grocery List</a>		
						<a href="addRecipe.php" class="button" id='add' style = "background-color: #ffff66"><img src="addrecipe.png" style="width:42px;height:42px;"><br>Add Recipe</a>
					</div>
						<div class="container">
							<form action="action_add.php" method="post">
								<div class="row">
									<div class="col-25">
										<label for="recipeName">Recipe Name:</label>
									</div>
									<div class="col-75">
									<input type="text" id="recipeName" name="recipeName" placeholder="Recipe name.." required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
									<label for="servings">Servings:</label>
									</div>
									<div class="col-75">
									<input type="number" id="servings" name="servings" required min="1">
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="recipeName">Ingredient 1:</label>
									</div>
									<div class="col-75">
										<input type="text" id="ingred1" name="ingred1" placeholder="Ingredient.." required>
										<input type="text" id="quant1" name="quant1" placeholder="quantity.." required>
										<select id="meas1" name="meas1">
											<option value=" "> </option>
											<option value="Cup">Cup</option>
											<option value="Tsb">Tsb</option>
											<option value="tsp">tsp</option>
											<option value="tsp">Lbs</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="recipeName">Ingredient 2:</label>
									</div>
									<div class="col-75">
										<input type="text" id="ingred2" name="ingred2" placeholder="Ingredient..">
										<input type="text" id="quant2" name="quant2" placeholder="quantity..">
										<select id="meas1" name="meas2">
											<option value=" "> </option>
											<option value="Cup">Cup(s)</option>
											<option value="Tsb">Tsb</option>
											<option value="tsp">tsp</option>
											<option value="tsp">Lbs</option>
											<option value="Oz">Oz</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="recipeName">Ingredient 3:</label>
									</div>
									<div class="col-75">
										<input type="text" id="ingred3" name="ingred3" placeholder="Ingredient..">
										<input type="text" id="quant3" name="quant3" placeholder="quantity..">
										<select id="meas1" name="meas3">
											<option value=" "> </option>
											<option value="Cup">Cup</option>
											<option value="Tsb">Tsb</option>
											<option value="tsp">tsp</option>
											<option value="tsp">Lbs</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="recipeName">Ingredient 4:</label>
									</div>
									<div class="col-75">
										<input type="text" id="ingred4" name="ingred4" placeholder="Ingredient..">
										<input type="text" id="quant4" name="quant4" placeholder="quantity..">
										<select id="meas1" name="meas4">
											<option value=" "> </option>
											<option value="Cup">Cup</option>
											<option value="Tsb">Tsb</option>
											<option value="tsp">tsp</option>
											<option value="tsp">Lbs</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="recipeName">Ingredient 5:</label>
									</div>
									<div class="col-75">
										<input type="text" id="ingred5" name="ingred5" placeholder="Ingredient..">
										<input type="text" id="quant5" name="quant5" placeholder="quantity..">
										<select id="meas1" name="meas5">
											<option value=" "> </option>
											<option value="Cup">Cup</option>
											<option value="Tsb">Tsb</option>
											<option value="tsp">tsp</option>
											<option value="tsp">Lbs</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
									<label for="subject">Instructions:</label>
									</div>
									<div class="col-75">
									<textarea id="subject" name="subject" placeholder="Instructions.." style="height:200px" required></textarea>
									</div>
								</div>
								<div class="topnav">
									<input type="submit" value="Add Recipe">
									<input type="reset" value="Clear">
								</div>
							</form>
						</div>			
				</div>
			</div>
		</div>
	</body>
</html>