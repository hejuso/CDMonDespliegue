<?php

date_default_timezone_set('Europe/Andorra');
$date = date('m/d/Y h:i:s a', time());

//$payload = json_decode($_REQUEST['payload']);
$payload = json_decode(file_get_contents('php://input'));

//log the request
file_put_contents('logs/github.txt', print_r("Se ha producido un pull: ".$date."\n", TRUE), FILE_APPEND);

if ($payload->ref === 'refs/heads/master')
{
  // path to your site deployment script
  shell_exec('./produccion.sh');
}

?>