<?php
$to = "Lizamus240594@mail.ru"; // емайл получателя данных из формы
$tema = "Заявка обратного звонка с Laibauto"; // тема полученного емайла
$message = "Имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "Телефон: ".$_POST['phone']."<br>"; //полученное из формы name=email
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>