<?php

session_start();
session_destroy();

setcookie('user', "", time() - 3600);
setcookie('session_start', "", time() - 3600);

header("Location: login.html"); 
