<?php
function loginCheck($id, $pass){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banking";

    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT id FROM usertable WHERE uid='".$id."'AND pass= '".$pass."' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        $conn->close();
        return true;
    } 
    else {
        $conn->close();
        echo "0 results";
        return false; 
    }
}

function balanceRetrive($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banking";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT balance FROM usertable WHERE uid='".$id."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
   
        while($row = $result->fetch_assoc()){
            $b = $row["balance"] ;
            
        }
        $conn->close();
        return $b;
    } 
    else {
        echo "0 results";
        $conn->close();
    }
    
}

function updateBalance($amount,$id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banking";

    
    $conn = new mysqli($servername, $username, $password, $dbname);
   
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE usertable SET balance='".$amount."' WHERE uid='".$id."'";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

?>