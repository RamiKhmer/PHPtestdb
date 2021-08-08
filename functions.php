<?php include "db.php"; ?>



<?php 



    function showAllData(){
    global $dbconnect;
    $query1 = "SELECT * FROM tbluser";
    $result = mysqli_query($dbconnect, $query1);

    if ($result) {
        echo '<div class="alert alert-info" role="alert"><center> Successfully </center></div>';
    } else {
        echo '<div class="alert alert-danger" role="alert"><center> Database failed </center></div>';
    }

    //==================================================

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}

function updateData(){
    global $dbconnect;
    $username = $_POST['username1'];
    $password = $_POST['password1'];
    $id = $_POST['id'];

    $query = "UPDATE tbluser SET username = '$username', password = '$password' WHERE id = $id";

    $result = mysqli_query($dbconnect, $query);

    if(!$result){
        die("Query Failed". " ".mysqli_error($dbconnect));
    }
    else{
        echo '<div class="alert alert-info" role="alert"><center> Update Completed </center></div>';
    }
}


function deleteRows(){
    global $dbconnect;
    $username = $_POST['username1'];
    $password = $_POST['password1'];
    $id = $_POST['id'];

    $query = "DELETE FROM tbluser WHERE id = $id";

    $result = mysqli_query($dbconnect, $query);

    if(!$result){
        die("Query Failed". " ".mysqli_error($dbconnect));
    }
    else{
        echo '<div class="alert alert-danger" role="alert"><center> Delete Completed </center></div>';
    }
}
