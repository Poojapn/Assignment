<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM friendlist ORDER BY id DESC"); // using mysqli_query instead

?>


<html>
    <head>
        <title></title>
    
    </head>
    <body>
        <h2>List of Friends</h2>
        <table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>id</td>
		<td>Name</td>
		<td>Age</td>
		<td>location</td>
		
    </tr>
    <?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
        echo "<td>".$res['age']."</td>";	
        echo "<td>".$res['location']."</td>";	

	}
	?>
</table>
        <button name="Display" type="Display">Display</button>
      <a href="add.php"> <button name="Add" type="submit">Add</button></a>
        <a href="search.php"><button name="search" type="search">search</button></a>   
    </body>

</html>

