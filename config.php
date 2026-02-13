<?php

// return [

// "database" => [
//   "host" => "localhost",
//   "user" => "root",
//   "password" => "",
//   "dbname" => "pagExamenes",
// ],
// ];

return [
    "database" => [
        "host"     => getenv('MYSQLHOST') ?: "localhost",
        "user"     => getenv('MYSQLUSER') ?: "root",
        "password" => getenv('MYSQLPASSWORD') ?: "",
        "dbname"   => getenv('MYSQLDATABASE') ?: "pagExamenes",
        "port"     => getenv('MYSQLPORT') ?: "3306",
    ],
];