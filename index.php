<?php
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 echo "<h1>mobile device</h1>";
}else{
echo "<h1>Not mobile devoce</h1>";
}
?>
