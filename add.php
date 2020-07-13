<!DOCTYPE html>


<?php
include_once("config.php");

if(isset($_POST['Add'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    
    
        
        //apply all filters
        $id = mysqli_real_escape_string($mysqli,$_POST['id']);
        $name = mysqli_real_escape_string($mysqli,$_POST['name']);
        $age = mysqli_real_escape_string($mysqli,$_POST['age']);
        $location = mysqli_real_escape_string($mysqli,$_POST['location']);
        
    
    
        $sql = mysqli_query($mysqli,"SELECT * FROM 'friendlist' WHERE 'id' = '$id'");
        // if(mysqli_num_rows($sql) > 0){
        //     echo "sorry that id already exists.";
        //     exit();
        // }
        
        // $sql = mysqli_query($mysqli,"SELECT * FROM 'friendlist' WHERE 'name' = '$name'");
        // if(mysqli_num_rows($sql) > 0){
        //     echo "sorry that name already taken";
        //     exit();
    
        // }
    
        mysqli_query($mysqli,"INSERT INTO friendlist(id, name, age, location )VALUES('$id', '$name', '$age', '$location')");
    
     
    echo $id;
    exit();
    
    }


?> 






















<html>
    <head>
        <title>Adding details of friends</title>
    
    
    </head>
    <body>
    <form action="add.php" method="post" role="form">
        <h2>Add Page</h2>
        
        <input type="text" class="form-control" name="id" placeholder="id" required="" autofocus /><br />
        <input type="text" class="form-control" name="name" placeholder="name" required="" autofocus /><br />
        <input type="text" class="form-control" name="age" placeholder="age" required="" autofocus /><br />
        <input type="text" class="form-control" name="location" placeholder="location"  /><br />
        
                        
        <button name="Add" type="Add">Add</button>
        </form>
    
    
    </body>

</html>