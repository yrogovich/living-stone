<?php

$to = 'work-biznesrost24@yandex.by,info@agronovia.ru,agronoviya@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов

$subject = 'Заявка с сайта '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form']; //Заголовок сообщения

$senddate = date("d.m.Y H:i:s");
$ref = $_SERVER['HTTP_REFERER'];
$result=parse_url($ref);
parse_str($result['query'],$params);

if (isset($params['utm_source']) || isset($params['utm_medium']) ||
    isset($params['utm_campaign']) || isset($params['utm_content']) || isset($params['utm_term'])){
    $utm .= "<p><strong>Источник:</strong> ".$params['utm_source'];
    $utm .= "<p><strong>Тип трафика:</strong> ".$params['utm_medium'];
    $utm .= "<p><strong>Кампания:</strong> ".$params['utm_campaign'];
    $utm .= "<p><strong>Объявление:</strong> ".$params['utm_content'];
    $utm .= "<p><strong>Кл. фраза:</strong> ".$params['utm_term'];
} else {
    $utm .= "<p><strong>Нет данных UTM</strong>";
}

$message = '

        <html>

            <head>

                <title>'.$subject.'</title>

            </head>

            <body>';
            $message .= '<p>'.$_POST['form'].'</p>';

        if(isset($_POST['name']) && $_POST['name'] !== '')

            $message .= '<p>Имя: '.$_POST['name'].'</p>';

        if(isset($_POST['phone']) && $_POST['phone'] !== '')

            $message .= '<p>Телефон: '.$_POST['phone'].'</p>';

        if(isset($_POST['email']) && $_POST['email'] !== '')

            $message .= '<p>Email: '.$_POST['email'].'</p>';
        
            $message .= $utm;

$message .= '                 

            </body>

        </html>'; //Текст нащего сообщения можно использовать HTML теги

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма

$headers .= "From: form@".$_SERVER['SERVER_NAME']."\r\n"; //Наименование и почта отправителя


mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail



