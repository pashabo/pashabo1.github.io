<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = @$_POST['name'];
$phone = @$_POST['phone'];
$tovar = @$_POST['tovar'];
$formData = @$_POST['formData'];
    $to = "penguinlgb@gmail.com,pro-mask@mail.ru,nuckids2015@gmail.com"; /*Укажите адрес, га который должно приходить письмо*/
    $sendfrom = "3dpen@site.com"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
$headers = "From: " . strip_tags($sendfrom) . "\r\n";
$headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
$subject = "$formData";
    $message = "$formData<br><b>Имя:</b> $name <br><b>Телефон:</b> $phone <br><b>Товар:</b> $tovar";
    $send = mail ($to, "Заявка с сайта", $message, $headers);
if ($send == 'true')
{
echo '<meta http-equiv="refresh" content="0; url=call.html">';
header('location:call.html');
}
else 
{
echo '<center><p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p></center>';
}
} else {
http_response_code(403);
echo "Попробуйте еще раз";
}

?>
