<?php

function update($post_array, $conn)
{
if(count($post_array) == 2){
  if(isset($_POST['id'])){
    $id = $_POST['id'];
  }
  if(isset($_POST['name'])){
    $change = trim($_POST['name']);
    $key = 'name';
  } else if(isset($_POST['description'])){
    $change = trim($_POST['description']);
    $key = 'description';
  } else if(isset($_POST['status'])){
    $change = trim($_POST['status']);
    $key = 'status';
  }
  try{
    $updateQuery = "UPDATE tasks SET {$key} = :{$key}
                   WHERE id = :id";

   $statement = $conn->prepare($updateQuery);
   $statement->execute(array(":{$key}" => $change, ":id" => $id));

   if($statement->rowCount() === 1){
     echo "Task {$key} updated successfully";
   } else {
     echo "No changes made";
   }

  } catch (PDOException $ex){
    echo "An error occured " .$ex->getMessage();
  }
}
}
