<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body bgcolor="">
    <script type="text/javascript">
        var image1 = new Image();
        image1.src = "logo1.jpg";
        var image2 = new Image();
        image2.src = "logo6.jpg";
        var image3 = new Image();
        image3.src = "logo7.jpg";
    </script>
    <title>Approve</title>
    <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
    <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
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
                    setTimeout(slideit, 3000);
                }
                slideit();
            </script>
            <div id="header">
                <?php include('inventorypage.php'); ?>
            </div>
            <div id="main_container">
                <?php
                $id = $_POST['id'] ?? '';
                $con = mysqli_connect("localhost", "root", "", "brc");
                if (!$con) {
                    die('Could not connect: ' . mysqli_connect_error());
                }
                $result = mysqli_query($con, "SELECT * FROM hreq WHERE Reg_no='$id'");
                $row = mysqli_fetch_array($result);

                // Check if $row is not null before accessing its elements
                if ($row) {
                    $fname = $row['1'];
                    $mname = $row['2'];
                    $lname = $row['3'];
                    $sex = $row['4'];
                    $age = $row['5'];
                    $hname = $row['6'];
                    $tel = $row['7'];
                    $email = $row['8'];
                    $bgrp = $row['9'];
                    $aneed = $row['10'];
                } else {
                    // Handle the case where $row is null or empty
                    // You can display an error message or take appropriate action
                    $fname = '';
                    $mname = '';
                    $lname = '';
                    $sex = '';
                    $age = '';
                    $hname = '';
                    $tel = '';
                    $email = '';
                    $bgrp = '';
                    $aneed = '';
                }

                ?>
                <div class="wrapper">
                    <div>
                    <?php
                    if (isset($_POST['select'])) {
                        include('Db_Cconnection.php');
                        $fname = $_POST['fname'];
                        $mname = $_POST['mname'];
                        $lname = $_POST['lname'];
                        $sex = $_POST['sex'];
                        $age = $_POST['age'];
                        $hname = $_POST['hname'];
                        $tel = $_POST['tel'];
                        $email = $_POST['email'];
                        $bgrp = $_POST['bgrp'];
                        $aneed = $_POST['aneed'];

                        $sql = "INSERT INTO aprovedhreq(Firstname, Middlename, Lastname, sex, Age, Hospitalname, Phone, Email, Bloodgroup, Amount) VALUES ('$fname', '$mname', '$lname', '$sex', '$age', '$hname', '$tel', '$email', '$bgrp', '$aneed')";
                        $result = mysqli_query($con, $sql);
                        if (!$result) {
                            die("Unable to insert values: " . mysqli_error($con));
                        }
                        echo "<h2 align=center>Successfully approved!!</h2>";
                    }
                    else {
                    mysqli_close($con);
                    ?>
                        <form name="f" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <h3 align="center">Approval form</h3>
                            <table width="200" cellspacing="3" cellpadding="6" class="loginVerticalPanel" align="center">
                                <tr>
                                    <td align="right">First name</td>
                                    <td><input type="text" name="fname" value="<?php echo $fname; ?>" readonly bgcolor="yellow"></td>
                                </tr>
                                <tr>
                                    <td align="right">Middle name</td>
                                    <td><input type="text" name="mname" value="<?php echo $mname; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Last name</td>
                                    <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Sex</td>
                                    <td><input type="text" name="sex" value="<?php echo $sex; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Age</td>
                                    <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Hospital name</td>
                                    <td><input type="text" name="hname" value="<?php echo $hname; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Phone</td>
                                    <td><input type="text" name="tel" value="<?php echo $tel; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Email</td>
                                    <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Required blood</td>
                                    <td><input type="text" name="bgrp" value="<?php echo $bgrp; ?>"></td>
                                </tr>
                                <tr>
                                    <td align="right">Amount</td>
                                    <td><input type="text" name="aneed" value="<?php echo $aneed; ?>"></td>
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
