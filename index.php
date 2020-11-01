<?php

require_once  'include/db.php';

$query="SELECT * FROM `students`";
$result=mysqli_query($conn,$query);
$record=mysqli_num_rows($result);
// echo "<pre>";
// print_r($record); die;
if(!empty($_GET['msg'])){
 $msg=$_GET['msg'];
 $alert_msg =($msg=="insert")?'New Record have been insert successfully!':(($msg=="del")?'Record have been Delete Successfully!':'Record have been update successfully!');
}
else
{
  $alert_msg='';


}
?>






<!DOCTYPE html>
<?php 
include 'partial/head.php';
?>
<body>
<?php              
 include 'partial/nav.php';
?>

<div class="container" style="margin-top:2rem;">
  
</style>
<?php   if(!empty($alert_msg)){ ?>

  <div class="alert alert-success" style="height:3rem"><?php echo $alert_msg; ?></div>
<?php 
}
?>
  <div class= "formdiv">
  <div class="info"></div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_Name</th>
      <th scope="col">Company</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">subject</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

      <?php if(!empty($record)){

        while($row=mysqli_fetch_assoc($result)){
          ?>
        
      <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['first_name'];?></td>
      <td><?php echo $row['last_name'];?></td>
      <td><?php echo $row['company'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['area_code'];?>-<?php echo $row['phone'];?></td>
      <td><?php echo $row['subject'];?></td>
       
      <td>
      <a href="add.php?id=<?php echo $row['id'];?>"  type="button" class="btn btn-danger" style="width:5rem;">Edit</button></a>
      <td>
      <a href="Delete.php?id=<?php echo $row['id'];?>"  type="button" class="btn btn-success" style="width: 5rem;">Delete</button>
      </td>
    </tr>





<?php

    }
      
      }
    ?>


      



   
    
    
</div>
</div>
  
</body>
</html>