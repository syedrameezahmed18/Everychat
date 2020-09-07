<?php

include("connection.php");
function insert($conn){
    echo"<script>console.log('function triggered');</script>";
    $comment = $_POST["comment"];
    
    if($comment != "")
    {
        $query = "INSERT INTO usercomments(comm) VALUES('$comment')";
        
        if(mysqli_query($conn,$query))
        {
            echo"<script>console.log('success');</script>";
            
            echo"<div class='coming'>
                <p>USER comment : $comment is inserted
                <p> </div>";
            echo"<script>document.querySelector('.containment').appendChild(document.querySelector('.coming'))
            ; </script>";

        }
        else {
            echo "Error " .mysqli_error($conn)."";
        }
        
    }
    else{
        
    }
    
}

function getdata($conn){
    $getquery = "SELECT * FROM usercomments
                 ORDER BY id DESC
                 LIMIT 3;";
    $result = mysqli_query($conn,$getquery);
 
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $fetched = $row['comm'];
        echo"<div class='alert alert-success' role='alert'>
        $fetched
        </div>";
      
    }
       } else {
    echo "0 results";
       }
}
function getAlldata($conn){
    $getquery = "SELECT * FROM usercomments;
                 ";
    $result = mysqli_query($conn,$getquery);
 
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $fetched = $row['comm'];
        echo"<div class='alert alert-success' role='alert'>
        $fetched
        </div>";
      
    }
       } else {
    echo "0 results";
       }
}

function check($conn){
    $checkquery = "SELECT email,pass FROM useradmins";
    $result = mysqli_query($conn,$checkquery);
}
?>