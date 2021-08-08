<?php

$str = 'Congratulation, We are conneted to Database System';

$dbconnect = mysqli_connect('localhost', 'root', '', 'loginapp');






   
    //--------------------------------------------------------

    if ($dbconnect) {
        echo '<div class="alert alert-success" role="alert">' . $str . '</div>';
    }

    //--------------------------------------------------------

    $query1 = "SELECT * FROM tbluser";
    

    $result = mysqli_query($dbconnect,$query1);

    if($result){
        echo '<div class="alert alert-info" role="alert"><center> Successfully </center></div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert"><center> Database failed </center></div>';
        
    }



?>


<!DOCTYPE html>
<html>

<head>
    <title>Insert To DB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .container-fluid {
            margin-top: 10%;
            border: 1px solid red;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="width: 50%;">
    <?php 
    
    while($row = mysqli_fetch_assoc($result)){

    ?>
    <pre>
    
    <?php 
        print_r($row) ;

    ?>
    </pre>
    
    <?php
        //echo'<br>'; 
    }
    
    
    
    ?>

       
    </div>


</body>

</html>