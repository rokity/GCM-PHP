<?php

require "GCMPushMessage.php";
$apiKey = "AIzaSyDIUmo8SxVB8CkL1TOBBKyEoqrzmdsTB-c";
$devices = array('f_6vG33dBm4:APA91bHAyRmJtPy4HuFJP5LdHDkEFXOQXjNpUSkr5XkM3IlSc7SWRqzT6MEsKhSihxJajC-nYsUkwigNk1EVarVVqIqXF0nZqyt6DQ9WmTkMKCF8LlXEOsND6WWk8xfN_FBcAOKG0oJI');
$message = "The message to send";

$gcpm = new GCMPushMessage($apiKey);
$gcpm->setDevices($devices);
$response = $gcpm->send($message, array('title' => 'Test title'));
 ?>
