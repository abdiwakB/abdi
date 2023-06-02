<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
    <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="header"><?php include("openpage.php");?></div>
    <div id="main_container">
        <div id="left_content">
            <?php
            session_start();

            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $lname=$_POST['lname'];			
            $sex=$_POST['sex'];
            $age=$_POST['age'];
            $wt=$_POST['wt'];
            $phonenumber=$_POST['phonenumber'];			
            include('Db_Cconnection.php');

            $save="INSERT INTO dnreq(Firstname,Middlename,Lastname,Sex,Age,Weight,Phone) VALUES ('$fname','$mname','$lname','$sex','$age','$wt','$phonenumber')";
            $result=mysqli_query($con,$save);

            if(!$result) {
                die(mysqli_error());
            } else {
                echo "You have successfully sent the request. Your appointment ID is=<br>";
                $select="SELECT Reg_no FROM dnreq WHERE Age='$age'";
                $result=mysqli_query($con,$select);
                if(!$result) {
                    die(mysqli_error());
                }
                $row = mysqli_fetch_array($result);
                echo $row['Reg_no'];
                echo ", don't forget it!!";
            }

            exit();
            ?>
    
        </div>
        <div id="footer"><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
    </div>
</div>
</body>
</html>
