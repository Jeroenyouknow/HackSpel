<?php

$file = file("file.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

print json_encode($file);
