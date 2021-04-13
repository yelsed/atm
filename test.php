<?php
sleep(3);  // sleep 3 seconds
echo "wake up<br>";
if (ob_get_length()) {
    ob_end_flush();
    flush();
}
sleep(3);
echo "hello world<br>";
if (ob_get_length()) {
    ob_end_flush();
    flush();
}
sleep(3);