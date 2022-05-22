<?php
// read pages.json into $json which is a string
$json = file_get_contents('C:\xampp\htdocs\delicake\common\pages.json');
$obj = json_decode($json);
$pageName = basename($_SERVER['PHP_SELF']);

if (!in_array($pageName, $obj->noFooter)) {
    include 'choices/footer.html';
}

if (!in_array($pageName, $obj->noBootstrapScripts)) {
    include 'choices/bootstrapScripts.html';
}
