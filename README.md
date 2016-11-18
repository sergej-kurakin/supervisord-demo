# Supervisord Demo
Configuration and PHP scripts for supervisor demo

# Demos

## Long running PHP process

PHP process started under `root` user and runs infinitely by echoing string to stdout.
Running PHP process under `root` user is a **bad example**, but it shows simplest example of setup.

Files:

* /etc/supervisor/conf.d/myprocess.conf
* /home/user/long.php

## Other Long running PHP process

PHP process started under `user` user and runs infinitely by echoing string to stdout.
Setup shows how to start more than one process with `numprocs` and how to define user.

Files:

* /etc/supervisor/conf.d/myother.conf
* /home/user/other.php

## Exiting PHP process

Demonstrates that process can exit and won't be restarted if uses proper exit code.

Files:

* /etc/supervisor/conf.d/exiter.conf
* /home/user/exiter.php

## Sometimes failing PHP process

Demonstrates how supervisor restarts failed process.

Files:

* /etc/supervisor/conf.d/failer.conf
* /home/user/failer.php

## Totally failing PHP process

Demonstrates how supervisor restarts failed process and marks as failed if it continues to fail.

Files:

* /etc/supervisor/conf.d/totalfailer.conf
* /home/user/totalfailer.php

## Group file example

Demonstrated Group functionality with two processes `myprocess` and `myother` in group `mygroup`.

Files:

* /etc/supervisor/conf.d/group.conf
