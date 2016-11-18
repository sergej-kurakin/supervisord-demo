<?php
/**
 * This is just a long running PHP process, that will be started as two processes
 */

echo "Other started\n";

while(true) {
    echo "I'm long other running PHP process\n";
    sleep(10);
}
