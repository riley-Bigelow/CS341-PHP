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
createdAt 		timestamp 						NOT NULL,
createdBy		int references users(userId) 	NOT NULL,
deletedAt 		timestamp,
deletedBy		int references users(userId)
);

CREATE TABLE ingredients (
ingredientsId	SERIAL								PRIMARY KEY,
recipeId		int  references recipes(recipeId)	NOT NULL,
ingredientName	varchar								NOT NULL,
amount			VARCHAR(100)							NOT NULL,
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
