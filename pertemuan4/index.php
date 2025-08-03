<?php
echo "<h1>Library Functions!</h1>";

echo "Today's date:" . " " . date("l, d M Y");

echo "<br>";

echo "A hundred days ago it was:" . " " . date("l, d M Y", time() - 60 * 60 * 24 * 100);
