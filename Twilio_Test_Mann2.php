<?php
header('Content-Type: text/html');

if ($_REQUEST['Body'] == 'SendHealthInfo') {
?>

<Response><Message>You sent "SendHealthInfo"</Message></Response>

<?
} elseif ($_REQUEST['Body'] == 'DifferentInfo') {
?>

<Response><Message>You sent "DifferentInfo"</Message></Response>

<?
} else {
?>

<Response><Message>You sent something not recognized</Message></Response>


<?
}
?>