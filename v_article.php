<?php
    include("functions.php");
    /**
     * Created by PhpStorm.
     * User: DiZi
     * Date: 23.06.2016
     * Time: 18:39
     */

    $id = $_GET['id'];

    $message = get_message($id);
    foreach ($message as &$value) {
        $title = $value['title'];
        $content = $value['content'];
        echo "$title  <br/>";
        echo "$content <br/>";
    }
?>