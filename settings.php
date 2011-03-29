<?php

/*
|--------------------------------------------------
| Launch Page
|--------------------------------------------------
|
| These are all the settings for Launch Page.
| Please edit them to fit your site.
|
|--------------------------------------------------
| General settings
|--------------------------------------------------
*/

$title = "Coming Soon!";
$signup_text = "Signup for our newsletter.";
$button_text = "Go"; // limit 10 characters
$success_message = 'Thank you for showing interest.'; // displayed if $mailchimp_confirmation is set to false

$description = "Write a description of your site. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.";

/*
|--------------------------------------------------
| Images
|--------------------------------------------------
|
| Set your logo and background image here.
| If you are using a background pattern instead of an image, set $background_pattern to true.
| Also, if you are using an image, make sure that it is at least 1600 x 1200 to prevent pixilation on most computers.
|
*/

$logo = 'tflaunch.png';
$background_img = 'tea_bg.jpg';
$background_pattern = false; // set to true if it is a pattern

/*
|--------------------------------------------------
| Social Media Accounts
|--------------------------------------------------
|
| Add links to your social media accounts.
| All require urls, except for Twitter, which requires your username.
|
| Social media icons by Daniel Eckermann - http://www.danieleckermann.com/linkdeck/
|
*/

$twitter = '';
$facebook = '';
$blog = '';
$website = '';

/*
|--------------------------------------------------
| Footer
|--------------------------------------------------
|
| If you need to give credit to the author of the background image,
| or need to put a link to somehwere else, set $footer to true
|
*/

$footer = true;
$footer_text = 'Powered by <a href="http://teafueled.com/launch/">Launch Page</a>. Photo by <a href="http://www.flickr.com/photos/harisankar/5106501/">harisankar</a>.';
$footer_color = '#fff';

/*
|--------------------------------------------------
| Design settings
|--------------------------------------------------
|
| Change the design settings to fit with your logo and backgrond image
|
*/

// box
$box_color = '#ffffff'; // must be 6 digit hex value
$box_opacity = '.8';
$round = '10';
$text_color = '#000';

// form
$button_color = '#bdbe1f';
$button_color_active = '#6a6406';
$button_text_color = '#000';
$error_color = '#f00';
$success_color = '#000';

/*
|--------------------------------------------------
| MailChimp (http://mailchimp.com/) API settings
|--------------------------------------------------
|
| Get API from http://admin.mailchimp.com/account/api
|
| Get list id by going to your lists, click setting > list settings and unique id.
| The id will be on the bottom
|
| You also have the option of sending a confirmation email (default is to send confirmation email)
|  and sending a welcome message (confirmation email must be set to true to work).
|
| WARNING: Abusing the confirmation email (not sending it) may cause your MailChimp account to be suspended.
|  I also don't recommend turning the welcome email on (users get two emails in a row).
|
*/

$mailchimp_api_key = '';
$mailchimp_list_id = '';

$mailchimp_confirmation = true;
$mailchimp_welcome_email = false;

/*
|--------------------------------------------------
| DO NOT EDIT ANYTHING BEYOND THIS POINT
|--------------------------------------------------
*/
list($width, $height, $type, $attr) = getimagesize($logo);
$hex = preg_replace('/^#/', '', $box_color);
$rgb = '';
$rgb = hexdec(substr($hex, 0, 2));
$rgb .= ', ' . hexdec(substr($hex, 2, 2));
$rgb .= ', ' . hexdec(substr($hex, 4, 2));