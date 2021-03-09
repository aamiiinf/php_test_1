<?php
require_once "config.php";

$nameErr = $emailErr = $allErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $sql = "SELECT * FROM `admin`";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $allData = $row['username'] === $username && $row['password'] === $password;
    if ($allData) {
        header('Location:../admin/admin.php');
    }else{
        if (isset($_REQUEST['btn_send_admin'])){
            if (!$allData && !empty($username) && !empty($password)){
                $allErr = "نام کاربری یا پسورد اشتباه است";
            }
            if (empty($username)) {
                $nameErr = "فیلد نام کاربری نمی تواند خالی باشد";
            }

            if (empty($password)) {
                $emailErr = "فیلد پسورد نمیتواند خالی باشد";
            }
        }

    }
}
