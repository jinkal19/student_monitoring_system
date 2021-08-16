<?php
session_start();
if(!$_SESSION['email'])
{
  $_SESSION['login_first']="Please LOGIN First";
  header('Location:index.php');
}

include 'dconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Student Detail</title>
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
                <div class="container  id=formsetting">
                <h3 class="text-center text-white"><?php echo @$_GET['update_success']; echo @$_GET['update_error']; echo @$_GET
                ['delete_msg']; ?></h3>
                <h2 class="text-center text-white pt-3 font-weight-bold">Student Management System</h2>
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">View Student Detail</h3><hr>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-12">
                      <table class="table table-bordered text-white table-responsive">
                      <thead>
                      <tr>
                          <th>SNO.</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Father Name</th>
                          <th>Mother Name</th>
                          <th>Email</th>
                          <th>Date Of Birth</th>
                          <th>City</th>
                          <th>Mobile Number</th>
                          <th>Nationality</th>
                          <th>District</th>
                          <th>Aadhar Number</th>
                          <th>State</th>
                          <th>Gender</th>
                          <th>Student Image</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <?php
                      $sql="select * from student_detail";
                      $run=mysqli_query($conn,$sql);
                      $i=1;
                      while($row=mysqli_fetch_assoc($run))
                      {

                      ?>
                      <tbody>
                         <tr>
                             <td><?php echo $i++;?></td>
                             <td><?php echo $row['fname'];?></td>
                             <td><?php echo $row['lname'];?></td>
                             <td><?php echo $row['father_name'];?></td>
                             <td><?php echo $row['mother_name'];?></td>
                             <td><?php echo $row['email'];?></td>
                             <td><?php echo $row['birth_date'];?></td>
                             <td><?php echo $row['city'];?></td>
                             <td><?php echo $row['mobile_num'];?></td>
                             <td><?php echo $row['nation'];?></td>
                             <td><?php echo $row['district'];?></td>
                             <td><?php echo $row['aadhar'];?></td>
                             <td><?php echo $row['state'];?></td>
                             <td><?php echo $row['gender'];?></td>
                             <td>
                                 <a href="st_img/<?php echo $row['photo']; ?>">
                                 <img src="st_img/<?php echo $row['photo']; ?>" width="50" height="50"></a>
                             </td>
                             <td>
                                 <a class=" text-center text-white" href="edit_student.php?edit_student=<?php echo $row['st_id'];?>">Edit</a>|
                                 <a class=" text-center text-white" href="delete_student.php?delete_student=<?php echo $row['st_id'];?>">Delete</a>
                             </td>
                         </tr> 
                      </tbody>
                        <?php } ?>
                      </table>
                      </div> 
                   </div>
                </div>
           </section>
        </div>
    </div>
 </div>
</body>
</html>