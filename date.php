<?php

$date = '25.03.2025';
$pattern = '/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[0-2])\.\d{4}$/';
$result = preg_match($pattern, $date);
echo 'Дата корректна: ' . ($result ? 'да' : 'нет') . '<br>';
