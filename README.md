# Static-Minify

Add a CodeIgniter minify controller to handle your static content.

This script is using Minify (currently 2.1.3)
Minify is a PHP5 app that helps you follow several of Yahoo!'s Rules for High Performance Web Sites.
Read more : http://code.google.com/p/minify/

Features:

* compress css/js (or other if wanted) files using Minify script
* cache the compressed file (using Minify cache or Phil's CodeIgniter cache lib, see http://philsturgeon.co.uk/code/codeigniter-cache)
* compress a group of js/css files into one (declare your group of file in config/minify.php
* give the proper HTTP headers with custom expires (set in your config).


## Installation

1. copy and paste the files : 

Copy and paste config/minify.php to your config directory
Copy and paste controllers/min.php to your controller directory (could be in module if you are using CodeIgniter MX).
Copy and paste third_party to your third_party directory (contain minify_2.1.3 from google)

Note: you could rename min to whatever you wanted.

2. Set the proper route to handle your static content.

In your config/route.php :

$route['js/(:any)'] = "min/$1";
$route['css/(:any)'] = "min/$1";

2.1. Set proper route if you have redirect to remove index.php

If you have any redirect in your apache to remove index.php from CI url, like:

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    RewriteCond %{REQUEST_URI} ^system.*
    RewriteRule ^(.*)$ /index.php?/$1 [L]
    RewriteCond %{REQUEST_URI} ^application.*
    RewriteRule ^(.*)$ /index.php?/$1 [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?/$1 [L]
</IfModule>

Please check the config/route-example.php file. The references to js and or css files have a .min added
before the extension to link to a not existent file. The modified routes permit to call the min controller
with the real file url.

3. configure the static-minify config

Open config/minify.php and change the settings to your convenience.

## Improvements

This piece of code could be really improved and is a working draft.
For instance call the propper minify script depending on the file type.
For now I let Minify doing this job.
Also some more config could be set if users want to minify static html, json or some other static content.
One could edit controller/config for that purpose.

## NOTE

In config/minify.php if you remove css_groups or js_groups the controller fails!
