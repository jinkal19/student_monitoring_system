<?php 
session_start();
 include 'dconnect.php';
 $email_err=$password_err=$success= $error='';
 if(isset($_POST['submit']))
 {
     $fname=$_POST['fname'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $cpassword=$_POST['cpassword'];
     $query="select * from register where email='$email'";
     $run=mysqli_query($conn,$query);
     $row=mysqli_num_rows($run);
     if($row>0)
     {
         $email_err="Email id already exists. Please try with another email";
     }
     else if($password!==$cpassword)
     {
         $password_err="Your password does not match";
     }
     else
     {
         $sql="insert into register (fname,email,password,cpassword) values ('$fname','$email','$password','$cpassword')";
         $run=mysqli_query($conn,$sql);
         if($run)
         {
             $success="Registered successfully";
         }
         else
        {
             $error="Unable to submit data.Please try again.....";
         }

      }
 }
?>

<!Doctype html>
<html lang=en>
    <head>
        <title>Student Management System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="icon" href="Image/icon.jpg">
       <link rel="stylesheet" type="text/css" href="style.css">
       <script>
           function content1(){
               document.getElementById("div1").style.display="block";
               document.getElementById("div2").style.display="none";
           }
           function content2(){
               document.getElementById("div1").style.display="none";
               document.getElementById("div2").style.display="block";
           }
           </script>
    </head>
   <body>
   <div class="bg-img">
     <section class="formsetting">
     <h3 class="text-center text-warning pt-1 "><?php echo  @$_SESSION['login_first'];?></h3>
     <p class="text-center text-info font-weight-bold"><?php echo @$_GET['error'] ?></p>
      <div class="container"> 
      <h2 class="text-center text-white pt-1 pb-3 font-weight-bold ">Student Management System</h2>
             <h3 class= "text-white text-center py-3">Admin Login / Register Panel</h3>
             <!--row starts from here-->
             <div class="row"> 
                 <div class="image col-md-7 col-sm-7 col-12"> 
                     <img src="Image/bg2.jpg" class="img-thumbnail img-fluid" id="side-img">
                 </div>
                 <div class="col-md-5 col-sm-5 col-12">
                 <div class="but"> <button class="btn px-5" onclick="content1()">Register</button></div>
                    <div class="but1"> <button class="btn  px-5" onclick="content2()">Login</button></div>
                    <div id="div1" style="display:block" class="mt-3">
                    <form method="post" action="">
                         <div class="form-group">
                             <label class="text-white"> Full Name</label>
                             <input type="text" name="fname" placeholder="Enter Your Full Name" class="form-control" required="required"></div>
                             <div class="form-group">
                             <label class="text-white"> Email </label>
                             <span class="float-right text-white font-weight-bold"><?php echo $email_err; ?></span>
                             <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required="required"></div>
                             <div class="form-group">
                             <label class="text-white"> Password </label>
                             <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required="required">
                             </div>
                             <div class="form-group">
                             <label class="text-white">Confirm Password </label>
                             <span class="float-right text-white font-weight-bold"><?php echo $password_err; ?></span>
                             <input type="password" name="cpassword" placeholder="Re-enter Your Password" class="form-control" required="required"> 
                             </div>
                             <div class=""><input type="submit" name="submit" value="Register" class="register btn  px-5 ">
                             </div>
                             <span class="float-right text-white font-weight-bold"><?php echo $success; echo $error;?></span>
                            </form>
                            </div>
                            <div id="div2" style="display:none;" class="mt-3">
                            <form method="post" action="">
                             <div class="form-group">
                             <label class="text-white"> Email </label>
                             <input type="email" name="email" placeholder="Enter Your Email" class="form-control"></div>
                             <div class="form-group">
                             <label class="text-white"> Password </label>
                             <input type="password" name="password" placeholder="Enter Your Password" class="form-control"> </div>
                             <div class="form-group">
                             <div class="login">
                             <input type="submit" name="submit1" value="Login" class=" btn px-5 "></div>

                            </form>
                          </div>
                 </div>
              </div>
              <!--row ends here-->
          </div>
     </section> 
     </div>
 </body>
</html>
<!--php code for login-->
<?php 
 if(isset($_POST['submit1']))
 {

     $email = $_SESSION['email']= $_POST['email'];
     $pwd=$_POST['password'];
     $sql="select * from register where email='$email'";
     $run=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($run);
     $pwd_fetch=$row['password'];
     if($pwd_fetch==$pwd)
     {
         echo "<script>window.open('main.php?success=Loggedin Successfully','_self')</script>";
     }
     else
     {
       echo "<script>window.open('index.php?error=Username or Password is incorrect','_self')</script>";
     }
 }

?>