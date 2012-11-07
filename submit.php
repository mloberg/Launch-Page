<?php if (!$_POST['email']) { exit; }

require 'MCAPI.class.php';

$config = json_decode(file_get_contents('config.json'), true);

$api = new MCAPI($config['mailchimp']['api_key']);

$api->listSubscribe($config['mailchimp']['list_id'], $_POST['email'], array('FNAME' => $_POST['fname'], 'LNAME' => $_POST['lname']));

if ($api->errorCode) {
    echo 'Unable to subscribe: ';
    echo $api->errorMessage;
} else {
    echo $config['success-text'];
}
