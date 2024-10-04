<?php

// We need to have our session_start() to work with the session here
session_start();

session_destroy();
header('Location: /learning_php/phpCrash/13_sessions.php');

// and we can test that by going back to the dashboard using the URL and
// it should now say Welcome Guest as the session is gone.