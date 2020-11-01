
<?php

require_once 'include/db.php';

if(isset($_GET['submit']) && $_GET['submit']!=''){

//  echo "<pre>";
// print_r($_GET); die;
  
$first_name=(!empty($_GET['first_name'])? $_GET['first_name']:'');
$last_name=(!empty($_GET['last_name'])? $_GET['last_name']:'');
$company=(!empty($_GET['company'])? $_GET['company']:'');
$email=(!empty($_GET['email'])? $_GET['email']:'');
$area_code=(!empty($_GET['area_code'])? $_GET['area_code']:'');
$phone=(!empty($_GET['phone'])? $_GET['phone']:'');
$subject=(!empty($_GET['subject'])? $_GET['subject']:'');
$id=(!empty($_GET['roll_id'])? $_GET['roll_id']:'');

if(!empty($id))
{

$query="UPDATE `students` SET first_name='$first_name',last_name='$last_name',company='$company',email='$email',area_code='$area_code',phone='$phone', subject='$subject' WHERE id='$id'";
    $msg="update";
}

else{

$query="INSERT INTO `students`(first_name,last_name,company,email,area_code,phone,subject)VALUES
('$first_name','$last_name','$company','$email','$area_code','$phone','$subject')";
$msg="insert";
}

$result=mysqli_query($conn,$query);

if($result){

header('location:/CRUD/index.php?msg='.$msg);


}
}

require_once 'include/db.php';
if(isset($_GET['id']) && $_GET['id']!=''){


 // echo"<pre>";
 // print_r($_GET); die;

 $user_id=$_GET['id'];
 $query="SELECT * FROM `students` where id='$user_id'";
 $res=mysqli_query($conn,$query);
 $record=mysqli_fetch_row($res);
 
 $first_name=$record['1'];
 $last_name=$record['2'];
 $company=$record['3'];
 $email=$record['4'];
 $area_code=$record['5'];
 $phone=$record['6'];
 $subject=$record['7'];

}
else
{
$first_name='';
$last_name='';
$company='';
$email='';
$area_code='';
$phone='';
$subject='';
$user_id='';

 




}




?>










<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    
</head>


<body>
  <?php 
    include 'partial/nav.php';
  ?>
       <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="GET" action="">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name"value="<?php echo $first_name;?>">
                                            <label class="label--desc">first_name</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name"value="<?php echo $last_name;?>">
                                            <label class="label--desc">last_name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company"value="<?php echo $company;?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="<?php echo $email;?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code"value="<?php echo $area_code;?>">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone"value="<?php echo $phone;?>">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search" name="subject">
                                        <select name="subject" >
                                            <option name= >Choose option</option>
                                            <option Value="Managing Director"<?php if($subject=="Managing Director"){ echo 'selected';} ?>>Managing Director</option>
                                            <option Value="Country Manager"<?php if($subject=="Country Manager"){ echo 'selected';} ?>>Country Manager</option>
                                            <option Value="Software Engineer"<?php if($subject=="Software Engineer"){ echo 'selected';} ?>>Software Engineer</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                         
                                      </div>
                                </div>
                            </div>
                        </div>
                                          <div class="input-group-desc">
                                            <input class="input--style-5" type="hidden" name="roll_id"value="<?php echo $user_id;?>">
                                            
                                        </div>
                       
                        <div>
                            <input type="submit" value="Register" class="btn btn--radius-2 btn--red"  name="submit" style="width:10rem;">
                        </div>

                </div>
            </div>
        </div>
    </div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->