<?php

file_put_contents(
    "/home/LogFiles/process.log",
    date("c") . " process.php called\n",
    FILE_APPEND
);

header("HTTP/1.1 500 Internal Server Error");
echo "Intentional test error";
exit;