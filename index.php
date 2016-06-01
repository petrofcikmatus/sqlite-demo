<?php
/**
 * User: matusko
 * Date: 7/13/15
 * Time: 11:49 PM
 */

try {
    $db = new PDO('sqlite:./database.db');

    $db->query("CREATE TABLE IF NOT EXISTS foo (bar VARCHAR(250))");

    $query = $db->prepare("INSERT INTO foo VALUES (?)");
    $query->execute(array(microtime(true)));

    $result = $db->query("select bar from foo");

    $super_result = $result->fetchAll(PDO::FETCH_OBJ);

} catch (Exception $e) {
    exit($e->getMessage());
}

exit("<pre>" . print_r($super_result, true) . "</pre>");
