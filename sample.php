<?php

require_once('Texi.php');

$r = texi_send('https://stage.texionline.com', '', '09228545058', 'hello world');
print_r($r);