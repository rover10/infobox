<?php

$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('students', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>