var sent = false;
window.addEvent('domready', function(){
	$('email').addEvents({
		'focus': function(){
			$('resp').set('html','');
			if(this.get('value') == 'email') this.set('value','');
		},
		'blur': function(){
			if(this.get('value') == ''){
				this.set('value','email');
			}else if(!this.get('value').match(/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/)){
				$('resp').set('html', '<p class="error">Please enter a valid email address.');
			}
		}
	});
	$('submit').addEvent('click', function(e){
		e.stop();
		$('resp').set('html','');
		if($('email').get('value').match(/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/) && sent !== true){
			var req = new Request({
				method: 'post',
				url: 'submit.php',
				data: {'email' : $('email').get('value')},
				onComplete: function(msg){
					$('resp').set('html', msg);
					if(msg.match(/class="success"/)){
						$('email').set('disabled', 'disabled');
						sent = true;
					}
				}
			}).send();
		}else if(sent == true){
			$('resp').set('html', '<p class="success">Check your email for a confirmation email.</p>');
		}else{
			$('resp').set('html', '<p class="error">Please enter a valid email address.</p>');
		}
	});
});