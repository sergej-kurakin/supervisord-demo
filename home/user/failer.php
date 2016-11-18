<?php
/**
 * This script demonstrates exit with non-zero status and that supervisor will restart it
 */

echo "Failer started\n";

$i = 20;
while($i > 0) {
    echo "I'm failer, running iteration\n";
    sleep(5);
    $i--;

    if ($i === 10) {
        throw new Exception('Ten!');
    }
}

echo "Done.\n";
