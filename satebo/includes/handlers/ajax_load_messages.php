<?php 
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Message.php");

$limit = 5; //mess2load

$message = new Message($con, $_REQUEST['userLoggedIn']);
echo $message->getConvosDropdown($_REQUEST, $limit);




?>