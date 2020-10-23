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
							<form action="/action_page.php">
								<div class="row">
									<div class="col-25">
										<label for="fname">First Name</label>
									</div>
									<div class="col-75">
									<input type="text" id="fname" name="firstname" placeholder="Your name..">
									</div>
								</div>
								<div class="row">
									<div class="col-25">
									<label for="lname">Last Name</label>
									</div>
									<div class="col-75">
									<input type="text" id="lname" name="lastname" placeholder="Your last name..">
									</div>
								</div>
								<div class="row">
									<div class="col-25">
									<label for="country">Country</label>
									</div>
									<div class="col-75">
									<select id="country" name="country">
										<option value="australia">Australia</option>
										<option value="canada">Canada</option>
										<option value="usa">USA</option>
									</select>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
									<label for="subject">Subject</label>
									</div>
									<div class="col-75">
									<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
									</div>
								</div>
								<div class="row">
									<input type="submit" value="Submit">
								</div>
							</form>
						</div>			
				</div>
			</div>
		</div>
	</body>
</html>