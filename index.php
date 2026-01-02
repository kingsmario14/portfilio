<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password =trim($_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $connect = new mysqli('localhost', 'root', "", 'portfolios');
    $connect->query("INSERT INTO portfolio(name, email, password) VALUES('$name', '$email', '$hashed_password')");
    echo("Registration users saved successfully");

}else{
    echo("Invalid request Method");
}

?>