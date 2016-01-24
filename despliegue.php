<?php

$payload = json_decode($_REQUEST['payload']);

//log the request
file_put_contents('logs/github.txt', print_r($payload, TRUE), FILE_APPEND);

if ($payload->ref === 'refs/heads/master')
{
  // path to your site deployment script
  shell_exec('./produccion.sh');
}

?>