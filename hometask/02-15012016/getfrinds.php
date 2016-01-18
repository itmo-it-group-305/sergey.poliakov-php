<?php
/**
 * Created by PhpStorm.
 * User: sergeypoliakov
 * Date: 18.01.16
 * Time: 14:52
 */

$getFriends = [
    'user_id' => '547430',
    'order' => 'name',
    'fields' => 'bdate,photo_50,education,has_mobile',
    'name_case' => 'ins',
];

$askForFriends = "http://api.vk.com/method/friends.get?" . http_build_query($getFriends);
$getJsonFriends = file_get_contents($askForFriends);
$getRealFriends = json_decode($getJsonFriends, true);
$friends = $getRealFriends['response'];
var_dump($friends);

phpinfo();

