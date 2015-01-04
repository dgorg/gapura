How to set up for developers
----------------------------

1. Set `ENVIRONMENT` to `development`. Copy `env-sample.php` to `env.php`. In `env.php`, change `define('ENVIRONMENT', 'production');` to `define('ENVIRONMENT', 'development');`. NEVER COMMIT `env.php`.

2. Copy folder `application/config/dev_template` to `application/config/development`. Set up all config files in folder `application/config/development`. Set value of variables marked /* SETUP */ according to their instruction. Folder `application/config/development` and any file inside it MUST NEVER BE COMMITED or every developer will hate you :) .

3. Copy `blog/wp-config-sample.php` to `blog/wp-config.php`. Set value of variables inside the file (just like when you installing Wordpress). NEVER COMMIT the `wp-config.php` file.



How to set up code for production
----------------------------------

1. Set `ENVIRONMENT` to `production`. Copy `env-sample.php` to `env.php`. In `env.php`, make sure the code is `define('ENVIRONMENT', 'production');`.

2. Copy folder `application/config/dev_template` to `application/config/production`. Set up all config files in folder `application/config/production`. Set value of variables marked /* SETUP */ according to their instruction. Folder `application/config/production` and any file inside it MUST NEVER BE COMMITED.

3. Copy `blog/wp-config-sample.php` to `blog/wp-config.php`. Set value of variables inside the file (just like when you installing Wordpress). NEVER COMMIT the `wp-config.php` file.

4. Code is ready to be deployed to production server (usually via FTP).