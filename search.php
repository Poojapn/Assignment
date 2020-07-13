<?php
include_once("config.php");
if(isset($_POST['search'])){
    
    $id = $_POST['id'];
    $id = mysqli_real_escape_string($mysqli,$_POST['id']);
    $sql = mysqli_query($mysqli,"SELECT * FROM friendlist WHERE id = '$id'");
    

    
        if($sql) {
            while($res = mysqli_fetch_array($sql)) { 		
                echo "<tr>";
                echo "<td>".$res['id']."</td>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['age']."</td>";	
                echo "<td>".$res['location']."</td>";	
        
            }
                
        
    }else{
            echo "not found";
    }

}

?>


<html>
<head>
    <title>Search for a friend</title>
</head>

    <body>
        <form action="search.php" method="post">
            id: <input type="text" name="id"><br>
            <button name="search" type="search">search</button>

            </form>

    
    
    </body>



</html>