<?php

file_put_contents(
    "/home/LogFiles/process.log",
    date("c") . " process.php called\n",
    FILE_APPEND
);

http_response_code(500);
echo "Intentional test error";
exit;