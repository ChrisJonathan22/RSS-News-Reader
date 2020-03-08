<?php 
    $url = "";

    if (isset($_POST['submit'])) {
        if (isset($_POST['feedurl']) != "") {
            $url = $_POST['feedurl'];
        }
    }
?>