<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
//hello


if ( $_POST['payload'] ) {
putenv('PATH=/usr/local/bin');
echo shell_exec('cd /home/master/applications/ancccjahdh/public_html/app && /usr/bin/git pull origin old-state 2>&1');
echo shell_exec('/usr/bin/whoami 2>&1');
echo 'kuba';
}
//echoffdfdf
?>
