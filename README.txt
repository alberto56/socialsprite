SOCIAL SPRITE
*************

CSS code and a sprite which you can add to any website, providing you with social network buttons in a variety of sizes.
Open example.html in a browser to see what this does, and examine example.html's code in a text editor.

ISSUES
******

Add your feature requests, bugs and/or suggested patches to https://github.com/alberto56/socialsprite/issues

FEATURES
********

- Five sizes: 16, 24, 32, 53, 64px squares.
- Hovers
- Uses sprite for faster loading
- Extendable (see below).
- Accessible (buttons have text).

USAGE
*****

- start by opening example.html in a browser, and examining its code, to get a feel for this project.
- add sprite.css and sprite.png in the same folder in your website.
- reference sprite.css from your html
- you must add two classes to an element which has display: block (*) for this to work: one class for the size (e.g. social-icon-32 for 32px square) and one for the type (e.g. social-icon-twitter).

(*) If you are adding these classes to an element which has display: inline (most often an "a"), you might want to give it display:block or display:inline-block, or simply add the class social-icon-block

Example: <a href="social-icon-block social-icon-facebook social-icon-64">Facebook</a> will show a 64px-square facebook icon.

See example.html for more examples.

EXTENDING
*********

If you want to add other icons, you need to have access to a web server with php, you need to be confortable adding a line to a php file, and you need to be able to edit psd (Photoshop) files. Do the following:

(1) add the icons in the psd file for all sizes, right after the last icon. (Extend the canvas to the right if necessary).
(2) Open generator.php in a text editor and near the top add your icon to the array of icons, at the end.
(3) Open generator.php in your browser, making sure you're opening it from a web server and not your local file system. It will generate an example usage.
(4) Copy the body code of the web page generated by generator.php and put it instead of example.html
(5) Copy the css code of the web page generated by generator.php and put it in sprite.css

HOMEPAGE
********

https://github.com/alberto56/socialsprite

FILES
*****

Generator.php, when run in a web browser, generates the code found in example.html

sprite.psd contains the social network logos, and is used to create the sprite.png file

example.html shows how this works

sprite.css and sprite.png and the actual files that you should add to your site.


VERSION HISTORY
***************

v. 1.0-alpha3, 1 march, 2012

- added class .social-icon-block, because it's almost always required to make a tags into display: block.

v. 1.0-alpha2, 1 march, 2012

- (fixed) https://github.com/alberto56/socialsprite/issues/1 print button
- (fixed) https://github.com/alberto56/socialsprite/issues/2 background grid for development
- (fixed) https://github.com/alberto56/socialsprite/issues/2 first icon should be a generic one
- (fixed) removed .block class from the sprite.css file

v. 1.0-alpha1, 29 Feb. 2012: initial launch

CONTACT
*******

Albert Albala @alberto56 on twitter

LICENSE FOR THE ICONS
*********************

The printer icon is based based on the printer from http://thedesigninspiration.com/articles/10-free-useful-icons-for-designers/ (license-free) and a generic background from http://icondock.com/free/vector-social-media-icons

URL: http://icondock.com/free/vector-social-media-icons
From the site: "Free to use for whatever purposes".
Thanks to icondock.com for the great work.

LICENSE FOR EVERYTHING ELSE
***************************

See LICENSE.txt