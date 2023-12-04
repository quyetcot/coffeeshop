<?php
session_start();
const DB_HOST = 'localhost';
const DB_DATABASE = 'duan1';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

if (!function_exists('check_auth')) {
    function check_auth() {
        if (empty($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}