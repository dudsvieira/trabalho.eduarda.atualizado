<?php
session_start();
if((!isset($_SESSION['email'])== true)and(!isset($_SESSION['senha'])== true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}else{

    $logado= $_SESSION['email'];
}
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #ff0000;
    overflow: hidden;
}

.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.content {
    padding: 20px;
}
</style>
</head>
<body>
    <div class= 'navbar'>
        <a class="activate" htef="#home">Pagina Inicial</a>
        <a href="news">Minha Conta</a>
        <a href="contact">Atendimento</a>
        <a styles="float:ringt" href="sair.php"></a>
</div>
<div style= "padding: 20px"> 
<div class= "content">
    <?php
    echo "<h2> Seja bem vindo ao sistema<br>$logado </h2>";
    ?>
</body>
</html>