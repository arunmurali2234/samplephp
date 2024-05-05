<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "Arun@1234");
define("DB_NAME", "registered");
$port = 3306; //default port 3306

// Connection
// Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, $port);

// Check connection
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset
if (!mysqli_set_charset($link, "utf8")) {
    die("Error loading character set utf8: " . mysqli_error($link));
}
