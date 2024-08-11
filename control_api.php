<?php
// api.php

header('Content-Type: application/json');

// هنا ستتم معالجة الطلبات القادمة وتحديد الأمر المطلوب
$response = array();

// مثال بسيط لفتح تطبيق الرسائل
if ($_GET['action'] == 'open_messaging') {
    $response['command'] = 'open_messaging';
} else {
    $response['command'] = 'none';
}

echo json_encode($response);