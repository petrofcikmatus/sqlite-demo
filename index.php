<?php
/**
 * Created by PhpStorm.
 * User: matusko
 * Date: 7/13/15
 * Time: 11:49 PM
 */

if ($db = new PDO('sqlite:./database.db')) {
    //$db->query("CREATE TABLE foo (bar VARCHAR(250))");
    $db->query("INSERT INTO foo VALUES (" . microtime(true) . ")");
    $result = $db->query("select bar from foo");

    $super_result = $result->fetchAll(PDO::FETCH_OBJ);

    exit("<pre>" . print_r($super_result, true) . "</pre>");
} else {
    die("neeee");
}
