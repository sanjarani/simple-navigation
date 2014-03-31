simple-navigation
=================

simple navigation menu for begginers

I saw an article in photoshop-plus that made this navigation menu with image.
So, I wrote this simple code for begginers that made by pure HTML and CSS...

-WHY?

-because:
There will be sent a request to server for every single image and etc, and this will be made your site harder to load,
specially for countries like mine that have very slow internet...
There are ( 2 ) files named `simpleNavigation.php` and `main.php`.
`simpleNavigation.php works just like the photoshop-plus sample but it contains a problem:

`Element a NOT allowed to be as child of ul element so your page will have W3C validity ERROR in this type
I seriously suggest you to use "main.php" instead of this file.`

Using this code is quite easy;

just copy and paste html and css parts and address the link tags to your site's pages.

if you want your navigation menu in CENTER in all resolutions, use the second file, names `makeCenter.js`, 
else, just ignore `.js` files.

BECAREFUL that include jQuery library inside your <head> </head> in html and then include `makeCenter.js` .

you can download jQuery library in this link: http://jquery.com/download/

or use CDN that I used in that `main.php` :
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

Sample:

<head>

<title>main Page</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type="text/javascript" src="makeCenter.js"></script>

</head>

DEMO:
http://jsbin.com/tulitugo/1/edit?html,css,js,output
