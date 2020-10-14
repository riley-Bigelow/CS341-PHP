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
						<a href="#home"  id="cookbook"  class="button"><img src="cookbook.png" style="width:42px;height:42px;"><br>CookBook</a>
						<a href="#home" id ="mealplan"  class="button"><img src="mealplan.png" style="width:42px;height:42px;"><br>Meal Planner</a>
						<a href="#home" id="glist"     class="button"><img src="grocerylist.png" style="width:42px;height:42px;"><br>Grocery List</a>
						<a class="button" id='clear'><img src="refresh-icon.png" style="width:42px;height:42px;"><br>Reset Data</a>
						<div class="search-container">
							<form >
								 <input type="text" id='search' placeholder="Search for a recipe.." name="search" required>
								  <button id="searchBtn">Submit</button>
							</form>
						</div>		
					</div>
					<div class="display">
				
						<ul id="recipeList" class = "results">
						<!-- your task list should be build here. -->
						</ul>
					
					</div>			
				</div>
			</div>
		</div>
	</body>
</html>