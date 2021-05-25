<?php
    header('content-Type: text/html; charset=utf-8');

    $db = new mysql("localhost", "user01", "12345", "sample");
    $db->set_charset("utf-8");

    function mq($sql) {
        global $db;
        return $db -> query($sql);
    }
?>