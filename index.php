<?php

//Should work with any registrar using logicboxes control panel resellerid, uk2, directi, public domain registry etc
// When a domain is about to get released after redemption period, set these variables and keep this script on cronjobs :)
// Generate following variables from your control panel

$u="UID";
$p="PASSWORD";
$d="DOMAIN.COM"; //domain which needs to be grabber
$c="7202284"; //customer id

$cont="17408540"; // Contact ID
//set POST variables


$url = 'https://httpapi.com/api/domains/register.xml';


//url-ify the data for the POST
//foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
//rtrim($fields_string, '&');

//open connection
$ch = curl_init();
 
$fields_string="auth-userid=$u&auth-password=$p&domain-name=$d&years=1&ns=ns1.domain.com&ns=ns2.domain.com&customer-id=$c&reg-contact-id=$cont&admin-contact-id=$cont&tech-contact-id=$cont&billing-contact-id=$cont&invoice-option=KeepInvoice&protect-privacy=false&attr-name1=idnLanguageCode&attr-value1=aze";
//set the url, number of POST vars, POST data

curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_HEADER, false);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
//$result = curl_exec($ch);

//close connection
curl_close($ch);

var_dump($result);




echo "ad";
?>
