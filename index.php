<?php
	

// Push The notification with parameters
require_once('PushBots.php');
$pb = new PushBots();
// Application ID
$appID = '56c5bce6177959932b8b4567';
// Application Secret
$appSecret = '0de8f860f8356b45ee2d0525f36e1823';
$pb->App($appID, $appSecret);
 
$customFields=array(
	"customNotificationTitle"=>"ALERT TITLE ALERT!!!",
	"largeIcon"=>"https://image.freepik.com/free-icon/robber-entering-by-a-window_318-44081.jpg"
);

var_dump($customFields);
// Notification Settings
$pb->Alert("test alert, change the title");
$pb->Platform(array("0","1"));
$pb->Badge("+2");
$pb->Payload($customFields);
// Update Alias 
/**
 * set Alias Data
 * @param	integer	$platform 0=> iOS or 1=> Android.
 * @param	String	$token Device Registration ID.
 * @param	String	$alias New Alias.
 */
 
//$pb->AliasData(1, "APA91bFpQyCCczXC6hz4RTxxxxx", "test");
// set Alias on the server
//$pb->setAlias();

// Push it !	
$pb->Push();



// Push to Single Device
// Notification Settings
//$pb->AlertOne("test Mesage");
//$pb->PlatformOne("0");
//$pb->TokenOne("3dfc8119fedeb90d1b8a9xxxxxx");

//Push to Single Device
//$pb->PushOne();

//Remove device by Alias
//$pb->removeByAlias("myalias");


?>



