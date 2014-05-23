<?php

$config['protocol'] = 'smtp';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;
$config['smtp_host'] = "smtp_host_from_ses"; // eg. tls://email-smtp.eu-west-1.amazonaws.com
$config['smtp_user'] = "smtp_username_from_ses";
$config['smtp_pass'] = "smtp_password_from_ses";
$config['smtp_port'] = "465";
$config['smtp_timeout'] = "20";
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['mailsender'] = "no-reply@bibook.vn";