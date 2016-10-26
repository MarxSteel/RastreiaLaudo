<?php
require_once '../init.php';
 $Imprime = "C[1001901234567[11[12[9[9[10/10/2010[Prisma SF R02";          
 $port = 3000;
            $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die($M000);
            socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => 1, 'usec' => 0));
            socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, array('sec' => 1, 'usec' => 0));
            $result = socket_connect($socket, $IPImpressora, $port) or die($M001);
              socket_write($socket, $Imprime, strlen($Imprime)) or die($M002);
              $msg1 = socket_read($socket,8192);
            socket_close($socket);

    echo '<script type="text/javascript">alert("PAPEL AJUSTADO");</script>';
    echo '<script type="text/javascript">location.href="dashboard.php"</script>';





?>