# Building a WordPress Theme From Scratch

Finished example WordPress app featuring a custom built theme. Instructions provided are specific to using Mac ecosystem. I tried to provide relevant links to explanations for Windows users, but many setup steps will differ. However all PHP, HTML, CSS code for creating the theme is platform independant and will be the same for both Mac and Windows users.

## Setup Local Server and Install WordPress

1. Download and install a code editor (if necessary) such as [Atom](https://atom.io).
2. Download app to spin up a local PHP Apache Server such as [MAMP](https://www.mamp.info/en/) for Mac or [WAMP](http://www.wampserver.com/en/) for Windows.
3. Download Wordpress from [wordpress.org](https://wordpress.org/)
4. Open MAMP (or WAMP) App and click Start Servers. Please note: The following steps assume MAMP on Mac.
5. When your browser opens under MySQL heading click the phpMyAdmin link.
6. After logging into phpMyAdmin in the left hand navigation panel click new and under Create Database name your database something I called mine `wp_dev_db` (make sure there are no spaces in the name you choose). Then click Create. Then in the top navigation click Start. Let's leave this browser tab open and refer to the MySQL database details from here later on.
7. Move into the downloaded WordPress folder using Terminal $ `cd ~/Downloads/wordpress` or optionally you can rename the folder first if you like, I renamed mine building-a-wordpress-theme-from-scratch and moved it to my Development folder, I then ran the command $ `cd ~/Development/building-a-wordpress-theme-from-scratch`.
8. Rename __wp-config-sample.php__ to __wp-config.php__ with $ `mv wp-config-sample.php wp-config.php`.
9. Open the site in your code editor I'm using [Atom](https://atom.io) with the command $ `atom .`
10. Open __wp-config.php__ and set the database details to point to your local server the following are the instructions for MAMP on Mac directions for Windows may vary at this step so if your own windows instead refer to the instructions for setting up and connecting to databases on [WAMP](http://forum.wampserver.com/list.php?2). Here are the MAMP specific code using the details from the MAMP page we left open in our browser:  
```php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_dev_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
```  
11. Then visit [https://api.wordpress.org/secret-key/1.1/salt/](https://api.wordpress.org/secret-key/1.1/salt/) and copy the generated keys and paste them into your __wp-config.php__ file under the section labeled Authentication Unique Keys and Salts.
12. Also in __wp-config.php__ set debug from false to true `define('WP_DEBUG', true);`.
13. Then back to MAMP (WAMP instructions instead see their docs or forum) App click Stop Servers. Then click Preferences.
14. Click Web Server tab and set the document root to point to the folder for your WP (WordPress) Site. On Mac in MAMP you click the folder icon with three dots on it to browse for the root folder. It is important that it is set to the folder that contains the wp-config.php file. than click OK. Then click to Start Servers again.
15. In your browser set the URL to `http://localhost` if everything was done correctly this should forward to `http://localhost/wp-admin/install.php`.
16. Select your desired install language and click Continue.
17. On the next page set a Site Title I choose `WP Theme From Scratch`. Also set a username typically this is `admin`. Then set a password you will remember. Also set an admin email. Then click Install WordPress button.
18. On the next page click Log In and use your credentials to login to your site. If all goes well you should see the admin dashboard for your site.
19. Run any updates it suggests under Dashboard > updates

## Creating A Custom Theme

1. In Terminal (or in code editor) head to the theme folder at __wp-content/themes/__ $ `cd wp-content/themes`.
2. Create a new theme folder using Terminal $ `mkdir custom-theme` or via Atom by right clicking on the themes folder and select create new folder. Note: you can name your theme folder anything you like I choose custom-theme as a generic name for this example.
3. Inside __custom-theme__ create a __css__ folder $ `mkdir custom-theme/css` and also create a _js__ folder $ `mkdir custom-theme/js`.
4. Move into your custom theme folder $ `cd custom-theme` and create three files __index.php__ and __css/style.css__ and __js/app.js__$ `touch index.php css/style.css js/app.js`.
5. In __css/style.css__ in your code editor add the following code:
```css
/*
Theme Name: Custom Theme
Author: Jonathan Grover
Description: Example Theme from Github Repo (https://github.com/jongrover/building-a-wordpress-theme-from-scratch)
Version: 0.0.1
Tags: bootstrap
*/

h1 {
  color: red;
}
```  
Note: You can change any of the settings in the CSS comment at the top as you wish these will eventually appear in your admin dashboard view under Appearance>Themes

6. In __js/app.js__ in your code editor add the following code:  
```javascript
console.log('Hello from your theme!');
```
7. In __index.php__ in your code editor put the code:  
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo get_bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
</head>
<body>
  <h1><?php echo get_bloginfo('name'); ?></h1>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js"></script>
</body>
</html>
```  
Note that in our title element we put `<title><?php echo get_bloginfo('name'); ?></title>` this uses the get_bloginfo() function to print the name of our site that we first set when we installed WordPress. We also printed this site name in the heading inside our page body. We used this function again to link to our CSS and JS files by making use of `<?php echo get_bloginfo('template_directory'); ?>` which was essential for printing the correct file path to our assets. For full details of what can be done with this function take a look at the [docs here](https://developer.wordpress.org/reference/functions/get_bloginfo/).)

8. Now head back to the admin dashboard in your browser and click Appearance>Themes
9. Under Custom Theme (or whatever your theme name you set was) click Activate.
10. Then visit `localhost` in your browser to see your site. It should say your site title in an h1 element and the loaded CSS should style the text color as red. Additonally if you view the JavaScript console using the Devloper Tools you should see it print "Hello from your theme!".
11. Now that our theme is working let's delete the previous theme folders (you don't have to do this, but I won't be using the default themes any longer and they are just taking up space.) I'll get rid of __twentyseventeen__, __twentysixteen__, and __twentyfifteen__.

## Adding Bootstrap

1. ...
