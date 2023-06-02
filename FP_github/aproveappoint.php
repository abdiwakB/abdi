<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>approve</title>
    <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
    <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
    <script type="text/javascript">
        var image1 = new Image();
        image1.src = "logo1.jpg";
        var image2 = new Image();
        image2.src = "logo6.jpg";
        var image3 = new Image();
        image3.src = "logo7.jpg";

        var step = 1;
        function slideit() {
            if (!document.images)
                return;
            document.images.slide.src = eval("image" + step + ".src");
            if (step < 6)
                step++;
            else
                step = 1;
            setTimeout("slideit()", 3000);
        }
        slideit();
    </script>
</head>
<body>
   
        <div id="all">
            
            <script>
                var step = 1;
                function slideit() {
                    if (!document.images)
                        return;
                    document.images.slide.src = eval("image" + step + ".src");
                    if (step < 6)
                        step++;
                    else
                        step = 1;
                    setTimeout("slideit()", 3000);
                }
                slideit();
            </script>
            <div id="header">
                <?php include('Nursepage.php');?>
            </div>
            <div id="main_container">
                <?php
                $id = isset($_POST['id']) ? $_POST['id'] : '';
                $con = mysqli_connect("localhost", "root", "", "brc");
                if (!$con) {
                    die('Could not connect: ' . mysqli_error());
                }
                mysqli_select_db($con, "brc");
                $result = mysqli_query($con, "SELECT * FROM client_appointment WHERE Client_Id='$id'");
                $row = mysqli_fetch_array($result);
                ?>
                <div class="wrapper">
                    <div>
                    <?php
                    if (isset($_POST['select'])) {
                        include('Db_Cconnection.php');
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $sex = $_POST['sex'];
                        $phonenumber = $_POST['phonenumber'];
                        $sql = "INSERT INTO approveappoint(Firstname, Lastname, Sex, Phone) VALUES ('$fname','$lname','$sex','$phonenumber')";
                        $result = mysqli_query($con, $sql);
                        if (!$result) {
                            die("Unable to insert values: " . mysqli_error($con));
                        }  
                        echo "<div id='approval_message'><h2 align='center'>Successfully approved!!</h2></div>";
                    } else {
                    ?>
                        <form name="f" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <h3 align="center">Approval form</h3>
                            <table width="500" cellspacing="3" cellpadding="6" class="loginVerticalPanel" align="center">
                                <tr>
                                    <td align="right">First name</td>
                                    <td><input type="text" name="fname" value="<?php echo isset($row[1]) ? $row[1] : ''; ?>" readonly bgcolor="yellow"></td>

                            </tr>
                            <tr>
                                <td align="right">Last name</td>
                                <td><input type="text" name="lname" value="<?php echo isset($row[2]) ? $row[2] : ''; ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">Sex</td>
                                <td><input type="text" name="sex" value="<?php echo isset($row[3]) ? $row[3] : ''; ?>"></td>
                            </tr>
                            <tr>
                                <td align="right">Phone</td>
                                <td><input type="text" name="phonenumber" value="<?php echo isset($row[4]) ? $row[4] : ''; ?>"></td>
                            </tr>
                            <tr align="center">
                                <td colspan="3">
                                    <input type="submit" name="select" value="Approve" onclick="return as();">
                                </td>
                            </tr>
                        </table>
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>