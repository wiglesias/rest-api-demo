<?php

/*
 * SETTINGS!
 */
$databaseName = 'rest_api_demo';
$databaseUser = 'root';
$databasePassword = '';
/*
 * CREATE THE DATABASE
 */
$pdoDatabase = new PDO('mysql:host=localhost', $databaseUser, $databasePassword);
$pdoDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDatabase->exec('CREATE DATABASE IF NOT EXISTS rest_api_demo');
/*
 * CREATE THE TABLE
 */
$pdo = new PDO('mysql:host=localhost;dbname='.$databaseName, $databaseUser, $databasePassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// initialize the table
$pdo->exec('DROP TABLE IF EXISTS users;');
$pdo->exec('CREATE TABLE `users` (
 `user_id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT "",
 `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT "",
 `user_status` int(11) NOT NULL DEFAULT 0,
 PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
/*
 * INSERT SOME DATA!
 */
$pdo->exec('INSERT INTO users
    (username, user_email, user_status) VALUES
    ("Nika", "nika@bitem.cat", 0)'
);
$pdo->exec('INSERT INTO users
    (username, user_email, user_status) VALUES
    ("Nuka", "nuka@tortosa.cat", 1)'
);
$pdo->exec('INSERT INTO users
    (username, user_email, user_status) VALUES
    ("Neska", "neska@tortosa.cat", 1)'
);
$pdo->exec('INSERT INTO users
    (username, user_email, user_status) VALUES
    ("Nuvol", "nuvol@tortosa.cat", 0)'
);
echo 'Ding!';
