<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="">
<script type="text/javascript">
    <!--
    var image1=new Image();
    image1.src="logo1.jpg";
    var image2=new Image();
    image2.src="logo6.jpg";
    var image3=new Image();
    image3.src="logo7.jpg";
    //-->
</script>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<style type="text/css">
    <!--
    .style1 {
        font-size: x-large;
        font-family: Georgia, "Times New Roman", Times, serif;
    }
    .style3 {color: #400040;}
    -->
</style>
<body>
<div id="all">
<script>
    <!--
    var step=1;
    function slideit(){
        if (!document.images)
            return;
        document.images.slide.src=eval("image"+step+".src");
        if (step<6)
            step++;
        else
            step=1;
        setTimeout("slideit()",3000);
    }
    slideit();
    //-->
</script>
<div id="header"><?php include("amanagerpage.php");?></div>
<div id="main_container">
    <div id="left_content">
        <?php
        $con=mysqli_connect("localhost","root","","brc");
        if(!$con){
            die("unable to connect :".mysqli_error());
        }
        mysqli_select_db($con,"brc");
        $sql="SELECT Empolyy_Id FROM employee";
        $res=mysqli_query($con,$sql) or die("query error".mysqli_error($con));
        ?>
        <form action="empupdate.php" method="post">
            <p>
                <tr>
                    <td bordercolor="#993366" bgcolor="#9900CC">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1"> <span class="style3"> Search Employee Information </span>&nbsp;&nbsp; </span><br>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                            &nbsp;&nbsp; &nbsp;<span class="style1">&nbsp;<span class="style3"> Employee Id</span></span>
                        </label>
                        <span class="style1">
                            <select name="select">
                                <?php
                                while($row=mysqli_fetch_array($res)){
                                    echo "<option value=".$row['Empolyy_Id'].">".$row['Empolyy_Id']."</option>";
                                }
                                ?>
                            </select>
                        </span>
                        <p>
                            <input name="Submit" type="submit" align ="center" class="style1" value="search">
                        </p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;  </p>
                    </td>
                </tr>
            </p>
        </form>
    </div>
</div>

</div>
</body>
</html>
