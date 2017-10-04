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

1. ...
