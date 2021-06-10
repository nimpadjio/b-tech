<?php
session_start();
include('includes/dbconn.php');
if(strlen($_SESSION['alogin'])==0)
{
    header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $pwd=md5($_POST['pwd']);
    $matricule=$_POST['matricule'];
    $ret=mysqli_query($con,"insert into students(fname,phone,pwd,pincode) values('$fname','$phone','$pwd','$matricule')");
    if($ret)
    {
        $_SESSION['msg']="Student Registered Successfully !!";
    }
    else
    {
        $_SESSION['msg']="Error : Student  not Register";
    }
}
?>

<!Doctype html>
<html lang="eng">
    <head>
        <title></title>
    </head>
<body>
    <form role="form" action="registration.php" method="post">
        <h3>STUDENT REGISTRATION</h3>
        <div class="form-group">
            <label for="fname">Full name</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd">
        </div>

        <div class="form-group">
            <label for="id">Matricule</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>

        <button type="submit" class="btn btn-default">Register</button>
        <button type="reset" class="btn btn-default">Cancel</button>

    </form>
</body>
</html>