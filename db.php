
<?php

$str = 'Congratulation, We are conneted to Database System';

$dbconnect = mysqli_connect('localhost', 'root', '', 'loginapp');

    //--------------------------------------------------------

    if ($dbconnect) {
        echo '<div class="alert alert-success" role="alert">' . $str . '</div>';
    }
    else{
        die("Data Base Failed");
    }