<?php
session_start();
if(!$_SESSION['email'])
{
  $_SESSION['login_first']="Please LOGIN First";
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome To DashBoard</title>
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
  <link rel="stylesheet" href="menustyle.css">
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
     <div class=bg-img>
    <div class="d-flex" id="wrap">
        <div class="sidebar ">
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
                <div class="container  id=formsetting">
                <h2 class="text-center text-white pt-3 font-weight-bold">Student Management System</h2>
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Welcome To DashBoard</h3><hr>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="add_student.php" class=" text-white text-center "><i class="fa fa-user"></i>
                         <h3> Add Student Detail</h3></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="view_student.php" class=" text-white text-center"><i class="fa fa-eye"></i>
                        <h3> View Student Detail</h3></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="view_student.php" class=" text-white text-center"><i class="fa fa-pencil"></i>
                        <h3> Edit Student Detail</h3></a>
                        </div>
                   </div>
                   <hr>
                   <div class="row">
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="add_teacher.php" class=" text-white text-center"><i class="fa fa-user"></i>
                        <h3> Add Teacher Detail</h3></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="view_teacher.php" class=" text-white text-center"><i class="fa fa-eye"></i>
                        <h3> View Teacher Detail</h3></a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="view_teacher.php" class=" text-white text-center"><i class="fa fa-pencil"></i>
                        <h3> Edit Teacher Detail</h3></a>
                        </div>
                   </div>
                </div>
           </section>
        </div>
    </div>
    </div>
</body>
</html>
