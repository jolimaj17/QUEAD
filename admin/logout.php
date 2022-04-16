<?php
session_start();
if(session_destroy())
{
header("Location: http://localhost/QUEZON ADVENTURE GAME/public_html/");
}

?>