<?php
// MySQL settings
define('YOURLS_DB_USER', 'dbshort_user'); // Replace with your MySQL username
define('YOURLS_DB_PASS', 'nY49Wr3ttz9NCt5cdSMUT5UrFRdJz2pU'); // Replace with your MySQL password
define('YOURLS_DB_NAME', 'dbshort'); // Replace with your database name
define('YOURLS_DB_HOST', 'postgresql://dbshort_user:nY49Wr3ttz9NCt5cdSMUT5UrFRdJz2pU@dpg-cs5fg0d6l47c73f4aqq0-a.oregon-postgres.render.com/dbshort'); // Usually 'localhost'
define('YOURLS_DB_PREFIX', 'yourls_'); // Prefix for YOURLS tables

// Site options
define('YOURLS_SITE', 'https://shortcute.onrender.com/yourls/'); // Replace with your domain
define('YOURLS_PRIVATE', true); // Set to true to protect admin area with a login
define('YOURLS_UNIQUE_URLS', true); // Allow only one short URL per long URL
define('YOURLS_COOKIEKEY', 'EP8@d[mDMbR1xR[BBS4tgYvk$wZ-SL|rL|OnEw)R'); // Generate a unique key at yourls.org/cookie
$yourls_user_passwords = array(
    'admin' => 'phpass:!2y!10!Cjoo4rlB8LxRKa/0TyMWa.GmeqG9GIB/wdXuT2R1K1dHxtA2sdPp2' /* Password encrypted by YOURLS */ , // Replace with your username and password
);

// URL shortening settings
define('YOURLS_URL_CONVERT', 36); // Controls how short URLs are generated
$yourls_reserved_URL = array('keyword1', 'keyword2'); // Add any reserved keywords here

// Optional settings
define('YOURLS_PRIVATE_INFOS', false); // Control access to stat pages
define('YOURLS_PRIVATE_API', false); // Control access to the API
define('YOURLS_NOSTATS', true); // Disable logging of redirects

// Protecting your config file
// Change permissions of this file to 400, 440, or 600 after saving
?>
