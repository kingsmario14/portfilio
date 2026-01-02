<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = trim($_POST["email"]);
    $password =trim($_POST["password"]);
    

    $connect = new mysqli('localhost', 'root', "", 'portfolios');
    $result = $connect->query("SELECT password FROM portfolio where email = '$email'");
    if($result->num_rows > 0){
    $converted_result = $result->fetch_assoc();
    $hashed_password = $converted_result["password"];
    if(password_verify($password, $hashed_password)){
        echo("Login successfully");
    }else{
        echo("Incorrect Login");
    }

}else{
    echo("Users not found");
}
},
?>