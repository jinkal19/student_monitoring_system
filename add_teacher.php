<?php
session_start();
if(!$_SESSION['email'])
{
  $_SESSION['login_first']="Please LOGIN First";
  header('Location:index.php');
}
include 'dconnect.php';
$size_error=$type_error=$success=$error='';
if(isset($_POST['add']))
{
$fname= mysqli_real_escape_string($conn,$_POST['fname']);
$lname= mysqli_real_escape_string($conn,$_POST['lname']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$birthdate= mysqli_real_escape_string($conn,$_POST['birthdate']);
$city= mysqli_real_escape_string($conn,$_POST['city']);
$mobilenum= mysqli_real_escape_string($conn,$_POST['mobilenumber']);
$nationality= mysqli_real_escape_string($conn,$_POST['nationality']);
$aadharnum= mysqli_real_escape_string($conn,$_POST['aadhar']);
$subject= mysqli_real_escape_string($conn,$_POST['subject']);
$gender= mysqli_real_escape_string($conn,$_POST['gender']);
$image= $_FILES['image']['name'];
$image_type= $_FILES['image']['type'];
$image_size= $_FILES['image']['size'];
$image_tmp= $_FILES['image']['tmp_name'];
if(!$image_type == 'image/jpg' or !$image_type == 'image/png' )
{
    $size_error="Invalid image format";
}
    else if ($image_size <= 2000)
    {
        $type_error="Image size is large. Image size should be more than 2MB";
    }
    else
    {
      move_uploaded_file($image_tmp,"td_img/$image");
      $data = "insert into teacher_detail (fname,lname,email,birth_date,city,mobile_num,nation,aadhar,subject,gender,photo) values ('$fname','$lname','$email','$birthdate','$city','$mobilenum','$nationality','$aadharnum','$subject','$gender','$image')";
      $run= mysqli_query($conn,$data);
      if($run)
      {
          $success="Teacher Data Submitted Successfully";
      }
      else
      {
          $error="Unable To Submit Data.Please Try Again";
      }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!--Font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="Image/icon.jpg">   
  <link rel="stylesheet" href="stustyle.css">
 <script>
    jQuery(document).ready(function($){
       $('#toggler').click(function(event){
           {
               event.preventDefault();
               $('#wrap').toggleClass('toggled');
           }
       });
    });
 </script>
</head>
<body>
    <div class="bg-img">
    <div class="d-flex" id="wrap">
        <div class="sidebar border-light">
            <div class="sidebar-heading">
                <p class="text-center">Manage Student</p>
            </div>
            <ul class="list-group list-group-flush">
                <a href="main.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-vcard-o"></i>DashBoard</a>
                    <a href="add_teacher.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-user"></i>Add Teacher Detail</a>
                    <a href="view_teacher.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-eye"></i>View Teacher Detail</a>
                    <a href="view_teacher.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-pencil"></i>Edit Teacher Detail</a>
                    <a href="add_student.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-user"></i>Add Student Detail</a>
                    <a href="view_student.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-eye"></i>View Student Detail</a>
                    <a href="view_student.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-pencil"></i>Edit Student Detail</a>
                    <a href="logout.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-sign-out"></i>Logout</a>
            </ul>
        </div>
        <div class="main-body">
            <button class="btn btn-outline-light btn-dark mt-3" id="toggler">
                <i class="fa fa-bars"></i>
            </button> 
            <section id="main-form">
            <p class="text-center text-danger font-weight-bold"><?php echo @$size_error; echo @$type_error;?></p>
                <div class="container id=formsetting">
                <h2 class="text-center text-white pt-3 font-weight-bold">Student Management System</h2>
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Add Teacher Detail</h3><hr>
                  <form method="post" action="" enctype="multipart/form-data">
                  <div class="row">
                  <div classs="col-md-5 col-ms-5 col-12 m-auto">
                  <div class="form-group">
                      <label class="text-white">First Name</label>
                      <input type="text" name="fname" placeholder="Enter Your First Name" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                      <label class="text-white">Email</label>
                      <input type="email" name="email" placeholder="Enter Your Email" class="form-control " required="required">
                  </div>
                  <div class="form-group">
                      <label class="text-white">City</label>
                      <input type="text" name="city" placeholder="Enter Your City" class="form-control" required="required" >
                  </div>
                  <div class="form-group">
                      <label class="text-white"> Nationality</label>
                      <input type="text" name="nationality" placeholder="Enter Your Nationality" class="form-control" required="required">
                  </div>
                  <div class="form-group">
                      <label class="text-white">Aadhar Number</label>
                      <input type="number" name="aadhar" placeholder="Enter Your Aadhar Number" class="form-control" required="required">
                  </div>
                    <div class="form-group">
                      <label class="text-white">Gender</label>
                      <input type="radio" name="gender" value="male"class="form-check-input ml-2" required="required">
                      <label class="form-check-label text-white pl-4">Male</label>
                      <input type="radio" name="gender" value="female"class="form-check-input ml-2" required="required">
                      <label class="form-check-label text-white pl-4">Female</label>
                      <input type="radio" name="gender" value="other"class="form-check-input ml-2" required="required">
                      <label class="form-check-label text-white pl-4">Other</label>
                  </div>
                  </div>
                  <div classs="row">
                  <div class="form-group left">
                      <label class="text-white ">Last Name</label>
                      <input type="text" name="lname" placeholder="Enter Your Last Name" class="form-control" required="required">
                  </div>
                  <div class="form-group  left">
                      <label class="text-white "> Date Of Birth</label>
                      <input type="date" name="birthdate" placeholder="Enter Your DOB" class="form-control" required="required">
                  </div>
                  <div class="form-group left">
                      <label class="text-white ">Mobile Number</label>
                      <input type="number" name="mobilenumber" placeholder="Enter Your Mobile Number" class="form-control" required="required">
                  </div>
                 
                  <div class="form-group left">
                      <label class="text-white ">Subject</label>
                      <input type="text" name="subject" placeholder="Enter Subject" class="form-control" required="required">
                  </div>
                  <div class="input-group left">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                  <div class="custom-file">
                  <input type="file" class="custon-file-input" id="inputGroupFile01"  name="image" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose File/Teacher Photo</label>
                  </div>
                  </div>
                  <input type="submit" name="add" value="Add Detail" class="button btn btn-dark px-5 mt-2">
                  <span class="text-center text-danger font-weight-bold"><?php echo @$success; echo @$error; ?></span>
              
                </div>
                </div> 
               </form>
               </div>
           </section>
        </div>
    </div>
</div>
</body>
</html>