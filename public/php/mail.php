<?php
function generateMailBody ($id, $address, $phone, $order, $comment, $change, $card, $callback, $order_count)
{
    $mail_content = 'Ваш заказ № ' . $id . PHP_EOL;
    $mail_content .= $order . PHP_EOL;
    $mail_content .= 'Адрес заказа: ' . $address . PHP_EOL;
    $mail_content .= 'Телефон: ' . $phone . PHP_EOL;
    $mail_content .= 'Необходима сдача: ' . ($change ? 'Да.' : 'Нет.') . PHP_EOL;
    $mail_content .= 'Оплата пластиковой картой: ' . ($card? 'Да.' : 'Нет.') . PHP_EOL;
    $mail_content .= 'Перезвонить для уточнения заказа: ' . ($callback ? 'Да.' : 'Нет.') . PHP_EOL;
    $mail_content .= 'Комментарий: ' . $comment . PHP_EOL;
    if ($order_count == 1 ) {
        $mail_content .= 'Спасибо - это Ваш первый заказ!' . PHP_EOL;
    } else {
        $mail_content .= 'Спасибо, это уже ' . $order_count . ' заказ!' . PHP_EOL;
    }
    return $mail_content;
}
