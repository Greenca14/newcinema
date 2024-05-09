<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <title>Cinema</title>
    <style>
      *{
        box-sizing: border-box;
      }
      body {
        padding: 0;
        margin: 0;
        background-color: #eaeaea;
      }

      .card{
        padding: 20px;
        background: white;
        border-radius: 20px;
        margin-top: 20px;
        font-family: 'Montserrat', sans-serif;
        width: 350px;
      }

      .card-title{
        font-size: 18px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
      }

      .container{
        padding: 10px;
        background-image: url("fonkino.jpg");
        background-repeat: no-repeat;
        height: calc(90vh - 26px);
        background-size: cover;
      }
 
      .texthold{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 60px;
        flex-wrap: wrap;

      }

      .top > * {
        margin: 0;
      }

      .top{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
        background-color: black;
        padding: 15px;
      }
      .toptext{
        color: white;
        font-family: 'Montserrat', sans-serif;
      }
      .another_text{
        position: absolute;
        left: 82%;
        top: 90%;
        font-family: 'Montserrat', sans-serif;
        color: white;
      }
    </style>
</head>

<body>

<div class="container">
  <div class="texthold">
    <div class="card">
        <div class="card-title">
            О нашей компании.
        </div>
        <div class="card-body">
            Наша компания работает с 2011 года. Мы предлагаем вам самые выгодные предложения по самой выгодной цене.
        </div>
    </div>
    <div class="card">
        <div class="card-title">
            Лучший сервис.
        </div>
        <div class="card-body">
            Лучшие цены. (Этот блок сделан для демонстрации сохраниния адаптивности)
        </div>
    </div>
    <div class="card">
            <div class="card-title">
                <a href="index.php"> Вернуться обратно</a>
            </div>
        </div>
  <div class="another_text">
    <h3>Контактный номер: 8922423123</h3>
  </div>
</div>
</body>
</html>