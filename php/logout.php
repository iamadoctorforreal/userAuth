<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
session_start();
session_unset();
session_destroy();
header("Location:login.html");
}


