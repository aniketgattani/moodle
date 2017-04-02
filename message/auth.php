<?php 
include 'Pusher.php';
$app_id =  "307766";
$app_key = '3ebf1e520375f3513e80';
$app_secret = '3604de84595f580b52ef';
$pusher = new Pusher( $app_key, $app_secret, $app_id ); 
$socket_id=$_POST['socket_id'];
$channel_name=$_POST['channel_name'];
$auth=$pusher->socket_auth($channel_name,$socket_id);
echo $auth;
?>