<?php 
    $url = "";

    if (isset($_POST['submit'])) {
        if (isset($_POST['feedurl']) != "") {
            $url = $_POST['feedurl'];
        }
    }

    $invalidurl = false;

    if(@simplexml_load_file($url)) {
        $feeds = simplexml_load_file($url);
    } else {
        $invalidurl = true;
        echo "<h2>Invalid RSS feed URL.</h2>";
    }
?>