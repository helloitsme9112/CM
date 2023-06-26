<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $to = "daniamorozoff@mail.ru";
  $date = date ("d.m.Y");
  $time = date ("h:i");
  $from = $email;
  $subject = "Заявка с сайта";

  $msg = "
  Имя: $name /n
  Телефон: $phone /n
  Почта: $email /n";
  mail($to, $subject, $msg, "From: $From ");
?>
