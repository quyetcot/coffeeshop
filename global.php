<?php
session_start();
const DB_HOST = 'localhost';
const DB_DATABASE = 'duan1';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';


const STATUS_PENDING = 0; //  Chờ duyệt
const STATUS_APPROVED = 1; // Đã duyệt
const STATUS_PAY_SUCCESS = 2; // Thanh toán thành công
const STATUS_CANCELED = 3; // Hủy

if (!function_exists('check_auth')) {
    function check_auth() {
        if (empty($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}