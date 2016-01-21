<?php
$key = ftok(__FILE__, 'A');
$queue = msg_get_queue($key);

while ( msg_receive($queue, 1, $msgType, 4096, $msg, true, MSG_IPC_NOWAIT) ) 
    echo "Received job $msg\n";
    
?>