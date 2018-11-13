<?php

/* https://api.telegram.org/bot776689918:AAHLYgg0TeIbuPiKCIf3fMOBCABhl2B0wco/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "776689918:AAHLYgg0TeIbuPiKCIf3fMOBCABhl2B0wco";
$chat_id = "-318840183";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{"776689918:AAHLYgg0TeIbuPiKCIf3fMOBCABhl2B0wco"}/sendMessage?chat_id={"-318840183"}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>