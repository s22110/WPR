<?php
    $expr = "2 + 2 - 6";
    $p = explode(" ", $expr);
    eval('echo(' .$p[0] .$p[1] .$p[2] .$p[3] .$p[4] .');');

