<?php

	include_once('settings.php');
	
	$email = $_POST['email'];
	
	if(preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $email)){
		preg_match('/-(\w*)$/', $mailchimp_api_key, $dc);
		$mc = "http://{$dc[1]}.api.mailchimp.com/1.3/?method=listSubscribe&apikey={$mailchimp_api_key}&id={$mailchimp_list_id}&email_address={$email}";
		if(!$mailchimp_confirmation){
			$mc .= '&double_optin=false';
		}
		if($mailchimp_welcome_email){
			$mc .= '&send_welcome=true';
		}
		$json_resp = file_get_contents($mc);
		$resp = json_decode($json_resp, true);
		if($resp['error']){
			if($resp['code'] == 214){
				echo '<p class="error">'.$email.' is already on our list.</p>';
			}else{
				echo '<p class="error">'.$resp['error'].'</p>';
			}
		}else{
			if($mailchimp_confirmation){
				echo '<p class="success">Check your email for a confirmation email.</p>';
			}else{
				echo '<p class="success">'.$success_message.'</p>';
			}
		}
	}else{
		echo '<p class="error">Please enter a valid email address.';
	}