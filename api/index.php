<?php

echo "Hello app php with docker";

try {
    $database = new PDO('mysql:host=mysql;dbname=api', 'api', 'api');
    echo "<br> success connection to database";
} catch (\Throwable $th) {
    echo "eror connection to database";
}