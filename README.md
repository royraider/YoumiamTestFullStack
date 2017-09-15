YoumiamTestFullStack
====================

Test de FullStack Youmiam

## Question 0 :
Install Symfony and your environement    

## Question 1 : 
Fix the homepage.    
The homepage is broken. Find why.    

## Question 2 : 
Fix the page `/like/*`   
implement the function findRecipesByMinLikes    
The function findRecipesByMinLikes should return Recipes that have more than `*` likes and order them by likes number DESC    

## Question 3 : 
Create the controller method for the page `/name/*`   
This page should show recipes that contains `*` in their names    
This page should use findRecipesByName    

## Question 4 : 
Update `/like/*` function :     
Create route `/like/*/*`    
The first parameter still is the minimum like number    
The second parameter is the recipes number limit    
The second parameter should be optional    

## Question 5 : 
Update the view :     
On deskstop Your view should contain 4 to 7 "vignette - web" by row. (depending on the screen width)
On mobile Your view should contain 1 "vignette - mobile" by row.
The "nouveau" text must be display only if the recipe is less than 10month old
If you didn't manage to debug the homepage, you could use the /order-date page. 
You can find the "like.png" in "YoumiamTestFullStack/src/AppBundle/Resources/public/images/like.png"

## Question 6 : 
Add buttons to sort the recipes ( By nb_likes, by date and randomly )    
This should not reload a page.    
You could do this however you want.    
