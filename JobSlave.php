<?php
$key = ftok('JobMaster.php', 'A');
$queue = msg_get_queue($key);

for($n = 1; $n <= 5; $n++)
    if(msg_send($queue, 1, $n, true, false, $err))
	echo "Job $n added to the queue\n";
    else
	echo "Job $n not added to the queue.\nError $err\n";

echo "Sent " . --$n . " jobs\n";

?>