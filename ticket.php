<!DOCTYPE html>
<?php
session_start();?>

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
      select {
        padding: 8px;
        font-size: 16px;
        border-radius: 5px;
        margin-bottom: 15px;
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
      input[type="submit"] {
          background-color: mediumpurple;
          border: none;
          color: white;
          padding: 10px 30px;
          border-radius: 5px;
          cursor: pointer;
          font-size: 16px;
          margin: 4px;
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
      /* Дополнительные стили для календаря */
      .datepicker {
        position: relative;
        display: inline-block;
        width: 150px;
        margin-bottom: 15px;
      }
      .datepicker input[type="date"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }
      .datepicker::after {
        content: '\25BC';
        position: absolute;
        top: 30%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
      }
      /* Стили для календаря */
      .calendar-container {
        position: absolute;
        background-color: white;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 10px;
        z-index: 1;
        display: none;
      }
      .calendar-container.active {
        display: block;
      }
      .calendar {
        font-family: 'Montserrat', sans-serif;
        max-width: 220px;
        border-collapse: collapse;
      }
      .calendar th, .calendar td {
        text-align: center;
        padding: 10px 0;
      }
      .calendar th {
        border-bottom: 1px solid #ddd;
      }
      .calendar td {
        border-right: 1px solid #ddd;
      }
      .calendar td:last-child {
        border-right: none;
      }
      .calendar td:hover {
        background-color: #f2f2f2;
        cursor: pointer;
      }
      .datepicker {
        position: relative;
        display: inline-block;
        width: 150px;
      }
      .datepicker input[type="date"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }
      .datepicker::after {
        content: '\25BC';
        position: absolute;
        top: 30%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
      }
      /*over*/
      .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 9999;
      }

      .popup {
        display: none;
        position: relative;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        width: 300px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      /* Кнопка закрытия окна */
      .close {
        position: absolute;
        top: 5px;
        right: 5px;
        cursor: pointer;
        font-size: 20px;
        color: #333;
      }

      /*over*/
      .overlay1 {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 9999;
      }

      .popup1 {
        display: none;
        position: relative;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        width: 300px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      /* Кнопка закрытия окна */
      .close1 {
        position: absolute;
        top: 5px;
        right: 5px;
        cursor: pointer;
        font-size: 20px;
        color: #333;
      }

      .seat {
      display: inline-block;
      width: 20px;
      height: 20px;
      background: #ebc2af;
      margin: 5px;
      text-align: center;
      cursor: pointer;
      border-radius: 5px;
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
        <a href="profile.php" style="text-decoration: none" class="toptext" >Личный кабинет: <?php echo $_SESSION['username']; ?></a>
    <?php endif; ?>
</div>
<div class="container">
  <div class="texthold">
    <div class="card">
      <form name="ticketForm" method="POST" onsubmit="return validateForm()">
      <input id="selectedSeat" type="hidden" name="selectedSeat"> 
        <div class="card-title">
          <div class="datepicker">
            <input type="date" onclick="toggleCalendar()" required>
            <div class="calendar-container" id="calendarContainer">
              <table class="calendar">
              </table>
            </div>
          </div>
          <div>
            <select name="movie" required>
              <option value="Фильм 1">Фильм 1</option>
              <option value="Фильм 2">Фильм 2</option>
              <option value="Фильм 3">Фильм 3</option>
            </select><br>
          </div>
          <input type="text" name="number" placeholder="Номер места"/><br>
          <input type="text" name="name" placeholder="Имя покупателя"/><br>
          <input type="email" name="email" placeholder="Email"/><br>
          Тип билета: 
          <select name="ticketType" required>
              <option value="Обычный" >Обычный</option>
              <option value="VIP" >VIP</option>
              <option value="Детский" >Детский</option>
          </select><br>
        </div>  
      </form>
      
       <button onclick="showSeatSelection()">Выбрать место</button>
      <button onclick="validateForm">Оплатить</button> 
      <button> <a href="index.php">Вернуться на главную</a> </button>
    </div>
    </div>
  <div class="another_text">
    <h3>Контактный номер: 8922423123</h3>
  </div>
</div> 
<div class="overlay1">
  <div class="popup1">
    <span class="close1" onclick="closePopup1()">&times;</span>
    <p class="popup-content"></p>
  </div>
</div> 
<div id="seatSelectionPopup" class="overlay">
    <div class="popup">
    <span class="close" onclick="closeSeatSelection()">&times;</span>
        <h3>Выберите место</h3>
        <div id="seatMap"> 
          <div class="seat" onclick="chooseSeat(1)">1</div>
          <div class="seat" onclick="chooseSeat(2)">2</div>
          <div class="seat" onclick="chooseSeat(3)">3</div>
          <div class="seat" onclick="chooseSeat(4)">4</div>
          <div class="seat" onclick="chooseSeat(5)">5</div>
          <div class="seat" onclick="chooseSeat(6)">6</div>
          <div class="seat" onclick="chooseSeat(7)">7</div>
          <div class="seat" onclick="chooseSeat(8)">8</div>
          <div class="seat" onclick="chooseSeat(9)">9</div>
          <div class="seat" onclick="chooseSeat(10)">10</div>
          <div class="seat" onclick="chooseSeat(11)">11</div>
          <div class="seat" onclick="chooseSeat(12)">12</div>
          <div class="seat" onclick="chooseSeat(13)">13</div>
          <div class="seat" onclick="chooseSeat(14)">14</div>
          <div class="seat" onclick="chooseSeat(15)">15</div>
          <div class="seat" onclick="chooseSeat(16)">16</div>
          <div class="seat" onclick="chooseSeat(17)">17</div>
          <div class="seat" onclick="chooseSeat(18)">18</div>
          <div class="seat" onclick="chooseSeat(19)">19</div>
          <div class="seat" onclick="chooseSeat(20)">20</div>
          <div class="seat" onclick="chooseSeat(21)">21</div>
          <div class="seat" onclick="chooseSeat(22)">22</div>
          <div class="seat" onclick="chooseSeat(23)">23</div>
          <div class="seat" onclick="chooseSeat(24)">24</div>
          <div class="seat" onclick="chooseSeat(25)">25</div>
          <div class="seat" onclick="chooseSeat(26)">26</div>
        </div>
  </div>
</div>

</body>
<script>

    function validateForm() {
        const number = document.forms["ticketForm"]["number"].value;
        const name = document.forms["ticketForm"]["name"].value;
        const email = document.forms["ticketForm"]["email"].value;
        let errorMessage = "";
        if (number === "") {
            errorMessage += "- Введите номер места\n";
        }
        if (name === "") {
            errorMessage += "- Введите имя покупателя\n";
        }
        if (email === "") {
            errorMessage += "- Введите email\n";
        }
        if (errorMessage) {
            showPopup(errorMessage);  // Показ сообщения об ошибке во всплывающем окне
            return false;
        }
        return true;
    }
    // Показать/скрыть календарь при клике на поле ввода даты
    function toggleCalendar() {
      const calendarContainer = document.querySelector('.calendar-container');
      calendarContainer.classList.toggle('active');
    }

    // Установить выбранную дату из календаря в поле ввода даты
    function setDate(date) {
      const dateInput = document.querySelector('.datepicker input[type="date"]');
      dateInput.value = date;
      toggleCalendar(); // Скрыть календарь после выбора даты
    }

    function processUserPayment(isUserLoggedIn) {
      if(validateForm()){
        if (isUserLoggedIn) {
          showPopup('Оплата прошла успешно');
        } else {
          showPopup('Войдите в аккаунт');
        }
      }
    }
    function showPopup1(message1) {
        const overlay1 = document.querySelector('.overlay1');
        const popup1 = document.querySelector('.popup1');
        const popupContent = popup.querySelector('.popup-content');
        overlay.style.display = 'flex';
        popup.style.display = 'block';
        popupContent.innerText = message1;
    }

    function closePopup1() {
        const overlay1 = document.querySelector('.overlay1');
        const popup1 = document.querySelector('.popup1');
        overlay.style.display = 'none';
        popup.style.display = 'none';
    }

    function showPopup(message) {
        const overlay = document.querySelector('.overlay');
        const popup = document.querySelector('.popup');
        //const popupContent = popup.querySelector('.popup-content');
        overlay.style.display = 'flex';
        popup.style.display = 'block';
        //popupContent.innerText = message;
    }

    function closePopup() {
        const overlay = document.querySelector('.overlay');
        const popup = document.querySelector('.popup');
        overlay.style.display = 'none';
        popup.style.display = 'none';
    }

    document.addEventListener("DOMContentLoaded", function() {
      <?php if (isset($_SESSION['username'])) : ?>
        const isUserLoggedIn = true;
      <?php else: ?>
        const isUserLoggedIn = false;
      <?php endif; ?>
      
      document.querySelector('button').addEventListener('click', function() {
        processUserPayment(isUserLoggedIn);
      });
    });

    function showSeatSelection() {
      const popup = document.getElementById('seatSelectionPopup');
      popup.style.display = 'block'; // Показываем попап выбора места
    }
  
    function closeSeatSelection() {
      const popup = document.getElementById('seatSelectionPopup');
      popup.style.display = 'none'; // Скрываем попап выбора места
    }
  
    function chooseSeat(seatNumber) {
    var selectedSeatInput = document.getElementById('selectedSeat');
    var numberInput = document.querySelector('input[name="number"]');
    selectedSeatInput.value = seatNumber; // Устанавливаем номер места в скрытое поле
    numberInput.value = seatNumber; // Вносим номер места в поле формы с именем "number"
    closeSeatSelection(); // Закрываем окно выбора места
    }

  </script>
</html>