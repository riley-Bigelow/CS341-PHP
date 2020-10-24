--week4 prove assignment
CREATE TABLE users (
	userId 			SERIAL 			NOT NULL PRIMARY KEY,
	username 		VARCHAR(100) 	NOT NULL UNIQUE,
	password 		VARCHAR(100) 	NOT NULL,
	display_name 	VARCHAR(100) 	NOT NULL
);

CREATE TABLE recipes (
recipeId		SERIAL							PRIMARY KEY,
recipeName		VARCHAR(100)					NOT NULL,
servings 		int ,
estimatedCost 	money,
isPlanned 		boolean 						NOT NULL,
createdAt 		timestamp 						NOT NULL,
createdBy		int references users(userId) 	NOT NULL,
deletedAt 		timestamp,
deletedBy		int references users(userId)
);



CREATE TABLE ingredients (
ingredientsId	SERIAL								PRIMARY KEY,
recipeId		int  references recipes(recipeId)	NOT NULL,
ingredientName	varchar								NOT NULL,
amount			VARCHAR(100)						NOT NULL,
measurement		VARCHAR(100)						NOT NULL,
createdAt 		timestamp 							NOT NULL,		
createdBy		int references users(userId) 		NOT NULL,
deletedAt 		timestamp,
deletedBy		int references users(userId)
);

CREATE TABLE instructions (
instructionsId		SERIAL							PRIMARY KEY,
recipeId			int	references recipes(recipeId)	NOT NULL,
instructions		text							NOT NULL,
createdAt 			timestamp 							NOT NULL,	
createdBy			int references	 users(userId) 		NOT NULL,
deletedAt 			timestamp,
deletedBy			int references users(userId)
);

--User data inserts 
INSERT INTO users (userId,username,password,display_name) VALUES (DEFAULT, 'Dev1','1234Abcd','Development');

-- recipes data inserts 
INSERT INTO recipes (recipeId,recipeName,servings,estimatedCost,isPlanned,createdAt,createdBy) 
VALUES (DEFAULT, 'Mac & Cheese',8,10.00,'T',Now(),1);
INSERT INTO recipes (recipeId,recipeName,servings,estimatedCost,isPlanned,createdAt,createdBy) 
VALUES (DEFAULT, 'Broccoli Soup',4,7.00,'T',Now(),1);
INSERT INTO recipes (recipeId,recipeName,servings,estimatedCost,isPlanned,createdAt,createdBy) 
VALUES (DEFAULT, 'Surf & Turf',2,20.00,'F',Now(),1);



-- ingredients data inserts 
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,1,'Macaroni Noodles','2','Cup(s)',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,1,'Milk','1/2','Cup(s)',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,1,'Butter','2','TBS',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,1,'Cheese','2','Cup(s)',Now(),1);


INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,2,'Leek','1','',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,2,'Broccoli','2/3','Lbs',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,2,'Water','2','Cup(s)',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,2,'Cream Cheese','7','Oz',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,2,'Heavy Cream','1','Cup(s)',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,2,'Garlic Clove','1','',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,2,'Black Pepper','1/2','tsp',Now(),1);

INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,3,'Steak','2','',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,3,'Shrimp','2','Lbs',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,3,'Garlic Clove','1','',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,3,'Black Pepper','1/2','tsp',Now(),1);
INSERT INTO ingredients (ingredientsId,recipeId,ingredientName,amount,measurement,createdAt,createdBy) 
VALUES (DEFAULT,3,'Butter','2','TBS',Now(),1);

--instructions data inserts
INSERT INTO instructions(instructionsId,recipeId,instructions,createdAt,createdBy)
VALUES(DEFAULT,2,'Rinse the leek thoroughly and chop finely, both the green and the white parts. Cut off the core of the broccoli and slice thinly.',Now(),1);

INSERT INTO instructions(instructionsId,recipeId,instructions,createdAt,createdBy)
VALUES(DEFAULT,1,'Boil Noodles in water and drain when done. Mix in all other ingredients',Now(),1);

INSERT INTO instructions(instructionsId,recipeId,instructions,createdAt,createdBy)
VALUES(DEFAULT,3,'Cook steak to desired level. Sautee shrimp in garlic and butter',Now(),1);


\pset pager off
heroku pg:psql