<?php 

echo "<strong>\$_POST array:</strong> <br>";
print_r($_POST);
echo "<br><br><br>";

if (!empty($_POST)) {

    $message = "Вам пришло новое сообщение с сайта: \n " 
    . "Имя отправителя: " . $_POST['userName'] . "\n"
    . "Email отправителя: " .  $_POST['userEmail'] . "\n"
    . "Сообщение: \n  " . $_POST['message'];

    $headers = "From: me@datokarev.ru";

    $resultMail = mail("den4@me.com", "Сообщение с сайта", $message, $headers );

    if ( $resultMail ) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Что то пошло не так. Письмо не отправлено.";
    }
}

?>
<form action="lesson5.php" method="post" >
    <input type="text" name="userName" placeholder="Ваше имя"><br>
    <input type="text" name="userEmail" placeholder="Ваш Email"><br>
    <textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
    <input type="submit" value="Отправить форму!">
</form>