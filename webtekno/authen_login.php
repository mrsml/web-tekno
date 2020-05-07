<?php
require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])) {

    // Degiskenlere gönderilecek ifadeler atandı
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];

    // TABLO KONTROL EDILIYOR
    $query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        header("refresh:2;url=index.php");
        echo 'Hosgeldiniz';
        exit;
    } else {
        header("refresh:2;url=login.php");
        echo 'Girdiginiz bilgilerden bazilari hatali.';
        exit;
    }
}
