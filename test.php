<?php


$handle = fopen('./data.txt', 'rb');

stream_filter_append($handle, 'string.toupper');

while (feof($handle) !== true) {
    echo fgetc($handle);
}


?>