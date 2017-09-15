YoumiamTestFullStack
====================

## Introduction

Ceci est un test ayant pour but de valider les competences à repondre à un besoin fullstack.    
Nous serons avant tout attentif aux performances, à la scalabilité et à la propreté du code proposé.    

Good luck and Have fun ! :)    
PS: Si une question n'est pas faite, pensez à laisser une petit commentaire pour donner votre idée.    

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
the image link are: 
- http://static.youmiam.com/images/recipe/200x200/ `photo` for Web    
- http://static.youmiam.com/images/recipe/345x220/ `photo` for Mobile

## Question 6 : 
Add buttons to sort the recipes ( By nb_likes, by date and randomly )    
This should not reload a page.    
You could do this however you want.    
