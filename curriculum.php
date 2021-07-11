<?php

header("Content-disposition: attachment; filename=orlando_curriculum.pdf");
header("Content-type: MIME");
readfile("files/orlando_curriculum.pdf");

?>