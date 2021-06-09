<?php
    Header('Content-Type:text/plain');
    echo sys_getloadavg()[0]*100;
?>
