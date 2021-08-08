
<?php include "functions.php"?>



<?php 

if(isset($_POST['submit1'])){

    deleteRows();


}


?>
   

<!DOCTYPE html>
<html>

<head>
    <title>Delete Record in DB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    body{
        background-color: ;
    }
        .container-fluid {
            margin-top: 10%;
            border: 1px solid red;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="width: 50%;">
    <form action="index_delete.php" method="POST">

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="username1" placeholder="Username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password1" placeholder="Password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Chose ID</label>
                <select name="id" id="">
                <?php 
                showAllData();    
                ?>
                </select>
            </div>
            
            <input type="submit" class="btn btn-primary" name="submit1" value="DELETE">
        </form>

       
    </div>


</body>

</html>