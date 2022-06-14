<?php
$x=10;
$GLOBALS['y']=10;
function printx(){
    echo $GLOBALS['y'];
}
printx();
?>