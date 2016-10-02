<?php

 include_once 'Database.php';

 include_once 'resource/utilities.php';


if(isset($_POST['name']) && $_POST['id']){
 update(array($_POST['name'], $_POST['id']), $conn);
} else if(isset($_POST['description']) && $_POST['id']){
 update(array($_POST['description'], $_POST['id']), $conn);
} else if(isset($_POST['status']) && $_POST['id']){
 update(array($_POST['status'], $_POST['id']), $conn);
}


 // if(isset($_POST['status']) && isset($_POST['id'])){
 //
 //   $status = trim($_POST['status']);
 //   $id = $_POST['id'];
 //
 //   try{
 //     $updateQuery = "UPDATE tasks SET status = :status
 //                    WHERE id = :id";
 //
 //    $statement = $conn->prepare($updateQuery);
 //    $statement->execute(array(":status" => $status, ":id" => $id));
 //
 //    if($statement->rowCount() === 1){
 //      echo "Task status updated successfully";
 //    } else {
 //      echo "No changes made";
 //    }
 //
 //   } catch (PDOException $ex){
 //     echo "An error occured " .$ex->getMessage();
 //   }
 // }
