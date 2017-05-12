<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/db_connector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/functions.php';
require $_SERVER['DOCUMENT_ROOT'] . '/src/private/phpscripts/validation_functions.php';

if (isset($_POST['submit'])) {
    if ($_POST['password'] === $_POST['password_repeat']) {

        $username = mysqlPrep($_POST['username']);
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = isset($_GET['id']) ?
            "UPDATE users SET username = '{$username}' users.password = '{$hashedPassword}' 
            WHERE id = {$_GET['id']};"
            :
            "INSERT INTO users (username, password) 
            VALUES ('{$username}', '{$hashedPassword}');";

        if ($result = $mysqli->query($sql)) {
            $result->free();
            $mysqli->close();
            redirect('/src/admin/admin.php');
        } else {
            $mysqli->close();
            redirect('/src/admin/form_add_admin.php');
        }
    } else {
        redirect('/src/admin/form_add_admin.php');
    }
} else {
    redirect('/src/admin/form_add_admin.php');
}