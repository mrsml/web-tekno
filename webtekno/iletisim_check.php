<?php
require('db_connect2.php');

if (isset($_POST['userid']) and isset($_POST['passid']) and isset($_POST['username']) and isset($_POST['address']) and isset($_POST['country']) and isset($_POST['zip']) and isset($_POST['email']) and isset($_POST['gender'])) {

    // Degiskenlere gönderilecek ifadeler atandı
    $username = $_POST['userid'];
    $password = $_POST['passid'];
    $isim = $_POST['username'];
    $adres = $_POST['address'];
    $ulke = $_POST['country'];
    $posta = $_POST['zip'];
    $email = $_POST['email'];
    $cinsiyet = $_POST['gender'];
    $dil = $_POST['lang'];
    $password = $_POST['desc'];

    // TABLO KONTROL EDILIYOR
    mysqli_query($connect,"INSERT INTO 'user_information' ('username', 'Password', 'isim', 'adres', 'ulke', 'posta', 'email', 'cinsiyet', 'dil', 'ozet') VALUES ('username','password','isim','adres','ulke','posta','email','cinsiyet','dil','ozet')");

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
