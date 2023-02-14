<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
$token = "6116238944:AAHqQdUVBLL6I96lpiFkl6lC7CHIz1DiM00";
$chat_id = "-1001778001739";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>