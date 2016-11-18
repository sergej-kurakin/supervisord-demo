<?php
/**
 * This script demonstrates exit with non-zero status and that supervisor will try to restart it and gave up on to many files
 */

const STATUS_FILE = 'totalfailer.txt';

echo "Totalfailer started\n";

$failOnStart = false;

if (is_file(STATUS_FILE)) {
    throw new Exception('Fail on start!');
}

$i = 20;
while($i > 0) {
    echo "I'm total failer, running iteration\n";
    sleep(5);
    $i--;

    if ($i === 10) {
        file_put_contents(STATUS_FILE, 'fail');
        throw new Exception('Ten!');
    }
}

echo "Done.\n";
