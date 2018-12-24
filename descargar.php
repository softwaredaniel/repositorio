<?php
header("Content-disposition: attachment; filename=manual.pdf");
header("Content-type: application/pdf");
readfile("manual.pdf");
?>