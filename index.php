<?php
require_once __DIR__.'/vendor/autoload.php';
$client = new MongoDB\Client('mongodb://student_account:Qwerty.123@kodaktor.ru/experimental');
$collection = $client->experimental->users;
$list = $collection->find();
$document = $list->toArray();
foreach ($document as $item) {
    $temp = $item->jsonSerialize();
    unset($temp->_id);
    $json_response[] = json_encode(['users' => $temp]);
}
echo "<pre>";
print_r($json_response);
echo "<pre>";

