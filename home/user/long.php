<?php
/**
 * This is just a long running PHP process, that will be started as one process
 */

echo "Long started\n";

while(true) {
    echo "I'm long running PHP process\n";
    sleep(10);
}

