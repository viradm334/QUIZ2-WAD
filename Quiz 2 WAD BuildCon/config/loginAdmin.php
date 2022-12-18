<?php

session_start();

include 'config/connector.php';

$error = '';
$email = '';
$ingataku = '';

if(isset($_COOKIE['cookie_email'])){
  $cookie_email = $_COOKIE['cookie_email'];
  $cookie_password = $_COOKIE['cookie_password'];

  $sql1 = "select * from admin where email = '$cookie_email'";
  $q1 = mysqli_query($koneksi, $sql1);
  $r1 = mysqli_fetch_array($q1);

  if($r1['password'] == $cookie_password){
    $_SESSION['session_email'] = $cookie_email;
    $_SESSION['session_password'] = $cookie_password;
  }
}

if(isset($_SESSION['session_email'])){
  header("location:adminHome.php");
  exit();
}

if (isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $ingataku = $_POST['ingataku'];

  if($username == '' or $password == ''){
    $error .= "<li>Silahkan masukkan username dan password</li>";
  }else{
    $sql4 = "select * from admin where email = '$email'";
    $q4 = mysqli_query($koneksi, $sql4);
    $r4 = mysqli_fetch_array($q4);

    if($r4['email'] == ''){
      $error .= "<li>Email tidak terdaftar</li>";
    }elseif($r4['password'] != $password){
      $error .= "<li>Password Salah</li>";
    }

    if(empty($error)){
      $_SESSION['session_email'] = $email;
      $_SESSION['session_password'] = $password;

      if($ingataku == 1){
        $cookie_name = "cookie_email";
        $cookie_value = $email;
        $cookie_time = time() + (60 * 60 * 24 * 30);
        setcookie($cookie_name, $cookie_value, $cookie_time, "/");

      if($ingataku == 1){
        $cookie_name = "cookie_password";
        $cookie_value = $password;
        $cookie_time = time() + (60 * 60 * 24 * 30);
        setcookie($cookie_name, $cookie_value, $cookie_time, "/");
      }
      header("location:adminHome.php");
    }
  }else{
    echo $error;
  }
}
}
?>