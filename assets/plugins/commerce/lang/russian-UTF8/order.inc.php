<?php

setlocale(LC_ALL, 'ru_RU.UTF-8');

return [
    'order.name_field' => 'Имя',
    'order.email_field' => 'Email',
    'order.phone_field' => 'Телефон',
    'order.submit_btn' => 'Отправить заказ',
    'order.error.name_required' => 'Введите имя',
    'order.error.email_required' => 'Введите email',
    'order.error.email_incorrect' => 'Введите email правильно',
    'order.error.phone_required' => 'Введите телефон',
    'order.success' => '@CODE:<div>Спасибо за ваш заказ</div>',
    'order.subject' => '@CODE:Новый заказ на сайте [(site_name)]',
    'order.subject_status_changed' => '@CODE:Статус заказа #[+order_id+] изменен',
    'order.order_paid' => '@CODE:Заказ №[+order_id+] оплачен!',
    'order.status.new' => 'Новый',
    'order.status.processing' => 'В обработке',
    'order.status.paid' => 'Оплачен',
    'order.status.shipped' => 'Доставлен',
    'order.status.canceled' => 'Отменен',
    'order.status.complete' => 'Завершен',
    'order.status.pending' => 'Ожидание',
    'order.status_title' => 'Статус',
    'order.amount_title' => 'Сумма',
    'order.delivery_title' => 'Способ доставки',
    'order.payment_title' => 'Способ оплаты',
];
