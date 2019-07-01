<?php

$to = 'work-biznesrost24@yandex.by'; //Почта получателя, через запятую можно указать сколько угодно адресов

$subject = 'Заявка с сайта '.$_SERVER['SERVER_NAME'] . ' ' . $_POST['form']; //Заголовок сообщения

// $senddate = date("d.m.Y H:i:s");
// $ref = $_SERVER['HTTP_REFERER'];
// $result=parse_url($ref);
// parse_str($result['query'],$params);
// if (isset($params['utm_source']) || isset($params['utm_medium']) ||
//     isset($params['utm_campaign']) || isset($params['utm_content']) || isset($params['utm_term'])){
//     $utm .= "<p><strong>Источник:</strong> ".$params['utm_source'];
//     $utm .= "<p><strong>Тип трафика:</strong> ".$params['utm_medium'];
//     $utm .= "<p><strong>Кампания:</strong> ".$params['utm_campaign'];
//     $utm .= "<p><strong>Объявление:</strong> ".$params['utm_content'];
//     $utm .= "<p><strong>Кл. фраза:</strong> ".$params['utm_term'];
// } else {
//     $utm .= "<p><strong>Нет данных UTM</strong>";
// }

$message = '

        <html>

            <head>

                <title>'.$subject.'</title>

            </head>

            <body>';
            $message .= '<p>'.$_POST['form'].'</p>';

        if(isset($_POST['user_name']) && $_POST['user_name'] !== '')

            $message .= '<p>Имя: '.$_POST['user_name'].'</p>';

        if(isset($_POST['user_phone']) && $_POST['user_phone'] !== '')

            $message .= '<p>Телефон: '.$_POST['user_phone'].'</p>';

        if(isset($_POST['user_email']) && $_POST['user_email'] !== '')

            $message .= '<p>Email: '.$_POST['user_email'].'</p>';
        
            //$message .= $utm;

$message .= '                 

            </body>

        </html>'; //Текст нащего сообщения можно использовать HTML теги

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма

$headers .= "From: form@".$_SERVER['SERVER_NAME']."\r\n"; //Наименование и почта отправителя


mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail



