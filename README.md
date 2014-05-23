codeigniter-ses-email-config
============================

Email configuration for sending email with Amazon SES

Why this?
---------
I have met problem when switched from Google SMTP to Amazon SES and it took much time to trouble with. So I decided to share my configuration so that it could help someone who had that problem also.

How to use this?
----------------
Just copy this file to application/config folder and set proper hostname, username and password. Then you can use Codeigniter's email library as normal.

```PHP
<?php
// File application/config/email.php
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
$config['mailsender'] = "no-reply@yourdomain.com";
