<?php
unlink(realpath(dirname(__DIR__))."/pdf/".$_GET['name']);
echo "<button type=\"button\" onclick=\"javascript:history.back()\">Back</button>";
?>
