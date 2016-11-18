<?php
/**
 * This script demonstrates exit with zero status and that supervisor won't restart it
 */

echo "Exiter started\n";

$i = 10;
while($i > 0) {
    echo "I'm exiter, running iteration\n";
    sleep(5);
    $i--;
}

echo "I'm done! Exiting with 0.";

exit(0);
