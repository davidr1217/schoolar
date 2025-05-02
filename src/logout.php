<?php
    session_start();
    session_destroy();

    header('Refres:0; url=http://localhost/schoolar/src/signin.html');
?>