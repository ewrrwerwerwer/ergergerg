<?php
// какой-то код обработки заказа...

// Ответ на запрос
// !для версии PHP < 5.4, используйте традиционный синтаксис инициализации массивов array() вместо короткого []
$response = [
    'errors' => !$send_ok,
    'message' => $send_ok ? 'Заказ принят в обработку!' : 'Хьюстон! У нас проблемы!'
];
exit( json_encode($response) );
