<!DOCTYPE html>
<?php
$number = "";
$name = "";
$email = "";
$ticketType = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['number'])) {
      $number = $_POST['number'];
      setcookie("user_number", $number, time() + 600);
  }
  if (isset($_POST['name'])) {
      $name = $_POST['name'];
      setcookie("user_name", $name, time() + 600);
  }
  if (isset($_POST['email'])) {
      $email = $_POST['email'];
      setcookie("user_email", $email, time() + 600);
  }
  if (isset($_POST['ticketType'])) {
      $ticketType = $_POST['ticketType'];
      setcookie("user_ticket_type", $ticketType, time() + 600);
  }
}

echo "Номер места: $number <br> Имя покупателя: $name <br> Email: $email <br> Тип билета: $ticketType";

$number = isset($_COOKIE["user_number"]) ? $_COOKIE["user_number"] : "";
$name = isset($_COOKIE["user_name"]) ? $_COOKIE["user_name"] : "";
$email = isset($_COOKIE["user_email"]) ? $_COOKIE["user_email"] : "";
$ticketType = isset($_COOKIE["user_ticket_type"]) ? $_COOKIE["user_ticket_type"] : "";

session_start();
?>

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
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 0;
        margin: 0;
        background-color: #eaeaea;
      }

      .card{
        
        padding: 20px;
        background: #f2f2f2;
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
      .col{
        background-color: mediumpurple;
      }
      button {
        
        background-color: coral;
        border: none;
        color: white;
        padding: 10px 30px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        margin: 4px
    }
      input[type="text"],
      input[type="email"] {
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
    }
    a {
        color: whitesmoke;
        font-size: 16px;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    </style>
</head>
<body>
<div class="top" >
  <h1 class="toptext">Поиск дешевых билетов в Кино</h1>
  <p class="toptext" >Лучший агрегатор для поиска билетов</p>
    <?php if (!isset($_SESSION['username'])): ?>
        <a href="login.php" class="toptext" > Войти в личный кабинет </a>
    <?php else: ?>
        <a href="profile.php" style="text-decoration: none" class="toptext" >Личный кабинет: <?= $_SESSION['username'] ?></a>
    <?php endif; ?>
</div>
<div class="container">
  <div class="texthold">
    <div class="card">
      <form method="POST">
        <div class="card-title">
          <input type="text" name="number" required placeholder="Номер места" required value="<?= $number  ?>"/><br>
          <input type="text" name="name" required placeholder="Имя покупателя" required value="<?= $name ?>" /><br>
          <input type="email" name="email" required placeholder="Email" required value="<?= $email ?>" /><br>
          Тип билета: 
    <select name="ticketType" required>
        <option value="Обычный" <?= ($ticketType == 'Обычный') ? 'selected' : '' ?>>Обычный</option>
        <option value="VIP" <?= ($ticketType == 'VIP') ? 'selected' : '' ?>>VIP</option>
        <option value="Детский" <?= ($ticketType == 'Детский') ? 'selected' : '' ?>>Детский</option>
    </select><br>
        </div>
      <div class="card-body">
        <button class="col"> <a href="ticket.php">Подтвердить</a> </button>
      </div>
      </form>
      <button> <a href="index.php">Вернуться на главную</a> </button>
    </div>
      
    </div>
  <div class="another_text">
    <h3>Контактный номер: 8922423123</h3>
  </div>
</div>
</body>
</html>