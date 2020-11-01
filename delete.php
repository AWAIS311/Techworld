<?php 

require_once 'include/db.php';

if(isset($_GET['id']) && $_GET['id']!=''){
$user_id=$_GET['id'];

$query= "DELETE FROM `students` WHERE id='$user_id'";
$res=mysqli_query($conn,$query);
if($res)
{

header('location:/CRUD/index.php?msg=del');


}



}



?>
