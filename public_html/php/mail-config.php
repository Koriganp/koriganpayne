<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Korigan Payne <kpayne11@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

// your Google reCAPTCHA keys here
$siteKey = '6LfjBzoUAAAAAI4lBx2PIQwRUeZfeTS9gur6t1Ft';
$secret = '6LfjBzoUAAAAAM826iLJPoNhkNXqwh2cnZyh8pMl';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["designbykorigan@gmail.com" => "Korigan Payne", "koriganp@gmail.com" => "Korigan Payne"];