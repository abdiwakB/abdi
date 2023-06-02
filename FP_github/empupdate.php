<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style type="text/css">
    <!--
    .style1 {font-size: large}
    #main_container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
    }
    -->
  </style>
</head>
<body>
<div id="all">
  <div id="header"><?php include("amanagerpage.php");?></div>
  <span class="loginVerticalPanel style1">
    <div id="main_container">
      <div id="left_content">
        <?php
        session_start();
        $id=$_POST['select'];
        $con=mysqli_connect("localhost","root","");
        if(!$con){
          die("unable to connect :".mysqli_error());
        }
        mysqli_select_db($con,"brc");
        $sql="select * from employee where Empolyy_Id='$id';";
        $res=mysqli_query($con,$sql) or die("query error".mysqli_error());
        while($row=mysqli_fetch_array($res)){
        ?>
        <span>
          <table border=1 bgcolor=red>
            <form action="employeeupdate.php" method="post" class="style1">
              <label><em><strong><font face="Arial, Helvetica, sans-serif">The Information About The Employee is</font></strong></em></label>
              <span class="loginVerticalPanel">
                <table><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?>
                  <input type="hidden" name="paw" value="<?php echo $row['Empolyy_Id'];?>" />
                  <tr><td>First Name:</td><td><input type="text" name="firstname" value="<?php echo $row['E_fname'];  ?>"/></td></tr>
                  <tr><td>Middle Name:</td><td><input type="text" name="mname" value="<?php echo $row['mname'];  ?>"/></td></tr>
                  <tr><td>Last Name:</td><td><input type="text" name="lname" value="<?php echo $row['lname'];  ?>"/></td></tr>
                  <tr><td>Sex:</td><td><input type="text" name="sex" value="<?php echo $row['sex'];?>" /></td></tr>
                  <tr><td>Age:</td><td><input type="text" name="age" value="<?php echo $row['Age'];  ?>"/></td></tr>
                  <tr><td>Country:</td><td><input type="text" name="country" value="<?php echo $row['country'];  ?>"/></td></tr>
                  <tr><td>City:</td><td><input type="text" name="city" value="<?php echo $row['city'];  ?>"/></td></tr>
                  <tr><td>Telephone:</td><td><input type="text" name="tel" value="<?php echo $row['mobile'];  ?>"/></td></tr>
                  <tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $row['email'];?>" /></td></tr>
                  <tr><td>Salary:</td><td><input type="text" name="sal" value="<?php echo $row['salary'];  ?>" /></td></tr>
                  <tr><td>Department:</td><td><input type="text" name="dpt" value="<?php echo $row['responsiblity'];  ?>" /></td></tr>
                  <tr><td>Specialization:</td><td><input type="text" name="specfic" value="<?php echo $row['specialization'];  ?>" /></td></tr>
                  <tr><td>Marital status:</td><td><input type="text" name="marridge" value="<?php echo $row['status'];  ?>" /></td></tr>
                  <tr><td colspan="2"><input type="submit" name="update" value="Update" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="Delete" /></td></tr>
                </table>
              </span>
            </form>
          </table>
          <span class="loginVerticalPanel style1">
          <?php
          }
          ?>
          </span>
          <span class="loginVerticalPanel">
          </span>
        </div>
      </div>
    </div>
  </span>
</div>
</body>
</html>
