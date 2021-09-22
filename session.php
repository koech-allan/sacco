<?php
function session($lifetime,$path,$domain,$htttpOnly,$secure){
	session_set_cookie_params($lifetime,$path,$domain,$htttpOnly,$secure);
session_start();
}

session(0,'/','localhost',1,0);
?>