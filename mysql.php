<?php

const MYSQL_HOST = '10.96.16.17';
const MYSQL_PORT = 3308;
const MYSQL_NAME = 'bdd-cv';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';

try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $exception) {
    die('Erreur : '.$exception->getMessage());
}