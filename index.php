<?php

$str = 'Congratulation, We are conneted to Database System';

$dbconnect = mysqli_connect('localhost', 'root', '', 'loginapp');




if (isset($_POST["submit1"])) {
    $getname = $_POST["username1"];
    $getpassword = $_POST["password1"];



    $getname = mysqli_real_escape_string($dbconnect, $getname);
    $getpassword = mysqli_real_escape_string($dbconnect, $getpassword);



    $hashFormat = "$2y$10$";
    $salt = "iusesomecazystring2244";
    $hashF_Salt = $hashFormat . $salt;

    $getpassword = crypt($getpassword, $hashF_Salt);

    /*  if(!$getname || !$getpassword){
        echo "<center> The Field can't be blank</center>";
    }
    else{
        echo "<center>".$getname." ".$getpassword."</center>";
    } */

    //--------------------------------------------------------

    if ($dbconnect) {
        echo '<div class="alert alert-success" role="alert">' . $str . '</div>';
    }

    //--------------------------------------------------------

    $query1 = "INSERT INTO tbluser(username,password)";
    $query1 .= "VALUES ('$getname','$getpassword')";

    $result = mysqli_query($dbconnect, $query1);

    if ($result) {
        echo '<div class="alert alert-info" role="alert"><center> Success </center></div>';
    } else {
        echo '<div class="alert alert-danger" role="alert"><center> Database failed </center></div>';
    }
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

    <div class="container-fluid" style="width: 25rem;">

        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="username1" placeholder="Username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password1" placeholder="Password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
        </form>
    </div>


</body>

</html>