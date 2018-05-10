<?php
alert("Hello World");
$a = 2;

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg' . '$a');</script>";
}
?>