<?php
require("includes/config/config.php");
require("includes/libraries/connect.php");



//inserting data to database in ajax request

if(isset($_POST['add'])){

//var_dump($_POST);
$name =$_POST['name'];

//echo $name; 
if ($name !="") {
	

$sql ="INSERT INTO users (name)VALUES(:name) ";
$stmt= $conn->prepare($sql);
$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->execute();
// $stmt->bindParam(2,$name,PDO::PARAM_STR);
// $stmt->execute();
}

if ($_POST['id']!='') {
	$id =$_POST['id'];
	echo $id;
	$sql ="DELETE FROM users WHERE id ='$id'";
	$conn->query($sql); 
}
}
?>
<?php
//select data from database using ajax responde


$datasql="SELECT * FROM users";
$stmt = $conn->query($datasql);


while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
?>
<tr>
<td><?php echo $row->id; ?></td>
<td><?php echo $row->name;?></td>
<td><button type="button" onclick="add('<?php echo($row->id) ?>')" class="btn btn-danger">Delete</button> </td>
</tr>
<?php 		
 } 
?>
