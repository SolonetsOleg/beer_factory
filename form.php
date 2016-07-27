<?php




/* Задаем переменные */
$name = htmlspecialchars($_POST["1name"]);
$email = htmlspecialchars($_POST["2email"]);
$tel = htmlspecialchars($_POST["3phone"]);

$message = htmlspecialchars($_POST["4comment"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "solonets0leg@gmail.com";
$sub = "Сообщение с сайта Пивоварня 'Premium beer'";

/* Формат письма */
$mes = "Пивоварня 'Premium beer.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Текст сообщения:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=http://localhost/');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт XXX';}
else {
	header('Refresh: 5; URL=http://localhost/');
	echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */

/*


die();

if($_POST){
    echo "Получено форму";
    print_r($_POST);
}
  */


?>