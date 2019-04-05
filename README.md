Skip to content
 
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@jongrover 
0
2 0 jongrover/building-a-wordpress-theme-from-scratch
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights  Settings
building-a-wordpress-theme-from-scratch
/
README.md
or cancel
  
1
# Building a WordPress Theme From Scratch
2
​
3
This is a finished example of a WordPress app featuring a custom built theme where the theme is built using JS and CSS from the Bootstrap v4. Instructions provided are specific to using Mac ecosystem. I tried to provide relevant links to explanations for Windows users regarding WAMP vs MAMP, but some setup steps may differ. However, all PHP, HTML, CSS, JS code for creating the theme is platform independent and will be the same for both Mac and Windows users.
4
​
5
## Setup Local Server and Install WordPress
6
​
7
1. Download and install a code editor (if necessary) such as [Atom](https://atom.io).
8
2. Download an app to spin up a local PHP Apache Server such as [MAMP](https://www.mamp.info/en/) for Mac or [WAMP](http://www.wampserver.com/en/) for Windows.
9
3. Download Wordpress from [wordpress.org](https://wordpress.org/)
10
4. Open MAMP (or WAMP) App and click Start Servers. Please note: The following steps assume MAMP on Mac.
11
5. When your browser opens under MySQL heading click the phpMyAdmin link.
12
6. After logging into phpMyAdmin in the left hand navigation panel click new and under Create Database, name your database something, I called mine `wp_dev_db` (make sure there are no spaces in the name you choose). Then click Create. Then in the top navigation click Start. Let's leave this browser tab open and refer to the MySQL database details from here later on.
13
7. Move into the downloaded WordPress folder using Terminal $ `cd ~/Downloads/wordpress` or optionally you can rename the folder first if you like, I renamed mine building-a-wordpress-theme-from-scratch and moved it to my Development folder, I then ran the command $ `cd ~/Development/building-a-wordpress-theme-from-scratch`.
14
8. Rename __wp-config-sample.php__ to __wp-config.php__ with $ `mv wp-config-sample.php wp-config.php`.
15
9. Open the site in your code editor I'm using [Atom](https://atom.io) with the command $ `atom .`
16
10. Open __wp-config.php__ and set the database details to point to your local server the following are the instructions for MAMP on Mac directions for Windows may vary at this step so if your own windows instead refer to the instructions for setting up and connecting to databases on [WAMP](http://forum.wampserver.com/list.php?2). Here are the MAMP specific code using the details from the MAMP page we left open in our browser:  
17
```php
18
// ** MySQL settings - You can get this info from your web host ** //
19
/** The name of the database for WordPress */
20
define('DB_NAME', 'wp_dev_db');
21
​
22
/** MySQL database username */
23
define('DB_USER', 'root');
24
​
25
/** MySQL database password */
26
define('DB_PASSWORD', 'root');
27
​
28
/** MySQL hostname */
29
define('DB_HOST', 'localhost:8889');
30
​
31
/** Database Charset to use in creating database tables. */
32
define('DB_CHARSET', 'utf8');
33
​
34
/** The Database Collate type. Don't change this if in doubt. */
35
define('DB_COLLATE', '');
36
```  
37
11. Then visit [https://api.wordpress.org/secret-key/1.1/salt/](https://api.wordpress.org/secret-key/1.1/salt/) and copy the generated keys and paste them into your __wp-config.php__ file under the section labeled Authentication Unique Keys and Salts.
38
12. Also in __wp-config.php__ set debug from false to true `define('WP_DEBUG', true);`.
@jongrover
Commit changes
Commit summary 
Update README.md
Optional extended description
Add an optional extended description…
 
  Commit directly to the master branch.
  Create a new branch for this commit and start a pull request. Learn more about pull requests.
 
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
