<?php
header("location:/LogInSystem/ToConnect");
	session_start();
	session_unset();
	session_destroy();
	
?>