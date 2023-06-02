<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
    <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
    <div id="all">
        <div id="header"><?php include("Hospitalpage.php");?></div>
        <div id="main_container">
            <div id="left_content">
                <?php
                session_start();
                include_once('Db_Cconnection.php');

                if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) &&
                    isset($_POST['sex']) && isset($_POST['age']) && isset($_POST['hname']) &&
                    isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['bgrp']) &&
                    isset($_POST['aneed'])
                ) {
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

                    include('Db_Cconnection.php');
                    $select = "SELECT * FROM abld WHERE blood_group='$bgrp'";
                    $result = mysqli_query($con, $select);
                    if (!$result) {
                        die(mysqli_error($con));
                    }
                    $row = mysqli_fetch_array($result);
                    $blood = $row['blood_group'];
                    if ($bgrp != $blood) {
                        echo "Blood is not available";
                    } else {
                        $save = "INSERT INTO hreq(fname, mname, lname, sex, age, Hospitalname, phone_no, email, blood_group, amount_needed)
                                 VALUES ('$fname', '$mname', '$lname', '$sex', '$age', '$hname', '$tel', '$email', '$bgrp', '$aneed')";
                        $result = mysqli_query($con, $save);
                        if (!$result) {
                            die(mysqli_error($con));
                        } else {
                            echo "You have successfully sent the request.";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
