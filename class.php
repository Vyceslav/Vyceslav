<?php
$file = fopen('text.txt','w+');
fwrite($file, 'Hello Palmo'.PHP_EOL.'New string');
fclose($file);
